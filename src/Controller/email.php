<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../../vendor/autoload.php';
require_once '../../includes/config.php';

$mail = new PHPMailer(true);

try {

    $nome = $_GET["nome"] ?? "errado";
    $email = $_GET["email"] ?? "errado";
    $comentario = $_GET["comentario"] ?? "errado";
    
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = SMPT_HOST;
    $mail->SMTPAuth = true;
    $mail->Port = SMPT_PORT;
    $mail->Username = SMPT_USER;
    $mail->Password = SMPT_PASS;

    //Recipients
    $mail->setFrom($email, $nome);
    $mail->addAddress('erickromao50@gmail.com', 'erick');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $comentario;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
