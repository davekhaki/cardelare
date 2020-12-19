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

        <form class="car_details" action="../Logic/offerLogic.php" method="POST">
            <div>
                <input type="text" id="brand" name="brand" placeholder="Brand">
            </div>
            <div>
                <input type="text" id="model" name="model" placeholder="Model">
            </div>
            <div>
                <input type="text" id="year" name="year" placeholder="Year Produced">
            </div>
            <div>
                <input type="text" id="distance_driven" name="distance_driven" placeholder="Distance Driven">
            </div>
            <div>
                <input type="text" id="transmission" name="transmission" placeholder="Transmission">
            </div>
            <div>
                <input type="text" id="fuel_type" name="fuel_type" placeholder="Fuel Type">
            </div>
            <div>
                <input type="text" id="city" name="city" placeholder="City">
            </div>
            <div>
                <input type="text" id="price" name="price" placeholder="Price">
            </div>
            <div class="car_sell_description">
                <textarea placeholder="Description" id="description" cols="30" rows="3"></textarea>
            </div>
            <div class="car_details_submit">
                <input class=offer_button type="submit" value="Send Offer">
            </div>
            <input type="hidden" name="user_id" id="user_id" value="<?php echo($_SESSION['id']); ?>">
        </form>

        
    </div>

    <?php include "shared/footer.html" ?>
</body>