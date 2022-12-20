<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!DOCTYPE html>
<html>
<head>
	<title>Booking Detail</title>
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
	<style type="text/css">
    
  
	</style>
    
</head>
<body>
  <!--Header Start  -->
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

  <!-- Slider Start -->
  <section class="mt-3 pb-5">
    <!-- Full-width images with number and caption text -->
      <div class="carousel-container">
        <div class="mySlides animate">
          <img src="https://wallpapershome.com/images/pages/pic_h/16239.jpg" alt="slide" />
          <div class="number">1 / 5</div>
        </div>

        <div class="mySlides animate">
          <img src="https://wallpapershome.com/images/pages/pic_h/23525.jpg" alt="slide" />
          <div class="number">2 / 5</div>
        </div>

        <div class="mySlides animate">
          <img src="https://wallpapershome.com/images/pages/pic_h/23277.jpg" alt="slide" />
          <div class="number">3 / 5</div>
        </div>

        <div class="mySlides animate">
          <img src="https://wallpapershome.com/images/pages/pic_h/12596.jpg" alt="slide" />
          <div class="number">4 / 5</div>
        </div>

        <div class="mySlides animate">
          <img src="https://wallpapershome.com/images/pages/pic_h/23419.jpg" alt="slide" />
          <div class="number">5 / 5</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="prevSlide()">&#10094;</a>
        <a class="next" onclick="nextSlide()">&#10095;</a>

        <!-- The dots/circles -->
        <div class="dots-container">
          <span class="dots" onclick="currentSlide(1)"></span>
          <span class="dots" onclick="currentSlide(2)"></span>
          <span class="dots" onclick="currentSlide(3)"></span>
          <span class="dots" onclick="currentSlide(4)"></span>
          <span class="dots" onclick="currentSlide(5)"></span>
        </div>
      </div>
  </section>
  <!-- Slider End -->

  <!-- Section-Two-Start -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>National Stadium Karachi</h1>
          <p>Karachi<br>V3WJ+CHG, National Stadium Colony Gulshan-e-Iqbal, Karachi, Karachi City, Sindh</p>
           <button class="btn bg-primary text-white">View Us On Map</button>
        </div>
        <div class="col-md-6 mt-2">
          <div class="d-flex justify-content-end detail-right">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <button class="btn rating-btn ml-3">4.8 Stars</button>
          </div>
          <div class="d-flex justify-content-end mt-2">
            <p class="review">1 Reviews</p>
            <a href="" class="write-review-btn"><i class="fa fa-edit text-white"> Write One</i></a>
          </div>
          <div class="d-flex justify-content-end mt-1">
            <h5 class="mt-2">Share On</h5>
            <i class="fa fa-facebook facebook"></i>
            <i class="fa fa-twitter twitter"></i>
            <i class="fa fa-google-plus googleplus"></i>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section-Two-End -->

  <!-- Line-Start -->
  <div class="container-fluid">
    <hr>
  </div>
  <!-- Line-End -->

  <!-- Section-Three-Start -->
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-12  mt-3">
          <h3>Description</h3>
          <p>Sinchara Turf Cricket Ground is a lush green well maintained Dedicated Synthetic Turf Cricket Ground near GITAM University (Doddaballapura Campus) With an Internationally Certified Maverick Synthetic Turf Pitch & the scenic setting of Nandi Hills, make the Sinchara Turf Cricket Ground your perfect cricketing venue Located in Chapparadahalli, nearby Doddaballapura, we are a 10 drive from Gitam University.<br>
          Whether you would like an 'all day' game or a 'Twenty20', Sinchara Turf Cricket Ground will be able to cater for your cricketing needs.<br>
          The ground has the below facilities <br>
          · Internationally certified Synthetic Turf Pitch<br>

          · Lush Green ground<br>

          · Completely Fenced Ground to avoid Ball going out of the Ground<br>

          · 20 Feet wide Sight Screens<br>

          · Drinking Water<br>

          · Ample Parking Space<br>

          · Umpires (on Chargeable basis)<br>

          · Coordinators in Ground for smooth functioning</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-6">
          <h3>Amenities</h3>
          <i class="fa fa-check-square-o"><span class="text-dark"> Boundary Netting</span></i>
          <i class="fa fa-check-square-o"><span class="text-dark"> Light</span></i>
          <i class="fa fa-check-square-o"><span class="text-dark"> Washroom</span></i>
          <i class="fa fa-check-square-o"><span class="text-dark"> Changing Room</span></i>
        </div>
        <div class="col-md-4">
          <h3>AddOns</h3>
          <p class="ml-4">No addons</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Section-Three-End -->

   <!-- Line-Start -->
  <div class="container-fluid">
    <hr>
  </div>
  <!-- Line-End -->

  <!-- Section-four-Start -->  
  <section class="info-sec">
    <div class="container slot-info">
      <div class="row mt-5" > 
        <div class="col-md-5">
          <div class="container">
            <div class="calendar-section">
              <div class="row">
                <div class="col-sm-12">
                  <div class="calendar calendar-first" id="calendar_first">
                    <div class="calendar_header">
                      <h2></h2>
                      <button class="switch-month switch-left">
                        <i class="fa fa-arrow-left"></i>
                      </button>
                      <button class="switch-month switch-right">
                        <i class="fa fa-arrow-right"></i>
                      </button>
                    </div>
                    <div class="calendar_weekdays"></div>
                    <div class="calendar_content"></div>
                  </div>
                </div>
              </div> <!-- End Row --> 
            </div> <!-- End Calendar -->
          </div> <!-- End Container -->
        </div>
        <div class="vl"></div>
          <div class="col-md-6 ">
            <div class="row d-flex">
              <a class="single-slot mr-3">
                <div class="slot" onclick="myfunction()">
                  <p>06:30 am</p>  
                  <p>11:00 am</p>  
                  <p>8000 PKR</p>       
                </div>
              </a>
              <a class="single-slot mr-3">
                <div class="slot" onclick="myfunction1()">
                  <p>06:30 am</p>  
                  <p>11:00 am</p>  
                  <p>8000 PKR</p>       
                </div>
              </a>
              <a class="single-slot">
                <div class="slot" onclick="myfunction2()">
                  <p>06:30 am</p>  
                  <p>11:00 am</p>  
                  <p>8000 PKR</p>       
                </div>
              </a>
            </div>
            <div class="row">
              <div class="col-md-12 slot-button">
                <a href="select_detail.php"><button class="btn bg-primary text-white">Book Slots</button></a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 d-flex justify-content-end mt-5">
                <i class="fa fa-circle text-primary"></i>
                <h6 class="ml-2 mt-2">Slot Selected</h6>
                <i class="fa fa-circle ml-2"></i>
                <h6 class="ml-2 mt-2">Slot Available</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section-four-End -->

  <!-- section-five-start -->
  <main class="containr co mai">
    <section class="containr co">
      <div class="title">
        <h2>Our Reviews</h2>
        <div class="underline"></div>
      </div>
      <article class="revie">
        <div class="img-container">
          <img src="" alt="" id="img">
        </div>
        <p id="author"></p>
        <p id="job"></p>
        <p id="info"></p>
        <div class="arrow-buttons">
          <button class="bt arrow-btn">
            <i class="fa fa-arrow-left"></i>
          </button>
          <button class="bt arrow-btn">
            <i class="fa fa-arrow-right"></i>
          </button>
        </div>
        <button class="bt surprise-btn">Surprise Me</button>
      </article>
    </section>
  </main>
  <!-- section-Five-End -->

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
<script src="js/bootstrap.min.js"></script>	
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="js/script.JS"></script>
<!-- Slider Js Start-->
<script type="text/javascript">
  let slideIndex = 0;
  showSlides();

  // Next-previous control
  function nextSlide() {
    slideIndex++;
    showSlides();
    timer = _timer; // reset timer
  }

  function prevSlide() {
    slideIndex--;
    showSlides();
    timer = _timer;
  }

  // Thumbnail image controlls
  function currentSlide(n) {
    slideIndex = n - 1;
    showSlides();
    timer = _timer;
  }

  function showSlides() {
    let slides = document.querySelectorAll(".mySlides");
    let dots = document.querySelectorAll(".dots");

    if (slideIndex > slides.length - 1) slideIndex = 0;
    if (slideIndex < 0) slideIndex = slides.length - 1;
    
    // hide all slides
    slides.forEach((slide) => {
      slide.style.display = "none";
    });
    
    // show one slide base on index number
    slides[slideIndex].style.display = "block";
    
    dots.forEach((dot) => {
      dot.classList.remove("active");
    });
    
    dots[slideIndex].classList.add("active");
  }

  // autoplay slides --------
  let timer = 7; // sec
  const _timer = timer;

  // this function runs every 1 second
  setInterval(() => {
    timer--;

    if (timer < 1) {
      nextSlide();
      timer = _timer; // reset timer
    }
  }, 1000); // 1sec
</script>
<!-- Slider Js End-->
<!-- Calender Js Start -->
<script type="text/javascript">
  $( document ).ready(function() {
    function c(passed_month, passed_year, calNum) {
      var calendar = calNum == 0 ? calendars.cal1 : calendars.cal2;
      makeWeek(calendar.weekline);
      calendar.datesBody.empty();
      var calMonthArray = makeMonthArray(passed_month, passed_year);
      var r = 0;
      var u = false;
      while(!u) {
        if(daysArray[r] == calMonthArray[0].weekday) { u = true } 
        else { 
          calendar.datesBody.append('<div class="blank"></div>');
          r++;
        }
      } 
      for(var cell=0;cell<42-r;cell++) { // 42 date-cells in calendar
        if(cell >= calMonthArray.length) {
          calendar.datesBody.append('<div class="blank"></div>');
        } else {
          var shownDate = calMonthArray[cell].day;
          // Later refactiroing -- iter_date not needed after "today" is found
          var iter_date = new Date(passed_year,passed_month,shownDate); 
          if ( 
            (
              ( shownDate != today.getDate() && passed_month == today.getMonth() ) 
              || passed_month != today.getMonth()
            ) 
              && iter_date < today) {           
            var m = '<div class="past-date">';
          } else {
            var m = checkToday(iter_date)?'<div class="today">':"<div>";
          }
          calendar.datesBody.append(m + shownDate + "</div>");
        }
      }

      // var color = o[passed_month];
      calendar.calHeader.find("h2").text(i[passed_month]+" "+passed_year);
            //.css("background-color",color)
            //.find("h2").text(i[passed_month]+" "+year);

      // find elements (dates) to be clicked on each time
      // the calendar is generated
      
      //clickedElement = bothCals.find(".calendar_content").find("div");
      var clicked = false;
      selectDates(selected);

      clickedElement = calendar.datesBody.find('div');
      clickedElement.on("click", function(){
        clicked = $(this);
        if (clicked.hasClass('past-date')) { return; }
        var whichCalendar = calendar.name;
        console.log(whichCalendar);
        // Understading which element was clicked;
        // var parentClass = $(this).parent().parent().attr('class');
        if (firstClick && secondClick) {
          thirdClicked = getClickedInfo(clicked, calendar);
          var firstClickDateObj = new Date(firstClicked.year, 
                        firstClicked.month, 
                        firstClicked.date);
          var secondClickDateObj = new Date(secondClicked.year, 
                        secondClicked.month, 
                        secondClicked.date);
          var thirdClickDateObj = new Date(thirdClicked.year, 
                        thirdClicked.month, 
                        thirdClicked.date);
          if (secondClickDateObj > thirdClickDateObj
            && thirdClickDateObj > firstClickDateObj) {
            secondClicked = thirdClicked;
            // then choose dates again from the start :)
            bothCals.find(".calendar_content").find("div").each(function(){
              $(this).removeClass("selected");
            });
            selected = {};
            selected[firstClicked.year] = {};
            selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
            selected = addChosenDates(firstClicked, secondClicked, selected);
          } else { // reset clicks
            selected = {};
            firstClicked = [];
            secondClicked = [];
            firstClick = false;
            secondClick = false;
            bothCals.find(".calendar_content").find("div").each(function(){
              $(this).removeClass("selected");
            }); 
          }
        }
        if (!firstClick) {
          firstClick = true;
          firstClicked = getClickedInfo(clicked, calendar);
          selected[firstClicked.year] = {};
          selected[firstClicked.year][firstClicked.month] = [firstClicked.date];
        } else {
          console.log('second click');
          secondClick = true;
          secondClicked = getClickedInfo(clicked, calendar);
          //console.log(secondClicked);

          // what if second clicked date is before the first clicked?
          var firstClickDateObj = new Date(firstClicked.year, 
                        firstClicked.month, 
                        firstClicked.date);
          var secondClickDateObj = new Date(secondClicked.year, 
                        secondClicked.month, 
                        secondClicked.date);

          if (firstClickDateObj > secondClickDateObj) {

            var cachedClickedInfo = secondClicked;
            secondClicked = firstClicked;
            firstClicked = cachedClickedInfo;
            selected = {};
            selected[firstClicked.year] = {};
            selected[firstClicked.year][firstClicked.month] = [firstClicked.date];

          } else if (firstClickDateObj.getTime() ==
                secondClickDateObj.getTime()) {
            selected = {};
            firstClicked = [];
            secondClicked = [];
            firstClick = false;
            secondClick = false;
            $(this).removeClass("selected");
          }


          // add between dates to [selected]
          selected = addChosenDates(firstClicked, secondClicked, selected);
        }
        // console.log(selected);
        selectDates(selected);
      });     

    }
    function selectDates(selected) {
      if (!$.isEmptyObject(selected)) {
        var dateElements1 = datesBody1.find('div');
        var dateElements2 = datesBody2.find('div');

        function highlightDates(passed_year, passed_month, dateElements){
          if (passed_year in selected && passed_month in selected[passed_year]) {
            var daysToCompare = selected[passed_year][passed_month];
            // console.log(daysToCompare);
            for (var d in daysToCompare) {
              dateElements.each(function(index) {
                if (parseInt($(this).text()) == daysToCompare[d]) {
                  $(this).addClass('selected');
                }
              }); 
            }
            
          }
        }

        highlightDates(year, month, dateElements1);
        highlightDates(nextYear, nextMonth, dateElements2);
      }
    }

    function makeMonthArray(passed_month, passed_year) { // creates Array specifying dates and weekdays
      var e=[];
      for(var r=1;r<getDaysInMonth(passed_year, passed_month)+1;r++) {
        e.push({day: r,
            // Later refactor -- weekday needed only for first week
            weekday: daysArray[getWeekdayNum(passed_year,passed_month,r)]
          });
      }
      return e;
    }
    function makeWeek(week) {
      week.empty();
      for(var e=0;e<7;e++) { 
        week.append("<div>"+daysArray[e].substring(0,3)+"</div>") 
      }
    }

    function getDaysInMonth(currentYear,currentMon) {
      return(new Date(currentYear,currentMon+1,0)).getDate();
    }
    function getWeekdayNum(e,t,n) {
      return(new Date(e,t,n)).getDay();
    }
    function checkToday(e) {
      var todayDate = today.getFullYear()+'/'+(today.getMonth()+1)+'/'+today.getDate();
      var checkingDate = e.getFullYear()+'/'+(e.getMonth()+1)+'/'+e.getDate();
      return todayDate==checkingDate;

    }
    function getAdjacentMonth(curr_month, curr_year, direction) {
      var theNextMonth;
      var theNextYear;
      if (direction == "next") {
        theNextMonth = (curr_month + 1) % 12;
        theNextYear = (curr_month == 11) ? curr_year + 1 : curr_year;
      } else {
        theNextMonth = (curr_month == 0) ? 11 : curr_month - 1;
        theNextYear = (curr_month == 0) ? curr_year - 1 : curr_year;
      }
      return [theNextMonth, theNextYear];
    }
    function b() {
      today = new Date;
      year = today.getFullYear();
      month = today.getMonth();
      var nextDates = getAdjacentMonth(month, year, "next");
      nextMonth = nextDates[0];
      nextYear = nextDates[1];
    }

    var e=480;

    var today;
    var year,
      month,
      nextMonth,
      nextYear;

    //var t=2013;
    //var n=9;
    var r = [];
    var i = ["JANUARY","FEBRUARY","MARCH","APRIL","MAY",
        "JUNE","JULY","AUGUST","SEPTEMBER","OCTOBER",
        "NOVEMBER","DECEMBER"];
    var daysArray = ["Sunday","Monday","Tuesday",
            "Wednesday","Thursday","Friday","Saturday"];
    var o = ["#16a085","#1abc9c","#c0392b","#27ae60",
        "#FF6860","#f39c12","#f1c40f","#e67e22",
        "#2ecc71","#e74c3c","#d35400","#2c3e50"];
    
    var cal1=$("#calendar_first");
    var calHeader1=cal1.find(".calendar_header");
    var weekline1=cal1.find(".calendar_weekdays");
    var datesBody1=cal1.find(".calendar_content");

    var cal2=$("#calendar_second");
    var calHeader2=cal2.find(".calendar_header");
    var weekline2=cal2.find(".calendar_weekdays");
    var datesBody2=cal2.find(".calendar_content");

    var bothCals = $(".calendar");

    var switchButton = bothCals.find(".calendar_header").find('.switch-month');

    var calendars = { 
            "cal1": {   "name": "first",
                  "calHeader": calHeader1,
                  "weekline": weekline1,
                  "datesBody": datesBody1 },
            "cal2": {   "name": "second",
                  "calHeader": calHeader2,
                  "weekline": weekline2,
                  "datesBody": datesBody2 }
            }
    

    var clickedElement;
    var firstClicked,
      secondClicked,
      thirdClicked;
    var firstClick = false;
    var secondClick = false;  
    var selected = {};

    b();
    c(month, year, 0);
    c(nextMonth, nextYear, 1);
    switchButton.on("click",function() {
      var clicked=$(this);
      var generateCalendars = function(e) {
        var nextDatesFirst = getAdjacentMonth(month, year, e);
        var nextDatesSecond = getAdjacentMonth(nextMonth, nextYear, e);
        month = nextDatesFirst[0];
        year = nextDatesFirst[1];
        nextMonth = nextDatesSecond[0];
        nextYear = nextDatesSecond[1];

        c(month, year, 0);
        c(nextMonth, nextYear, 1);
      };
      if(clicked.attr("class").indexOf("left")!=-1) { 
        generateCalendars("previous");
      } else { generateCalendars("next"); }
      clickedElement = bothCals.find(".calendar_content").find("div");
      console.log("checking");
    });


    //  Click picking stuff
    function getClickedInfo(element, calendar) {
      var clickedInfo = {};
      var clickedCalendar,
        clickedMonth,
        clickedYear;
      clickedCalendar = calendar.name;
      //console.log(element.parent().parent().attr('class'));
      clickedMonth = clickedCalendar == "first" ? month : nextMonth;
      clickedYear = clickedCalendar == "first" ? year : nextYear;
      clickedInfo = {"calNum": clickedCalendar,
              "date": parseInt(element.text()),
              "month": clickedMonth,
              "year": clickedYear}
      //console.log(clickedInfo);
      return clickedInfo;
    }


    // Finding between dates MADNESS. Needs refactoring and smartening up :)
    function addChosenDates(firstClicked, secondClicked, selected) {
      if (secondClicked.date > firstClicked.date || 
        secondClicked.month > firstClicked.month ||
        secondClicked.year > firstClicked.year) {

        var added_year = secondClicked.year;
        var added_month = secondClicked.month;
        var added_date = secondClicked.date;
        console.log(selected);

        if (added_year > firstClicked.year) { 
          // first add all dates from all months of Second-Clicked-Year
          selected[added_year] = {};
          selected[added_year][added_month] = [];
          for (var i = 1; 
            i <= secondClicked.date;
            i++) {
            selected[added_year][added_month].push(i);
          }
      
          added_month = added_month - 1;
          console.log(added_month);
          while (added_month >= 0) {
            selected[added_year][added_month] = [];
            for (var i = 1; 
              i <= getDaysInMonth(added_year, added_month);
              i++) {
              selected[added_year][added_month].push(i);
            }
            added_month = added_month - 1;
          }

          added_year = added_year - 1;
          added_month = 11; // reset month to Dec because we decreased year
          added_date = getDaysInMonth(added_year, added_month); // reset date as well

          // Now add all dates from all months of inbetween years
          while (added_year > firstClicked.year) {
            selected[added_year] = {};
            for (var i=0; i < 12; i++) {
              selected[added_year][i] = [];
              for (var d = 1; d <= getDaysInMonth(added_year, i); d++) {
                selected[added_year][i].push(d);
              }
            }
            added_year = added_year - 1;
          }
        }
        
        if (added_month > firstClicked.month) {
          if (firstClicked.year == secondClicked.year) {
            console.log("here is the month:",added_month);
            selected[added_year][added_month] = [];
            for (var i = 1; 
              i <= secondClicked.date;
              i++) {
              selected[added_year][added_month].push(i);
            }
            added_month = added_month - 1;
          }
          while (added_month > firstClicked.month) {
            selected[added_year][added_month] = [];
            for (var i = 1; 
              i <= getDaysInMonth(added_year, added_month);
              i++) {
              selected[added_year][added_month].push(i);
            }
            added_month = added_month - 1;
          }
          added_date = getDaysInMonth(added_year, added_month);
        }

        for (var i = firstClicked.date + 1; 
          i <= added_date;
          i++) {
          selected[added_year][added_month].push(i);
        }
      }
      return selected;
    }
});
</script>
<!-- Calender Js End -->
<script type="text/javascript">
  var a = false;
  var b = false;
  var c = false;
  function myfunction(){
    if (!a) {
      document.getElementsByClassName("slot")[0].style.backgroundColor = "#6699ff";
      document.getElementsByClassName("slot")[0].style.color = "white";
      document.getElementsByClassName("slot")[0].style.borderColor = "#6699ff";
      a = true;
    }
    else if(a){
      document.getElementsByClassName("slot")[0].style.backgroundColor = "#d8f7cd";
      document.getElementsByClassName("slot")[0].style.color = "black";
      document.getElementsByClassName("slot")[0].style.borderColor = "black";
      a = false;
    }
    
  }
  function myfunction1(){
    if (!b) {
      document.getElementsByClassName("slot")[1].style.backgroundColor = "#6699ff";
      document.getElementsByClassName("slot")[1].style.color = "white";
      document.getElementsByClassName("slot")[1].style.borderColor = "#6699ff";
      b = true;
    }
    else if(b){
      document.getElementsByClassName("slot")[1].style.backgroundColor = "#d8f7cd";
      document.getElementsByClassName("slot")[1].style.color = "black";
      document.getElementsByClassName("slot")[1].style.borderColor = "black";
      b = false
    }
  }
  function myfunction2(){
    if (!c) {
      document.getElementsByClassName("slot")[2].style.backgroundColor = "#6699ff";
      document.getElementsByClassName("slot")[2].style.color = "white";
      document.getElementsByClassName("slot")[2].style.borderColor = "#6699ff";
      c = true;
    }
    else if(c){
      document.getElementsByClassName("slot")[2].style.backgroundColor = "#d8f7cd";
      document.getElementsByClassName("slot")[2].style.color = "black";
      document.getElementsByClassName("slot")[2].style.borderColor = "black";
      c = false;
    }
  }
</script>
<script type="text/javascript">
  const articles = [];
  const avatar = document.getElementById('img');
  const authorContainer = document.getElementById('author');
  const jobContainer = document.getElementById('job');
  const infoContainer = document.getElementById('info');

  function setArticle({ imgSrc, author, job, info }) {
    avatar.src = imgSrc
    avatar.title = author.toUpperCase()
    authorContainer.textContent = author
    jobContainer.textContent = job
    infoContainer.textContent = info
  }

  function Article(imgSrc, author, job, info) {
    this.imgSrc = imgSrc;
    this.author = author;
    this.job = job;
    this.info = info;
  }

  articles.push(new Article(
    'https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883334/person-1_rfzshl.jpg',
    'Susan Smith',
    'WEB DEVELOPER',
    'I\'m baby meggings twee health goth +1. Bicycle rights tumeric chartreuse before they sold out chambray pop-up. Shaman humblebrag pickled coloring book salvia hoodie, cold-pressed four dollar toast everyday carry'
  ));

  articles.push(new Article(
    'https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883409/person-2_np9x5l.jpg',
    'Anna Johnson',
    'WEB DESIGNER',
    'Helvetica artisan kinfolk thundercats lumbersexual blue bottle. Disrupt glossier gastropub deep v vice franzen hell of brooklyn twee enamel pin fashion axe.photo booth jean shorts artisan narwhal.'
  ));

  articles.push(new Article(
    'https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883417/person-3_ipa0mj.jpg',
    'Peter Jones',
    'INTERN',
    'Sriracha literally flexitarian irony, vape marfa unicorn. Glossier tattooed 8-bit, fixie waistcoat offal activated charcoal slow-carb marfa hell of pabst raclette post-ironic jianbing swag.'
  ));

  articles.push(new Article(
    'https://res.cloudinary.com/diqqf3eq2/image/upload/v1586883423/person-4_t9nxjt.jpg',
    'Bill Anderson',
    'THE BOSS',
    'Edison bulb put a bird on it humblebrag, marfa pok pok heirloom fashion axe cray stumptown venmo actually seitan. VHS farm-to-table schlitz, edison bulb pop-up 3 wolf moon tote bag street art shabby chic.'
  ));

  let curArticle = 0;

  const [leftArrow, rightArrow] = document.getElementsByClassName('arrow-btn');

  const showCurArticle = () => setArticle(articles[curArticle])

  leftArrow.addEventListener('click', () => {
    const prevArticle = curArticle - 1;
    curArticle  = prevArticle >= 0 ? prevArticle : articles.length - 1;
    showCurArticle()
  })

  rightArrow.addEventListener('click', () => {
    const nextArticle = curArticle + 1;
    curArticle  = nextArticle < articles.length ? nextArticle : 0;
    showCurArticle()
  })

  document.getElementsByClassName('surprise-btn')[0]
    .addEventListener('click', () => {
      let newArticle = getRandomInt(articles.length, curArticle)
      curArticle =  newArticle
      showCurArticle()
    })

  function getRandomInt(max, notEqual) {
    let random =  Math.floor(Math.random() * max)
    return random !== notEqual ? random : getRandomInt(max, notEqual)
  }

  window.addEventListener('load', () => showCurArticle())
</script>
</body>
</html>