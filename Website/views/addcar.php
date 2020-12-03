<?php

    include "shared/header.php";

    if (isset($_SESSION['role']) && $_SESSION['role'] != "admin")
    {
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
        <div class="car_image">
            <img class="uploaded_image" id="output" />
            <input type="file" accept="image/*" onchange="loadImage(event)">
        </div>

        <div class="car_details">
            <div>
                <input type="text" id="brand" placeholder="Brand">
            </div>
            <div>
                <input type="text" id="model" placeholder="Model">
            </div>
            <div>
                <input type="text" id="year" placeholder="Year Produced">
            </div>
            <div>
                <input type="text" id="distance_driven" placeholder="Distance Driven">
            </div>
            <div>
                <input type="text" id="transmission" placeholder="Transmission">
            </div>
            <div>
                <input type="text" id="fuel_type" placeholder="Fuel Type">
            </div>
            <div>
                <input type="text" id="city" placeholder="City">
            </div>
            <div>
                <input type="text" id="price" placeholder="Price">
            </div>
            <div class="car_sell_description">
                <textarea placeholder="Description" id="description" cols="30" rows="3"></textarea>
            </div>
            <div class="car_details_submit">
                <input class=add_button type="button" value="Add Car">
            </div>
        </div>
    </div>
</body>