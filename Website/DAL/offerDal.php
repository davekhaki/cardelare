<?php
require_once('dbConnection.php');
require_once "../DAL/DTO/OfferDto.php";
class OfferDal{
    private dbConnection $con;

    public function __construct()
    {
        $this->con = new dbConnection();
    }

    public function GetAllOffers()
    {
        $sql = "SELECT * FROM offers";
        $stmt = $this->con->connect()->query($sql);
        $result = $stmt->fetchAll();

        foreach($result as $res) {
            $res = new OfferDto($res['offer_id'], $res['brand'], $res['model'], $res['year'], $res['distance_driven'], $res['transmission'], $res['fuel_type'], $res['city'], $res['offer']);
            $offers[] = $res;
        }

        return $offers;
    }
}