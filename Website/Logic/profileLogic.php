<?php
require "../DAL/userDal.php";
require "../DAL/rentalDal.php";

class Profile{
    private userDal $userDal;
    private RentalDal $rentalDal;

    private string $tempusername;

    private array $profileDetails;
    private array $allRentals;

    public function __construct($username)
    {
        $this->userDal = new userDal();
        $this->rentalDal = new RentalDal();

        $this->tempusername = $username;

        $this->profileDetails = $this->userDal->GetProfileDetails($username);
        $this->allRentals = $this->rentalDal->GetAllRentalsForUser($username);
    }

    public function EditProfileInfo($firstname, $lastname, $email, $phone, $dob, $city, $bsn, $street, $house){
        $this->userDal->EditProfile($this->tempusername, $firstname, $lastname, $email, $phone, $dob, $city, $bsn, $street, $house);
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

    public function GetCity(){
        return print_r($this->profileDetails['city']);
    }

    public function GetBsn(){
        return print_r($this->profileDetails['BSN']);
    }

    public function GetStreet(){
        return print_r($this->profileDetails['street']);
    }

    public function GetHouse(){
        return print_r($this->profileDetails['house_nr']);
    }

    public function GetRentals(){
        return $this->allRentals;
    }

    public function GetProfileArray(){
        return $this->profileDetails;
    }
}
?>