<?php 

      include "shared/header.php";
      
      if (isset($_SESSION['role']) && $_SESSION['role'] != "admin")
      {
          header('Location: ../Logic/logout.php');
      }
?>

<body>
    
    <?php 
            $currentPage = "Overview";
            include "shared/adminNav.php"; 
    ?>

<div class="grid-container">
            <div class="grid-item">Cars Owned:</div>
            <div class="grid-item">Cars Rented:</div>
            <div class="grid-item">Pending Offers:</div>
            <div class="grid-item">Registered Users:</div>
    </div>

</body>