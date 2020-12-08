<?php
      require "../DAL/inventoryDal.php";
      require "../DAL/userDal.php";

class AdminOverview{
    private inventoryDal $sql;
    private userDal $user_sql;

    private array $carsOwned;
    private array $activeRentals;
    private array $userAmt;

    public function __construct()
    {
        $this->sql = new inventoryDal();
        $this->user_sql = new userDal();

        $this->carsOwned = $this->sql->GetAmountCarsOwned();
        $this->activeRentals = $this->sql->GetAmountActiveRentals();

        $this->userAmt = $this->user_sql->GetAmountOfUsers();
    }

    public function CarsOwned(){
        return $this->carsOwned;
    }

    public function ActiveRentals(){
        return $this->activeRentals;
    }

    public function UserAmount(){
        return $this->userAmt;
    }
}
      

      
