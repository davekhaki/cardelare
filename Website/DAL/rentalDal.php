<?php
require_once('dbConnection.php');
require_once "../DAL/DTO/UserDto.php";
class RentalDal{
    private dbConnection $con;

    public function __construct()
    {
        $this->con = new dbConnection();
    }

    public function GetAllRentalsForUser($username){
        $sql = "SELECT * FROM user u INNER JOIN rentals r on r.user_id = u.id INNER JOIN login l on l.id = u.id WHERE l.username = :username";

        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':username', $username);

        $result = $stmt->fetchAll();
      
        return $result;
    }
}