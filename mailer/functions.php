<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function send_mail(array $mail_settings, array $to, string $subject, string $body, array $attachments = [], bool $isHTML = false)
{
    $mail = new PHPMailer(true);

    try{
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = $mail_settings['host'];
        $mail->SMTPAuth   = $mail_settings['auth'];
        $mail->Username   = $mail_settings['user'];
        $mail->Password   = $mail_settings['pass'];
        $mail->SMTPSecure = $mail_settings['smtp_sec'];
        $mail->Port       = $mail_settings['port'];
        $mail->CharSet    = $mail_settings['charset'];

        $mail->setFrom($mail_settings['from_email'], $mail_settings['from_name']);
        foreach ($to as $email){
            $mail->addAddress($email);
        }
        if($attachments){
            foreach ($attachments as $attachment){
                $mail->addAttachment($attachment);
            }
        }

        $mail->isHTML($mail_settings['is_html']);
        $mail->Subject = $subject;
        $mail->Body = $body;
        return $mail->send();
    }
    catch (Exception $e){
        return false;
    }
}