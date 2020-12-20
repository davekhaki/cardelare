<?php
require_once('dbConnection.php');
require_once "../DAL/DTO/UserDto.php";
class RentalDal
{
    private dbConnection $con;

    public function __construct()
    {
        $this->con = new dbConnection();
    }

    public function GetAllRentalsForUser($username)
    {
        $sql = "SELECT * FROM user u INNER JOIN rentals r on r.user_id = u.id INNER JOIN login l on l.id = u.id WHERE l.username = :username";

        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':username', $username);

        $result = $stmt->fetchAll();

        return $result;
    }

    public function AddRental($carid, $userid, $startcity, $endcity, $rentdate, $returndate, $cost)
    {
        $sql = " INSERT INTO rentals (car_id, user_id, start_city, end_city, rent_date, return_date, cost) 
                    VALUES (:carid, :userid, :startcity, :endcity, :rentdate, :returndate, :cost);";

        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':carid', $carid);
        $stmt->bindValue(':userid', $userid);
        $stmt->bindValue(':startcity', $startcity);
        $stmt->bindValue(':endcity', $endcity);
        $stmt->bindValue(':rentdate', $rentdate);
        $stmt->bindValue(':returndate', $returndate);
        $stmt->bindValue(':cost', $cost);

        $stmt->execute();

    }
}
