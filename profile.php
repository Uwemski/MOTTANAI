<?php
    //for some strange reaasons, you might need data to access this page
    session_start();
    require_once "SARS.php";
    require_once "classes/Update.php";
    require_once "classes/Payment.php";

    // Fetch bank data
    $b = new Payment;
    $banksResponse = $b->fetchBanks();

    //checking to be sure
    // echo "<pre>";
    //     print_r($banksResponse);
    // echo "</pre>";


    //print_r($_SESSION);
    if (isset($banksResponse['status']) && $banksResponse['status'] === true) {
        $banks = $banksResponse['data'];
    } else {
        $banks = [];
        $error = 'Unable to fetch banks';
        return 'error';
    }

    require_once "partials/header2.php";
?>

            <div class="col-md-9">
                <h2>Welcome</h2>
                <h3>Update Profile</h3>
                <h4 class='alert alert-info'>You need data to acccess this page!</h4>
                <?php
                    if(isset($_SESSION['success'])){
                        echo '<p class="alert alert-success">'. $_SESSION['success']. '</p>';
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['error'])){
                        echo '<p class="alert alert-warning">'. $_SESSION['error']. '</p>';
                        unset($_SESSION['warning']);
                    }
                ?>
                <form action="process/update_process.php" method="post">
                    <div class="mb-3">
                        <label>First name</label>
                        <input type="text" name="firstname" id="firstname" class="form-control"> 
                    </div>
                    <div class="mb-3">
                        <label>Last Name</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label>Account number</label>
                        <input type="text" name="account_no" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="banks">Select a bank</label>
                        <select name="bank_code" id="banks">Select A Bank
                            <option value="">--Select a Bank--</option>
                            <?php foreach($banks as $bank){ 
                            ?>
                                <option value="<?php echo $bank['code']; ?>">
                                    <?php echo ($bank['name']) ?>
                                </option>
                            <?php
                            }
                            ?>

                    </select>
                    </div>
                    <div class="mb-3">
                        <label>Phone Number</label>
                        <input type= 'number' name='phone' class='form-control'>
                    </div>

                    <p class="text-center text-uppercase"><button name='btn_update' class="btn btn-warning" >Update</button></p>
                </form>
            </div>
            

            
            </div>
        </div>


    <?php
        //require_once "partials/footer.php";
    ?>

    </div>
</body>
</html>