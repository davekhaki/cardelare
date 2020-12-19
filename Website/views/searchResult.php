<?php
include "../Logic/search.php"; //define class before auto unserialize 
include "shared/header.php";

$search = $_SESSION['search'];

$array = $_SESSION['result'];
?>

<body>
      <?php
      $currentPage = "Search Results";
      include "shared/nav.php";
      ?>

      <div class="result_page">
            <div class="result_page_filters">
                  <div>
                        <p>Brand:</p><input type="text">
                  </div>
                  <div>
                        <p>Model:</p><input type="text">
                  </div>
                  <div>
                        <p>City:</p><input type="text">
                  </div>
                  <div>
                        <p>Distance Driven:</p><input type="text">
                  </div>
                  <div>
                        <p>Hourly Price Range:</p><input type="number" class="result_page_price_range"> to <input type="number" class="result_page_price_range">
                  </div>
                  <div>
                        <p>Production Year:</p><input type="text">
                  </div>
                  <div>
                        <p>Fuel Type:</p><input type="text">
                  </div>
                  <div>
                        <p>Transmission:</p><input type="text">
                  </div>
                  <input type="submit" value="Filter" class="result_page_submit_filter">
            </div>
            <div class="result_page_results">
                  <!-- foreach time -->
                  <?php foreach ($array as $row) : ?>
                        <div>
                              <img src="https://via.placeholder.com/150">
                              <p>Brand: <?php print_r($row['brand']) ?></p>
                              <p>Model: <?php print_r($row['model']) ?></p>
                              <p>Hourly Price: <?php print_r($row['price']) ?> </p>
                              <p>Transmission: <?php print_r($row['transmission']) ?></p>
                        </div>
                  <?php endforeach; ?>
            </div>
      </div>


      <?php include "shared/footer.html" ?>

</body>

</html>