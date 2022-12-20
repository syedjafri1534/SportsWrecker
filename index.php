<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
	include 'connection.php';
	global $conn;
	if ($conn) {
	    $select_query_ground = "select * from grounds";
	    $ground_data = mysqli_query($conn, $select_query_ground);
	    $select_query_tournament = "select * from tournaments";
	    $tournament_data = mysqli_query($conn, $select_query_tournament);
	    $select_query_academy = "select * from academy";
	    $academy_data = mysqli_query($conn, $select_query_academy);
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
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
      <div class="col-md-9  text-right pt-3 ml-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item  active">
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
              <!-- <li class="nav-item ">
                <a class="nav-link" href="#">Help?<span class="sr-only"></span></a>
                <ul class="nav-dropdown mt-2">
                    <li>
                      <a href="paymentpolicy.php">Payment Policy</a>
                    </li>
                    <li>
                      <a href="Contact.php">Contact Now</a>
                    </li>
                 </ul>
              </li> -->
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
        <a href="beforelogin.php"><button class="btn ml-1">LOGIN/SIGNUP</button></a>
      </div>
    </div>
  </div>


	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="headin text-center"><span class="auto-type"></span></h1>
				<div class="container">
					<form method="post" action="groundresult.php" >
					  <div class="wrapper">
					    <div class="search-container">
						      <input type="text" class="search" name="location" placeholder="Search for a facility">
						      <input type="date" class="datepicker" name="date" placeholder="Check In > Check Out">
						      <button type="submit" name="ground_search" class="button btn" type="submit">Search</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="container-fluid">
		<div class="row">
				<img class="indexbanner" src="./images/indexBanner.png">
		</div>
	</div>

	<div class="feature-box-slider">
		<?php
			if (mysqli_num_rows($ground_data) > 0) {
			 	while ($row = mysqli_fetch_assoc($ground_data)) {
			 		echo '
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div>
									<div class="img-card2 ml-3">
										<img src="images/'.$row['G_image'].'">
										<h4>'.$row['G_name'].'</h4>
										<button class="btn cardbtn1">Football Ground</button>
										<h6>'.$row['G_city'].'</h6>
										<button class="btn cardbtn2">Book Now</button>
									</div>	
								</div>
							</div>
						</div>
					</div>';
				}
			 } 
		?>
	</div>


	<div class="fixed mt-5">
		<div class="container">
			<div class="row">
				<div class="col-md-7 side1">
					<h1><b>MEET YOUR PALS<BR>OVER GAME</b></h1>
					<p>Want to play games ?<br>But don't get an opponent team?<br>You can Invite a team or Join a pre scheduled match Through GroundWrecker</p>
					<a href="#"><button type="button" class="btn play mt-2" data-toggle="modal" data-target="#exampleModalLong">Let's Play</button></a>
				</div>
				<div class="col-md-5 cartoon">
					<img src="images/cartoon.png">
				</div>
			</div>
		</div>
	</div>
		
	 <!-- Modal -->
	  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	    <div class="modal-dialog mt-5 " role="document">
	      <div class="modal-content ">
	        <div class="modal-header">
	          <h5 class="modal-title" id="exampleModalLongTitle">Sports Wrecker</h5>
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	          </button>
	        </div>
	        <div class="modal-body-letsplay modal-body"> 
	          <h2 class="text-center mt-2 mb-2"><b>Let's Play</b></h2>
	          <p>Do you want to publish your team for a match?</p>
	          <div class="d-flex justify-content-end">
	          	<a href="letsplay.php"><button class="btn btn-primary">Let's Go<i class="fa fa-arrow-right mr-2"></i></button></a>
	          </div>
	          <p class="mt-3">Do you want to play a game with a pro opponent?</p>
	          <div class="d-flex justify-content-end">
	          	<button class="btn btn-primary mbnegative">Let's Go<i class="fa fa-arrow-right mr-2"></i></button>
	          </div>
	        </div>
	        <div class="modal-footer modal-body-letsplay">
	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        </div>
	      </div>
	    </div>
	  </div>




	<div class="container mt-5">
		<div class="col-md-12 ">
			<h4 class="text-center">WE PROVIDE YOU</h4>
			<h1 class="text-center"><b>LOCAL TEAM TOURNAMENTS</b></h1>
		</div>
		<div class="row mt-4">
			<?php 
				if (mysqli_num_rows($tournament_data) > 0) {
					while ($row = mysqli_fetch_assoc($tournament_data)) {
						echo'
						<div class="col-md-4 pl-5 tournamentcards">
						<img src="./images/'.$row['T_image'].'">
							<div class="box">
								<h4 class="text-center">'.$row['T_name'].'</h4>
								<button class="btn">Registration Fees:'.$row['T_fees'].'Rs</button>
								<p class="text-center pt-2	">Total 16 teams are required <br>to paly, only 6 slots are remaning.<br> So, Hurry up! </p>
							</div>
						</div>';
					}
				}
		 	?>
		</div>
	</div>



	<div class="container-fluid mt-5 bg-about">
		<div class="row">
			<div class="col-md-3 column1">
				<img src="images/gawader.jpg" class="b2image1">
			</div>
			<div class="col-md-6 text ">
				<h6>"</h6>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
				<h2 class="text-center mr-4">KNOCKED IT</h2>
				<h1 class="text-center mr-4">OUT OF THE GROUND</h1>
			</div>
			<div class="col-md-3 mt-5">
				<img src="images/football.jpg" class="b2image2">
			</div>
		</div>
	</div>


	<div class="container mt-5 academy-text">
		<div class="row ">
			<div class="col-md-12">
				<h4 class="text-center">WE OFFERING YOU ACADEMIES</h4>
				<h1 class="text-center"><b>TO MAKE YOUR SELF PERFECT</b></h1>
			</div>
		</div>
	</div>


	<div class="main-slider">
		<div class="slider">
			<?php 
			$count = 0;
			while($row = mysqli_fetch_assoc($academy_data)){
				$count+=1;
			?>
				<span style="--i:<?php echo $count; ?>;"><img src="./images/<?php echo $row["AC_image"];?>"></span>
			<?php
			}
			?>
		</div>
	</div>

	<div class="container-fluid mt-3 Know">
		<div class="row">
			<div class="col-md-12">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="color">
								<div class="row">
									<div class="col-md-12">
										<h3 class="text-center mt-5"><b>KNOW US</b></h3>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<img src="./images/setting.png" class="setting">
										<h4 class="text-center mt-4">MANAGER DASHBOARD</h4>
										<p class="text-center mt-2">Signup and explore sports venue, sports venue<br> and opponent team in your city.</p>
										<button class="btn mt-4 Explore">Explore Now</button>
									</div>
									<div class="col-md-4">
											<img src="./images/list.png" class="setting">
											<h4 class="text-center mt-4">PARTNER WITH US</h4>
											<p class="text-center mt-2">Sign up as facility Manager, promote your sports<br> venue. It’s Easy its free.</p>
											<button class="btn mt-4 Explore">Explore Now</button>
									</div>
									<div class="col-md-4">
										<div class="sec">
											<img src="./images/list1.jpg" class="setting">
											<h4 class="text-center mt-4">REGISTER YOUR ACADEMY</h4>
											<p class="text-center mt-2">Sign up as facility Manager, promote your sports<br> venue. It’s Easy its free.</p>
											<button class="btn mt-4 Explore">Explore Now</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row mt-4">
			<div class="col-md-3 ">
			</div>
			<div class="col-md-6 ">
				<h2 class="text-center"><b>You're in good company</b>	</h2>
				<p class="text-center">Hundreds of clubs and organisations use our platform to manage their sports facilities. From sports clubs to local councils, Pitchbooking can streamline your booking and payments process.</p>
				<a href="about.php"><button class="btn find">Find out more</button></a>
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

	
<script src="js/jquery-3.6.0.min.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="slick/slick.js"></script>
<script src="slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script type="text/javascript">
$('.feature-box-slider').slick({
  dots: true,
  arrows:false,
  infinite: true,
  autoplay:false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
</script>
<script type="text/javascript" src="js/script.JS"></script>
</body>
</html>