<?php
    //session_start();
    
    if(!isset($_SESSION['Admin_id'])){ 
       $_SESSION['adminguard'] = "Afa relax. What is not the case?";
        header("location: admin_login.php");
        exit;
    }

?>