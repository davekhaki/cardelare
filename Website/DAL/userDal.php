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

    public function addNewUser($username, $password){
        //start and finish a transaction to add a new user into the user table and add their login details to the login table
        $sql = "BEGIN; 
                INSERT INTO user (id, firstname, lastname, email, phone, dob, address) 
                    VALUES (NULL, '','','','','','');
                INSERT INTO login (id, username, password, role)
                    VALUES(LAST_INSERT_ID(), :username, :password, 'user');
                COMMIT;";
        $stmt = $this->con->connect()->prepare($sql);

        $stmt->bindValue(':username', $username);
        $stmt->bindValue(':password', $password);

        $stmt->execute();

        return $stmt;

    }

    public function GetAmountOfUsers()
    {
        $sql = "SELECT COUNT(id) AS amt FROM user";

        $stmt = $this->con->connect()->query($sql);

        $result = $stmt->fetchAll();
      
        return reset($result);
    }

    public function GetProfileDetails($username){
        $sql = "SELECT * FROM user u INNER JOIN login l on u.id = l.id WHERE username = :username";

        $stmt = $this->con->connect()->prepare($sql);
        $stmt->bindValue(':username', $username);
        $stmt->execute();
        $details = $stmt->fetch(); 

        return $details;
    }
}
