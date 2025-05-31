<?php
    require_once "classes/FetchCustomer.php";

    $ob = new FetchCustomer;
    $cust = $ob->fetch_customers();

    /*echo "<pre>";
         print_r($cust);
    echo "</pre>";*/
?>

<?php
  @include_once "../partials/header.php";
?>
<body>
    <div class="container-fluid">
        <?php 
          @include_once "../partials/navbar.php";
        ?>

        <div class="row">
            <?php
              @include_once "../partials/menu.php";
            ?>
            <div class="col-md-9">
                <h1>All Customers</h1>
                    <table  class='table table-hover table-bordered'>
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Customer Id</th>
                                <th>Customer name</th>
                                <th>Customer email</th>
                                
                                <th>Delete Customers</th>
                            </tr>

                        </thead>
                        <tbody>
                        <?php
                            $serialno = 1;
                            foreach($cust as $c){

                        ?>
                        
                            <tr>
                                <td><?php echo $serialno ?></td>
                                <td><?php echo $c['cust_id'];?></td>
                                <td><?php echo $c['cust_firstname']." ".$c['cust_lastname'];?></td>
                                <td><?php echo $c['cust_email'];?></td>
                                
                                <td>
                                    <form action="process/delete.php" method="POST" onsubmit="return confirm('Are you   sure you want to deactivate this customer?');">
                                        <input type="hidden" name="cust_id" value="<?php echo $c['cust_id']; ?>">
                                        <button name="submit" class="btn btn-danger">Deactivate Customer</button>
                                    </form>
                                </td>
                            </tr>
                            
                            <?php
                            $serialno++;    
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