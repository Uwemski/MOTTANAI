<?php
    session_start();


    if(isset($_POST['btn_sign'])){
        
        require_once "../classes/Register.php";
        require_once "../classes/Sanitize.php";

        $fn = sanitize($_POST['firstname']);
        $ln = sanitize($_POST['lastname']);
        $em = sanitize($_POST['email']);
        $pass = sanitize($_POST['password']);
        $confirmpass = sanitize($_POST['confirmpass']);

        if(empty($fn) || empty($ln) || empty($em) || empty($pass)){
            $_SESSION['errormsg'] = "All fields are required";
            header("Location:../sign.php");
        }elseif($pass != $confirmpass){
            $_SESSION['errormsg'] = "Passwords do not match";
            header("Location:../sign.php");
            exit();
        }else{
            
            $_SESSION['username'] = "$fn" . "$ln"; 
            $ob = new Register;
            $res = $ob->register($fn,$ln,$em,$pass);

            header("Location: ../portal.php");

        }
        
        


        
        

    }else{
        header("location: sign.php");
        exit;
    }





?>