<?php
    require_once "Db.php";

    class ViewWaste extends Db
    {
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }

        //admin to view waste added
        public function view_wastes(){
            //sql
            $sql = "SELECT * FROM waste JOIN customer ON waste.cust_id = customer.cust_id";
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return($data);
        }
    }

    $obj = new ViewWaste;
    $obj1 = $obj ->view_wastes();

    // echo "<pre>";
    //     print_r($obj1);
    // echo "</pre>";

?>