<?php
  session_start();
  // require_once "process/signin_process.php";

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
    <style>
        input:hover, textarea:hover {
            border:2px solid lightblue;
        }
        form{
          padding: 20px;
          border: 0px solid black;
        }
    </style>
</head>
<body>
    
        <?php
            require_once "partials/navbar.php";
        
        ?>
    <div class="container px-4 py-5" id="featured-3">
        <div class="row g-4 py-5">
            <div class="col-md-10 mx-auto col-lg-5">     
            <h2 class="text-center text-uppercase">Register</h2>
            <span>Please fill all fields</span>
       
            
        <?php
          if(isset($_SESSION['errormsg'])){
            echo "<div class='alert alert-danger>". $_SESSION['errormsg']."</div>";
            unset($_SESSION['errormsg']);
          }

          if(isset($_SESSION['feedback'])){
            echo "<div class='alert alert-success'>". $_SESSION['feedback']."</div>";
            unset($_SESSION['feedback']);
          }
        ?>

        
            <form action="process/signin_process.php" method="post" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="firstname" id="fn" placeholder="Enter your  firstname">
                        <label for="fn">First Name</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="lastname" id="ln">
                        <label for="ln">Last Name</label>
                      </div>
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email">
                    <label for="email">Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Enter your Password">
                    <label>Password</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="confirmpass" placeholder="Confirm Password">
                    <label>Confirm Password</label>
                  </div>
                  
                  <button class="w-100 btn btn-lg btn-primary" name="btn_sign" type="submit">Sign Up</button>
                  <hr class="my-4">
                  <small class="text-body-secondary">Already have an account?<a href="portal.php"> Sign In</a></small>
                </form>
        
            </div>
        </div>
    </div>
    
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <!-- <script>
        $(document).ready(function(){
            $('.btn_reg').click(function(){
                $fn = $('#fn').val();
                $ln = $('#ln').val();
                $email = $('#email').val();
                $mdg = $('textarea').val();

                if($fn.trim() === ""){
                    $('#p-w').removeClass('d-none').addClass('d-block');
                    console.log('Firstname is empty');
                    
                }
            })

        })





    </script> -->
    <!-- This is not working for some reason. Since i can use php to validate my form. No wahala-->
</body>
</html>