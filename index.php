
<?php


if(isset($_REQUEST["submit"]))
{

$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arihant";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (name, email, subject,message)
VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "Thankyou! We will Keep In Touch.";
 header("Location: index.php");
 }
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<?php

if(isset($_REQUEST["submit"]))
{
if((isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['subject']) && !empty($_POST['subject']))){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$to = "arthpancholi15may@gmail.com";
	$headers = "From : " . $email;
	
	if( mail($to, $subject, $message, $headers)){
		echo "E-Mail Sent successfully, we will get back to you soon.";
	}
}
}

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Bingo One page parallax responsive HTML Template ">
  
  <meta name="author" content="Themefisher.com">

  <title>Arihant Media Solutions</title>

<!-- Mobile Specific Meta
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- CSS
  ================================================== -->
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Lightbox.min css -->
  <link rel="stylesheet" href="plugins/lightbox2/dist/css/lightbox.min.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">  
 <link rel="stylesheet" href="css/popcss/style2.css" type="text/css">

</head>

<body id="body">

 <!--
  Start Preloader
  ==================================== -->
  <!-- 
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
 -->
  <!--
  End Preloader
  ==================================== -->

<div class="login-popup">
  	 <div class="box">
  	 	 <div class="img-area">
  	 	 	<div class="img">
  	 	 	</div>
  	 	 	<h1>Your Logo</h1>
  	 	 </div>
  	 	 <div class="form" method="POST" action="index.php"> 
  	 	 	<div class="close">&times;</div>
  	 	 	<h1>Contact US</h1>
  	 	 	<form>
  	 	 	
				
				<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name"  id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control"  name="email" id="email">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject"  id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					<div id="success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>
					
					<div id="error" class="error">
						Sorry, don't know what happened. Try later :(
					</div>
										
  	 	 		<button type="submit" class="btn" name="submit">Submit</button>
  	 	 	</form>
  	 	 </div>
  	 </div>
  </div>
  

<!--
Fixed Navigation
==================================== -->
<header class="navigation fixed-top">
  <div class="container">
    <!-- main nav -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- logo -->
      <a class="navbar-brand logo" href="index.html">
        <img class="logo-default" src="images/logo.png" alt="logo"/>
        <img class="logo-white" src="images/logo-white.png" alt="logo"/>
      </a>
      <!-- /logo -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navigation">
        <ul class="navbar-nav ml-auto text-center">
          <!--<li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Homepage
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="index.html">Homepage</a>
              <!-- <a class="dropdown-item" href="onepage-slider.html">Onepage</a>
              <a class="dropdown-item" href="onepage-text.html">Onepage 2</a> -->
            <!--</div>
          </li>-->
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Homepage</a>
          </li>
		  <li class="nav-item ">
            <a class="nav-link" href="about.html">About Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="service.html">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="portfolio.html">Happy Clients</a>
          </li>
          <!--<li class="nav-item ">
            <a class="nav-link" href="team.html">Team</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="pricing.html">Pricing</a>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="404.html">404 Page</a>
              <a class="dropdown-item" href="blog.html">Blog Page</a>
              <a class="dropdown-item" href="single-post.html">Blog Single Page</a>
            </div>
          </li> -->
        </ul>
      </div>
    </nav>
    <!-- /main nav -->
  </div>
</header>
<!--
End Fixed Navigation
==================================== -->


	<div class="hero-slider">
	<div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/slider-bg-1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Arihant Media Solutions</h1>
					<p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">We’re a digital marketing agency that takes the time to get to know you and your business, vision and goals, so we can tailor our recommendations and online marketing strategies to achieve the results you require.</p>
					<a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main" href="service.html">Explore Us</a>
				</div>
			</div>
		</div>
	</div>
</div>




<!--
Start About Section
==================================== -->
<section class="service-2 section" style="padding-bottom: 0px;>
  <div class="container">
    <div class="row">

      <div class="col-12">
        <!-- section title -->
        <div class="title text-center">
          <h2>What Do We Offer</h2>
          <p>Arihant Media Solutions is a value driven company in the field of Web Design & Development, Mobile Marketing, Digital Marketing & Online Business Development. One of the leading Digital Marketing Agency since 2009, with Over 4000 Successful Presentations & over 1000 customers across diverse industries, we are a positive company strongly looking forward. Strong Domain Expertise, Extensive Technology Skills, Process Focus, Speed and Innovation enable us to provide value-added, high quality IT solutions to customers. </p>
          <div class="border"></div>
        </div>
        <!-- /section title -->
      </div>

      <div class="col-md-4 text-center">
        <img src="images/about/member.jpg" class="inline-block" alt="">
      </div>
      <div class="col-md-8">
        <div class="row text-center">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-code" ></i>
              <h4><a href = "websitedevelopment.html" style="color:#000000;"> Website Designing </a> </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-earth"></i>
              <h4><a href = "domainregistration.html" style="color:#000000;"> Domain Registration and Hosting </a> </h4>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-laptop"></i>
			  <h4><a href = "email-marketing.html" style="color:#000000;"> Email Marketing </a> </h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="service-item">
              <i class="tf-ion-ios-chatboxes-outline"></i>
              <h4><a href = "bulksms.html" style="color:#000000;"> Bulk SMS Service </a> </h4>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
          </div><!-- END COL -->
		
		<div class="col-md-12 col-sm-12 col-xs-12">
            <div class="service-item1">
             <h4><a href="service.html">More Services</a></h4>
            </div>
          </div><!-- END COL -->
		  
        </div>
      </div>
    </div> <!-- End row -->
  </div> <!-- End container -->
</section> <!-- End section -->
<!--
<!--
		Start Blog Section
		=========================================== -->
	<section class="contact-us" id="contact" style="padding-top:50px;">
	<div class="container">
		<div class="row">
			
			<!-- section title -->
			<div class="col-12">
			<div class="title text-center" >
				<h2>Get In Touch</h2>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate facilis eveniet maiores ab maxime nam ut numquam molestiae quaerat incidunt?</p>-->
				<div class="border"></div>
			</div>
			</div>
			<!-- /section title -->
			
			<!-- Contact Details -->
			<div class="contact-details col-md-6 " >
				<h3>Contact Details</h3>
				<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel fugiat dicta laboriosam labore adipisci.</p>-->
				<ul class="contact-short-info" >
					<li>
						<i class="tf-ion-ios-home"></i>
						<span>Khaja Road, Bayzid, Chittagong, Bangladesh</span>
					</li>
					<li>
						<i class="tf-ion-android-phone-portrait"></i>
						<span>Phone: +880-31-000-000</span>
					</li>
					<li>
						<i class="tf-ion-android-globe"></i>
						<span>Fax: +880-31-000-000</span>
					</li>
					<li>
						<i class="tf-ion-android-mail"></i>
						<span>Email: hello@meghna.com</span>
					</li>
				</ul>
				<!-- Footer Social Links -->
				<div class="social-icon">
					<ul>
						<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
						<li><a href="#"><i class="tf-ion-social-linkedin-outline"></i></a></li>
					</ul>
				</div>
				<!--/. End Footer Social Links -->
			</div>
			<!-- / End Contact Details -->
				
			<!-- Contact Form -->
			<div class="contact-form col-md-6 " >
				<form id="contact-form" method="post" role="form">
					<div class="form-group">
						<input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
					</div>
					
					<div class="form-group">
						<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
					</div>
					
					<div class="form-group">
						<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
					</div>
					
					<div class="form-group">
						<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
					</div>
					
					<div id="success" class="success">
						Thank you. The Mailman is on His Way :)
					</div>
					
					<div id="error" class="error">
						Sorry, don't know what happened. Try later :(
					</div>
					<div id="cf-submit">
						<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
					</div>						
					
				</form>
			</div>
			<!-- ./End Contact Form -->
		
		</div> <!-- end row -->
	</div> <!-- end container -->
</section> <!-- end section -->

<section class="map">
	<!-- Google Map -->
	
	 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d170.6486223230217!2d73.23414569975844!3d22.286373315894764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc59dfda9ae33%3A0xd09725b9a42474aa!2sXpert%20Infotech!5e1!3m2!1sen!2sin!4v1643181723066!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
	

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2016. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
  </div>
</footer> <!-- end footer -->


    <!-- end Footer Area
    ========================================== -->
    

    
<a class="" href="https://wa.me/message/2T6AYDTXPH55N1"> <i class="tf-ion-social-whatsapp"></i> </a>
    <!-- 
    Essential Scripts
    =====================================-->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script  src="plugins/google-map/gmap.js"></script>

    <!-- Form Validation -->
    <script src="plugins/form-validation/jquery.form.js"></script> 
    <script src="plugins/form-validation/jquery.validate.min.js"></script>
    
    <!-- Bootstrap4 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Parallax -->
    <script src="plugins/parallax/jquery.parallax-1.1.3.js"></script>
    <!-- lightbox -->
    <script src="plugins/lightbox2/dist/js/lightbox.min.js"></script>
    <!-- Owl Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <!-- filter -->
    <script src="plugins/filterizr/jquery.filterizr.min.js"></script>
    <!-- Smooth Scroll js -->
    <script src="plugins/smooth-scroll/smooth-scroll.min.js"></script>
    
    <!-- Custom js -->
    <script src="js/script.js"></script>
<script src="js/popjs/script2.js"></script>


  </body>
  </html>
