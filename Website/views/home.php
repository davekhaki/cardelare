<!DOCTYPE html>
<html lang="en" class="home_html">

<?php
session_start();
?>

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../styles.css">
      <title>Document</title>
      <script src="../js/validation.js" type="text/javascript"></script>

</head>

<body class='homebody'>
      <?php
      $currentPage = "CarDelare, Rent a car or Sell your car";
      include "shared/nav.php";
      ?>

      <script type="text/javascript">
            var v = new Validator();
      </script>

      <div class="search_box_title">Search for Rentals</div>

      <form action="../Logic/search.php" method="post" class="search_box" name="searchform" onsubmit="return v.ValidateSearchForm(document.searchform.city.value, document.searchform.min.value, document.searchform.max.value);">
            <div>
                  <label for="brand">Brand:</label>
                  <input type="text" name="brand" id="brand">
            </div>
            <div>
                  <label for="city">City:</label>
                  <input type="text" name="city" id="city">
            </div>
            <div>
                  <label for="model">Model:</label>
                  <input type="text" name="model" id="model">
            </div>
            <div class="sb_price_div">
                  <label for="price_minimum">Minimum Price:</label>
                  <input type="number" name="min" id="price_minimum">
                  <label for="price_maximum">Maximum Price:</label>
                  <input type="number" name="max" id="price_maximum">
            </div>
            <div class="sb_button_div">
                  <button type="submit">Search</button>
            </div>
      </form>
      <?php include "shared/footer.html" ?>
</body>

</html>