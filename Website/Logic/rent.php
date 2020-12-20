<?php
session_start();
    require "../DAL/rentalDal.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Dal = new RentalDal();

    $Dal->AddRental($_POST['carid'], $_SESSION['id'], $_POST['rentcity'], $_POST['returncity'], $_POST['rentdate'], $_POST['returndate'], $_POST['price']);

}