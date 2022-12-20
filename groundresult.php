<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	include 'connection.php';
	global $conn;
	if (isset($_POST['ground_search'])) {
		$location = $_POST['location'];
		$date = $_POST['date'];
		$select_query_ground = "select * from grounds where G_city = '$location'";
	    $ground_data = mysqli_query($conn, $select_query_ground);
        if ($location == "" && $date == "") {
            header("Location:./index.php");
        }
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Now</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleGW.css">
	<link rel="stylesheet" type="text/css" href="js/script.js">
	<link href="slick/slick-theme.css" rel="stylesheet" type="text/css" >
    <link href="slick/slick1.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
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
              <li class="nav-item  ">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="About.php">About Us<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
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



  <div class="book-now-banner mt-4">
  	<h1 class="pt-5 text-center text-light">NEARBY TURF</h1>
  </div>


  
 <?php 
 if (mysqli_num_rows($ground_data) > 0) {
 	while ($row = mysqli_fetch_assoc($ground_data)) {
 ?>
  <div class="container-fluid mt-4">
      <div class="row">
          <div class="col-md-12">
              <div class="book-box">
                <div class="row">
                    <div class="col-md-3">
                    <img src="images/<?php echo $row["G_image"];?>">
                    </div>
                    <div class="col-md-3">
                        <p><?php echo $row["G_name"];?></p>
                    </div>
                    <div class="col-md-3">
                        <button class="btn">Book Now</button>
                    </div>
                </div>
              </div>
          </div>
      </div>
  </div>
 <?php
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

	
<script src="js/jquery-3.6.0.min.js"></script>	
<script src="slick/slick.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/bootstrap.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script type="text/javascript" src="js/script.JS"></script>
</body>
</html>