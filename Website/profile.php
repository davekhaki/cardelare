<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='styles.css'>
</head>

<body>
    <?php include "nav.html" ?>

    <form action="GetProfile.php" method="POST">
        <label for="moment">Enter ID: </label>
        <input id="truly" name="yeah" type="text" />
        <br /><br />
        <label for="name">Your name: </label>
        <input id="name" name="name" type="readonly" />
        <br /><br />
        <button type="submit">Submit</button>
    </form>


</body>


</html>