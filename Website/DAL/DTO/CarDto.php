<?php 

class CarDto { 

      private int $carId;
      private string $brand;
      private string $model;
      private int $year;
      private int $distanceDriven;
      private string $transmission;
      private string $fuel;
      private string $city;
      private int $price;

      public function __construct(int $carId, string $brand, string $model, int $year, int $distanceDriven, string $transmission, string $fuel, string $city, int $price)
      {
            $this->carId = $carId; 
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
            $this->distanceDriven = $distanceDriven;
            $this->transmission = $transmission;
            $this->fuel = $fuel;
            $this->city = $city;
            $this->price = $price;
      }

      public function getCar():string{
            return strval($this->carId);
      }


}

?>