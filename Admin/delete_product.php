<?php
    require_once "../classes/Customer.php";

    //first step: initialize
    $d = new Customer;


    $proid = isset($_GET['id']) ? $_GET['id']: 0;
    
    $del =  $d->delete_product($proid);
    //header("location: view_products.php");
    
?>