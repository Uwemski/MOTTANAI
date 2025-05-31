<?php
    session_start();
    require_once "../classes/Customer.php";

    $obj = new Customer;
    $var2 = $obj->view_product();

    // echo "<pre>";
    //     print_r($var2);
    // echo "</pre>";
    //$pro_id = isset($_GET["id"]) ? $_GET["id"]: 0;

    //$_SESSION[$pro_id] = $pro_id;
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Edit Product</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <h2>Edit product</h2>
        </div>
        <form action="process/admin_edit_product.php" class="row" method="post">
            <div class="col-md-7">
                <label for="">Product Name</label><br>
                
                <select name="pro_name">
                    <?php 
                        foreach($var2 as $var){
                    ?>
                    <option value="<?php echo $var['pro_id']?>"> <?php echo $var['pro_name']?></option>
                    <?php 
                        }
                    ?>
                </select>
            </div>
            <div class="col-md-7">
                <label for="">Points</label>
                <input type="text" name="points" class="form-control">
            </div>
            <div class="col-md-7">
                <label for="">Price/point</label>
                <input type="text" name="priceperpoint" class="form-control">
            </div>

            <div class="col-md-6 mt-4 p-2 mx-auto">
                <button class="btn btn-success" name="btn_edit">Edit</button>
            </div>
           
        </form>
    </div>
</body>
</html>