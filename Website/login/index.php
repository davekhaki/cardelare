<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href='/Website/styles.css'>
</head>
<body>

<?php include($_SERVER['DOCUMENT_ROOT'].'/Website/nav.html') ?>

<div class=login-container>
        <h1>Login</h1>
                <form action="login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="login-btn" value="submit">
                    </div>
                </form>

            <p>Don't have an account yet?</p><a> Sign up </a>
    </div>
 

</body>