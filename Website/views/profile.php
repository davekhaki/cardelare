<?php
include "shared/header.php";
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}
require "../Logic/profileLogic.php";
$profileManager = new Profile($_SESSION['username']);

$arr = $profileManager->GetRentals();
?>

<body class="profile_body">
    <nav>
        <ul class="nav_ul_items">
            <li class="logo"><a href="home.php"><img src="../Images/navBar/Logo.png" alt=""></a></li>
            <li>Profile - Rent History</li>
            <li><a href="sellcar.php"><img src="../Images/navBar/Sell Car.png" alt=""></a></li>
            <li><a href="../Logic/logout.php"><img src="../Images/navBar/Exit.png" alt=""></a></li>
        </ul>
    </nav>


    <div class="profile_tab_content">
        <div class=profile_details>
            <h2 class="profile_details_title">Profile Details</h2>
            <div>
                <p>First Name:</p> <?php $profileManager->GetFirstName() ?>
            </div>
            <div>
                <p>Last Name:</p> <?php $profileManager->GetLastName() ?>
            </div>
            <div>
                <p>Email:</p><?php $profileManager->GetEmail() ?>
            </div>
            <div>
                <p>Date of Birth:</p><?php $profileManager->GetDob() ?>
            </div>
            <div>
                <p>Phone Number:</p><?php $profileManager->GetPhone() ?>
            </div>
            <div>
                <p>BSN:</p><input type="text">
            </div>
            <div>
                <p>City:</p> <?php $profileManager->GetAddress() ?>
            </div>
            <div>
                <p>Street:</p><input type="text">
            </div>
            <div>
                <p>House Number:</p><input type="text">
            </div>
            <input type="button" value="Edit Profile Details" class="profile_edit_button">
        </div>

        <div class="profile_rent_history">
            <?php foreach ($arr as $rows) : ?>
                <div class="profile_rent_history_divs">
                    <p>City:<?php $rows['end_city']  ?></p>
                    <p>Date Rented:<?php $rows['rent_date']  ?></p>
                    <p>Return Date:<?php $rows['return_date']  ?></p>
                    <p>City:<?php $rows['end_city']  ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <p>rentals array:</p><?php var_dump($arr); ?>

    </div>
    <?php include "shared/footer.html" ?>
</body>

</html>