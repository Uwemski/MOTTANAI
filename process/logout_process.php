<?php
   session_start();

   if(isset($_POST['btn_logout'])){
        session_destroy();

        header("Location: ../portal.php");
        exit;
    }


?>