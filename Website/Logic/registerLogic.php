<?php

session_start();

require "../DAL/userDal.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    if ($password !== $passwordRepeat) {
    //defaults back to the register page when the passwords dont match
    header('Location: ../views/register.php');
    }

    $moment = new userDAl();


    $success = $moment->addNewUser($username, $password);

    if ($success === false) {
        header('Location: ../views/register.php');
    } else {
        header('Location: ../views/login.php');
    }

    echo $username, $passwordRepeat, $password;
}

