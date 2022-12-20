<?php
	if (isset($_POST['submit'])) {
	    include 'connection.php';
	    global $conn;
	    $person_name = $_POST['name'];
	    $person_email = $_POST['email'];
	    $person_contact_num = $_POST['contact'];
	    $person_message = $_POST['message'];

	    if ($conn) {
	        $insert_query = "INSERT INTO contact(C_name,C_email,C_messsage,C_number) values('$person_name','$person_email','$person_message','$person_contact_num')";
	        $result = mysqli_query($conn, $insert_query);
	        if ($result) {
	            header("Location: index.php");
	            exit;
	        }
	    }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleGW.css">
</head>
<body class="body">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1 pl-5 pt-2 logo">
				<img src="./images/Logo.jpg">
			</div>
			<div class="col-md-9  text-right pt-3  ml-5">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse " id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item ">
				        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item ">
				        <a class="nav-link" href="About.php">About Us<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item ">
				        <a class="nav-link" href="book-now.php">Book Now<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item ">
		                <a class="nav-link" href="Tournament_cart.php">Contest<span class="sr-only">(current)</span></a>
		              </li>
		              <li class="nav-item ">
		                <a class="nav-link" href="academy_cart.php">Academy<span class="sr-only">(current)</span></a>
		              </li>
				       <li class="nav-item ">
				        <a class="nav-link" href="news-event.php">News/Event<span class="sr-only">(current)</span></a>
				      </li>
				       <li class="nav-item active">
						  <button class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Help?</button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						    <a class="dropdown-item" href="paymentpolicy.php">Paymnent Policy</a>
						    <a class="dropdown-item" href="contact.php">Contact Us</a>
						  </div>
					  </li>
				    </ul>
				  </div>
				</nav>
			</div>
			<div class="col-md-1 login">
				<button class="btn ml-1">LOGIN/SIGNUP</button>
			</div>
		</div>
	</div>





	<div class="aboutbanner1 mt-4">
	</div>

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 col-12 col-sm-12">
				<h4 class="cd">SEND US MESSAGE</h4>
				<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
				<div class="miss">
	    			<form method="post" action="contact.php">																	
					  <input type="text" class="fname" name="name" placeholder="Enter Your Name"><br>
					  <input type="text" class="lname" name="email" placeholder="Enter Your Email"><br>
					  <input type="text" class="msg" name="contact" placeholder="Enter Your Contact Number"><br>
  				</div>
			</div>
			<div class="col-md-6 col-12 col-sm-12">
				<h4 class="cd">CONTACT DETAILS</h4>
				<p>Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
				<div class="mb-4">
				<i class="fa fa-phone w3-xxlarge p"><SPAN>021-876-675</SPAN></i><br>
				</div>
				<div class="mb-4">
				<i class="fa fa-map-marker w3-xxlarge m"><SPAN>021-876-675</SPAN></i><br>
				</div>
				<div class="mb-4 ">
				<i class="fa fa-envelope w3-xxlarge e"><SPAN>021-876-675</SPAN></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 miss">
					<textarea type="text" class="info mb-3" name="message" placeholder="Type Your Nessage Here...
					"  rows="10"></textarea><br>
					<button name="submit" type="submit">SEND MESSAGE</button>
				</form>
			</div>
		</div>
	</div>

<footer class="new_footer_area bg_color mt-5">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                        <p>Don’t miss any updates of our new templates and extensions.!</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Quick Links</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Partner Wtih Us</a></li>
                            <li><a href="#">Book Now</a></li>
                            <li><a href="#">News and Events</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Term &amp; conditions</a></li>
                            <li><a href="#">Reporting</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Support Policy</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                        <div class="f_social_icon icons">
                            <a href="#" class="fa fa-facebook"></a>
                            <a href="#" class="fa fa-twitter"></a>
                            <a href="#" class="fa fa-linkedin"></a>
                            <a href="#" class="fa fa-pinterest"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">Copyrigth © 2022 All rights reserved.</p>
                </div>
                <div class="col-lg-6 col-sm-5 text-right">
                    <p>Made with <i class="icon_heart"></i> in <a href="#" target="_blank">GigByteSolutions</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</body>
</html>