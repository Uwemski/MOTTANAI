<?php

    if((!isset($_SESSION['cust_id']))){ 
       $_SESSION['userguard'] = "Afa relax. Only logged in Users can view dashboard.";
        header("location: portal.php");
        exit();
    }




?>