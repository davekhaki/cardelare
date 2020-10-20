<?php 
class User{
    private $username;
    private $password;

    public function __construct($name, $pass)
    {
        $this->username = $name;
        $this->password = $pass;
    }

    public function getUsername(){
        return $this->username;
    }
}

?>