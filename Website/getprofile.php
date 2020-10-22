<html>
<body>

<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/wad_cardealer/Website/DataAccessLogic/userDal.php';

$moment = new userDal();

?>
<h2>Your information: <?php print_r($moment->getUserById($_POST['yeah']))?> </h2>

</body>

</html>