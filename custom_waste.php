<?php
    // session_start();
    require_once "classes/Customer.php";

    $v = new Customer;
    $vw = $v->view_product();

    require_once('partials/header2.php')
?>


      <!-- Main Content -->
      <div class="col-md-9 p-4">
        <h2 class="mb-4 text-success">Welcome</h2>

        <?php
        if(isset($_SESSION['waste_added_success'])){
            echo "<div class='alert alert-success'>".$_SESSION['waste_added_success']."</div>";
            unset($_SESSION['waste_added_success']);
        }
        ?>

        <div class="form-section">
          <h4 class="mb-4 text-muted">Dispose Your Waste</h4>
          <form action="process/waste_process.php" method="post">
            <div class="mb-3">
              <label for="type" class="form-label">Waste Type</label>
              <select name="pro_id" class="form-select">
                <option value="">-- SELECT WASTE TYPE --</option>
                <?php foreach($vw as $vi): ?>       
                  <option value="<?= $vi['pro_id']; ?>"><?= $vi['pro_name']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="mb-3">
              <label for="wastedesc" class="form-label">Enter Waste Description</label>
              <textarea name="wastedesc" id="wastedesc" class="form-control"></textarea>
            </div>

            <div class="mb-3">
              <label for="location" class="form-label">Pickup Location</label>
              <select name="location" id="location" class="form-select">
                <option value="selected">Select a location for pickup</option>
                <option value="Berger">Berger</option>
                <option value="Ojota">Ojota</option>
                <option value="Ibafo">Ibafo</option>
                <option value="Surulere">Surulere</option>
                <option value="Mushin">Mushin</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="mass" class="form-label">Waste (kg)</label>
              <input type="text" name="mass" id="mass" class="form-control" />
            </div>

            <div class="mb-3">
              <label for="pknote" class="form-label">Pick-up Note</label>
              <textarea name="picknote" id="pknote" class="form-control"></textarea>
            </div>

            <div class="text-center">
              <button type="submit" name="btn_req" class="btn btn-success px-5">Send Request</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <?php //require_once "partials/footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
