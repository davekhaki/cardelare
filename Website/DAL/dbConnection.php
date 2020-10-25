<?php 
include('dbConfig.php');

class dbConnection{
    private $host = DBHOST;
    private $user = DBUSER;
    private $pwd = DBPWD;
    private $name = DBNAME;

    public function connect() {
        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->name;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
  
        $pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, pDO::FETCH_ASSOC);

        return $pdo;
    }
}