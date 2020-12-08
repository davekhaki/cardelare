<?php
require_once('dbConnection.php');
require_once "../DAL/DTO/UserDto.php";

class inventoryDal
{
    private dbConnection $con;

    public function __construct()
    {
        $this->con = new dbConnection();
    }

    public function GetAllCars(){
        $sql = "SELECT * FROM inventory";
        $stmt = $this->con->connect()->query($sql);

        $result = $stmt->fetchAll();
      
        return $result;
    }

    public function AddCar($brand, $model, $year, $distance, $transmission, $fuel, $city, $price, $img){
        $sql = " INSERT INTO inventory (brand, model, year, distance_driven, transmission, fuel_type, city, price, img) 
                    VALUES (:brand, :model, :ayear , :distance_driven, :transmission, :fuel_type, :city, :price, :img);";
        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':brand', $brand);
        $stmt->bindValue(':model', $model);
        $stmt->bindValue(':ayear', $year);
        $stmt->bindValue(':distance_driven', $distance);
        $stmt->bindValue(':transmission', $transmission);
        $stmt->bindValue(':fuel_type', $fuel);
        $stmt->bindValue(':city', $city);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':img', $img);

        $stmt->execute();

        return $stmt;
    }

    public function GetAmountCarsOwned()
    {
        $sql = "SELECT COUNT(car_id) AS amt FROM inventory";

        $stmt = $this->con->connect()->query($sql);

        $result = $stmt->fetchAll();

        return reset($result);
    }

    public function GetAmountActiveRentals()
    {
        $sql = "SELECT COUNT(car_id) AS amt FROM rentals";

        $stmt = $this->con->connect()->query($sql);

        $result = $stmt->fetchAll();
      
        return reset($result);
    }
}
