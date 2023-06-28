<?php

//
class Database{

    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function connect(){
        try {
            //code...
            $connection = "mysql:host=".$this->host.";dbname=".$this->db.";charset=".$this->charset;

            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($connection, $this->user, $this->password, $option);

            return $pdo;
        } catch (PDOException $th) {
            //throw $th;
            echo "Fail conecct: ".$th->getMessage();
        }
    }

}

// define('HOST','sql863.main-hosting.eu');
// define('DB', 'u484426513_apireact');
// define('USER', 'u484426513_apireact');
// define('PASSWORD', 'i:![VW:3S#');
// define('CHARSET', 'utf8mb4');

// //Url del proyecto web
// define('URL', 'http://localhost/2023%20UCR/mvc_proyecto/');



?>