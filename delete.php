<?php
session_start();
   require_once "classes/Customer.php";

   $ob = new Customer ;
    $custid = isset($_GET["id"]) ? $_GET["id"]: 0;
    
    // the same things as line but line 5 saves you space and looks more efficient
    // if(isset($_GET['id'])){
    //     $custid = $_GET['id'];
    // }else{
    //     $custid = 0;
    // }

    $ob1 = $ob->delete_customer($custid);
    header("location: customers.php");
    
?>