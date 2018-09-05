<?php

return [
    'driver' => 'smtp',


    'host' => 'smtp.ipage.com',


    'port' => 587,


    'from' => [
        'address' => 'submit@svezasport.ba',
        'name' => 'SveZaSport',
    ],


    'encryption' => 'tls',


    'username' => 'submit@svezasport.ba',

    'password' => 'Svezasport01',

    'sendmail' => '/usr/sbin/sendmail -bs',


    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
