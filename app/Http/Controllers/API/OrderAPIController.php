<?php

namespace App\Http\Controllers\API;


use App\Http\Requests\CreateCartRequest;
use App\Models\Order;
use App\Repositories\CartRepository;
use App\Repositories\FoodOrderRepository;
use App\Repositories\NotificationRepository;
use App\Repositories\OrderRepository;
use App\Repositories\PaymentRepository;
use App\Repositories\UserRepository;
use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Support\Facades\Response;
use Prettus\Repository\Exceptions\RepositoryException;
use Flash;
use Prettus\Validator\Exceptions\ValidatorException;
use Stripe\Token;

/**
 * Class OrderController
 * @package App\Http\Controllers\API
 */
class OrderAPIController extends Controller
{
    /** @var  OrderRepository */
    private $orderRepository;
    /** @var  FoodOrderRepository */
    private $foodOrderRepository;
    /** @var  CartRepository */
    private $cartRepository;
    /** @var  UserRepository */
    private $userRepository;
    /** @var  PaymentRepository */
    private $paymentRepository;
    /** @var  NotificationRepository */
    private $notificationRepository;

    public function __construct(OrderRepository $orderRepo, FoodOrderRepository $foodOrderRepository, CartRepository $cartRepo, PaymentRepository $paymentRepo, NotificationRepository $notificationRepo, UserRepository $userRepository)
    {
        $this->orderRepository = $orderRepo;
        $this->foodOrderRepository = $foodOrderRepository;
        $this->cartRepository = $cartRepo;
        $this->userRepository = $userRepository;
        $this->paymentRepository = $paymentRepo;
        $this->notificationRepository = $notificationRepo;
    }

    /**
     * Display a listing of the Order.
     * GET|HEAD /orders
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $this->orderRepository->pushCriteria(new RequestCriteria($request));
            $this->orderRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            Flash::error($e->getMessage());
        }
        $orders = $this->orderRepository->all();

        return $this->sendResponse($orders->toArray(), 'Orders retrieved successfully');
    }

    /**
     * Display the specified Order.
     * GET|HEAD /orders/{id}
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        /** @var Order $order */
        if (!empty($this->orderRepository)) {
            $order = $this->orderRepository->findWithoutFail($id);
        }

        if (empty($order)) {
            return $this->sendError('Order not found');
        }

        return $this->sendResponse($order->toArray(), 'Order retrieved successfully');
    }

    /**
     * Store a newly created Order in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $amount = 0;
        try {
            $user = $this->userRepository->findWithoutFail($input['user_id']);
//            $stripeToken = Token::create(array(
//                "card" => array(
//                    "number" => $input['stripe_number'],
//                    "exp_month" => $input['stripe_exp_month'],
//                    "exp_year" => $input['stripe_exp_year'],
//                    "cvc" => $input['stripe_cvc'],
//                    "name" => $user->name,
//                )
//            ));
//            if ($stripeToken->created > 0) {
                $order = $this->orderRepository->create($input);
                foreach ($input['foods'] as $foodOrder) {
                    $foodOrder['order_id'] = $order->id;
                    $amount += $foodOrder['price'] * $foodOrder['quantity'];
                    $this->foodOrderRepository->create($foodOrder);
                }
                $this->cartRepository->deleteWhere(['user_id' => $order->user_id]);
                $user = $this->userRepository->findWithoutFail($order->user_id);

                if (empty($user)) {
                    return $this->sendError('Order not found');
                }
                $amount = $amount + ($amount * $order->tax / 100);
//               $user->charge((int)($amount * 100), ['source' => $stripeToken]);
                $this->paymentRepository->create([
                    "user_id" => $order->user_id,
                    "description" => trans("lang.payment_order_done",['name'=>$user->name, 'order_id' => $order->id]),
                    "price" => $amount,
                ]);
                $this->notificationRepository->create([
                    "title" => trans("lang.notification_order_done",['order_id' => $order->id]),
                    "user_id" => $order->user_id,
                    "notification_type_id" => 1,
                ]);
            //}
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($order->toArray(), __('lang.saved_successfully', ['operator' => __('lang.order')]));
    }

//    /**
//     * Store a newly created Order in storage.
//     *
//     * @param Request $request
//     *
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function store(Request $request)
//    {
//        $input = $request->all();
//
//        try {
//
//            $user = $this->userRepository->findWithoutFail(1);
//
//            if (empty($user)) {
//                return $this->sendError('Order not found');
//            }
//            $stripeToken = Token::create(array(
//                "card" => array(
//                    "number"    => '4242424242424242',
//                    "exp_month" => '9',
//                    "exp_year"  => '2021',
//                    "cvc"       => '444',
//                    "name"      => 'mira'
//                )
//            ));
//            $user->charge(1500, ['source' => $stripeToken]);
//        } catch (ValidatorException $e) {
//            return $this->sendError($e->getMessage());
//        }
//
//        return $this->sendResponse($stripeToken, __('lang.saved_successfully', ['operator' => __('lang.order')]));
//    }

}
