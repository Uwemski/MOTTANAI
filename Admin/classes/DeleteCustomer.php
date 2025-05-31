<?php
    require_once "Db.php";

    class DeleteCustomer extends Db
    {
        private $dbconn;


        public function __construct(){
            $this->dbconn = $this->connect();
        }

        //method to delete customer
        public function delete_customer($id){
        //sql
        $sql = "DELETE FROM customer WHERE cust_id=?";
        //preapre and execute
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute([$id]);
        $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $record;
    }


}
?>