<?php 

require_once('dbConnection.php');
require_once $_SERVER['DOCUMENT_ROOT'].'/wad_cardealer/Website/DataAccessLogic/DataTransferObjects/UserDto.php';

class userDal {
    private dbConnection $con;

    public function __construct()
    {
        $this->con = new dbConnection();
    }

    public function getUserById($id){
        $sql = "SELECT * FROM user WHERE id = $id";
    
        $stmt = $this->con->connect()->query($sql);

        $result = $stmt->fetchAll();

        return $result;

    }
}