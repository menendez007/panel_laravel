<?php 

return [
    'environment' => [
        'classic' => [
            'templateTitle' => 'environment.classic.templateTitle',
            'title' => 'environment.classic.title',
            'save' => 'environment.classic.save',
            'back' => 'environment.classic.back',
            'install' => 'environment.classic.install',
        ],
        'wizard' => [
            'templateTitle' => 'environment.wizard.templateTitle',
            'title' => 'environment.wizard.title',
            'tabs' => [
                'environment' => 'environment.wizard.tabs.environment',
                'database' => 'environment.wizard.tabs.database',
                'application' => 'environment.wizard.tabs.application',
            ],
            'form' => [
                'app_name_label' => 'environment.wizard.form.app_name_label',
                'app_name_placeholder' => 'environment.wizard.form.app_name_placeholder',
                'app_environment_label' => 'environment.wizard.form.app_environment_label',
                'app_environment_label_local' => 'environment.wizard.form.app_environment_label_local',
                'app_environment_label_developement' => 'environment.wizard.form.app_environment_label_developement',
                'app_environment_label_qa' => 'environment.wizard.form.app_environment_label_qa',
                'app_environment_label_production' => 'environment.wizard.form.app_environment_label_production',
                'app_environment_label_other' => 'environment.wizard.form.app_environment_label_other',
                'app_environment_placeholder_other' => 'environment.wizard.form.app_environment_placeholder_other',
                'app_debug_label' => 'environment.wizard.form.app_debug_label',
                'app_debug_label_true' => 'environment.wizard.form.app_debug_label_true',
                'app_debug_label_false' => 'environment.wizard.form.app_debug_label_false',
                'app_log_level_label' => 'environment.wizard.form.app_log_level_label',
                'app_log_level_label_debug' => 'environment.wizard.form.app_log_level_label_debug',
                'app_log_level_label_info' => 'environment.wizard.form.app_log_level_label_info',
                'app_log_level_label_notice' => 'environment.wizard.form.app_log_level_label_notice',
                'app_log_level_label_warning' => 'environment.wizard.form.app_log_level_label_warning',
                'app_log_level_label_error' => 'environment.wizard.form.app_log_level_label_error',
                'app_log_level_label_critical' => 'environment.wizard.form.app_log_level_label_critical',
                'app_log_level_label_alert' => 'environment.wizard.form.app_log_level_label_alert',
                'app_log_level_label_emergency' => 'environment.wizard.form.app_log_level_label_emergency',
                'app_url_label' => 'environment.wizard.form.app_url_label',
                'app_url_placeholder' => 'environment.wizard.form.app_url_placeholder',
                'buttons' => [
                    'setup_database' => 'environment.wizard.form.buttons.setup_database',
                    'setup_application' => 'environment.wizard.form.buttons.setup_application',
                    'install' => 'environment.wizard.form.buttons.install',
                ],
                'db_connection_label' => 'environment.wizard.form.db_connection_label',
                'db_connection_label_mysql' => 'environment.wizard.form.db_connection_label_mysql',
                'db_connection_label_sqlite' => 'environment.wizard.form.db_connection_label_sqlite',
                'db_connection_label_pgsql' => 'environment.wizard.form.db_connection_label_pgsql',
                'db_connection_label_sqlsrv' => 'environment.wizard.form.db_connection_label_sqlsrv',
                'db_host_label' => 'environment.wizard.form.db_host_label',
                'db_host_placeholder' => 'environment.wizard.form.db_host_placeholder',
                'db_port_label' => 'environment.wizard.form.db_port_label',
                'db_port_placeholder' => 'environment.wizard.form.db_port_placeholder',
                'db_name_label' => 'environment.wizard.form.db_name_label',
                'db_name_placeholder' => 'environment.wizard.form.db_name_placeholder',
                'db_username_label' => 'environment.wizard.form.db_username_label',
                'db_username_placeholder' => 'environment.wizard.form.db_username_placeholder',
                'db_password_label' => 'environment.wizard.form.db_password_label',
                'db_password_placeholder' => 'environment.wizard.form.db_password_placeholder',
                'app_tabs' => [
                    'broadcasting_title' => 'environment.wizard.form.app_tabs.broadcasting_title',
                    'broadcasting_label' => 'environment.wizard.form.app_tabs.broadcasting_label',
                    'more_info' => 'environment.wizard.form.app_tabs.more_info',
                    'broadcasting_placeholder' => 'environment.wizard.form.app_tabs.broadcasting_placeholder',
                    'cache_label' => 'environment.wizard.form.app_tabs.cache_label',
                    'cache_placeholder' => 'environment.wizard.form.app_tabs.cache_placeholder',
                    'session_label' => 'environment.wizard.form.app_tabs.session_label',
                    'session_placeholder' => 'environment.wizard.form.app_tabs.session_placeholder',
                    'queue_label' => 'environment.wizard.form.app_tabs.queue_label',
                    'queue_placeholder' => 'environment.wizard.form.app_tabs.queue_placeholder',
                    'redis_label' => 'environment.wizard.form.app_tabs.redis_label',
                    'redis_host' => 'environment.wizard.form.app_tabs.redis_host',
                    'redis_password' => 'environment.wizard.form.app_tabs.redis_password',
                    'redis_port' => 'environment.wizard.form.app_tabs.redis_port',
                    'mail_label' => 'environment.wizard.form.app_tabs.mail_label',
                    'mail_driver_label' => 'environment.wizard.form.app_tabs.mail_driver_label',
                    'mail_driver_placeholder' => 'environment.wizard.form.app_tabs.mail_driver_placeholder',
                    'mail_host_label' => 'environment.wizard.form.app_tabs.mail_host_label',
                    'mail_host_placeholder' => 'environment.wizard.form.app_tabs.mail_host_placeholder',
                    'mail_port_label' => 'environment.wizard.form.app_tabs.mail_port_label',
                    'mail_port_placeholder' => 'environment.wizard.form.app_tabs.mail_port_placeholder',
                    'mail_username_label' => 'environment.wizard.form.app_tabs.mail_username_label',
                    'mail_username_placeholder' => 'environment.wizard.form.app_tabs.mail_username_placeholder',
                    'mail_password_label' => 'environment.wizard.form.app_tabs.mail_password_label',
                    'mail_password_placeholder' => 'environment.wizard.form.app_tabs.mail_password_placeholder',
                    'mail_encryption_label' => 'environment.wizard.form.app_tabs.mail_encryption_label',
                    'mail_encryption_placeholder' => 'environment.wizard.form.app_tabs.mail_encryption_placeholder',
                    'pusher_label' => 'environment.wizard.form.app_tabs.pusher_label',
                    'pusher_app_id_label' => 'environment.wizard.form.app_tabs.pusher_app_id_label',
                    'pusher_app_id_palceholder' => 'environment.wizard.form.app_tabs.pusher_app_id_palceholder',
                    'pusher_app_key_label' => 'environment.wizard.form.app_tabs.pusher_app_key_label',
                    'pusher_app_key_palceholder' => 'environment.wizard.form.app_tabs.pusher_app_key_palceholder',
                    'pusher_app_secret_label' => 'environment.wizard.form.app_tabs.pusher_app_secret_label',
                    'pusher_app_secret_palceholder' => 'environment.wizard.form.app_tabs.pusher_app_secret_palceholder',
                ],
                'name_required' => '',
            ],
        ],
        'menu' => [
            'templateTitle' => 'environment.menu.templateTitle',
            'title' => 'environment.menu.title',
            'desc' => 'environment.menu.desc',
            'wizard-button' => 'environment.menu.wizard-button',
            'classic-button' => 'environment.menu.classic-button',
        ],
        'errors' => '',
        'success' => '',
    ],
    'final' => [
        'templateTitle' => 'final.templateTitle',
        'title' => 'final.title',
        'migration' => 'final.migration',
        'console' => 'final.console',
        'log' => 'final.log',
        'env' => 'final.env',
        'exit' => 'final.exit',
        'finished' => '',
    ],
    'updater' => [
        'title' => 'updater.title',
        'final' => [
            'title' => 'updater.final.title',
            'exit' => 'updater.final.exit',
            'finished' => 'updater.final.finished',
        ],
        'welcome' => [
            'title' => 'updater.welcome.title',
            'message' => 'updater.welcome.message',
        ],
        'overview' => [
            'message' => 'updater.overview.message',
            'install_updates' => 'updater.overview.install_updates',
            'title' => 'updater.overview.title',
        ],
        'log' => [
            'success_message' => 'updater.log.success_message',
        ],
    ],
    'title' => 'title',
    'forms' => [
        'errorTitle' => 'forms.errorTitle',
    ],
    'permissions' => [
        'templateTitle' => 'permissions.templateTitle',
        'title' => 'permissions.title',
        'next' => 'permissions.next',
    ],
    'requirements' => [
        'templateTitle' => 'requirements.templateTitle',
        'title' => 'requirements.title',
        'next' => 'requirements.next',
    ],
    'next' => 'next',
    'welcome' => [
        'templateTitle' => 'welcome.templateTitle',
        'title' => 'welcome.title',
        'message' => 'welcome.message',
        'next' => 'welcome.next',
    ],
    'back' => '',
    'finish' => '',
    'install' => '',
    'installed' => [
        'success_log_message' => '',
    ],
];