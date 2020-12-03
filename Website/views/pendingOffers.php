<?php
    include "shared/header.php";

    if (isset($_SESSION['role']) && $_SESSION['role'] != "admin")
    {
        header('Location: ../Logic/logout.php');
    }
?>

<body>
    
    <?php 
        $currentPage = "Pending Offers";
        include "shared/adminNav.php"; 
    ?>


</body>
