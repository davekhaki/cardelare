<?php

require '../DAL/offerDal.php';

class OfferLogic{

      private OfferDal $sql;

      public function __construct()
      {
            $this->sql = new OfferDal();
      }

      public function GetAllOffers()
      {
            return $this->sql->GetAllOffers();
      }

      public function SendInitOffer($brand, $model, $year, $distance, $transmission, $fuel, $city, $price, $userId)
      {
            $this->sql->AddOffer($brand, $model, $year, $distance, $transmission, $fuel, $city, $price, $userId);
      }

}

$offer = new OfferLogic();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
      $offer->SendInitOffer($_POST['brand'], $_POST['model'], $_POST['year'], $_POST['distance_driven'], $_POST['transmission'], $_POST['fuel_type'], $_POST['city'], $_POST['price'], $_POST['user_id']);
}


?>