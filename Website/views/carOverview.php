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
                <th>Image</th>

            </tr>
            <?php foreach ($arr as $rows) : ?>
                <tr class="car_row">
                    <td> <?php print_r($rows['car_id']) ?> </td>
                    <td> <?php print_r($rows['brand']) ?> </td>
                    <td> <?php print_r($rows['model']) ?> </td>
                    <td> <?php print_r($rows['year']) ?> </td>
                    <td> <?php print_r($rows['distance_driven']) ?> </td>
                    <td> <?php print_r($rows['transmission']) ?> </td>
                    <td> <?php print_r($rows['fuel_type']) ?> </td>
                    <td> <?php print_r($rows['city']) ?> </td>
                    <td> <?php print_r($rows['price']) ?> </td>
                    <td> <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($rows['img']) . '"/>'; ?> </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>