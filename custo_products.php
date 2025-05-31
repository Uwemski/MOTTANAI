<?php
    session_start();
    require_once "classes/Customer.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dash.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">

   
    <!-- <div class="container"> -->
        <!-- <div class="row">
            <div class="col-md-3 mt-4 mb-3"><a href="products.php" class=>View products</a></div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3"><a href="customers.php">View Customers</a></div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3"><a href="waste.php">View Wastes</a></div>
        </div> -->
        <?php
            require_once "partials/login_navbar.php";
        ?>
       
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;height: 100vh;">
                    <ul class="nav nav-pills flex-column mb-auto">
                        <li class="nav-item">
                            <a href="profile.php" class="nav-link active" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#waste"></use></svg>
                            My Profile
                            </a>
                        </li>
                        <li>
                        <a href="logout.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                            Log out
                            </a>
                        </li>
                        <li>
                            <a href="dispose_waste.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            Dispose waste
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            View History
                            </a>
                        </li>
                        <li>
                            <a href="custom_history.php" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                            View History
                            </a>
                        </li>
                    
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <h2>Profile</h2>
                <form action="">
                <div class="mb-3">
                    <label for="">Account number</label>
                    <input type="text" name="account_no" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Bank</label>
                    <select name="banks" id=""> ;</select>
                </div>
                <div class="mb-3"></div>
                <div class="mb-3"></div>
            </div>
            









            </form>
        </div>


    <?php
        require_once "partials/footer.php";
    ?>

    </div>
</body>
</html>