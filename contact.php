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

                <li class="nav-item active"><a class="nav-link" href="contact.html">Contact Us</a></li>
				
				<li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
				
				<li class="nav-item"><a class="nav-link" href="signin.html">Sign In</a></li>
				
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
              
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>Address: Lot 368, Jalan Bakar Arang, Bakar Arang, 08000 Sungai Petani, Kedah</p>
				  <p>Phone: 1-300-13-1313</p>
				  <p>Email: xqsports@hotmail.com</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
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
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <?php
                      
	        $name = $_POST['name'];
	        $email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
	
	        if (ctype_digit($name)){
	 	    echo "Please enter your name again!";
	        }
	        else if(ctype_digit($email)){
		    echo "Please enter your email again!";
	        }
	        else if(ctype_digit($name)){
		    echo "Please enter your name again!";
	        }
			else if(ctype_digit($subject)){
		    echo "Please enter your subject!";
	        }
			else if(ctype_digit($message)){
		    echo "Please enter your message again!";
	        }
	        else
		    echo "Send Successfully!";
	
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

