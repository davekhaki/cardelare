<?php include "shared/header.php" ?>

<body class="login-body">

    <?php
    $currentPage = "You are not logged in";
    include "shared/nav.php"
    ?>

    <div class=login-container>
        <h1>Login</h1>
        <form action="../Logic/loginLogic.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password">
            </div>
            <div>
                <input type="submit" class="login-btn" value="Log In">
            </div>
        </form>

        <p>Don't have an account yet?</p>
        <a href="register.php"> Create one now</a>
    </div>
</body>