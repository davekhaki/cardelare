<?php 
include('dbConfig.php');

class dbConnection{
    private string $host = DBHOST;
    private string $user = DBUSER;
    private string $pwd = DBPWD;
    private string $name = DBNAME;

    public function connect() {
        $dsn = 'mysql:host=' . $this->host .';dbname=' . $this->name;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
  
        $pdo-> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, pDO::FETCH_ASSOC);

        return $pdo;
    }

    
}