<?php
    session_start();
    // require_once "classes/Customer.php";
    require_once "classes/ViewWaste.php";

    $w = new ViewWaste;
    $waste = $w->view_wastes();

    //echo "<pre>";
        //print_r($waste);
    //echo "</pre>";
    
?>

<?php
    @include_once "../partials/header.php";
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
                <div class="col-md-9">
                    <h1>All Wastes</h1>
                    <?php
                        if(isset($_SESSION['successful'])){
                            echo "<p class='alert alert-suceess md-4'>" . $_SESSION['successful'] ."</p>";
                            unset($_SESSION['successful']);
                        }
                        if(isset($_SESSION['error'])){
                            echo "<p class='alert alert-danger md-4'>" . $_SESSION['error'] ."</p>";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <table border='1' class='table table-striped'>
                    <thead>
                        <tr>
                            <th>Waste Id</th>
                            <th>Customer Name</th>
                            <th>Waste Type</th>
                            <th>Waste Description</th>
                            <th>Waste weight(kg)</td>
                            <th>Pickup Location</th>
                            <!-- <th>Pickup Note</th> -->
                            <th>Date added</th>
                            <th>Waste status</th>
                            <th>Waste status</th>
                            <th>Action</th>
                        </tr>

                    </thead>
                    <?php 
                        foreach($waste as $wa){
                    ?>  
                    <tbody>
                        <tr>
                            <td><?php echo $wa["waste_id"];?></td>
                            <td><?php echo $wa["cust_firstname"]. " ".$wa["cust_lastname"]?></td>
                            <td><?php echo $wa['waste_type']?></td>
                            <td><?php echo $wa["waste_description"]?></td>
                            <td><?php echo $wa["waste_weight"]?></td>
                            <td><?php echo $wa["pickup_location"]?></td>
                            
                            <td><?php echo $wa["waste_date_added"]?></td>
                           
                            <form action="verify_waste.php" method="post">
                                <td>
                                   
                                    <select name="status" id="status">
                                        <option value="PENDING">pending</option>
                                        <option value="ACCEPTED">verify</option>
                                        <option value="REJECTED">Reject</option>
                                    </select>
                                    
                                </td>
                                <td>
                                    <?php echo $wa["waste_status"];?>
                                </td>
                                <td>
                                    <input type="hidden" name="waste_id" value="<?php echo $wa['waste_id']; ?>">
                                    <button class= "btn btn-success" name="btn_verify">SET</button>
                                </td>
                            </form>
                        </tr>
                    

                    </tbody>
                    <?php
                        } 
                    ?>

                </table>
            </div>
                
            </div>
            
            
        </div>
    </div>
        
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function(){
            $("#verify").click(function(){
                $("#verify").text(" verified");
                $("#verify").removeClass("btn-warning");
                $("#verify").addClass("btn-success");
            });
        })

    </script>   
</body>
</html>