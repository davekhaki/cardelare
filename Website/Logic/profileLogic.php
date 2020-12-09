<?php
require "../DAL/userDal.php";
require "../DAL/rentalDal.php";

class Profile{
    private userDal $userDal;
    private RentalDal $rentalDal;

    private array $profileDetails;
    private array $allRentals;

    public function __construct($username)
    {
        $this->userDal = new userDal();
        $this->rentalDal = new RentalDal();

        $this->profileDetails = $this->userDal->GetProfileDetails($username);
        $this->allRentals = $this->rentalDal->GetAllRentalsForUser($username);
    }

    public function GetFirstName(){
        return print_r($this->profileDetails['firstname']);
    }

    public function GetLastName(){
        return print_r($this->profileDetails['lastname']);
    }

    public function GetEmail(){
        return print_r($this->profileDetails['email']);
    }

    public function GetPhone(){
        return print_r($this->profileDetails['phone']);
    }

    public function GetDob(){
        return print_r($this->profileDetails['dob']);
    }

    public function GetAddress(){
        return print_r($this->profileDetails['address']);
    }

    public function GetRentals(){
        return $this->allRentals;
    }

    public function GetProfileArray(){
        return $this->profileDetails;
    }
}
?>