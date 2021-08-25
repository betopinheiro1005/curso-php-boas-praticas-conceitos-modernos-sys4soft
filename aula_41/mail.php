<?php

  function EnviarEmail($to, $from, $assunto, $mensagem){

    // envio de email através de conta do GMail
    require 'sistema_email/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->CharSet = "UTF-8";
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;

    $mail->isSMTP();
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;

    // sistema de informação do erro
    $mail->SMTPDebug = 0;

    $mail->isHTML(true);
    $mail->Username = "robertopinheiro7843@gmail.com";
    $mail->Password = "**********";
    $mail->setFrom($from, $from);
    $mail->addAddress($to, $to);

    // assunto e mensagem de email
    $mail->Subject = $assunto;
    $mail->Body = $mensagem;

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }

  }

?>