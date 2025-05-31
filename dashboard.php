<?php
session_start();
require_once "classes/Customer.php";
require_once "SARS.php";

$custom = new Customer;
$customer = $custom->fetch_customer_byId($_SESSION['cust_id']);

require_once('partials/header2.php');
?>



    <!-- MAIN CONTENT -->
    <div class="col-md-9 p-4">
      <h2>Welcome to your dashboard</h2>
      <div class="info pt-3">
        <h4>Name: <?php echo $customer["cust_lastname"]; ?></h4>
        <h4>Telephone: <?php echo $customer['cust_phonenumber']; ?></h4>
        <h4>Account: <?php echo $customer['cust_account_details']; ?></h4>
      </div>
    </div>

  </div>
</div>

<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  const toggleBtn = document.getElementById("sidebarToggle");
  const sidebar = document.getElementById("sidebar");

  toggleBtn.addEventListener("click", () => {
    sidebar.classList.toggle("active");
  });
</script>

<?php //require_once "partials/footer.php"; ?>
</body>
</html>
