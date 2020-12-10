<?php

include_once('../PHPMailer/PHPMailerAutoload.php');

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
$mail->Body = "Thank you for your offer, our experts' counter offer is 3500$ .";
$mail->addAddress('mbgroup.bruh@gmail.com');

$mail->send();

?>