<?php

include "shared/header.php";

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
}


?>

<body class="profile_body">

    <nav>
        <ul class="nav_ul_items">
            <li class="logo"><a href="home.php"><img src="../Images/navBar/Logo.png" alt=""></a></li>
            <li>Profile- Rent History</li>
            <li><a href="sellcar.php"><img src="../Images/navBar/Sell Car.png" alt=""></a></li>
            <li><a href="../Logic/logout.php"><img src="../Images/navBar/Exit.png" alt=""></a></li>
        </ul>
    </nav>

    <div class="profile_tab_content">

        <div class=profile_details>
            <h2 class="profile_details_title">Profile Details</h2>
            <div>
                <p>First Name:</p><input type="text" value="Lebron">
            </div>
            <div>
                <p>Last Name:</p><input type="text" value="James">
            </div>
            <div>
                <p>Email:</p><input type="text" value="lebron.james@email.com">
            </div>
            <div>
                <p>Date of Birth:</p><input type="text" value=" 27/09/1970">
            </div>
            <div>
                <p>Phone Number:</p><input type="text" value=" 612356782">
            </div>
            <div>
                <p>BSN:</p><input type="text" value="123456789">
            </div>
            <div>
                <p>City:</p><input type="text" value="Tilburg">
            </div>
            <div>
                <p>Street:</p><input type="text" value="Biggekerkestraat">
            </div>
            <div>
                <p>House Number:</p><input type="text" value="19">
            </div>
            <input type="button" value="Edit Profile Details" class="profile_edit_button">
        </div>

        <!-- <div>Last 4 Rentals</div> -->
        <div class="profile_rent_history">
            <div class="profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
            <div class="profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
            <div class="profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
            <div class="profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
        </div>

    </div>

    <?php include "shared/footer.html" ?>

</body>


</html>