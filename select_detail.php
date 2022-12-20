<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Detail</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleGW.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="js/script.js">
	<link href="slick/slick-theme.css" rel="stylesheet" type="text/css" >
  <link href="slick/slick1.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
  <!--Header Start  -->
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
  <!--Header End -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 f-layer mt-3">
        <h1 class="mt-3 text-center text-primary"><b>Selected Facilties</b></h1>
        <div class="main-box bg-light">
          <div class="row">
            <div class="col-md-6">
              <img class="p-g-img" src="./images/slider1.jpg">
            </div>
            <div class="col-md-6 mt-5">
              <h3>Sinchara Cricket Ground - Astro Turf</h3>
              <p>Chapparadahalli, Doddaballapura</p>
              <div class="d-flex mb-4">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <p >/ 0 Reviews</p>
              </div>
              <h5 class="b-date mb-3">Date:<span class="ml-1 text-danger">30 Nov, 2022</span></h5>
              <h6 class="b-date">No of Slot:<span class="ml-1 text-danger">01</span></h6>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 show-slot">
              <p>SLOTS:</p>
              <i class="fa fa-close"></i>
              <p class="slot-time">07:00 AM - 11:00 AM<span>4000 RS</span></p>
              <hr class="hr1">
            </div>
             <div class="col-md-12 show-slot">
              <p class="mb-4">SELECT PAYMENT METHOD:</p>
              <i class="fa fa-check check100" onclick="myfunction1()"></i>
              <p class="slot-time">Pay 100% Now</p>
              <i class="fa fa-check check40" onclick="myfunction()"></i>
              <p class="slot-time">Pay 40% Now (Remaning on the match day)</p>
            </div>
            <div class="col-md-12 show-slot">
              <table class="mt-3 tbl">
                <tr class="tbl-row">
                  <td>SLOT PRICE</td>
                  <td>8000 RS</td>
                </tr>
                <tr class="tbl-row">
                  <td>ADD ON PRICE</td>
                  <td>0 RS</td>
                </tr>
                <tr class="tbl-row">
                  <td>TAX</td>
                  <td>0 RS</td>
                </tr>
                <tr class="tbl-row">
                  <td>SUB TOTAL</td>
                  <td>8000 RS</td>
                </tr>
                <tr class="tbl-row">
                  <td>WALLET</td>
                  <td>0 RS</td>
                </tr>
                <tr class="tbl-row">
                  <td>CUPON DISCOUNT</td>
                  <td>0 RS</td>
                </tr>
                <tr class="tbl-row">
                  <td>TOTAL</td>
                  <td>8000 RS</td>
                </tr>                
              </table>
            </div>
            <div class="col-md-12 show-slot"> 
              <form class="d-flex">
                <input type="checkbox" name="confirmation" class="mt-2">
                <p class="mt-3 "> I agree <b><u>booking term & condition</b></u></p>
              </form>
              <hr class="hr1">
            </div>
            <div class="col-md-12 show-slot">
              <h3 class="text-dark">Booking Info</h3>
            </div>
             <div class="col-md-12 show-slot">
              <form class="frm">
                <div class="row">
                  <div class="col-md-6">
                    <p>First Name</p>
                    <input type="text" name="" placeholder="e.g John">
                  </div>
                  <div class="col-md-6">
                    <p>Last Name</p>
                    <input type="text" name="" placeholder="e.g Leo">
                  </div>
                  <div class="col-md-12">
                    <p>Address Line 1</p>
                    <input type="text" name="" placeholder="e.g Flat No, Society Name">
                     <p>Address Line 1</p>
                    <input type="text" name="" placeholder="e.g locality, street">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p>City</p>
                    <input type="text" name="" placeholder="e.g Karachi">
                    <p>Postal Code</p>
                    <input type="text" name="" placeholder="e.g XXXXX">
                  </div>
                  <div class="col-md-6">
                    <p>Country</p>
                    <input type="text" name="" placeholder="e.g Pakistan">
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
              <button type="button" class="btn bg-primary text-white c-btn" data-toggle="modal" data-target="#exampleModalLong">Continue</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content mt-5">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Sports Wrecker</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="d-flex">
            <img src="./images/user.png">
            <p class="mL-2">Contact Details</p>
          </div>
          <input type="text" name="" placeholder="Phone number"><br>
          <input type="text" name="" placeholder="Email" class="mt-3">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Proceed
          </button>
        </div>
      </div>
    </div>
  </div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


  <!-- Footer Start -->
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
  <!-- Footer End -->

	
<script src="js/jquery-3.6.0.min.js"></script>	
<script src="slick/slick.js"></script>
<script src="slick/slick.min.js"></script>
<script src="js/bootstrap.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/script.JS"></script>
<script type="text/javascript">
  var a = true;
  var b = true;
  function myfunction(){
    if (a) {
      document.getElementsByClassName("check40")[0].style.backgroundColor = "green";
      document.getElementsByClassName("check100")[0].style.backgroundColor = "white";
    }
  }
  function myfunction1(){
    if (b) {
      document.getElementsByClassName("check100")[0].style.backgroundColor = "green";
      document.getElementsByClassName("check40")[0].style.backgroundColor = "white";
    }
  }
</script>
</body>
</html>