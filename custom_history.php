<?php
   
    require_once "classes/ViewHistory.php";
    require_once "SARS.php";

    $obj= new ViewHistory;
    $var= $obj->view_wastes_byId($_SESSION['cust_id']);

    // echo "<pre>";
    //     print_r($var);
    // echo"</pre>";

    require_once "partials/header2.php"
?>


            <div class="col-md-9">
                <h2>Welcome</h2>

                <!-- <h3>Profile</h3> -->
                <table border=1 class="table table-striped">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Waste Name</th>
                            <th>Weight(kg)</th>
                            <th>Points</th>
                            <th>Amount</th>
                            <th>Waste Status</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $serialNo= 1; 
                            foreach($var as $v){
                                $amount = $v['waste_weight'] * $v['pro_pointsperkg'] * $v['pro_priceperpoints'];
                                $pointsEarned = $v['waste_weight'] * $v['pro_pointsperkg'];
                        ?>
                        <tr>
                            <td><?php echo $serialNo?></td>
                            <td><?php echo $v['cust_firstname']. " ". $v['cust_lastname']?></td>
                            <td><?php echo $v['pro_name'] ?></td>
                            <td><?php echo $v['waste_weight']?></td>
                            <td><?php echo $pointsEarned?></td>
                            <td><?php echo $amount ?></td>
                            <td><?php echo $v['waste_status']?></td>
                            <td><?php echo $formattedDate= date("d M Y, h:i A", strtotime($v['waste_date_added'])) ; ?></td>
                        </tr>
                        <?php
                            $serialNo++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


    <?php
       // require_once "partials/footer.php";
    ?>

    </div>
</body>
</html>