<?php
session_start();
require_once "Db.php";

class ViewHistory extends Db
{
    private $dbconn;

    public function __construct(){
        $this->dbconn= $this->connect();
    }

    public function view_wastes_byId($id){
        //sql
        $sql= "SELECT * FROM waste JOIN product ON waste.pro_id= product.pro_id JOIN customer ON customer.cust_id= waste.cust_id WHERE waste.cust_id=?";
        //prepare
        $stmt= $this->dbconn->prepare($sql);
        //execute
        $stmt->execute([$id]);
        //fetch
        $data= $stmt->fetchAll(PDO::FETCH_ASSOC); 
        return $data;
    }
}

//testing: working like Bukayo Saka my boy!!
// $obj= new ViewHistory;

// $var1= $obj->view_wastes_byId('38');

// echo "<pre>";
//     print_r($var1);
// echo"</pre>";








?>