<?php
    require_once "Db.php";

    class AdminLogin extends Db
    {
        private $dbconn;


        public function __construct(){
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
    }





?>