<?php
    session_start();

    require_once "../../classes/Customer.php";


    if(isset($_POST["submit"])){
        $cust_id = isset($_POST['cust_id']) ? intval($_POST['cust_id']) : null;

        print_r($_POST);
        $d = new Customer;

        $de = $d->deactivateCustomer($cust_id);

        header("location: ../customers.php");
        exit;
    }
?>