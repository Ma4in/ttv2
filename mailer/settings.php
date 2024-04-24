<?php

return [
    'mail_settings_prod' => [
        'host' => 'smtp.gmail.com',
        'auth' => true,
        'user' => 'mintus.play@gmail.com',
        'pass' => 'vssk mnpv dcdl pvwz',
        'smtp_sec' => 'ssl', //tls
        'port' => 465, //586
        'charset' => 'UTF-8',
        'is_html' => true,
        'from_email' => 'mintus.play@gmail.com', 
        'from_name' => 'Tamga Transit',
        'mail_to' => 'nikita.miro.2002@mail.ru', //имя служебной почты компании
    ],
    'content_to' => '<h1>Заявка на регистрацию</h1> ФИО: %s <br> Email : %s <br> Имя организации : %s <br> ИНН : %s',
    'content_from' => '<h1>Заявка на регистрацию получена</h1> <h2>%s, наши представители скоро свяжутся с вами</h2>'
];