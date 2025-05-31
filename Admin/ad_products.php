<?php
    session_start();
    require_once "classes/AddProduct.php";
    require_once "../adminguard.php";
    // $ob = new Customer;
    // $cust = $ob->fetch_customers();

    /*echo "<pre>";
         print_r($cust);
    echo "</pre>";*/
?>

<?php
    require_once "../partials/header.php";
?>
<body>
    <div class="container-fluid">
        <?php
          @include_once "../partials/navbar.php";
        ?>
            
          </nav>

        <div class="row">
            <?php
                require_once "../partials/menu.php";
            ?>
            <div class="col-md-9">
                <h1>Products</h1>
                <?php
                    if(isset($_SESSION['feedback'])){
                        echo "<p class='alert alert-success'>". $_SESSION['feedback'] ."</p>";
                        unset($_SESSION['feedback']);
                    }
                
                
                ?>
                    
                <form action="process/admin_upload_process.php" method="post">
                    <div class="mb-3">
                        <label for="waste_type_name">Waste Type Name:</label>
                        <input type="text" id="waste_type_name" name="waste_type_name" required class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">Points</label>
                        <input type="text" name='points' class="form-control">
                        <label for="">Price/points</label>
                        <input type="text" name= "price_point" class="form-control">
                    </div>
                    <p class="text-center"><button name='add_pro' class="btn btn-primary">Add Product</button></p>
                </form>
        </div>
            
        </div>
        
        
    </div>
    </div>
</body>
</html>