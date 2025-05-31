<?php

require_once "DB.php";


class Register extends Db 
{
    private $dbconn;

    public function __construct(){
        $this->dbconn= $this->connect();
    }

    public function register($firstname, $lastname, $email, $pass){
        $hashed = password_hash($pass, PASSWORD_DEFAULT);
        //sql
        $sql = "INSERT INTO customer(cust_firstname, cust_lastname, cust_email, cust_password) VALUES(?,?,?,?)";
        //prepare
        $stmt = $this->dbconn->prepare($sql);
        //execute
        $stmt->execute([$firstname,$lastname, $email, $hashed]);
        $data = $this->dbconn->lastInsertId();
        return $data;
    }

}





?>