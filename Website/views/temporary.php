<?php 
require "../DAL/userDal.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $passwordAttempt = $_POST['password'];

    $moment = new userDAl();


    $moment->getUserByUsername($username, $passwordAttempt);
}


?>