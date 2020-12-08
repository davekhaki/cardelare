<?php
include "shared/header.php";

if (isset($_SESSION['role']) && $_SESSION['role'] != "admin") {
    header('Location: ../Logic/logout.php');
}

?>

<script src="../js/loadImage.js"> </script>

<body>

    <?php
    $currentPage = "Add Car";
    include "shared/adminNav.php";
    ?>

    <div class="sell_form">
        <form action="../Logic/addcar.php" method="POST">
            <div class="form-group">

                <img class="uploaded_image" id="output" />
                <input type="file" name="img" accept="image/*" onchange="loadImage(event)">

            </div>
            <div class="form-group">
                <input type="text" name="brand" placeholder="Brand">
            </div>
            <div class="form-group">
                <input type="text" name="model" placeholder="Model">
            </div>
            <div class="form-group">
                <input type="text" name="year" placeholder="Year">
            </div>
            <div class="form-group">
                <input type="text" name="distance" placeholder="Distance Driven">
            </div>
            <div class="form-group">
                <input type="text" name="transmission" placeholder="Transmission">
            </div>
            <div class="form-group">
                <input type="text" name="fuel" placeholder="Fuel">
            </div>
            <div class="form-group">
                <input type="text" name="city" placeholder="City">
            </div>
            <div class="form-group">
                <input type="text" name="price" placeholder="Price">
            </div>

            <div>
                <input type="submit" class="add_button" value="Add Car">
            </div>
        </form>
    </div>

    </div>
</body>