<?php
   
   require_once "Db.php";  

   class Customer extends Db
   {
        private $dbconn;

        function __construct(){
            $this->dbconn = $this->connect();
        }

        public function admin_login($email, $password){
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            //sql
            $sql = "SELECT * FROM administrator WHERE Admin_email =? LIMIT 1";
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $stmt->execute([$email]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            //print_r($res); //debug
            $data = $this->dbconn->lastInsertId();
            // return $data;

            
                $checked = password_verify($password, $hashed);

                //echo($checked);
            
                if($checked){
                    return $res['Admin_id']; //I used a return here it wasn't returning anything(reason for using echo)
                }else {
                    $_SESSION['errormsg'] = "Incorrect password";
                    return false;
                }
            
        }

        public function login($email, $password){
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            //sql
            $sql = "SELECT * FROM customer WHERE cust_email =? LIMIT 1";
            //prepare
            $stmt =  $this->dbconn->prepare($sql);
            //execute
            $stmt->execute([$email]);
            $res = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($res){
                $checked = password_verify($password, $hashed);

                if($checked){
                    return $res['cust_id'];
                }else {
                    $_SESSION['errormsg'] = "Incorrect password";
                    return false;
                }
            }else{
                $_SESSION['errormsg'] = "Incorrect Detail";
                exit();
            }
            //print_r($res);
        }

        // public function register($firstname, $lastname, $email, $pass){
        //     $hashed = password_hash($pass, PASSWORD_DEFAULT);
        //     //sql
        //     $sql = "INSERT INTO customer(cust_firstname, cust_lastname, cust_email, cust_password) VALUES(?,?,?,?)";
        //     //prepare
        //     $stmt = $this->dbconn->prepare($sql);
        //     //execute
        //     $stmt->execute([$firstname,$lastname, $email, $hashed]);
        //     $data = $this->dbconn->lastInsertId();
        //     return $data;
        // }

        //a method to fetch customers by ID
        public function fetch_customer_byId($id){
            //sql 
            $sql = "SELECT * FROM customer WHERE cust_id=?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            //fetch
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data; //Always note that a function should report something
        }


        // //method to fetch all customers
        // public function fetch_customers(){
        //     //sql
        //     $sql = "SELECT * FROM customer";
        //     //prepare
        //     $stmt = $this->dbconn->prepare($sql);
        //     //execute
        //     $stmt->execute();
        //     //fetch
        //     $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //     return $data;
        // }

        //method to delte_customer
        public function deactivateCustomer($id){
            //sql
            $sql = "DELETE FROM customer WHERE cust_id=?";
            //preapre and execute
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            
        }


        //admin to view waste added
        public function view_wastes(){
            //sql
            $sql = "SELECT * FROM waste";
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return($data);
        }

        // //admin to add product
        // public function add_product($name, $points, $pricepoints){
            
        //     $sql =  "INSERT INTO product(pro_name, pro_pointsperkg,pro_priceperpoints) VALUES(?,?,?)";
        //     $stmt = $this->dbconn->prepare($sql);
        //     $res = $stmt->execute([$name, $points, $pricepoints]);
        //     //return $this->dbconn->lastInsertId();
        //     return $res;
        // }

        //admin to view all product
        public function view_product(){
            //sql
            $sql = "SELECT * FROM product";
            //prepare
            $stmt= $this->dbconn->prepare($sql);
            //execute
            $stmt->execute();
            //fetch
            $data= $stmt->fetchAll(PDO::FETCH_ASSOC);
            return($data);
        }

        //admin to delete product by id
        public function delete_product($id){
            //sql
            $sql = "DELETE FROM product WHERE pro_id= ?";
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $stmt->execute([$id]);
            //FETCH: THI IS VERY IMPORTANT
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //return            
            return $res;

        }

        //admin to verify waste
        public function verify_waste($status, $id){
            //sql
            $sql =  "UPDATE waste SET waste_status= ? WHERE waste_id= ? ";
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            //execute
            $stmt->execute([$status,$id]);

            // Step 2: Only calculate points if status is 'ACCEPTED'
            if ($status == "ACCEPTED") {
                // Fetch the waste details (weight + product points per kg)
                $sql = "SELECT waste.cust_id, waste.waste_weight, product.pro_pointsperkg 
                        FROM waste
                        JOIN product ON waste.pro_id = product.pro_id 
                        WHERE waste.waste_id = ?";
                $stmt = $this->dbconn->prepare($sql);
                $stmt->execute([$id]);
                $waste = $stmt->fetch(PDO::FETCH_ASSOC);

                //var_dump($waste);

                if ($waste) {
                    // Step 3: Calculate points earned
                    $points_earned = $waste['waste_weight'] * $waste['pro_pointsperkg'] * $waste['pro_priceperpoints'];
                    //var_dump($points_earned);

                    // Step 4: Store points in the waste table
                    $sql = "UPDATE waste SET points_earned = ? WHERE waste_id = ?";
                    $stmt = $this->dbconn->prepare($sql);
                    $stmt->execute([$points_earned, $id]);
                }
            }

            return $stmt;
        }
        //admin to fetch all wastes which are verified for payment
        //there is  bug in this code: BUG FIXED
        public function fetch_verified_waste(){
            //sql
            $sql = "SELECT * FROM waste JOIN product ON waste.pro_id = product.pro_id JOIN customer ON customer.cust_id= waste.cust_id WHERE waste_status = 'ACCEPTED' "; 
            //prepare
            $stmt = $this->dbconn->prepare($sql);
            $stmt ->execute();
            $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
   }

// working 
    // $d = new Customer;
    // $de = $d->fetch_verified_waste();
   
    // echo "<pre>";
    //     print_r($de);
    // echo "</pre>";
?>