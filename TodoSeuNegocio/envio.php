<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if(isset($_POST['enviar'])) {
    $name = $_POST["inNome"];
    $email = $_POST["inEmail"];
    $password = $_POST["inFone"];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'aclobeoficial@gmail.com'; // Substitua pelo seu e-mail Gmail
        $mail->Password   = 'twgi vlxo mvdc azvf'; // Substitua pela sua senha do Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('aclobeoficial@gmail.com', 'TodoSeuNegocio');
        $mail->addAddress($email,);
        $mail->addReplyTo('joaopedrocode0@gmail.com', 'TodoSeuNegocio');

        $body = "Olá ". $name. ", seu e-mail é ". $email. " e seu telefone é ".$password;

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Contato TodoSeuNegocio';
        $mail->Body    = $body;

        $mail->send();
        echo "<script>alert('E-mail enviado com sucesso!');</script>";
        echo "<script>window.location.href='index.html#formId';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Erro ao enviar e-mail: {$mail->ErrorInfo}');</script>";
        echo "<script>window.location.href='index.html#formId';</script>";
    }
}
?>
