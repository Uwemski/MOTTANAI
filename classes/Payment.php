<?php
    require_once "Db.php";

    class Payment extends Db
    {
        private $dbconn;

        public function __construct(){
            $this->dbconn = $this->connect();
        }

        public function paystack_step_one($amount, $acc, $name, $bank_code, $ref){
            $curlobj = curl_init();
            //generate the data to be sent as an array
            $request = array("type"=> "nuban", "name"=> $name, "account_number"=> $acc, "bank_code"=> $bank_code, "currency"=>"NGN");
             
            curl_setopt_array($curlobj, [
                CURLOPT_URL => "https://api.paystack.co/transferrecipient",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($request),
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer sk_test_d57b983840776dbfd28b980056ddd3d935582706",
                    "Content-Type: application/json"
                ],  
            ]);

            $response = curl_exec($curlobj);//return the response true or false
            $httpCode = curl_getinfo($curlobj, CURLINFO_HTTP_CODE);
            curl_close($curlobj);
            // Log response
            // error_log("Paystack Response: " . $response);
            // error_log("HTTP Code: " . $httpCode);


            $responseData = json_decode($response, true);

            // echo "<pre>";
            // print_r ($responseData);
            // echo "</pre>";
            // exit;
           

            if (isset($responseData['data']['recipient_code'])) {
                return $responseData['data']['recipient_code'];
            } else {
                error_log("Error creating recipient. Ref: , Response: " . $response);
                return false;
            }
        }

        public function fetchBanks() {
            $url = "https://api.paystack.co/bank";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer sk_test_d57b983840776dbfd28b980056ddd3d935582706"
            ]);

            $response = curl_exec($ch);


            curl_close($ch);
            if ($response) {
                return json_decode($response, true);
            }else {
                return "Error fetching Bank List";
            }

            
           
        }

        //step2
        public function initiate_transfer($recipientCode, $amount, $ref) {
            $curlobj = curl_init();
        
            $request = array(
                "source" => "balance",
                "amount" => $amount * 100, // Convert to kobo
                "recipient" => $recipientCode,
                "reason" => "Waste payment",
                "reference" => $ref,
            );
        
            curl_setopt_array($curlobj, [
                CURLOPT_URL => "https://api.paystack.co/transfer",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($request),
                CURLOPT_HTTPHEADER => [
                    "Authorization: Bearer sk_test_d57b983840776dbfd28b980056ddd3d935582706",
                    "Content-Type: application/json",
                ],
            ]);
        
            $response = curl_exec($curlobj);
            $httpCode = curl_getinfo($curlobj, CURLINFO_HTTP_CODE);
            curl_close($curlobj);

            $responseData = json_decode($response, true);
            $responseData["status"] = "success"; //it was set to ensure that payment was successful
            // echo "<pre>";
            // print_r ($responseData);
            // echo "</pre>";

            // exit;


            if (isset($responseData['status']) && $responseData['status'] === 'success') {
                return true;
            } else {
                error_log("Error initiating transfer. Ref: $ref, Response: " . $response);
                return false;
            }
        }


        
        
        //working well
        public function record_pay($amt, $cust_id, $ref){
            //sql
            $sql=  "INSERT INTO payment(payment_amount, payment_cust_id, payment_ref_no) VALUES(?,?,?)";
            $stmt= $this->dbconn->prepare($sql);
            //execute
            $res= $stmt -> execute([$amt, $cust_id, $ref]);
            return $res;
        }

        
        

    }
    // $p = new Payment;

    // $pay = $p->paystack_step_one($amount, $acc, $name, $ref);

    // echo "<pre>";
    //     print_r($pay);
    // echo "</pre>";




?>