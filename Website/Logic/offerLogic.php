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
}


?>