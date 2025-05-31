<?php
session_start();

if(isset($_POST['btn_login'])){
    require_once "../classes/Customer.php";
    require_once "../classes/Sanitize.php";

    $em = sanitize($_POST['email']);
    $pass = sanitize($_POST['password']);

    $ob1 = new Customer;
    $result = $ob1->login($em, $pass);
    // print_r($result);
    if($result){
        $_SESSION['cust_id'] = $result;
       
        header("location: ../dashboard.php");
        exit();
    }else{
        $_SESSION['userguard']= "Afa relax oo";
        header("location: ../portal.php");
        exit();
    }

}else{
    $_SESSION['errormsg']= "Afa Relax oo";
    header("location: ../portal.php");
    exit();
}




?>