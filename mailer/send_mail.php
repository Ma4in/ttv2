<?php

require_once __DIR__ .'/vendor/autoload.php';
$settings = require_once __DIR__ .'/settings.php';
require_once __DIR__ .'/functions.php';

$fio = $_POST['surname']." ".$_POST['firstname']." ".$_POST['lastname'];
$mail = $_POST['email'];
$org_name = $_POST['org_name'];
$inn = $_POST['inn'];

$body_to = sprintf($settings['content_to'],$fio,$mail,$org_name,$inn);
$body_from = sprintf($settings['content_from'],$fio);

send_mail( $settings['mail_settings_prod'], [$settings['mail_settings_prod']['mail_to']], 'Заявка на регистрацию', $body_to);
send_mail( $settings['mail_settings_prod'], [$mail], 'Заявка на регистрацию', $body_from);

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Tamga-transit</title>
        <link rel="stylesheet" href="../assets/css/main.css">
        <link rel="stylesheet" href="../assets/css/custom.css">
    </head>
    <body class="container text-center py-5">
        <div class="b-box mx-auto align-middle d-inline-block p-3 my-5">
            <h2>
                Заявка на регистрацию принята успешно
            </h2>
            <p>По указанной почте с вами свяжутся наши представители</p>
            <p><a href="../index.php">Вернуться на главную страницу</a></p>
        </div>
    </body>
<html>
    