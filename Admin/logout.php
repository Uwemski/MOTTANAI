<?php
    session_start();

    if(isset($_SESSION['Admin_id'])){
        session_destroy();

        header("location: admin.php");
        exit;
    }else{
        header('Location: admin.php');
    }





?>