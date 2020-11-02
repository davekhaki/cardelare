<?php


require_once('dbConnection.php');
require_once "../DAL/DTO/UserDto.php";

class userDal
{
    private dbConnection $con;

    public function __construct()
    {
        $this->con = new dbConnection();
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE id = $id";

        $stmt = $this->con->connect()->query($sql);

        $result = $stmt->fetchAll();

        return $result;
    }

    public function getUserByUsername($username, $passwordAttempt)
    {
        $sql = "SELECT id, username, password, role FROM login WHERE username = :username AND password = :password";
        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $passwordAttempt);

        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC); 

        return $user;
    }
}
