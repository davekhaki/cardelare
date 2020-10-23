<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../styles.css'>
</head>

<body class="profile_body">
    <?php include "shared/nav.html" ?>

    <div class="profile_tab_content">
        <div class=profile_details>
            <div><p>First Name:</p><input type="text" value="Lebron"></div>
            <div><p>Last Name:</p><input type="text" value="James"></div>
            <div><p>Email:</p><input type="text" value="lebron.james@email.com"></div>
            <div><p>Date of Birth:</p><input type="text" value=" 27/09/1970"></div>
            <div><p>Phone Number:</p><input type="text" value=" 612356782"></div>
            <div><p>BSN:</p><input type="text" value="123456789"></div>  
            <div><p>City:</p><input type="text" value="Tilburg"></div>  
            <div><p>Street:</p><input type="text" value="Biggekerkestraat"></div>  
            <div><p>House Number:</p><input type="text" value="19"></div>  
            <input type="button" value="Edit Profile" class="profile_edit">
        </div>
        <div class="profile_rent_history">
            <div class= "profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
            <div class= "profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
            <div class= "profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
            <div class= "profile_rent_history_divs">
                <?php include "rentHistory.php" ?>
            </div>
        </div>


    </div>

</body>


</html>