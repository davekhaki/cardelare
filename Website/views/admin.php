<?php
      session_start();
      if(isset($_SESSION['role']) && $_SESSION['role'] == "admin")
      {
            echo  $_SESSION['username'] . " = > logged in username"; ?> <br> <?php
            echo " Currently in admin account";
      }
      else
      {
            header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstleyVEVO");
      }

