<?php include "shared/header.php" ?>

<body>

    <?php
    $currentPage = "Create an account";
    include "shared/nav.php";
    ?>

        <div class="register_container">
        <form action="../Logic/registerLogic.php" method="post" class="register_form">
            <h1>Register</h1>
            
            <input type="text" class="register_input" placeholder="Username" name="email" required>

            <input type="password" class="register_input" placeholder="Password" name="pass" required>

            <input type="password" class="register_input" placeholder="Repeat Password" name="pass_repeat" required>

            <div class="register_terms">
                <input type="checkbox" id="terms_condition" name="terms_condition">
                <label for="terms_condition">By creating an account you agree to our Terms & Conditions.</label>
            </div>

            <div class="register_button">
                <button type="submit">Register</button>
            </div>

            <div class="register_have_account"><a href="login.php">Already have an account?</a></div>
            </form>
        </div>
    
</body>