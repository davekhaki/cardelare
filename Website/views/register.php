<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../styles.css'>
</head>

<body>

    <?php
    $currentPage = "Create an account";
    include "shared/nav.php";
    ?>

    <form action="idk">
        <div class="register_container">
            <h1>Register</h1>

            <input type="text" class="register_input" placeholder="Email" name="email" required>

            <input type="password" class="register_input" placeholder="Password" name="pass" required>

            <input type="password" class="register_input" placeholder="Repeat Password" name="pass_repeat" required>

            <div class="register_terms">
                <input type="checkbox" id="terms_condition" name="terms_condition">
                <label for="terms_condition">By creating an account you agree to our Terms & Conditions.</label>
            </div>

            <div class="register_button">
                <button type="submit">Register</button>
            </div>


        </div>
    </form>


</body>