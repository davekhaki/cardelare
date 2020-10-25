<!DOCTYPE html>
<html lang="en" class="home_html">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../styles.css">
      <title>Document</title>
</head>
<body class='homebody'>
      <?php 
            $currentPage = "CarDelare, Rent a car or Sell your car";
            include "shared/nav.php"      
      ?>

      <div class="search_box_title">Search for Rentals</div>
      <div class="search_box">
            <div>
                  <label for="brand">Brand:</label>
                  <input type="text" name="
                  car_brand" id="brand">
            </div>
            <div>
                  <label for="city">City:</label>
                  <input type="text" name="car_city" id="city">
            </div>
            <div>
                  <label for="model">Model:</label>
                  <input type="text" name="car_model" id="model">
            </div>
            <div class="sb_price_div">
                  <label for="price_minimum">Minimum Price:</label>
                  <input type="number" name="car_price_minimum" id="price_minimum">
                  <label for="price_maximum">Maximum Price:</label>
                  <input type="number" name="car_price_maximum" id="price_maximum">
            </div>
            <div class="sb_button_div">
                  <button type="submit">Search</button>
            </div>
      </div>

      <?php include "shared/footer.html"?>

</body>
</html>