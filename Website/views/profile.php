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

    <form action="../Logic/editProfile.php" method="post">
        <div class="profile_tab_content">
            <div class=profile_details>
                <h2 class="profile_details_title">Profile Details</h2>
                <div>
                    <p>First Name:</p>
                    <input value="<?php $profileManager->GetFirstName() ?>" name="firstname">
                </div>
                <div>
                    <p>Last Name:</p> 
                    <input value="<?php $profileManager->GetLastName() ?> " name="lastname">
                </div>
                <div>
                    <p>Email:</p>
                    <input value="<?php $profileManager->GetEmail() ?> " name="email">
                </div>
                <div>
                    <p>Date of Birth:</p>
                    <input value="<?php $profileManager->GetDob() ?>" name="dob">
                </div>
                <div>
                    <p>Phone Number:</p>
                    <input value="<?php $profileManager->GetPhone() ?>" name="phone">
                </div>
                <div>
                    <p>BSN:</p>
                    <input value="<?php $profileManager->GetBsn() ?>" name="bsn">
                </div>
                <div>
                    <p>City:</p> 
                    <input value="<?php $profileManager->GetCity() ?>" name="city">
                </div>
                <div>
                    <p>Street:</p>
                    <input value="<?php $profileManager->GetStreet() ?>" name="street">
                </div>
                <div>
                    <p>House Number:</p>
                    <input value="<?php $profileManager->GetHouse() ?>" name="house">
                </div>
                <button type="submit" class="profile_edit_button"> Edit Profile Details

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
        </div>
    </form>

        <?php include "shared/footer.html" ?>
</body>

</html>