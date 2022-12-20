<?php 
	include 'connection.php';
	global $conn;
	if ($conn) {
		$select_about_query = "select * from about";
		$about_data = mysqli_query($conn,$select_about_query);
	}	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>About</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleGW.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
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
				      <li class="nav-item active">
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
				       <li class="nav-item">
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

	<div class="aboutbanner mt-4">
		<h4 class="animate__animated animate__backInLeft">ABOUT US</h4>
	</div>
	<?php
	if (mysqli_num_rows($about_data) > 0) {
		while ($row = mysqli_fetch_assoc($about_data)) {
			echo '
				<div class="container pt-5">
					<div class="row mt-5">
						<div class="col-md-6 banner7">
							<img src="images/'.$row['Image1'].'" class="image1">
							<div class="row up">
								<div class="col-md-6">
									<img src="images/'.$row['Image2'].'" class="image">
								</div>
								<div class="col-md-6">
									<img src="images/'.$row['Image3'].'" class="image">
								</div>
							</div>
							<div class="row down">
								<div class="col-md-6">
									<img src="images/'.$row['Image4'].'" class="image">
								</div>
								<div class="col-md-6">
									<img src="images/'.$row['Image5'].'" class="image">
								</div>
							</div>
						</div>
						<div class="col-md-6 text4">
							<h4><u>ABOUT US</u></h4>
							<p class="para"><b>'.$row['Paragraph1'].'</b></p>
							<p class="para1">'.$row['Paragraph2'].'</p>
							<p class="para1">'.$row['Paragraph3'].'</p>
						</div>
					</div>
				</div>
				<div class="container mb-5">
					<div class="row">
						<div class="col-md-12">
							<p class="para1">'.$row['Paragraph4'].'</p>
							<p class="para1">'.$row['Paragraph5'].'</p>
						</div>
					</div>
				</div>
				';
			}
		}
	?>




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