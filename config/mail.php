<?php

return [

    'driver' => env('MAIL_DRIVER', 'smtp'),
    'host' => env('MAIL_HOST', 'mail.facebolsrl.com'),
    'port' => env('MAIL_PORT', 465),
    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'facebol@facebolsrl.com'),
        'name' => env('MAIL_FROM_NAME', 'Facebol'),
    ],
    'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
    'username' => env('MAIL_USERNAME'),
    'password' => env('MAIL_PASSWORD'),
    'sendmail' => '/usr/sbin/sendmail -bs',
    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
