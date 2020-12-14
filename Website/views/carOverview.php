<?php
include "shared/header.php";
require "../Logic/carOverview.php";

$carManager = new CarOverview();
$arr = $carManager->GetCars();

if (isset($_SESSION['role']) && $_SESSION['role'] != "admin") {
    header('Location: ../Logic/logout.php');
}
?>

<body>
    <?php
    $currentPage = "Car Overview";
    include "shared/adminNav.php";
    ?>
    <div class="car_overview_table_div">
        <table class="car_overview_table">
            <tr class="car_row_main">
                <th>Car ID</th>
                <th>Brand</th>
                <th>Model</th>
                <th>Year</th>
                <th>Distance Driven</th>
                <th>Transmission</th>
                <th>Fuel Type</th>
                <th>City</th>
                <th>Price</th>
            </tr>
            <?php foreach ($arr as $car) : ?>
                <tr class="car_row">
                    <td> <?php print_r($car->getCarId()) ?> </td>
                    <td> <?php print_r($car->getBrand()) ?> </td>
                    <td> <?php print_r($car->getModel()) ?> </td>
                    <td> <?php print_r($car->getYear()) ?> </td>
                    <td> <?php print_r($car->getDistance()) ?> </td>
                    <td> <?php print_r($car->getTransmission()) ?> </td>
                    <td> <?php print_r($car->getFuel()) ?> </td>
                    <td> <?php print_r($car->getCity()) ?> </td>
                    <td> <?php print_r($car->getPrice()) ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>