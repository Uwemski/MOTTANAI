<?php

require_once "Db.php";

class Update extends Db {
    private $dbconn;

    public function __construct(){
        $this->dbconn= $this->connect();
    }

    public function update_profile($firstname, $lastname, $account, $phone, $selected_bankcode, $id){
        // sql
        $sql = "UPDATE customer SET cust_firstname=?, cust_lastname=?, cust_account_details=?, cust_phonenumber= ?, cust_bankcode=? WHERE cust_id=?"; //when doing update, dont ever forget the WHERE clause unless you go cry
        //prepare
        $stmt = $this->dbconn->prepare($sql);
        //execute
        $data = $stmt->execute([$firstname, $lastname, $account, $phone, $selected_bankcode, $id]);
        return $data;
    }


}

//debug report: Method working well
// $u = new Update;
// $up = $u->update_profile("Omosare","Omobagi","2004441180","09073371290", "999992", "39");



?>