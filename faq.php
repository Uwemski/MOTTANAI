<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <div>
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
                    <img src="img/company.jpg" class="img-fluid" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/greenenvironment.jpg" class="img-fluid" alt="...">
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
          <div class="row pt-4">
            <div class="col-md-12">
                <h1 class="text-center">FAQ</h1>
            </div>
          </div>

            <div class="row">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                            </button>
                        </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What happens to our waste
                            </button>
                        </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>Your waste is not wasted.</strong>AFter the waste has been collected from various colecting centers, they are brought to our facilties where they are sorted. Waste that are recyclable are put in the recycling part f our comapny while those that can't be recycled are taken for composting for waste_energy. <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How do I schedule a pickup
                            </button>
                        </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                        <strong>You can do so by registering on our site</strong> After registration you can even do more by seeing your history and also points received by how much you waste you hsve managed o far <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                    </div>
                </div>
            </div>
          

        <div class="footer row bg-success pt-5">
            <div class="col-md-4">Some text goes here</div>

            <div class="col-md-4">
                <h3>Location</h3>
                <p>address</p>
                <p>No 5-8 Kafanchan street,</p>
                <p>Lekki epe,</p>
                <p>LAgos state, Nigeria</p>

            </div>
            <div class="col-md-4">
                <h3 class="text-center">Contact Us</h3>
                <form action="#">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                    
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="name" id="name" class="form-control" required placeholder="enter email here..">

                    <p><button class=" btn btn-primary col-12">Contact us</button></p>

                </form>
            </div>
        </div>

    </div>
    
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>