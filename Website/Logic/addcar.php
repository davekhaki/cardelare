<?php

      require "../DAL/inventoryDal.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $moment = new inventoryDal();

    $moment->AddCar($_POST['brand'], $_POST['model'], $_POST['year'], $_POST['distance'], $_POST['transmission'], $_POST['fuel'], $_POST['city'], $_POST['price'], $_POST['img']);
}