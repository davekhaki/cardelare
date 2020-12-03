<?php
    include "shared/header.php";

    if (isset($_SESSION['role']) && $_SESSION['role'] != "admin")
    {
        header('Location: ../Logic/logout.php');
    }
?>

<body>
    
    <?php 
        $currentPage = "Pending Offers";
        include "shared/adminNav.php"; 
    ?>

    <div class="pending_offer_content">
        <div class="pending_cars_list">

        </div>
        <div class="selected_car_info">
            <div class="pending_car_image">
                <img src="https://via.placeholder.com/150">
            </div>
            <div class="pending_car_detail">
                <div><p>Brand:</p><input type="text"></div>
                <div><p>Model:</p><input type="text"></div>
                <div><p>City:</p><input type="text"></div>
                <div><p>Distance Driven:</p><input type="text"></div>
                <div><p>Production Year:</p><input type="text"></div>
                <div><p>Fuel Type:</p><input type="text"></div>
                <div><p>Transmission:</p><input type="text"></div>
            </div>
        </div>
        <div class="pending_offer_response">
            <form action="" class="offer_response_form">
                <div><input type="button" name="btn_accept" id="btn_accept" value="Accept Offer"></div>
                <div><label for="counter_offer">Counter Offer: </label></div>
                <div><input type="text" name="counter_offer" id="counter_offer"></div>
                <div><input type="button" name="btn_new_price" id="new_price" value="Offer new price"></div>
            </form>
        </div>
    </div>


</body>
