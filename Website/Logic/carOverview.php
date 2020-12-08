<?php
 require "../DAL/inventoryDal.php";
class CarOverview{
    private inventoryDal $sql;

    public function __construct()
    {
        $this->sql = new inventoryDal();


    }

    public function GetCars(){
        return $this->sql->GetAllCars();
    }
}