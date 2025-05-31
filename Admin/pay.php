<?php
  session_start();
    require_once "../classes/Payment.php";
    require_once "../classes/Customer.php";
    require_once "adminguard.php";

    $w = new Customer;
    $ws = $w->fetch_verified_waste();

    // echo "<pre>";
    //   print_r($ws);
    // echo "</pre>";
?>

<?php
  require_once "../partials/header.php";
?>
<body>
  <div class="container-fluid">
    <div class="row">
      <?php require_once "../partials/menu.php"?>
        <div class="content pt-3">
          <div>
            <h2>Some text goes here</h2>
            <?php
              if(isset( $_SESSION['successful'])){
                echo "<div class='alert alert-success'>".$_SESSION['successful']."</div>";
                      unset($_SESSION['successful']);
              }
              if(isset($_SESSION['paymentfeedback'])){
                echo "<div class='alert alert-success'>".$_SESSION['paymentfeedback']."</div>";
                      unset($_SESSION['paymentfeedback']);
              }
              
            ?>
          </div>
            <table border='1' class='table table-striped'>
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Customer Name</th>
                        <th>Pro Id</th>
                        <th>Account number</th>
                        <th>Waste weight</th>
                        <th>Points/Kg</th>
                        <th>Status</th>
                        <th>Price/Points</th>
                        <th>Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $sn = 1;
                    foreach($ws as $ww){
                      $amount = $ww['waste_weight'] * $ww['pro_pointsperkg'] * $ww['pro_priceperpoints'];
                      ?>
                    
                    <tr>
                      
                        <td><?php echo $sn; ?></td>
                        <td><?php echo $ww['cust_firstname']. " ". $ww['cust_lastname']?></td>
                        <td><?php echo $ww['pro_id']?></td>
                        <td><?php echo $ww['cust_account_details']?></td>
                        <td><?php echo $ww['waste_weight']?></td>
                        <td><?php echo $ww['pro_pointsperkg']?></td>
                        <td><?php echo $ww['waste_status']?></td>
                        <td><?php echo $ww['pro_priceperpoints']?></td>
                        <td class="amount"><?php echo $amount?></td>
                        <td>
                          <form action="../process/payment_process.php" method ="post">  
                          
                            <input type="hidden" name="waste_id" value="<?php echo $ww['waste_id']?>"> 
                             <input type="hidden" name="cust_name" value="<?php echo $ww['cust_firstname']. $ww['cust_lastname']?>">
                             <input type="hidden" name="acc_number" value="<?php echo $ww['cust_account_details']?>">
                            <input type="hidden" name="cust_id" value="<?php echo $ww['cust_id']; ?>">
                            <input type="hidden" name="pro_id" value="<?php echo $ww['pro_id']; ?>">
                            <input type="hidden" name="amount" value="<?php echo $amount; ?>">
                            <input type="hidden" name="bank_code" value="<?php echo $ww['cust_bankcode']; ?>">

                                <button class="btn btn-success" name="btn_pay">Make Payment</button> <!--i think it's better if this is an anchor tag for security reasons-->
                            </form>
                          
                        </td>
                    </tr>
                  
                  <?php
                  }
                  ?>


                </tbody>




            </table>
        </div>
      </div>
    </div>
  </div>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
  <script src= "jquery.js"></script>
  <script>
    $(document).ready(function(){
      $('.btn').click(function(){
        
        
        $amt= $("#amount").text();
        alert(`You are about to make a payment. Proced?`);
      })


    })



  </script>
</body>
</html>
