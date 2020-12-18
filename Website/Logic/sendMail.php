<?php

include_once('../PHPMailer/PHPMailerAutoload.php');
include("../DAL/userDal.php");
include("../DAL/offerDal.php");

$userDb = new userDal();
$offerDb = new OfferDal();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
      $price = $_POST['counter_offer'];
      $clientId = $_POST['clientId'];
      $offerId = $_POST['offerId'];
      $clientMail = $userDb->GetUserEmailById($clientId);
      $offerDb->DeleteOffer($offerId);

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
      if(isset($_POST['btn_accept'])) //Offer Accepted
      {
            $mail->Body = "Thank you for selling your car for $price". "€ " . "to CarDelare! Our team will contact you for further arrangements";
      }
      else //Counter Offer
      {
            $mail->Body = "Thank you for your offer, our experts' counter offer is $price"."€";
      }

      $mail->addAddress($clientMail);
      
      $mail->send();


}

?>