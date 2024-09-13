<?php
include("../../config.php");
session_start();

if(isset($_SESSION['name'])){
   $name =  $_SESSION['name'];
   $status = $_SESSION['status'];
}

$query = mysqli_query ($connection,"select * from books");
$adminOrUser = mysqli_query ($connection,"select * from login");


?>


<?php 

if (isset($_POST['add'])) {
// var_dump($_POST);
$card_number = $_POST['card_num'];
$ex_date = $_POST['ex_date'];
$cvv = $_POST['cvv'];

$insertquery = mysqli_query($connection, "INSERT INTO `bank_details`(`card_number`, `expiry_date`, `cvv`) VALUES ('$card_number','$ex_date','$cvv')");

if($insertquery){

header('Location: ../../status.php');

// echo"data inserted successfully";


} else {
echo "Failed to insert data: ";
}
}


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

         .text_container #buynowbtn {
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
    /* Logo Styling */
    .card-logos {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .card-logos img {
        height: 30px;
        width: auto;
    }

    .btn:hover {
      background-color: #45a049;
    }

    /* Input Styling */
input[type="number"] {
        width: calc(100% - 12px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }

    input[type="date"] {
        width: calc(100% - 12px);
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }

    input[type="number"]:focus {
        border-color: lightgreen;
        outline: none;
    }

    input[type="date"]:focus {
        border-color: lightgreen;
        outline: none;
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
} ?></i></a></li>
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
                  </div>                  <div class="main">
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
                        <img src="../../images/flag-uk.png" alt="flag" class="mr-4 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu ">
                           <a href="#" class="dropdown-item">
                           <img src="../../images/flag-france.png" class="mr-4" alt="flag">
                           French
                           </a>
                        </div>
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
      <div class="container main-content">
                <div class="image"><img src="./Ip.PNG" alt="" class="imgbook"></div>
                <div class="text_container">
                <h2 >Chapter 1</h2>
                <p>
                    Prologue Pt. 1
‘2020, the year everything changed.’

Gates.

They were doors, connected to another dimension. In response to the sudden appearances, governments around the world moved quickly. They sent their troops into the Gates, racing to be the ones to explore the unknown world.

‘However, there were no living survivors.’

Not a single person returned from the Gates alive. A long time had passed before the first survivor returned. The survivor returned as a completely different being from what we had once called the human race.

A superhuman-like being, a ‘Hunter.’

Blessed by transcendent beings, they had gained special abilities and the power to manipulate magic power.

Upon his return, the first survivor told the world of the situation within the Gates.

There were monsters. They were never before seen creatures that could have only existed in fairy tales, clearly an enemy of humanity.

However, alongside the first survivor’s return came the ‘Gate Breaks.’

After a long period of neglect, the Gates began to crumble. Hordes of monsters with unimaginable power poured out and slaughtered innumerable people, bringing the world to its knees. While the first survivor tirelessly worked to defeat the monsters, his efforts were like a grain of sand against the endless tide. Eventually, he too lost his life against the monsters.

‘Subsequently, countless Hunters were born.’

With the world under threat, humanity on the brink, and countries overrun with monsters, came the rise of more and more Hunters. After their first appearance, these Hunters were later called the ‘First Hunters’. As their birth rate accelerated, a counterattack began. While these newly born Hunters were weak, they gradually grew stronger through battles against the monsters.

Then came the ‘Sponsors.’ The same transcendent beings who had granted Hunters incredible power. These Hunters grew stronger through the support of the Sponsors, who gave blessings to those who committed great feats. The world, on the verge of destruction, finally began to return to normal again. The Hunters defeated monsters, reclaimed territories, and saved people. Eventually, the number of Hunters increased exponentially, quickly reducing the number of world-destroying monsters.

‘Nevertheless, the Gates continued to appear.’

So much so that even the soaring number of Hunters were unable to handle it.

The breaks occurred again, and the threat of destruction loomed in the distance. A vicious cycle of hope and despair continued, repeating without end.
                    
                    
                    
                    
                    </p>
      
      <!-- Buy Now button -->
      <?php
      if (isset($_SESSION['name'])) {
         // User is logged in, show buy now button
         echo '<button id="buynowbtn" type="button" class="btn btn-dark btn-color-light dd" data-toggle="modal" data-target="#buyNowModal">Buy Now</button>';
      }
      ?>
      
   <!-- Bootstrap Modal -->
   <div class="modal fade" id="buyNowModal" tabindex="-1" role="dialog" aria-labelledby="buyNowModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="buyNowModalLabel">Buy Now</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <!-- Add your modal content here -->
               <h2>Payment Details</h2>
        <!-- Card Logos -->
        <div class="card-logos">
            <img src="../../images/visa.png" alt="Visa Logo">
            <img src="../../images/mastercard.png" alt="Mastercard Logo">
            <img src="../../images/paypal.png" alt="PayPal Logo">
        </div>
        <!-- Card Details -->
        <form id="paymentForm" method="POST">
            <label for="cardNumber">Card Number:</label> <br>
            <input type="number" id="cardNumber" placeholder="Enter card number" required maxlength="16" name="card_num"><br><br>
            <label for="expiryDate">Expiry Date:</label> <br>
            <input type="date" id="expiryDate" name="ex_date" required><br><br>
            <label for="cvv">CVV:</label> <br>
            <input type="number" id="cvv"placeholder="CVV" name="cvv" required maxlength="4"><br><br>
           
            <button type="submit" class="btn btn-secondary" name="add">Confirm Payment</button>
            
         </form>
      </div>    
         </div>
      </div>
   </div>
   <!-- text end -->
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