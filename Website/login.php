<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href='styles.css'>
</head>


<body class="login-body">

<?php include "nav.html" ?>

<div class=login-container>
        <h1>Login</h1>
                <form action="login/test.php" method="post">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div>
                        <input type="submit" class="login-btn" value="Log In">
                    </div>
                </form>

            <p>Don't have an account yet?</p>
            <a href = "moment"> Sign up </a>
    </div>

</body>