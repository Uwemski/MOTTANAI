<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Document</title>
    <style>
        input:hover, textarea:hover {
            border:2px solid lightblue;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">MOTTANAI</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                  </li> dummy till contents has been properly drafted for this page-->

                  <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>-->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faq.html">FAQ</a>
                  </li>
                  <li class="nav-item align-right">
                    <a class="nav-link" href="portal.html">Portal</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
              
            
          </nav>
    
        
        <div class="row">
            <h1 class="text-center text-uppercase">Register</h1>
            <span>Please fill all fields</span>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-md">
                     <label for="fn">First Name *</label>
                     <br>
                     <input type="text" name="firstname" id="fn" class="form-control">
                     <p class="d-none text-danger" id="p-w">This field is required</p>
                </div>

                <div class="col-md">
                     <label for="ln">Last Name *</label>
                     <input type="text" name="lastname" id="ln" class="form-control">
                     <p class="d-none text-danger">This field is required</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <label for="email">Email address</label>
                    <input type="email" name="email" id="email" class='form-control'>
                    <p class="d-none text-danger"></p>

                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <label for="">Password</label>
                    <input name="password" placeholder="Enter your password" class="form-control">
                </div>
                <div class="col-md">
                    <label for="">Confirm password</label>
                    <input type="password"  name="Confirm-Password " class="form-control" placeholder="confirm password"> 
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <label for="msg">Why did you choose us?</label>
                    <textarea name="message" id="msg" 
                    cols=20 rows= '8' class="form-control"></textarea>
                    <p class="d-none text-danger">This field is required</p>
                </div>    
            </div>

            <div><button class="btn btn-success col-12 mt-2 btn_reg">Sign Up</button></div>
        </form>
        <p>Already have an account. <a href="portal.html">Log in</a> </p>
    </div>
    
    <script src="jquery-3.7.1.min.js"></script>
    <!-- <script>
        $(document).ready(function(){
            $('.btn_reg').click(function(){
                $fn = $('#fn').val();
                $ln = $('#ln').val();
                $email = $('#email').val();
                $mdg = $('textarea').val();

                if($fn.trim() === ""){
                    $('#p-w').removeClass('d-none').addClass('d-block');
                    console.log('Firstname is empty');
                    
                }
            })

        })





    </script> -->
    <!-- This is not working for some reason. Since i can use php to validate my form. No wahala-->
</body>
</html>