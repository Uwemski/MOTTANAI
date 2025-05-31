<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container-fluid">
        <?php 
          require_once "partials/navbar.php";
        ?>

          <header class="row">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/items1.jpg" class="img-fluid" alt="waste-products">
                  </div>
                  <div class="carousel-item">
                    <img src="img/company.jpg" class="img-fluid" alt="factory logo">
                  </div>
                  <div class="carousel-item">
                    <img src="img/greenenvironment.jpg" class="img-fluid" alt="renewable environment">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
              </div> 
          </header> 

          
          <section class="row pt-4 px-1 py-1 about pt-5">

                <div class="col-md-6">
                    <h2 class="text-center">About MOTTANAI</h2>
                    <p>Some text has been inputed here to inform the general public about the comapny and ehy they should always recycle their waste. Subject to be modified as we get along with the project.Some text has been inputed here to inform the general public about the comapny and ehy they should always recycle their waste. Subject to be modified as we get along with the project.Some text has been inputed here to inform the general public about the comapny and ehy they should always recycle their waste. Subject to be modified as we get along with the project.Some text has been inputed here to inform the general public about the comapny and ehy they should always recycle their waste. Subject to be modified as we get along with the project.Some text has been inputed here to inform the general public about the comapny and ehy they should always recycle their waste. Subject to be modified as we get along with the project.Some text has been inputed here to inform the general public about the comapny and ehy they should always recycle their waste. Subject to be modified as we get along with the project</p>
                </div>
                <div class="col-md-6">
                    <img src="img/rrr.jpg" class="img-fluid custom-border-r" alt=""> 
                </div>
                <div class="col-md-8 text-center" >
                    <p><a href="about.html" class="learnmore btn btn-info text-uppercase text-center">Learn more</a></p>
                </div>
          </section>
          <hr>
            
          <div class="row pt-1 d-flex flex-row services">
            <div class="col-md-12">
              <h2 class="text-center text-uppercase">our services</h2>
            </div>
            <div class="card-group">
              <div class="card">
                <img src="img/plastics.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Recycling</h5>
                  <p class="card-text">We offer long range of services. One of our major services include RECYCLING of PET bottles. When you recycle PET bottles, you save about 40% of energy used in manuifacturing a new one</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img src="img/pickup.jpeg" class="card-img-top" alt="flexible services">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img src="img/grid.jpeg" class="card-img-top" alt="wastetoenergy">
                <div class="card-body">
                  <h5 class="card-title">Waste - Energy</h5>
                  <p class="card-text">Non-recyclable wastes are neither left out in our factory. With the help of well-trained staff, the waste is acted upon and undergoes a process to generate electricity. No more sole dependency on fuel and heartbreaks from grid collapse</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>

          <hr>
          <div class="row mb-2">
            <div class="col-md-12 text-center">OUR PATNERS</div>

            <div class="col-md-3">
              <img src="img/cu-logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-3">
              <img src="img/lawma.png" alt="lagos state waste authority" class="img-fluid">
            </div>
            <div class="col-md-3">
              <img src="img/sdgs.png" alt="sustainable development goals" class="img-fluid">
            </div>
            <div class="col-md-3"></div>
          </div>
          
          <?php
            require_once "partials/footer.php";
          ?>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
        <script src="jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.cust').click(function(){
                    var name = $('#name').val();
                    var email = $('#email').val();

                    if(name.length > 0 && email.length > 0 ){
                        alert("Thank you for contacting us. We'll reach you shortly, cheers!");
                    }else{alert('We cant reach you unless you fill in the required fields!')}
                })
            })

        </script>
</body>
</html>