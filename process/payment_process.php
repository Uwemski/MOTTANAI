<?php
session_start();
    if(isset($_POST['btn_pay'])){
        require_once "../classes/Payment.php";
        //retrieve the amount and other details
        $name = $_POST['cust_name'];
        $cid =  $_POST['cust_id'];
        $amount =$_POST['amount'];
        $acc = $_POST['acc_number'];
        $bank_code = $_POST['bank_code'];

        // echo $acc;
        // exit;
        // echo "<pre>";
        //     print_r($_POST);
        // echo "</pre>";

        $ref = time().rand();
        $pay = new Payment;

        $recipientcode = $pay->paystack_step_one($amount, $acc, $name, $bank_code, $ref);
        // error_log("Recipient Code Response: " . json_encode($recipientcode));

        // echo "<pre>";
        //     echo $recipientcode;
        // echo "</pre>";
        // exit;

       
       
        if($recipientcode){
            $transfersuccess= $pay->initiate_transfer($recipientcode, $amount, $ref);
            // echo "<pre>";
            //     echo $transfersuccess;
            // echo "</pre>";
            // exit;
            if ($transfersuccess) {
                $_SESSION['successful'] = "Payment successful! Ref: $ref";
                
                echo $_SESSION['successful'];
                header("location: ../Admin/pay.php");
                exit;
            } else {
                $_SESSION['paymentfeedback'] = "Payment failed! Please contact support with Ref: $ref.";
               
                echo $_SESSION['paymentfeedback'];
                // header("location: ../pay.php");
                // exit;
            }
        }else{
            $error = error_get_last();
            error_log("Recipient creation error: " . json_encode($error));
            
            // $_SESSION['paymentfeedback']  = "Error creating recipient. Please contact support with Ref: $ref. ";
            header("location: ../Admin/pay.php");
            // exit;
        }

    }else{
        header("location: ../Admin/pay.php"); exit;
    }




?>