<?php

include_once('../PHPMailer/PHPMailerAutoload.php');
include("../DAL/userDal.php");
include("../DAL/offerDal.php");
include("../DAL/inventoryDal.php");

$userDb = new userDal();
$offerDb = new OfferDal();
$inventoryDb = new inventoryDal();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
      $price = $_POST['counter_offer'];
      $clientId = $_POST['clientId'];
      $offerId = $_POST['offerId'];
      $new_rental_price = $_POST['rental_price'];
      $clientMail = $userDb->GetUserEmailById($clientId);
      $detailedOffer = $offerDb->GetOfferById($offerId);

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
            $mail->Body = "Thank you for selling your car for $price". "€ " . "to CarDelare! Our team will contact you for further arrangements.";
            $inventoryDb->AddCar($detailedOffer->getBrand(), $detailedOffer->getModel(), $detailedOffer->getYear(), $detailedOffer->getDistance(), $detailedOffer->getTransmission(), $detailedOffer->getFuel(), $detailedOffer->getCity(), $new_rental_price);
      }
      else //Counter Offer
      {
            $mail->Body = "Thank you for your offer, our experts' counter offer is $price"."€. If you agree with the price, please submit a new offer with the price we recommend.";
      }
      $offerDb->DeleteOffer($offerId);

      $mail->addAddress($clientMail);
      
      $mail->send();

      header('Location: ../views/pendingOffers.php');

}

?>