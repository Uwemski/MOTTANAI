<?php
    require_once "Db.php";

    class EditProduct extends Db
    {
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }

        public function edit_product($pointsperkg, $price, $id){
            //sql
            $sql= "UPDATE product SET pro_pointsperkg=?, pro_priceperpoints=? WHERE pro_id=?";
            //prepare
            $stmt= $this->dbconn->prepare($sql);
            //execute
            $data= $stmt->execute([$pointsperkg, $price,$id]);
            return $data;
        }

    }

    //tested and trusted
    // $obj = new EditProduct;
    // $var = $obj->edit_product("200", "5", "6");






?>