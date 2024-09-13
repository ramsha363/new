<?php
include("../../config.php");
session_start();

if(isset($_SESSION['name'])){
   $name =  $_SESSION['name'];
   $status = $_SESSION['status'];
}

$query = mysqli_query ($connection,"select * from books");
$adminOrUser = mysqli_query ($connection,"select * from login")

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="../../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="../../css/owl.carousel.min.css">
      <link rel="stylesoeet" href="../../css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <style>


         .text_container {
            margin-bottom: 30px;
         }

         .text_container a {
            text-align: center;
            margin-left: 500px;
            margin-top: 30px;
            font-size: 25px;
            border: 2px solid black;
            padding: 12px;
         }
         a.dd {
  display: inline-block;
  padding: 10px 20px;
  text-decoration: none;
  background-color: #252525; /* Green background color */
  color: white; /* White text color */
  border-radius: 5px; /* Rounded corners */
  font-weight: bold;
}

/* Hover effect */
a.dd:hover {
  background-color: #45a049; /* Darker green on hover */
}

/* Optional: Add some margin or spacing */
a.dd {
  margin: 10px;
}
      </style>
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><a href="#">Best Sellers</a></li>
                           <li><a href="#">Gift Ideas</a></li>
                           <li><a href="#">New Releases</a></li>
                           <li><a href="#">Today's Deals</a></li>
                           <li><a href="#">Customer Service</a></li>
                           <li><a href="#"><i class="fa fa-user-circle" style="margin-left:90px" aria-hidden="true">
                        <?php if(isset($_SESSION['name'])){
   echo $name;
   echo $status;
} ?>
                     </i></a></li>
                      
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="../../images/footer-logo.png"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="../../index.php">Home</a>
                     <a href="../../contact_us.php">Contact Us</a>
                     <a href="../../about_us.php">About Us</a>
                     <?php
         // Check if the user is logged in
         if (isset($_SESSION['name'])) {
            // User is logged in, show logout button
            echo '<a href="../../logout.php">Logout</a>';
         } 
         else {
            // User is not logged in, show login button
            echo '<a href="../../login.php">Login</a>';
            echo '<a href="../../sign_up.php">Sign-Up</a>';
         }
         ?>
         </div>
         <span class="toggle_icon" onclick="openNav()"><img src="../../images/toggle-icon.png"></span>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Popular Books 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="../overgeared/fantasy_overgeared.php">Overgeared</a>
                        <a class="dropdown-item" href="../debuff_master/fantasy_debuff_master.php">Debuff Master</a>
                        <a class="dropdown-item" href="../from_today,I_m_a_player/fantasy_ftiap.php">From Today I am a Player</a>
                        <a class="dropdown-item" href="../interstellar_survival_invasion/sci_fi_i_s_i.php">Interstellar Survival</a>
                        <a class="dropdown-item" href="../ultragene_warlord/sci_fi_ult_warlord.php">Ultra Warlord</a>
                        <a class="dropdown-item" href="../star_odyssey/sci_fi_star_od.php">Star Odyssey</a>
                        
                        <a class="dropdown-item" href="../Life_Once_Again/Once_Again.php">Once Again</a>
                        <a class="dropdown-item" href="../big_life/big_life.php">Big Life</a>
                        <a class="dropdown-item" href="../Try_Idol/try_idol.php">Try Idol</a>
                     </div>
                  </div>
                     <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                           <button class="btn btn-secondary" type="button" style="background-color: #f26522; border-color:#f26522 ">
                           <i class="fa fa-search"></i>
                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="lang_box ">
                        <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                        <img src="../../images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="../../images/flag-france.png" class="mr-2" alt="flag">
                           French
                           </a>
                        </div>
                     </div>
                     <div class="login_menu">
                        <ul>
                           <li><a href="#">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                           <li><a href="#">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start To <br> Read Your Favourite <br> Books</h1>
                              <div class="buynow_bt"><a href="../debuff_master/fantasy_debuff_master.php">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start To <br> Read Your Favourite <br> Books</h1>
                              <div class="buynow_bt"><a href="../interstellar_survival_invasion/sci_fi_i_s_i.php">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start To <br> Read Your Favourite <br> Books</h1>
                              <div class="buynow_bt"><a href="../big_life/big_life.php">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
 
      <!-- text start -->
      <div class="container">
                <div class="image"><img src="./so.PNG" alt=""class="imgbook"></div>
                <div class="text_container">
                <h2 >Chapter 1</h2>
                <p>
                    Prologue:

                    Noxious fumes billowed out from the countless cracks that marred the beaten earth, forming a black veil that obscured the red sunset. Tens of thousands of fearful faces trudged forward on a muddy path, their constant sobs accented by the echoing screams of those who fell into the cracks. This river of despair was nominally guarded by a group of cultivators, once-normal people who had now become unimaginably powerful beings half a year after the Apocalypse struck Earth. They were positioned along the path, each a set distance from the previous, and each responsible for their own section.

Near the back of this large group, Lu Yin suddenly looked up towards a large, burning tree in the distance. A hair-raising sound of flesh being ground apart filled the air before being quickly followed by a loud howl. Then, just moments later, a two-meter-long hound with scarlet pupils charged at the group. Many panicked and screamed at the grisly sight of its large jaws dripping with fresh blood, but Lu Yin’s will remained unflustered as he grabbed an odd weapon hanging from his waist. It seemed to be just a metal rod, but were it sharpened enough, it could eventually become a blade. He jumped forward and smashed the beast’s head wide open with a single heavy swing, dyeing the nearby grass red with blood. Only after the group witnessed the wild hound’s death did they regain a modicum of calm and quell their fears enough to resume walking.


                                      </p>
                                      <?php 
                    if (isset($_SESSION['name'])) {
            // User is logged in, show buynow button
            echo '<a class="dd" href="../We-Hunt_the-Flame.pdf" download>Download</a>';
            } ?>
               </div>
            </div>

      <!-- text end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="../../images/footer-logo.png"></a></div>
            <div class="input_bt">
               <input type="text" class="mail_bt" placeholder="Your Email" name="Your Email">
               <span class="subscribe_bt" id="basic-addon2"><a href="#">Subscribe</a></span>
            </div>
            <div class="footer_menu">
               <ul>
                  <li><a href="#">Best Sellers</a></li>
                  <li><a href="#">Gift Ideas</a></li>
                  <li><a href="#">New Releases</a></li>
                  <li><a href="#">Today's Deals</a></li>
                  <li><a href="#">Customer Service</a></li>
               </ul>
            </div>
            <div class="location_main">Help Line  Number : <a href="#">+1 1800 1200 1200</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="../../js/jquery.min.js"></script>
      <script src="../../js/popper.min.js"></script>
      <script src="../../js/bootstrap.bundle.min.js"></script>
      <script src="../../js/jquery-3.0.0.min.js"></script>
      <script src="../../js/plugin.js"></script>
      <!-- sidebar -->
      <script src="/html/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="/html/js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
</html>