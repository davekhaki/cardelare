<?php

include_once('../PHPMailer/PHPMailerAutoload.php');

$price = $_POST['counter_offer'];
$clientMail = $_POST['email'];

$mail = new PHPMailer();

$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'realcardelare@gmail.com';
$mail->Password = 'Phpsucks';
$mail->Subject = 'Car Offer';
$mail->Body = "Thank you for your offer, our experts' counter offer is $price"."€";
$mail->addAddress($clientMail);

$mail->send();

?>