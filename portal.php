<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="main.css">
        <title>Document</title>

    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">MOTTANAI</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                     <!-- <li class="nav-item">
                    <a class="nav-link" href="services.html">Services</a>
                  </li> dummy till contents has been properly drafted for this page-->
                    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faq.php">FAQ</a>
                    </li>
                    <li class="nav-item align-right">
                        <a class="nav-link" href="portal.php">Portal</a>
                    </li>
                    </ul>
                    <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
                </div>
                </div>
            </nav>

            <div class="row custom-portal">
                <div class="col-md-8 text-uppercase text-center mx-auto"><h1>Welcome back</h1></div>
                
                    <form action="">
                        <div class="col-md-7 mx-auto">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        
                        <div class="col-md-7 mx-auto">
                            <label for="pass" class="form-label">Password</label>
                            <input type="text" name="password" id="pass" class="form-control">
                        </div>
                        
                        <div class="text-center pt-2">
                            <a href class="btn btn-success login">Log In</a>
                        </div>
                        <div>
                            <p>Dont have an account?<a href="sign.html" class="signin text-decoration-none text-success">Sign Up</a></p>
                        </div>
                        
                    </form>
                
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
                    <form action="">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                            
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" id="email" class="form-control" required placeholder="enter email here..">
        
                        <p><button type= "button" class="btn btn-primary col-12">Contact us</button></p>
        
                    </form>
                    </div>
                </div>
            </div>

        </div>

        <script src="bootstrap/js/bootstrap.bundle.js"></script>
        <script src="jquery-3.7.1.min.js"></script>
        <script>
            $(document).ready(function(){

                $('.login').click(function(){
                    var name = $('#username').val();
                    var email = $('#pass').val();
                    if(name != "" && email != ""){
                        alert('Welcome to your dashboard Mr '+ name);
                    }else{
                        alert('Please fill in the requird fields')
                    }
                });

                $('.signin').click(function(){
                    alert('Sign in is unavailable at the moment!');
                });

            });


        </script>
    </body>
</html>