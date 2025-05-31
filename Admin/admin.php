<?php
    session_start();
    require_once "classes/AdminLogin.php";
    require_once "adminguard.php";

    print_r($_SESSION);

?>

<?php
    require_once "../partials/header.php";

?>
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
          require_once "../partials/navbar.php";
        
        ?>

        <div class="row">
            <?php
                @include_once "../partials/menu.php";
            ?>
        </div>
    </div>
</body>
</html>