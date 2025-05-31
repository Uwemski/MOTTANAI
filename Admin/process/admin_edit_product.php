<?php
    session_start();
    require_once "../classes/EditProduct.php";
    require_once "../classes/Sanitize.php";

    if(isset($_POST['btn_edit'])) {
        //validate and pick values
        
        // echo "<pre>";
        //     print_r($_POST);
        // echo "</pre>"
        
        
        $points= sanitize($_POST['points']);
        $ppp= sanitize($_POST['priceperpoint']);
        $pro_id= $_POST['pro_name'];
        print_r($_SESSION);
        
        $obj= new EditProduct;
        $var= $obj->edit_product($ppp, $points, $pro_id);

        header("Location: ../view_product.php");
        exit;
    }else{
        header("Location: ../edit_product.php");
        exit();
    }




?>