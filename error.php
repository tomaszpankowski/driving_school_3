<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION["errorMessage"])){
    $_SESSION["errorMessage"] = "Unfortunately your message was not send due to technical ";
    $_SESSION["errorMessage"] .= "problems. Please try again later or contact with us by phone.";
}

?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link rel="icon" href="img/favicon.png"/>
        <title>Driving School | Message not sent</title>
    </head>
    <body class="minh-100vh bg-secondary">
        <header class="position-absolute w-100">
            <nav class="navbar navbar-light navbar-expand-md bg-transparent">
                <a href="index.html" class="navbar-brand ms-3">
                    <img src="img/navbar_logo.png" class="img-fluid" alt="logo"/>
                </a>
                <button class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#main-nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mx-3" id="main-nav">
                    <ul class="navbar-nav ms-auto text-end fw-bold">
                        <li class="nav-item">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="classes.html" class="nav-link">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="user.php class="nav-link">
                                <span class="fa fa-user"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="login-s1 container-fluid d-flex align-items-center bg-light py-5 minh-100vh">
            <div class="row mx-0 w-100 pt-5 mt-5">            
                <div class="col-10 col-sm-8 col-md-6 offset-1 offset-sm-2 offset-md-3 text-center">
                    <div class="alert alert-danger">
                        <h3 class="text-center font-header">Error!</h3>
                        <p class="initialism">
                            <?php
                                echo $_SESSION["errorMessage"];
                            ?>
                        </p>                  
                        <a href="appointment.html" 
                            class="btn btn-danger">Back</a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="container-fluid d-flex text-dark align-items-center bg-yellow pt-3 opacity-9 border-top border-dark">
            <div class="row mx-0 w-100 small opacity-9 w-100 d-flex minh-25vh">
                <div class="col-12 col-md-5 text-center text-md-start align-self-top">
                    <h6 class="text-uppercase mb-3">
                        Contact us
                    </h6>
                    <p class="initialism fw-normal">
                        Don’t miss out on the opportunity to gain valuable driving education, 
                        reasonable prices, and comfortable learning facilities.
                    </p>
                    <address class="border-start border-dark ps-3 small">
                        Abcdfg Street 12,<br/>
                        00-000 City,<br/>
                        +(00) 987 654 124<br/>
                        email&#64;email.com
                    </address>
                </div>
                <div class="col-12 col-md-7 text-center text-md-end">                    
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa fa-facebook text-dark"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa fa-instagram text-dark"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <span class="fa fa-twitter text-dark"></span>
                            </a>
                        </li>
                    </ul>       
                </div>
                <div class="col-12 text-center border-top border-dark align-self-end">
                    <p class="mb-1">
                        Copyright &copy; 2021 Tomasz Pankowski. 
                        <a href="privacy.html" class="fw-bold text-dark text-decoration-none">
                            Privacy&nbsp;policy
                        </a>
                    </p>
                </div>
            </div>
        </footer>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>
<?php $_SESSION["errorMessage"]=null ?>

        
  
        


