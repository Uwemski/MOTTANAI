
<?php 
    session_start();
    if(isset($_POST['btn_update'])){
        require_once "../classes/Sanitize.php";
        require_once "../classes/Update.php";
        //sanitize and retrieve
        $fn = sanitize($_POST['firstname']);
        $ln = sanitize($_POST['lastname']);
        $acc = sanitize($_POST['account_no']);
        $phone = sanitize($_POST['phone']);
        $selected_bankcode = $_POST['bank_code'];

        // echo "<pre>";
        //     print_r($_POST);
        // echo "</pre>";
        //validate
        if(empty($fn) || empty($ln) || empty($acc) || empty($phone)){
            $_SESSION["errormsg"] = "ALL fields are required";
            header("location: ../profile.php");
            exit;
        }

        if($selected_bankcode === '0'){
            $_SESSION["errormsg"] = "ALL fields are required";
        }

        $a = new Update;
        $ab = $a->update_profile($fn, $ln, $acc, $phone, $selected_bankcode, $_SESSION['cust_id']);
        if($ab){
            $_SESSION["success"] = "Profile updated successfully";
            header("location:../profile.php");
            exit();
        }else{
            $_SESSION["error"] = "Erro updating profile. If problem persist, please contact our staff(DON'T SHARE IMPORTANT DETAILS)";
            header("location: ../profile.php");
            exit();
        }

    }else{
        header("location: ../profile.php");
        die();
    }

?>