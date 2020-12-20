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
            <div class="result_page_results">
                  <!-- foreach time -->
                  <?php foreach ($array as $row) : ?>
                        <form action="../Logic/rentPreview.php" method="post">
                              <img src="https://via.placeholder.com/150">
                              <div>
                                    Brand:
                                    <input name="resultbrand" value="<?php print_r($row['brand']) ?>" readonly>
                              </div>
                              <div>
                                    Model:
                                    <input name="resultmodel" value="<?php print_r($row['model']) ?>" readonly>
                              </div>
                              <div>
                                    Transmission:
                                    <input name="resulttransmission" value="<?php print_r($row['transmission']) ?>" readonly>
                              </div>
                              <button type="submit" class="rent_button">Rent Now</button>
                              <div>
                                    Price:
                                    <input name="resultprice" value="<?php print_r($row['price']) ?>" readonly>

                                    <input name="year" type="hidden" value="<?php print_r($row['year']) ?>">
                                    <input name="distance" type="hidden" value="<?php print_r($row['distance_driven'])?>">
                                    <input name="fuel" type="hidden" value="<?php print_r($row['fuel_type']) ?>">
                                    <input name="city" type="hidden" value="<?php print_r($row['city']) ?>">
                                    <input name="id" type="hidden" value="<?php print_r($row['car_id']) ?>">

                              </div>
                        </form>
                  <?php endforeach; ?>
            </div>
      </div>
      <?php include "shared/footer.html" ?>
</body>

</html>