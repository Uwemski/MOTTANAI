<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

  <title>Log In</title>
</head>
<body>
    
<div class="container px-4 py-5" id="featured-3">
        <div class="row g-4 py-5">
            <div class="col-md-10 mx-auto col-lg-8">
                <h2 class="pb-2 text-center mb-3">Log In Here</h2>
                <?php
                  if(isset($_SESSION['userguard'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['userguard'] ."</div>";
                    unset($_SESSION['userguard']);
                }
                if(isset($_SESSION['adminguard'])){
                    echo "<div class='alert alert-danger'>".$_SESSION['adminguard'] ."</div>";
                    unset($_SESSION['adminguard']);
                }
                

                if(isset($_SESSION['feedback']) ){
                    echo "<div class='alert alert-success col-md-6 mx-auto'>".$_SESSION["feedback"]."</div>";
                    unset($_SESSION["feedback"]);
                }
                if(isset($_SESSION['errormsg']) ){
                    echo "<div class='alert alert-success col-md-6 mx-auto'>".$_SESSION["errormsg"]."</div>";
                    unset($_SESSION["errormsg"]);
                }
                
                ?>
                <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="process/login_process.php" method="post">
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" placeholder="name@example.com" name="email">
                        <label>E-mail</label>
                      </div>
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <label>Password</label>
                  </div>
                  
                  <div class="checkbox mb-3">            
                  </div>
                  <button class="w-100 btn btn-lg btn-primary" type="submit" name="btn_login">Log In</button>
                  <hr class="my-4">
                  <small class="text-body-secondary">Don't have an account? <a href="sign.php">Sign Up</a></small>
                  <p>Admin?<a href="Admin/admin_login.php">click here</a></p>
                </form>
              </div>
        </div>
      </div>

</body>
</html>