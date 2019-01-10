<?php
/**
 * Created by PhpStorm.
 * User: sergnio
 * Date: 1/10/19
 * Time: 12:11
 */


require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';;

$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->setFrom('test@EMG.com', 'Testing EMG');
} catch (\PHPMailer\PHPMailer\Exception $e) {
}
$mail->addAddress('sergnio@gmail.com', 'Sergio Najera');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
try {
    if (!$mail->send()) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }
} catch (\PHPMailer\PHPMailer\Exception $e) {
}