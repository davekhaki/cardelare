<?php
      session_start();

      require "../DAL/userDal.php";

      
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $username = $_POST['username'];
            $passwordAttempt = $_POST['password'];
      
            $moment = new userDAl();

            $user = $moment->getUserByUsername($username, $passwordAttempt);      

            if ($user === false) {
                  header('Location: ../views/login.php');
            } 
            else {
                  if($user["role"] == "admin"){
                        $_SESSION['username'] = $username;
                        $_SESSION['id'] = $user["id"];
                        $_SESSION['role'] = $user["role"];
                        header('Location: ../views/adminOverview.php');
                  }
                  else{
                        $_SESSION['username'] = $username;
                        $_SESSION['id'] = $user["id"];
                        $_SESSION['role'] = $user["role"];
                        header('Location: ../views/profile.php');                      
                  }
            }

      }



      

      
