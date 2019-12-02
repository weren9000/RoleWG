<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
            'class' => 'Swift_SmtpTransport',
            'host' => 'smtp.yandex.ru',  // e.g. smtp.mandrillapp.com or smtp.gmail.com
            'username' => 'weren9000@yandex.ru',
            'password' => 'Vfrfhjys9013',
            'port' => '465', // Port 25 is a very common port too
            'encryption' => 'ssl', // It is often used, check your provider or mail server specs
            ],
           ],
    ],
];
