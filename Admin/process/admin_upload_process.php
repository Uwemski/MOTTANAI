<?php
    session_start();

    if(isset($_POST["add_pro"])){
        require_once "../classes/Sanitize.php";
        require_once "../classes/AddProduct.php";

        $wtype = $_POST["waste_type_name"];
        $points = sanitize($_POST["points"]);
        $pp = sanitize($_POST["price_point"]);
        
      
        if(empty($wtype) || empty($points) || empty($pp)){
            $_SESSION["errormsg"] = "Please insert all fields";
            header("location: ../ad_products.php");
            exit();
        }else{
            $a = new AddProduct;
            $ap = $a->add_product($wtype, $points, $pp);
            $_SESSION['feedback'] = "Product updated successfully";
            header("location: ../ad_products.php");
            exit;
        }
       
        
        
        //

    }else{
        $_SESSION['errormsg']= "Please follow due process";
        header("location: ../ad_products.php");
        exit;
    }
?>