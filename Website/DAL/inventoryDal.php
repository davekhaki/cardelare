<?php
require_once('dbConnection.php');
require_once "../DAL/DTO/CarDto.php";

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

        foreach($result as $row) {
            $car = new CarDto($row['car_id'], $row['brand'], $row['model'], $row['year'], $row['distance_driven'], $row['transmission'], $row['fuel_type'], $row['city'], $row['price']);
            $cars[] = $car;
        }

        return $cars;
    }

    public function AddCar($brand, $model, $year, $distance, $transmission, $fuel, $city, $price){
        $sql = " INSERT INTO inventory (brand, model, year, distance_driven, transmission, fuel_type, city, price) 
                    VALUES (:brand, :model, :ayear , :distance_driven, :transmission, :fuel_type, :city, :price);";
        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':brand', $brand);
        $stmt->bindValue(':model', $model);
        $stmt->bindValue(':ayear', $year);
        $stmt->bindValue(':distance_driven', $distance);
        $stmt->bindValue(':transmission', $transmission);
        $stmt->bindValue(':fuel_type', $fuel);
        $stmt->bindValue(':city', $city);
        $stmt->bindValue(':price', $price);

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

    public function Search($brand){
        $start = "%";
        $start .= $brand; 
        $brand .= "%";
        $sql = "SELECT * FROM inventory WHERE brand LIKE :brand"; 

        $stmt = $this->con->connect()->prepare($sql);
        
        $stmt->bindValue(':brand', $brand);

        $stmt->execute();

        $result = $stmt->fetchAll();
      
        return $result;
    }
}
