<?php include "shared/header.php" ?>

<body>
      
      <?php 
            $currentPage = "Search Results";
            include "shared/nav.php"; 
      ?>

      <div class="result_page">
            <div class="result_page_filters">
                  <div><p>Brand:</p><input type="text"></div>
                  <div><p>Model:</p><input type="text"></div>
                  <div><p>City:</p><input type="text"></div>
                  <div><p>Distance Driven:</p><input type="text"></div>
                  <div><p>Hourly Price Range:</p><input type="number" class="result_page_price_range"> to <input type="number" class="result_page_price_range"></div>
                  <div><p>Production Year:</p><input type="text"></div>
                  <div><p>Fuel Type:</p><input type="text"></div>
                  <div><p>Transmission:</p><input type="text"></div>
                  <input type="submit" value="Filter" class="result_page_submit_filter">
            </div>
            <div class="result_page_results">
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>
                  <div>
                        <?php include "filterResultCars.php" ?>
                  </div>                 
            </div>
      </div>


      <?php include "shared/footer.html"?>
      
</body>
</html>