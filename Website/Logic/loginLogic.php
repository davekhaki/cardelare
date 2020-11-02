<?php

      require "../DAL/userDal.php";

      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_POST['username'];
            $passwordAttempt = $_POST['password'];
      
            $moment = new userDAl();

            $user = $moment->getUserByUsername($username, $passwordAttempt);      

            if ($user === false) {
                  print("yeah not facts");
                  } else {
                  if($user["role"] == "admin"){
                        header('Location: ../views/admin.php');
                  }
                  else{
                        print("yeah, yeah");
                  }
            }
      }

?>

      

      
