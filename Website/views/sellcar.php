<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../styles.css'>
</head>

<body>
    <?php include "shared/nav.html" ?>

    <div class="sell_form">
        <div class="car_image">
            <img  class="moment" id="output" />
            <input type="file" accept="image/*" onchange="loadImage(event)">
        </div>

        <div class="car_details">
            <div class="car_details_input">
                <label for="brand">Brand:</label>
                <input type="text" id="brand">
            </div>

            <div class="car_details_input">
                <label for="model">Model:</label>
                <input type="text" id="model">
            </div>

            <div class="car_details_input">
                <label for="year">Year produced:</label>
                <input type="text" id="year">
            </div>

            <div class="car_details_input">
                <label for="distance_driven">Distance Driven:</label>
                <input type="text" id="distance_driven">
            </div>

            <div class="car_details_input">
                <label for="transmission">Transmission:</label>
                <input type="text" id="transmission">
            </div>

            <div class="car_details_input">
                <label for="fuel_type">Fuel Type:</label>
                <input type="text" id="fuel_type">

            </div>
            <div class="car_details_input">
                <label for="city">City:</label>
                <input type="text" id="city">
            </div>

            <div class="car_details_input">
                <label for="price">Price:</label>
                <input type="text" id="price">
            </div>

            <div class="car_details_submit">
                <input class=offer_button type="button" value="Send Offer">
            </div>
        </div>
    </div>



    <script>
        var loadImage = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src)
            }
        };
    </script>
</body>