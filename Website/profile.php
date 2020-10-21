<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='styles.css'>
</head>

<body>
    <?php include "nav.html" ?>

    <div class="profile_tab_content">
        <div class=profile-details>
            <p>First Name:</p>
            <p>Last Name: </p>
            <p>Email:</p>
            <p>Date of Birth:</p>    
            <p>Phone Number:</p>
            <p>Address:</p>
            <input type="button" value="Edit Profile">
        </div>
        <div>
            <?php include "rentHistory.php" ?>
        </div>

    </div>

</body>

</html>