<?php 

class CarDto { 

      private int $carId;
      private string $brand;
      private string $model;
      private string $year;
      private int $distanceDriven;
      private string $transmission;
      private string $fuel;
      private string $city;
      private int $price;

      public function __construct(int $carId, string $brand, string $model, string $year, int $distanceDriven, string $transmission, string $fuel, string $city, int $price)
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

      public function getCarId():string{
            return strval($this->carId);
      }

      public function getBrand():string{
            return strval($this->brand);
      }

      public function getModel():string{
            return strval($this->model);
      }

      public function getYear():string{
            return strval($this->year);
      }

      public function getDistance():int{
            return intval($this->distanceDriven);
      }

      public function getTransmission():string{
            return strval($this->transmission);
      }

      public function getFuel():string{
            return strval($this->fuel);
      }

      public function getCity():string{
            return strval($this->city);
      }

      public function getPrice():int{
            return intval($this->price);
      }
}

?>