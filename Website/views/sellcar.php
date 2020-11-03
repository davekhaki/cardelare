<?php 

    include "shared/header.php";
  
    if(!isset($_SESSION['username'])) {
        header('Location: login.php');
    }
?>

<script src="../js/loadImage.js"> </script>

<body>
    <?php 
        $currentPage = "Sell your car";
        include "shared/nav.php"; 
    ?>

    <div class="sell_form">
        <div class="car_image">
            <img  class="uploaded_image" id="output" />
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
                <input type="text" id="price" placeholder="price">
            </div>
            <div class="car_details_submit">
                <input class=offer_button type="button" value="Send Offer">
            </div>
        </div>

        
    </div>

    <?php include "shared/footer.html" ?>
</body>