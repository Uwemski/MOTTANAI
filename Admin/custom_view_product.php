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
                
                <table border='1' class="table table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Product Name</th>
                            <th>Price/points</th>
                            <th>Points per Kg</th>
                            <th>Weight</th>
                            <th>Action</th>
                            <th>Amount_earned</th>
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
                            <td class="pricePerPoints"><?php echo $p['pro_priceperpoints']?></td>
                            <td class="pointsPerKg"><?php echo $p['pro_pointsperkg']?></td>
                            <td>
                                <form action="">
                                    <input type="text" class="form-control customWeight">
                                </form>
                            </td>
                            <td><button class="btn btn-primary" id="btnCalc" onclick="calculate(this)">Calculate</button></td>
                            <td class="points_earned">

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

    <script>
        function calculate(btn) {
            let row = btn.parentElement.parentElement; // Get the row of the clicked button

            let weight = parseFloat(row.querySelector(".customWeight").value); 
            let pricePerPoints = parseFloat(row.querySelector(".pricePerPoints").textContent);
            let pointsPerKg = parseFloat(row.querySelector(".pointsPerKg").textContent);

            if (!isNaN(weight) && !isNaN(pricePerPoints) && !isNaN(pointsPerKg)) {
                let total = pricePerPoints * pointsPerKg * weight;
                row.querySelector(".points_earned").textContent = total.toFixed(2);
            } else {
                alert("Please enter a valid number for weight.");
            }
        }
    </script>
</body>
</html>