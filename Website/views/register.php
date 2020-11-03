<?php include "shared/header.php" ?>

<body>

    <?php
    $currentPage = "Create an account";
    include "shared/nav.php";
    ?>

    <div class="register_container">
        <h1>Register</h1>
        <form action="../Logic/registerLogic.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username">
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