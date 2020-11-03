<?php include "shared/header.php" ?>

<body>

    <?php
    $currentPage = "Create an account";
    include "shared/nav.php";
    ?>

<<<<<<< HEAD
    <form action="idk" class="register_form">
        <div class="register_container">
            <h1>Register</h1>

            <input type="text" class="register_input" placeholder="Email" name="email" required>

            <input type="password" class="register_input" placeholder="Password" name="pass" required>

            <input type="password" class="register_input" placeholder="Repeat Password" name="pass_repeat" required>

            <div class="register_terms">
                <input type="checkbox" id="terms_condition" name="terms_condition">
                <label for="terms_condition">By creating an account you agree to our Terms & Conditions.</label>
=======
    <div class="register_container">
        <h1>Register</h1>
        <form action="../Logic/registerLogic.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username">
>>>>>>> david
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" name="passwordRepeat" placeholder="Repeat Password">
            </div>
            <div>
                <input type="submit" value="Register">
            </div>
        </form>
    </div>
</body>