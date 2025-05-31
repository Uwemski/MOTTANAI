<?php
    session_start();
    // check if the form is submitted
    if(isset($_POST['btn_req'])){
        require_once "../classes/Sanitize.php";
        require_once "../classes/InsertWaste.php";

        // retrieve the form values: dept and complaint content
        $wtype= $_POST['pro_id'];
        $wdesc= sanitize($_POST['wastedesc']);
        $wlocation = $_POST['location'];
        $mass= sanitize($_POST['mass']);
        $picknote = sanitize($_POST['picknote']);
        // retrieve the id of the user from inside session
        $cust_id = $_SESSION['cust_id'];
        
        // print_r($_POST);
        //val;idate here
        if(empty($wdesc) || empty($mass) || empty($picknote)){
            $_SESSION['error_msg'] = "Please fill in all  fields";
            header("location: custom_waste.php");
            exit;
        }
        //instantiate the class
        //call the method
        $w = new Insert;
        $w1 = $w->insert_waste($wtype, $wdesc, $wlocation, $mass, $picknote, $cust_id);
        if($w1){
            //if there is response, redirect them back to dashbopard with success message
            $_SESSION['waste_added_success'] = "Thank you for recycling and saving our evironment, Staff will get in touch with you!";
            header("location: ../custom_waste.php");
            exit;
        }

    }else {
        $_SESSION['errormsg'];
        header("location: ../custom_waste.php");
        exit;
    }
    
    
    
    
    
    






?>