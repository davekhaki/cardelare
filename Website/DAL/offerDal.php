<?php

require_once('dbConnection.php');
require_once("../DAL/DTO/OfferDto.php");

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
        $offers = array();

        try
        {
            $result = $stmt->fetchAll();

            foreach($result as $res) {
                $res = new OfferDto($res['offer_id'], $res['brand'], $res['model'], $res['year'], $res['distance_driven'], $res['transmission'], $res['fuel_type'], $res['city'], $res['offer'], $res['user_id']);
                $offers[] = $res;
            }
        }
        catch(Exception $e)
        {

        }

        return $offers;
    }

    public function GetOfferById($offerId)
    {
        $sql = "SELECT * FROM offers WHERE offer_id = $offerId";
        $stmt = $this->con->connect()->query($sql);
        $result = $stmt->fetchAll();
        foreach($result as $res)
        {
            $offer = new OfferDto($res['offer_id'], $res['brand'], $res['model'], $res['year'], $res['distance_driven'], $res['transmission'], $res['fuel_type'], $res['city'], $res['offer'], $res['user_id']);
        }
        

        return $offer;
    }

    public function DeleteOffer($offerId)
    {
        $sql = "DELETE FROM offers WHERE offer_id = :offerId";

        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':offerId', $offerId);

        $stmt->execute();

        return $stmt; //why do we return? - According to other similar sql statements
    }

    public function AddOffer($brand, $model, $year, $distance, $transmission, $fuel, $city, $price, $userId)
    {
        $sql = "INSERT INTO offers(`user_id`, `brand`, `model`, `year`, `distance_driven`, `transmission`, `fuel_type`, `city`, `offer`) VALUES (:auser_id, :brand, :model, :ayear , :distance_driven, :transmission, :fuel_type, :city, :price)";

        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':auser_id', $userId);
        $stmt->bindValue(':brand', $brand);
        $stmt->bindValue(':model', $model);
        $stmt->bindValue(':ayear', $year);
        $stmt->bindValue(':distance_driven', $distance);
        $stmt->bindValue(':transmission', $transmission);
        $stmt->bindValue(':fuel_type', $fuel);
        $stmt->bindValue(':city', $city);
        $stmt->bindValue(':price', $price);

        $stmt->execute();

    }
}