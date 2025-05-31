<?php
    session_start();
    require_once "../classes/Customer.php";
    require_once "adminguard.php";
     $ob = new Customer;
     $pro = $ob->view_product();

     //working fine
    //  echo "<pre>";
    //     print_r($pro);
    // echo "</pre>";
 
?>

<?php
    @include_once "../partials/header.php";
?>
<body>
    <div class="container-fluid">
        <?php
          @include_once "../partials/navbar.php";
        ?>
            
          </nav>

        <div class="row">
            <?php
            @include_once "../partials/menu.php";
            ?>
            <div class="col-md-9">
                <h1>All waste Products</h1>
                
                <table border='1' class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Product Name</th>
                            <th>Price/points</th>
                            <th>Points per Kg</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $serialno =  1;
                            foreach($pro as $p ){ 
                        ?>  
                        <tr>
                            <td><?php echo $serialno ?></td>
                            <td><?php echo $p['pro_name']?></td>
                            <td><?php echo $p['pro_priceperpoints']?></td>
                            <td><?php echo $p['pro_pointsperkg']?></td>
                            <td>
                                <a href="delete_product.php?id=<?php echo $p['pro_id'];?>" class="btn btn-danger">Delete</a>
                                
                                <a href="edit_product.php?id=<?php echo $p['pro_id']?> "class="btn btn-warning text-decoration-none">Edit</a>
                            </td>

                        </tr>
                        <?php    
                            $serialno ++;
                        }
                        ?>
                    </tbody>



                </table>
                
        </div>
            
        </div>
        
        
    </div>
    </div>
</body>
</html>