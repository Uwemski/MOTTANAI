<?php
session_start();
require_once "../classes/AdminLogin.php";
require_once "../classes/Sanitize.php";


if(isset($_POST['btn_login'])){
    
    $em = sanitize($_POST['email']);
    $pass = $_POST['password'];

   
    //print_r($_POST);
    if(empty($em) || empty($pass)){
        $_SESSION['login_error'] = "All fields are required";
        header("location: ../admin_login.php");
        exit;
    }

    $a = new AdminLogin;
    $admin = $a->admin_login($em, $pass);
        // echo "<pre>";
        //     print_r($admin);
        // echo "</pre>";
    if($admin){
        $_SESSION['Admin_id'] = $admin;
        header("location:../admin.php");
        exit;
    }else{
        $_SESSION['invalid'] = "User not recognized!!";
        header("location:../admin_login.php");
        exit();
    }

        
    

    // print_r($uwem);
    

}else {
    echo "Relax oo";
    header("location: ../portal.php");
}






?>