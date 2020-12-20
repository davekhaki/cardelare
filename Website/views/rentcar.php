<?php
include "shared/header.php";
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
$car = $_SESSION['rent'];

?>

<body>
    <?php $currentPage = "Rent A Car";
    include "shared/nav.php";
    ?>

    <div class="rent_form">
        <form class="car_details" action="../Logic/rent.php" method="POST">
            <div class="car_information">
                <div>
                    <input name="carid" type="hidden" value="<?php print_r($car['id']) ?>">
                    <input name="userid" type="hidden" value="<?php $_SESSION['id'] ?>">
                    <input type="text" id="brand" name="brand" placeholder="<?php print_r($car['brand']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="model" name="model" placeholder="<?php print_r($car['model']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="year" name="year" placeholder="<?php print_r($car['year']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="distance_driven" name="distance_driven" placeholder="<?php print_r($car['distance']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="transmission" name="transmission" placeholder="<?php print_r($car['transmission']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="fuel_type" name="fuel_type" placeholder="<?php print_r($car['fuel']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="city" name="city" placeholder="<?php print_r($car['city']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="price" name="price"  value="<?php print_r($car['price']) ?> " placeholder="<?php print_r($car['price']) ?>" readonly>
                </div>
            </div>
            <div class="rental_information">
                <div>
                    <input type="text" id="rent_city" name="rentcity" value="<?php print_r($car['city']) ?>" placeholder="<?php print_r($car['city']) ?>" readonly>
                </div>
                <div>
                    <input type="text" id="return_city" name="returncity" placeholder="Return City">
                </div>
                <div>
                    <input type="date" id="rent_date" name="rentdate" placeholder="Rent Date">
                </div>
                <div>
                    <input type="date" id="return_date" name="returndate" placeholder="Return Date">
                </div>
                <div>
                    <input type="text" id="price" name="price" value="<?php print_r($car['price']) ?>" placeholder="Calculated Price:" readonly>
                </div>
            </div>
            <div class="rent_car_submit">
                <input class=rent_button type="submit" value="Rent Car">
            </div>
        </form>
    </div>
    <?php include "shared/footer.html" ?>
</body>