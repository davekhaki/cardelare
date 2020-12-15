<?php
    include "shared/header.php";

    if (isset($_SESSION['role']) && $_SESSION['role'] != "admin")
    {
        header('Location: ../Logic/logout.php');
    }

    require "../Logic/offerLogic.php";
    $offerLogic = new OfferLogic();
    $allOffersArray = $offerLogic->GetAllOffers();

    $passArray = array();
    foreach($allOffersArray as $offer){
        $passArray[] = array($offer->getOfferId(), $offer->getBrand(), $offer->getModel(), $offer->getYear(), $offer->getDistance(), $offer->getTransmission(), $offer->getFuel(), $offer->getCity(), $offer->getPrice(), $offer->getUserId());
    }
    $currentPage = "Pending Offers";
    include "shared/adminNav.php";   
?>

<script> var passedArray = <?php echo json_encode($passArray); ?>;</script>

<body>

    <div class="pending_offer_content">
        <div class="pending_cars_list">
            <form action="" class="pending_offers_listbox">
                <select name="" id="offer_list" size="10">
                    
                </select>
            </form>
        </div>
        <div class="selected_car_info">
            <div class="pending_car_image">
                <img src="https://via.placeholder.com/150">
            </div>
            <div class="pending_car_detail">
                <div><p>Brand:</p><input type="text" id="brand"></div>
                <div><p>Model:</p><input type="text" id="model"></div>
                <div><p>City:</p><input type="text" id="city"></div>
                <div><p>Distance Driven:</p><input type="text" id="distance"></div>
                <div><p>Production Year:</p><input type="text" id="production_year"></div>
                <div><p>Fuel Type:</p><input type="text" id="fuel"></div>
                <div><p>Transmission:</p><input type="text" id="transmission"></div>
            </div>
        </div>
        <div class="pending_offer_response">
            <form action="sendMail.php" method="POST" class="offer_response_form">
                <div><input type="button" name="btn_accept" id="btn_accept" value="Accept Offer"></div>
                <div><label for="counter_offer">Counter Offer: </label></div>
                <div><input type="text" name="counter_offer" id="counter_offer"></div>
                <div><input type="submit" name="btn_new_price" id="new_price" value="Offer new price"></div>
                <input type="hidden" name="email" value="<?php print_r($email)?>"> <!-- Email value not implemented yet -->
            </form>
        </div>
    </div>

    <script src="../js/createElement.js">window.onload = populateListbox()</script>
</body>
