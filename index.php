<?php 
    session_start();
    if( isset($_SESSION['Email']) && isset($_SESSION['T_name'])){


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DAC TOUR MANAGEMENT </title>

<!-- //CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //CSS-->

<link href="cssfiles/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="cssfiles/chocolat.css" type="text/css" media="screen">
<link href="cssfiles/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="cssfiles/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="cssfiles/jquery-ui.css" />
<link href="cssfiles/font-awesome.css" rel="stylesheet">
<link href="cssfiles/style.css" rel="stylesheet" type="text/css" media="all" />



<!--Script : used to include the Modernizr library in a web page-->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<!--fonts: By including this link element in an HTML document,
    the web page can make use of the Oswald font family in different
     weights, without the need to install the font on the user's computer. -->


<!--//fonts-->

</head>
<body>

        <div class="hero1">

        <nav>
            <img src="DAC  tour Logo.png" alt="" class="logo1">
            <ul>
                <li><a href=""></a>Home</li>
                <li><a href="#about"></a>About</li>
                <li><a href="#gallery"></a>Gallery</li>
                <li><a href="#restaurant"></a>Restaurant </li>
                <li><a href="#hotel"></a>Hotel</li>
                <li><a href="#transposr"></a>Transport</li>
                <li><a href="#contact"></a>Contact Us</li>
            </ul>
            <img src="user.png" alt="" class="user-pic1" onclick="toggleMenu()">
            <!-- Start menu-->
            <div class="sub-menu-wrap1" id="subMenu1">
                <div class="sub-menu01">
                    <div class="user-info1">
                        <img src="user.png" alt="">
                        <h3><?php echo $_SESSION['T_name']; ?></h3>
                    </div>
                    <hr>
                                <a href="edit.php?email=<?php echo $_SESSION['Email']; ?>" class="sub-menu-link">
                                        <img src="profile.png">
                                        <p> Edit Profile</p>
                                        <span>></span>
                                    </a>

                                    <a href="#" class="sub-menu-link">
                                        <img src="setting.png">
                                        <p>Settings & Privacy</p>
                                        <span>></span>
                                    </a>

                                    <a href="#" class="sub-menu-link">
                                        <img src="help.png">
                                        <p>Help & Supports</p>
                                        <span>></span>
                                    </a>

                                    <a href="logout.php" class="sub-menu-link" style=" cursor: pointer !important; " >
                                        <img src="logout.png">
                                        <p>Logout</p>
                                        <span>></span>
                                    </a>
                </div>
            </div>
        </nav>
        <div class="texth">
            <h1>DAC Tour <br><span>Management</span> <br>Company</h1>
            <p class="par">"Empowering Your Travel Dreams,With Expertly Crafted Tours DAC" 
                <br> “Life is either a daring adventure, or nothing at all” <br>
                 Come with us and anjoy the word.
                <br> Would you like to travel with us?</p>
                <button class="cn"><a href="#plan">MAKE PLAN</a></button>
            </div>
            
        </div>


	<!-- Video -->
        <div class="main">
            <video autoplay loop muted>
                <source src="0001_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video>
        </div>
    </div>
<!-- use to load the icons -->
     <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
		

<!--//Header-->

<div id="availability-agileits">
    <div class="col-md-12 book-form-left-w3layouts">
        <a href=""><marquee class="text-animation" width="100%" direction="left" height="100px">
    THERE IS NO TROUBLE ON THE WAY, SAVE RIDE!!! TOUR MANAGEMENT COMPANY!!!  HOT OFFERS 2023 !!!         OFF 25% FOR ROOMS !!!  OFF 45% IN TRAVEL COST !!!   OFF 20% IN FOOD ITEMS IN RESTORANT!!!  SPECIAL BLOG SITE !!! 
    </marquee></a>
    </div>
    
                <div class="clearfix"> </div>
    </div>
 
    <!--  -->
    <!-- banner-bottom -->

	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span> Our Special Services</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">BEDROOMS WITH BELCONI</h4>
							<span class="cbp-ig-category">BEST TRAVEL DAC</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">hIGH CLASS HOTELS</h4>
							<span class="cbp-ig-category">BEST TRAVEL DAC</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">SPECIAL FOOD ITEMS</h4>
							<span class="cbp-ig-category">BEST TRAVEL DAC</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">BEST VEHICLES & GUIDE</h4>
							<span class="cbp-ig-category">BEST TRAVEL DAC</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->

    
    <!--  -->



<!-- /about -->
<div class="about-wthree" id="about">
    <div class="container">
             <div class="ab-w3l-spa">
                      <h3 class="title-w3-agileits title-black-wthree">ABOUT OUR BEST TRAVEL DAC</h3> 
                     <p class="about-para-w3ls">"Welcome to DAC Tour Management Company, where we strive to provide exceptional travel experiences to our clients. With years of experience in the industry, we have a deep understanding of the needs and expectations of travelers. Our team of experts is dedicated to creating customized itineraries that reflect each individual's interests and preferences, ensuring that every trip is a unique and unforgettable experience. We pride ourselves on our attention to detail, exceptional customer service, and commitment to sustainability, making us the trusted choice for all your travel needs. Join us on a journey of discovery and adventure as we take you to some of the world's most beautiful destinations."</p>
                     <img src="images/about1.jpg" class="img-responsive" alt="Hair Salon">
                                  <div class="w3l-slider-img">
                                      <img src="images/about2.jpg" class="img-responsive" alt="Hair Salon">
                                  </div>
                                 <div class="w3ls-info-about">
                                      <h4>You'll love all our services!!!</h4>
                                      <p>"Discover the world with us: exceptional experiences." </p>
                                  </div>
            </div>
         <div class="clearfix"> </div>
</div>
</div>

<!-- //about -->

<!-- Tour Plan -->
<div class="planing" id="plan">
    <h3 class="title-w3-agileits title-black-wthree" style="color: #fff;">TOUR PLAN & SUGGESTION'S BEST TRAVEL DAC</h3> 
</div>

<div class="budget_form" 
style="background-color: rgb(236, 230, 230); 
border-radius: 1%;
border-color: #c46b0d;
color:rgb(2, 1, 61);
 padding: 1%; align-items: center;
 margin-top: 4%;
 margin-left: 10%;
 margin-right: 10%;
 text-align: center;
 backdrop-filter: blur(200px);
 " >
 
    <div class="enter_budget" id="plan01">
        <form action="crud/index.php" method="post">
            <h2>Enter Your Budget & Destination</h2>
            <hr>
            <br>
            <label for="budget" >Budget:</label>
            <input type="number" class="budget" name="budget" required min="1" oninput="validity.valid || (value = '1')" placeholder="12000">
            <label for="budget" >Number Of Days:</label>
            <input type="number" class="budget" name="days" required min="1" oninput="validity.valid || (value='1')" placeholder="5" >
            <label for="budget" >Select City:</label>
                <select name="city" id="city" required>
                    <option value="">---Select City---</option>
                    <?php 
                    include 'config.php';
                    
            $sql = "SELECT * FROM destination;";

            $result = mysqli_query($conn,$sql) or die("SQL Qury Not RUN");

            while($row = mysqli_fetch_assoc($result)){

                 ?>
                    <option value="<?php echo $row["DestinationID"]?>"><?php echo $row["DestinationName"]?></option>
                 <!--   <option value="Multan">Multan</option>
                    <option value="Gilgit">Gilgit</option>
                    <option value="Gilgit">Gilgit</option>
                    <option value="Taxila">Taxila</option>
                    <option value="Chitral">Chitral</option>
                    <option value="Murree">Murree</option>
                    <option value="Sawat">Sawat</option>
            -->
                    <?php } ?>
                </select>
          <!--  <label for="budget" >Select Places:</label>
                <select name="Places" id="Places">
                    <option value="">---Select Places---</option>
                    <option value="p01">Tomb of Hazrat Shah Rukn-e-Alam</option>
                    <option value="p02">Fort Kohna Qasim Garden</option>
                    <option value="p03">Ghanta Ghar/Municipal</option>
                    <option value="p04">Qilla Kohna Qasim Bagh Stadium</option>
                    <option value="p05">Shah Shams Darbar Multan</option>
                    <option value="p06">Shrine of Bahauddin Zakriya</option>
                </select>
             -->
                <button style=" 
                align-items: center;
                    width: 15%;
                    height: 35px;
                    border-radius: 5px;
                    background-color: #e79a0b;
                    align-items: center;
                    color: rgb(5, 2, 68);
                    font-size: larger;
                    text-transform: uppercase;
                    font-weight: bold;
                    border: none;
                    margin: 3%;
                    margin-top: 1.1%;
                    cursor: pointer;
                    
                    
                "> Make Plan</button>
                <br>
                 <!-- <p><a href="crud/add.php">Make Your Own Plan</a></p> -->
        </form>
    </div>
</div>
<!--inpage styling-->
<style>
	* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.team-head{
	text-align:center;
}

.advantages{
	background: #59F2E4 ;
}

img {
  max-width: 100%;
  height: auto;
}

a {
  color: #333;
  text-decoration: none;
  -webkit-transition: color 0.25s, border-color 0.25s, background-color 0.25s,
    opacity 0.25s ease 0s;
  -moz-transition: color 0.25s, border-color 0.25s, background-color 0.25s,
    opacity 0.25s ease 0s;
  -o-transition: color 0.25s, border-color 0.25s, background-color 0.25s,
    opacity 0.25s ease 0s;
  transition: color 0.25s, border-color 0.25s, background-color 0.25s,
    opacity 0.25s ease 0s;
}

a:hover {
  text-decoration: none;
  outline: none;
  color: #18c9de;
}

h3 {
  font-weight: 400;
  line-height: 1.2;
  color: #333;
  margin-top: 14px;
  margin-bottom: 18px;
}

.team-member {
  margin-top: 20px;
  margin-bottom: 20px;
}

.team-member.default .person-inner {
  overflow: hidden;
}

.team-member.default .thumb-avatar {
  position: relative;
  margin-bottom: 32px;
}

.team-member.default .thumb-avatar > a {
  position: relative;
  display: block;
}

.team-member.default .thumb-avatar > a::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0, 0, 0, 0.2);
  opacity: 0;
  -webkit-transition: opacity 0.4s ease 0s;
  -moz-transition: opacity 0.4s ease 0s;
  -o-transition: opacity 0.4s ease 0s;
  transition: opacity 0.4s ease 0s;
}

.team-member.default .thumb-avatar:hover > a::before {
  opacity: 1;
}

.team-member.default .list-social {
  position: absolute;
  top: 0;
  left: -54px;
  width: 54px;
  text-align: center;
  background-color: #fff;
  padding: 10px 0;
  -webkit-transition: left 0.4s ease 0s;
  -moz-transition: left 0.4s ease 0s;
  -o-transition: left 0.4s ease 0s;
  transition: left 0.4s ease 0s;
  z-index: 1;
}

.team-member.default .person-inner:hover .list-social {
  left: 0;
}

.team-member.default .list-social a {
  display: block;
  line-height: 40px;
  font-size: 16px;
}

.team-member.default .list-social a:not(:hover) {
  color: #000;
}

.team-member.default .name {
  font-size: 18px;
  margin-top: 0;
  margin-bottom: 5px;
}

.team-member.default .name a:not(:hover) {
  color: inherit;
}

.team-member.default .positions {
  margin-bottom: 0;
}

@media (max-width: 1024px) {
  .team-member.default .thumb-avatar {
    margin-bottom: 0;
  }
  .team-member.default img {
    width: 100%;
  }
  .team-member.default .list-social {
    position: static;
    width: auto;
    background-color: transparent;
    padding: 5px 0;
  }
  .team-member.default .list-social a {
    display: inline-block;
    min-width: 40px;
  }
  .team-member.default .content-person {
    text-align: center;
  }
}

</style>
 <!----------------------------------------->
<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
    <h3 class="title-w3-agileits title-black-wthree">Gallery</h3>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>TOUR SPOT</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>HOTEL ROOMS</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>HOTEL ROOMS</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>TOUR SPOT</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g4.jpg" class="swipebox"><img src="images/bus1.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>VEHICLE SERVICE</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g5.jpg" class="swipebox"><img src="images/bus2.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>VEHICLE SERVICE</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
               </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g6.jpg" class="swipebox"><img src="images/bus3.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>VEHICLE SERVICE</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                  </div>
              </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g6.jpg" class="swipebox"><img src="images/bus4.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>VEHICLE SERVICE</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                  </div>
              </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g6.jpg" class="swipebox"><img src="images/food1.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>SPECIAL FOOD ITEMS</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                  </div>
              </a>
           </div>
               <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g9.jpg" class="swipebox"><img src="images/food2.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>SPECIAL FOOD ITEMS</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g10.jpg" class="swipebox"><img src="images/food3.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>BEST TRAVEL DAC</h4>
                   <h6>SPECIAL FOOD ITEMS</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>
           <div class="col-md-3 gallery-grid gallery1">
               <a href="images/g4.jpg" class="swipebox"><img src="images/food4.jpg" class="img-responsive" alt="/">
                   <div class="textbox">
                   <h4>UN RISBEST TRAVEL DAC</h4>
                   <h6>SPECIAL FOOD ITEMS</h6>
                       <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
                   </div>
           </a>
           </div>

           <div class="clearfix"> </div>
</section>


<!-- //gallery -->


	 <!-- Pakistan Restaurant -->

     <div class="plans-section" id="RESTAURANT">
        <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">PAKISTAN RESTAURANT</h3>
               <div class="priceing-table-main">
        <div class="col-md-3 price-grid">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/pr1.jpg" alt=" " class="img-responsive" />
                   <h4>Monal Restaurant</h4>
               </div>
               <div class="price-gd-bottom">
                      <div class="price-list">
                           <ul>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           
                            </ul>
                   </div>
                   <div class="price-selet">	
                       <h3><span>PKR</span>5000+</h3>						
                       <a href="admin/reservation.php" >Oredr Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid ">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/pr2.jpg" alt=" " class="img-responsive" />
                   <h4>Lalqila Restaurant</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                           <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>7000+</h3>
                       <a href="admin/reservation.php" >Oredr Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid lost">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/pr3.jpg" alt=" " class="img-responsive" />
                   <h4>Kolachi Restaurant</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>3000+</h3>
                       <a href="admin/reservation.php" >Oredr Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid wthree lost">
           <div class="price-block agile">
               <div class="price-gd-top ">
                   <img src="images/pr4.jpg" alt=" " class="img-responsive" />
                   <h4>Sultan Pepper</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span> 2500+</h3>
                       <a href="admin/reservation.php" >Order Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="clearfix"> </div>
   </div>
</div>
</div>
<!--// Pakistan Restaurent -->


	  <!-- UAE Restaurent -->

      <div class="plans-section" id="rooms">
        <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">UAE RESTARANT</h3>
               <div class="priceing-table-main">
        <div class="col-md-3 price-grid">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/dr1.jpg" alt=" " class="img-responsive" />
                   <h4>PRODEA-APM</h4>
               </div>
               <div class="price-gd-bottom">
                      <div class="price-list">
                           <ul>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           
                            </ul>
                   </div>
                   <div class="price-selet">	
                       <h3><span>PKR</span>10000+</h3>						
                       <a href="admin/reservation.php" >Oredr Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid ">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/dr2.jpg" alt=" " class="img-responsive" />
                   <h4>Indochine</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                           <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>1000+</h3>
                       <a href="admin/reservation.php" >Order Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid lost">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/dr3.jpg" alt=" " class="img-responsive" />
                   <h4>BOCA Restaurant</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>3000+</h3>
                       <a href="admin/reservation.php" >Oredr Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid wthree lost">
           <div class="price-block agile">
               <div class="price-gd-top ">
                   <img src="images/dr4.jpg" alt=" " class="img-responsive" />
                   <h4>COYA Restaurant</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span> 2000+</h3>
                       <a href="admin/reservation.php" >Oredr Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="clearfix"> </div>
   </div>
</div>
</div>
<!--// UAE Restaurent  -->



	  <!-- Hotel in pakistan  -->

      <div class="plans-section" id="hotel">
        <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">HOTEL PAKISTAN</h3>
               <div class="priceing-table-main">
        <div class="col-md-3 price-grid">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/ph1.jpg" alt=" " class="img-responsive" />
                   <h4>Pearl Continental</h4>
               </div>
               <div class="price-gd-bottom">
                      <div class="price-list">
                           <ul>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           
                            </ul>
                   </div>
                   <div class="price-selet">	
                       <h3><span>PKR</span>25000</h3>						
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid ">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/ph2.jpg" alt=" " class="img-responsive" />
                   <h4>Royal Swiss</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                           <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>13000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid lost">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/ph3.jpg" alt=" " class="img-responsive" />
                   <h4>Nishat Hotel</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>10000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid wthree lost">
           <div class="price-block agile">
               <div class="price-gd-top ">
                   <img src="images/ph4.jpg" alt=" " class="img-responsive" />
                   <h4>Serena Hotel</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>25000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="clearfix"> </div>
   </div>
</div>
</div>
<!--// Hotel in pakistan -->




<!-- Hotel In turkey -->

<div class="plans-section" id="rooms">
        <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">HOTEL TURKEY</h3>
               <div class="priceing-table-main">
        <div class="col-md-3 price-grid">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/th1.jpg" alt=" " class="img-responsive" />
                   <h4>Hotel Les Ottoman</h4>
               </div>
               <div class="price-gd-bottom">
                      <div class="price-list">
                           <ul>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           
                            </ul>
                   </div>
                   <div class="price-selet">	
                       <h3><span>PKR</span>45000</h3>						
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid ">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/th2.jpg" alt=" " class="img-responsive" />
                   <h4>Barceló Istanbul</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                           <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>40000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid lost">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/th3.jpeg" alt=" " class="img-responsive" />
                   <h4>Delphin Diva</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>30000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid wthree lost">
           <div class="price-block agile">
               <div class="price-gd-top ">
                   <img src="images/th4.jpg" alt=" " class="img-responsive" />
                   <h4>Calista Luxury</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>25000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="clearfix"> </div>
   </div>
</div>
</div>
<!--// Hotel in turkey -->

<!-- Hotel in UAE -->

<div class="plans-section" id="rooms">
        <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">Hotel UAE</h3>
               <div class="priceing-table-main">
        <div class="col-md-3 price-grid">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/dh1.jpg" alt=" " class="img-responsive" />
                   <h4>Madan Hotel</h4>
               </div>
               <div class="price-gd-bottom">
                      <div class="price-list">
                           <ul>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           
                            </ul>
                   </div>
                   <div class="price-selet">	
                       <h3><span>PKR</span>50000</h3>						
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid ">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/dh2.jpg" alt=" " class="img-responsive" />
                   <h4>Flora-In-Hotel</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                           <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>10000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid lost">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/dh3.jpg" alt=" " class="img-responsive" />
                   <h4>Patamount Hotel</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>31000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid wthree lost">
           <div class="price-block agile">
               <div class="price-gd-top ">
                   <img src="images/dh4.jpg" alt=" " class="img-responsive" />
                   <h4>Millennium Hotel</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>Pkr</span> 25000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="clearfix"> </div>
   </div>
</div>
</div>
<!--// Hotel In UAE -->

<!-- Transport -->

<div class="plans-section" id="transport">
        <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">TRANSPORT</h3>
               <div class="priceing-table-main">
        <div class="col-md-3 price-grid">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/tr1.jpg" alt=" " class="img-responsive" />
                   <h4>Advance Coasters</h4>
               </div>
               <div class="price-gd-bottom">
                      <div class="price-list">
                           <ul>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                   <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           
                            </ul>
                   </div>
                   <div class="price-selet">	
                       <h3><span>PKR</span>5000</h3>						
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>

       <div class="col-md-3 price-grid ">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/tr2.jpg" alt=" " class="img-responsive" />
                   <h4>Business Class Plain</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                           <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                  
                   <div class="price-selet">
                       <h3><span>PKR</span>30000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid lost">
           <div class="price-block agile">
               <div class="price-gd-top">
               <img src="images/tr3.jpg" alt=" " class="img-responsive" />
                   <h4>Bullet Train</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span>4000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="col-md-3 price-grid wthree lost">
           <div class="price-block agile">
               <div class="price-gd-top ">
                   <img src="images/tr4.jpg" alt=" " class="img-responsive" />
                   <h4>Daring & Excitement</h4>
               </div>
               <div class="price-gd-bottom">
                   <div class="price-list">
                       <ul>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                           <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                       </ul>
                   </div>
                   <div class="price-selet">
                       <h3><span>PKR</span> 7000</h3>
                       <a href="admin/reservation.php" >Book Now</a>
                   </div>
               </div>
           </div>
       </div>
       <div class="clearfix"> </div>
   </div>
</div>
</div>
<!--// Transport -->

    <!-- visitors -->
	<div class="w3l-visitors-agile" >
		<div class="container">
                 <h3 class="title-w3-agileits title-black-wthree">OUR VISITORS EXPERIENCE</h3> 
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/visitor.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/visitor1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								REVIRE REPORT
								</h4>
								<p>IT WAS A GREAT EXPERIENCE WITH "BEST TRAVEL DAC". 
									THIS IS AN ADVANCED TOUR MANAGEMENT SITE EVER MET.
									ALL THE BEST WISHES FOR YOU GUYS. </p>
								<h5>MR. KAMAL AND ROZI</h5>
								<p>UAE</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/visitor.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/tou4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								REVIRE REPORT
								</h4>
								<p>IT WAS A GREAT EXPERIENCE WITH "BEST TRAVEL DAC". 
									THIS IS AN ADVANCED TOUR MANAGEMENT SITE EVER MET.
									ALL THE BEST WISHES FOR YOU GUYS. </p>
								<h5>MUSFIRAH AND HER FRIENDS</h5>
								<p>TURKEY</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/visitor.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/tou1.png" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								REVIRE REPORT
								</h4>
								<p>IT WAS A GREAT EXPERIENCE WITH "BEST TRAVEL DAC". 
									THIS IS AN ADVANCED TOUR MANAGEMENT SITE EVER MET.
									ALL THE BEST WISHES FOR YOU GUYS. </p>
								<h5>MR SELIM AND HIS FAMILY</h5>
								<p>PAKISTAN</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/visitor.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/tou3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								<i class="fa fa-star-o" aria-hidden="true"></i>
								REVIRE REPORT
								</h4>
								<p>IT WAS A GREAT EXPERIENCE WITH "BEST TRAVEL DAC". 
									THIS IS AN ADVANCED TOUR MANAGEMENT SITE EVER MET.
									ALL THE BEST WISHES FOR YOU GUYS. </p>
								<h5>MR SELIM AND HIS FAMILY</h5>
								<p>CHINA</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- visitors -->


<!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For New Updates Letters</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				
                <!--php  -->

			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+92 341 5406690</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:abc@example.com">212370006@gift.edu.pk</a></p>
			<p class="contact-agile1"><strong>Address :</strong> DASKA, SIALKOT, PUNJAB PAKISTAN</p>
																
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								
							</ul>
			</div>
            
            <!-- This HTML code creates an inline frame, or "iframe", that embeds a Google Maps location map in a web page. -->
            <!-- <iframe src="https://maps.google.com/maps?q=lahore pakistan&t=&z=10&ie=UTF8&iwloc=&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
			<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3648.349368856125!2d90.320945!3d23.877227!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9a707416b7fb3c64!2sDaffodil%20International%20University!5e0!3m2!1sen!2sbd!4v1640527925831!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                <iframe src="https://maps.google.com/maps?q=lahore pakistan&t=&z=10&ie=UTF8&iwloc=&output=embed" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="clearfix"></div>
	</div>
</section>

<!-- /contact -->
			<div class="copy">
		        <p>© 2023 BEST TRAVEL DAC . All Rights Reserved | Design by <a href="index.php">Muhammad Umar Gujjar, Usama Gujjar</a> </p>
		    </div>
<!--/footer -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/hero1.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<script>
    let subMenu1 = document.getElementById("subMenu1");

    function toggleMenu(){
        subMenu1.classList.toggle("open-menu");
    }
</script>


</body>
</html>

<?php
    }else{

        header("Location: start.php");
        exit();  
    }
 ?>