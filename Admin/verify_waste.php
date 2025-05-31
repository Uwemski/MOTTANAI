<?php
    session_start();
    require_once "../classes/Customer.php";
    require_once "../adminguard.php";

    if(isset($_POST['btn_verify'])){
        $status = $_POST['status'];
        $id = $_POST['waste_id'];
        
        //print_r($_POST); //working to this point
        $v = new Customer;
        
        $ver = $v->verify_waste($status, $id);
        if($ver){
            $_SESSION['successful'] = "Status updated successfully :)";
        }else{
            $_SESSION['error'] = "Encountered erro while setting staus:( " ;
        }
        header("location: waste.php");
        
    }

?>