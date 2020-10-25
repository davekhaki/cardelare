<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='../styles.css'>
</head>

<body>

    <?php include "shared/nav.html" ?>

    <form action="idk">
        <div class="register_container">
            <h1>Sign Up</h1>

            <input type="text" class="register_input" placeholder="Email" name="email" required>

            <input type="password" class="register_input" placeholder="Password" name="pass" required>

            <input type="password" class="register_input" placeholder="Repeat Password" name="pass_repeat" required>

            <p>By creating an account you agree to our Terms & Conditions.</p>

            <button type="submit" class="signupbtn">Sign Up</button>

        </div>
    </form>


</body>