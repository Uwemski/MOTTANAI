<?php

    require_once "Db.php";

    class Insert extends Db
    {
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }


        public function insert_waste($wastetype, $wastedesc, $location, $mass, $picknote, $cust_id){
            //sql
            $sql = "INSERT INTO waste (pro_id, waste_description, pickup_location, waste_weight, pickup_note, cust_id) VALUES(?,?,?,?,?, ?)";
            //prepare
            $stmt= $this->dbconn->prepare($sql);
            //execute
            $res= $stmt->execute([$wastetype, $wastedesc, $location, $mass, $picknote, $cust_id]);
            return $res;
        }
    }



?>