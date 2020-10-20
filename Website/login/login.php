<?php 
require_once("./user.php");

$user = new User($_POST['username'], $_POST['password']);
echo $user->getUsername();