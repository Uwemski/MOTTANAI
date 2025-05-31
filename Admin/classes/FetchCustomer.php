<?php

require_once "Db.php";

class FetchCustomer extends Db
{
    private $dbconn;


    public function __construct(){
        $this->dbconn = $this->connect();
    }


     //method to fetch all customers
     public function fetch_customers(){
        //sql
        $sql = "SELECT * FROM customer";
        //prepare
        $stmt = $this->dbconn->prepare($sql);
        //execute
        $stmt->execute();
        //fetch
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }


}

?>




