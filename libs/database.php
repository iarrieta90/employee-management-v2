<?php

class Database {

    private $host;
    private $user;
    private $password;
    private $db;


    function __construct()
    {
        $this->host = constant('HOST');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->db = constant('DB');
    }

    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);
            return $pdo;

        }catch(PDOException $error){
            print_r('Connection error: ' . $error->getMessage());
        }
    }

}


?>