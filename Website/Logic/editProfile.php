<?php
require('profileLogic.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $profile = new Profile($_SESSION['username']);
    $profile->EditProfileInfo($_POST['firstname'],  $_POST['lastname'], $_POST['email'], $_POST['phone'], $_POST['dob'], $_POST['city'], $_POST['bsn'], $_POST['street'], $_POST['house']);
}
