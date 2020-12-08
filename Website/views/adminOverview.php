<?php
include "shared/header.php";
require "../Logic/adminOverviewLogic.php";

$bruh = new AdminOverview();
$value = $bruh->CarsOwned();
$activeRentals = $bruh->ActiveRentals();
$userAmt = $bruh->UserAmount();

if (isset($_SESSION['role']) && $_SESSION['role'] != "admin") {
    header('Location: ../Logic/logout.php');
}
?>

<body>

    <?php
    $currentPage = "Overview";
    include "shared/adminNav.php";
    ?>

    <div class="grid-container">
        <div class="grid-item">
            <?php echo "
                <p> Cars Owned: " . reset($value);
            '</p>';
            ?>
        </div>
        <div class="grid-item">
            <?php echo "
                <p> Active Rentals: " . reset($activeRentals);
            '</p>';
            ?>
        </div>
        <div class="grid-item">Pending Offers:</div>
        <div class="grid-item">
            <?php echo "
                <p> Registered Users: " . reset($userAmt);
            '</p>';
            ?>
        </div>
    </div>


</body>