<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Academy</title>
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
      <div class="col-md-9  text-right pt-3 ml-5 ">
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

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 f-layer mt-3">
        <h1 class="mt-3 text-center text-primary"><b>Specify All Required Information</b></h1>
        <div class="main-box1 bg-light pl-5">
          <div class="row">
              <div class="col-md-7">
                  <form class="letsplay mt-3">
                    <label class="mt-3 mr-2 mt-5" >First Name</label>
                    <input type="Text" id="txt_first_name" class="" name="date" placeholder="e.g John"><br>
                    <label class="mt-3  mr-2">Last Name</label>
                    <input type="Text" id="txt_last_name" class="" name="date" placeholder="e.g Leo"><br>
                    <label class="mt-4 mr-2">Email</label>
                    <input type="Text" class="addressinput" id="txt_email" name="date" placeholder="e.g XYZ@gmail.com"><br>
                    <label class="mt-4 mr-2" >Contact Number</label>
                    <input type="Text" class="" id="txt_contact" name="date" placeholder="e.g XXXX-XXXXXXX">
                    <label class="mt-4 ml-3 mr-2" >City</label>
                    <input type="Text" class="" id="txt_city" name="date" placeholder="e.g Karachi"><br>
                    <label class="mt-4 mr-2" >Age</label>
                    <input type="Text" class="" id="txt_age" name="date" placeholder="Your Age"><br>
                    <label class="mt-4">Select the type of game</label>
                    <select class="form-control mt-2" id="ddl_game" name="admin_status">
                        <option value="">-- Select Game Type</option>
                        <option value="Cricket">Cricket</option>
                        <option value="Football">Football<option>
                        <optio value="Table-Tennis">Table Tennis</option>
                    </select>    
                    <label class="mt-4  mr-2">Address Line1</label>
                    <input type="Text" class="addressinput" name="date" placeholder="e.g Flat No. , Societ Name"><br>
                    <label class="mt-4  mr-2">Address Line1</label>
                    <input type="Text" class="addressinput" name="date" placeholder="e.g locality,street"><br>
                  </form>
              </div>
              <div class="col-md-5">
                  <div class="container-fluid">
                    <div class="row mt-5 mr-3" >
                        <div class="col-md-12 summary">
                            <h3>Provided Detail</h3>
                        </div>
                        <div class="detail">
                            <div><p class="pl-3 pt-3"><b>Name</b><span class="side pr-3" id="lbl_first_name"></span> <span class="side pr-1" id="lbl_last_name"></span></p></div>
                            <div><p class="pl-3"><b>Email</b><span class="side pr-3" id="lbl_email"></span></p></div>
                            <div><p class="pl-3"><b>Contact Number</b><span class="side pr-3" id="lbl_contact"></span></p></div>
                            <div><p class="pl-3"><b>City</b><span class="side pr-3" id="lbl_city"></span></p></div>
                            <div><p class="pl-3"><b>Age</b><span class="side pr-3" id="lbl_age"></span></p></div>
                            <div><p class="pl-3"><b>Game Type</b><span class="side pr-3" id="lbl_game"></span></p></div>
                        </div>
                        <div class="info mt-4">
                            <p class="ml-2 mt-3"><b>Message</b></p>
                            <p class="ml-2" id="lbl_message"></p>
                        </div>
                    </div>
                </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-11 mt-3">
                <label class="mt-2  mr-2">If you want to add some thing more</label>
                <textarea id="txt_message" type="text" class="info" name="lname" placeholder="Type Here....."  rows="10" ></textarea>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 d-flex justify-content-center letsplaybtn">
                   <a href=""><button class="btn btn-primary mt-4 mb-4">Get Registered</button></a>
              </div>
          </div>
        </div>
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

<script>
    

    $(document).ready(function(){

        $('#txt_first_name').keyup(function(e){
            var val = e.target.value;
            $('#lbl_last_name').text(val)
            
        });

        $('#txt_last_name').keyup(function(e){
            var val = e.target.value;
            $('#lbl_first_name').text(val);            
        });

        $('#ddl_game').change(function(e){
            var val = e.target.value;
            $('#lbl_game').text(val);            
        });
        $('#ddl_ground').change(function(e){
            var val = e.target.value;
            $('#lbl_ground').text(val);            
        });

        $('#dt_date').change(function(e){
            var val = e.target.value;
            $('#lbl_time').text(val);            
        });

         $('#dt_time').change(function(e){
            var val = e.target.value;
            $('#lbl_date').text(val);            
        });
         $('#txt_city').keyup(function(e){
            var val = e.target.value;
            $('#lbl_city').text(val);            
        });
         $('#txt_contact').keyup(function(e){
            var val = e.target.value;
            $('#lbl_contact').text(val);            
        });
         $('#txt_email').keyup(function(e){
            var val = e.target.value;
            $('#lbl_email').text(val);            
        });
         $('#txt_team_name').keyup(function(e){
            var val = e.target.value;
            $('#lbl_team_name').text(val);            
        });
         $('#txt_captain').keyup(function(e){
            var val = e.target.value;
            $('#lbl_captain').text(val);            
        });
         $('#txt_age').keyup(function(e){
            var val = e.target.value;
            $('#lbl_age').text(val);            
        });
         $('#txt_message').keyup(function(e){
            var val = e.target.value;
            $('#lbl_message').text(val);            
        });
    });
</script>



</body>
</html>