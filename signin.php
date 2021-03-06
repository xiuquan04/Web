<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/logo.jpg">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>XQ SPORTS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>XQ SPORTS <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="men.html">Men</a></li>

                <li class="nav-item"><a class="nav-link" href="women.html">Women</a></li>
				
				<li class="nav-item"><a class="nav-link" href="kids.html">Kids</a></li>
                
                <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout</a></li>
				
				<li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
				
				<li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>

                <li class="nav-item active"><a class="nav-link" href="signin.html">Sign In</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              
              <h2>Sign In</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    
          

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Sign In Form</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
			
              <?php
                      
	        $username = $_POST['username'] ;
	        $password = $_POST['password'] ;
	
	        
	        if (empty($username) && empty($password)){
	 	    echo "Please enter your username and password again!";
	        }
	        else if(ctype_alpha($password)){
		    echo "Please enter your password again!";
	        }
	        else if(ctype_digit($username)){
		    echo "Please enter your username again!";
	        }
	        else
		    echo "Sign in Successfully!";
	
    ?>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>?? 2021 Company Name, Inc. All Rights Reserved: <a href="https://www.phpjabbers.com/">XQ SPORTS</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
