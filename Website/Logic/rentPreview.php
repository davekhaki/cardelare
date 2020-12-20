<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id']; //not actually posted 

    $brand = $_POST['resultbrand'];
    $model = $_POST['resultmodel'];
    $year = $_POST['year'];
    $distance = $_POST['distance'];
    $transmission = $_POST['resulttransmission'];
    $fuel = $_POST['fuel'];
    $city = $_POST['city'];
    $price = $_POST['resultprice'];


    $carForRent = array(
        "id" => $id,
        "brand" => $brand,
        "model" => $model,
        "year" => $year,
        "distance" => $distance,
        "transmission" => $transmission,
        "fuel" => $fuel,
        "city" => $city,
        "price" => $price,
    );

    $_SESSION['rent'] = $carForRent;

    header('Location: ../views/rentcar.php');
}
?>