<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="main.css">
        <title>Document</title>

    </head>
    <body>
        <div>
            <?php
                require_once "../partials/navbar.php";
            ?>
            <div class="row custom-portal pb-3">
                <div class="col-md-8 text-uppercase text-center mx-auto"><h1>Welcome back</h1></div>
                
                
                    <form action="process/admin_login_process.php" method="post">
                        <div class="col-md-6 mx-auto">
                            <label for="email">Username</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        
                        <div class="col-md-6 mx-auto">
                            <label for="pass" class="form-label">Password</label>
                            <input type="password" name="password" id="pass" class="form-control" place-holder="">
                        </div>
                        
                        <div class="text-center pt-2">
                            <button class="btn btn-success login" name='btn_login'>Log In</button>
                        </div>
                    </form>
                
            </div>
            

            <?php 
                require_once "../partials/footer.php";
            ?>

        </div>

        <script src="bootstrap/js/bootstrap.bundle.js"></script>
        
    </body>
</html>