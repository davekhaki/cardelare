<?php 
require_once("./userClass.php");

$user = new User($_POST['username'], $_POST['password']);
echo $user->getUsername();