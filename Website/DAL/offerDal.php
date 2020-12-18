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
            $res = new OfferDto($res['offer_id'], $res['brand'], $res['model'], $res['year'], $res['distance_driven'], $res['transmission'], $res['fuel_type'], $res['city'], $res['offer'], $res['user_id']);
            $offers[] = $res;
        }

        return $offers;
    }

    public function DeleteOffer($offerId)
    {
        $sql = "DELETE FROM offers WHERE offer_id = :offerId";

        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':offerId', $offerId);

        $stmt->execute();

        return $stmt; //why do we return? - According to other similar sql statements
    }
}