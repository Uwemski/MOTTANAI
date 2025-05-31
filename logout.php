<?php
    session_start();
    if(isset($_SESSION['cust_id'])){

        session_destroy();

        header("Location: portal.php");
        exit;
    }else{
        header("Location: portal.php");
    }
    


?>