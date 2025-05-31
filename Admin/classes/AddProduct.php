<?php
    require_once "Db.php";

    class AddProduct extends DB
    {
        private $dbconn;


        public function __construct(){
            $this->dbconn = $this->connect();
        }

        //admin to add product
        public function add_product($name, $points, $pricepoints){
            
            $sql =  "INSERT INTO product(pro_name, pro_pointsperkg,pro_priceperpoints) VALUES(?,?,?)";
            $stmt = $this->dbconn->prepare($sql);
            $res = $stmt->execute([$name, $points, $pricepoints]);
            //return $this->dbconn->lastInsertId();
            return $res;
        }
    }
?>