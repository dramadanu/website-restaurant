<?php

@include 'config.php';

if(isset($_POST['order_btn'])){

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for shopping!</h3>
         <div class='order-detail'>
            <span>".$total_product."</span>
            <span class='total'> total : Rp".$price_total."  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            <p>(*pay when product arrives*)</p>
         </div>
            <a href='products.php' class='btn'>continue shopping</a>
         </div>
      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
		<!-- animate scss -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- bootstarp css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<!-- icofont -->
		<link rel="stylesheet" href="assets/css/icofont.min.css">
		<link rel="stylesheet" href="assets/css/all.min.css">
		<!-- lightcase css -->
		<link rel="stylesheet" href="assets/css/lightcase.css">
		<!-- swiper css -->
		<link rel="stylesheet" href="assets/css/swiper.min.css">
		<!-- cusyom scss -->
        <link rel="stylesheet" href="assets/css/style.css">
        
		<title>FoodBuzz</title>
	</head>

	<body>

       <!-- Mobile Menu Start Here -->
		<div class="mobile-menu">
			<nav class="mobile-header">
				<div class="header-logo">
					<a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
				</div>
				<div class="header-bar">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</nav>
			<nav class="mobile-menu">
				<div class="mobile-menu-area">
					<div class="mobile-menu-area-inner">
						<ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a>
                            </li>
                            <li><a href="menu.php">Food Menu</a>
                            </li>  
                            <li class="checkout.html">Cart</a>
                            </li>
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- Mobile Menu Ending Here -->


		<!-- desktop menu start here -->
		<header class="header-section">
			<div class="header-area">
                <div class="header-bottom">
                    <div class="container">
                        <div class="primary-menu">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo/01.png" alt="logo"></a>
                            </div>
                            <div class="main-area">
                                <div class="main-menu">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About Us</a>
                                        </li>
                                        <li><a href="menu.php">Food Menu</a>
                                        </li>  
                                        <li class="active"><a href="#">Cart</a>
                                        </li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</header>
		<!-- desktop menu ending here -->
        

        <!-- Page Header Section Start Here -->
        <section class="page-header style-2">
            <div class="container">
                <div class="page-title text-center">
                    <h3>Booking a Online Table</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Reservation</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
       

        <!-- Booking Table Section Start Here -->
        <section class="booking-table padding-tb">
            <div class="container">
                <div class="section-header">
                    <img src="assets/images/header/sc-img.png" alt="sc-img" class="header-img">
                    <span>Book a Online Table</span>
                    <h2>Reservation Choose Your Table</h2>
                </div>
                <div class="section-wrapper">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-6 col-12">
                            <div class="bg-table"></div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="contact-form">
                                <form action="/">
                                    <div class="display-order">
                                    <?php
                                       $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                                       $total = 0;
                                       $grand_total = 0;
                                       if(mysqli_num_rows($select_cart) > 0){
                                          while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                                          $total_price = ($fetch_cart['price'] * $fetch_cart['quantity']);
                                          $grand_total = $total += $total_price;
                                    ?>
                                    <a type="text" name="name" ></a>
                                    <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
                                    <?php
                                       }
                                    }else{
                                       echo "<div class='display-order'><span>your cart is empty!</span></div>";
                                    }
                                    ?>
                                    <button href="checkout.php" type="submit" class="food-btn style-2"><span class="grand-total"> grand total :<br>Rp <?= $grand_total; ?></span></button>
                                    </div>
                                    
                                </form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Booking Table Section Ending Here -->

        <!-- link area start -->
        <div class="news_link">
            <div class="container">
                <div class="order-content">
                    <div class="content-logo">
                        <a href="#">
                            <img src="assets/images/logo/02.png" alt="logo">
                            <p>Good Food For Good Helts</p>
                        </a>
                    </div>
                    <div class="content-link">
                        <ul>
                            <li>
                                <h5>Order with best resturant</h5>
                            </li>
                            <li>
                                <a href="#" class="food-btn style-2">
                                    <span>Order Now</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- link area ends -->

        <!-- footer area start -->
        <footer class="padding-tb" style="background-image: url(assets/css/bg-image/footer-bg.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="contant-info">
                            <h5>Contact info</h5>
                            <ul class="info">
                                <li>
                                    <i class="fas fa-home"></i>
                                    <span>Suite 02 Level Tropical Center</span>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <span>+880 1234 567890, 025984712</span>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-globe-asia"></i>
                                        <span>www.foodbuzz@gmail,com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-headphones"></i>
                                        <span>support@codexcoder.com</span>
                                    </a>
                                </li>
    
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="opening-time">
                            <h5>Opening Hours</h5>
                            <ul>
                                <li>
                                    <p><i class="far fa-clock"></i>Saterday</p>
                                    <span>06:00 am - 08:00 pm</span>
                                </li>
                                <li>
                                    <p><i class="far fa-clock"></i>Sunday</p>
                                    <span>09:00 am - 02:00 pm</span>
                                </li>
                                <li>
                                    <p><i class="far fa-clock"></i>Monday</p>
                                    <span>07:00 am - 09:00 pm</span>
                                </li>
                                <li>
                                    <p><i class="far fa-clock"></i>Tuesday</p>
                                    <span>02:00 am - 06:00 pm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                        <div class="news_letter">
                            <h5>Subscribe Newsletter</h5>
                            <p>
                                Sign Up For Our Latest News & Articles. 
                                We Wont Give You Spam Mails.
                            </p>
                            <div class="contact-search">
                                <form class="searchForm" method="get" action="0">              
                                    <input class="searchTerm"  placeholder="Your Email" autocomplete="off">
                                    <input type="submit" class="searchBtn" value="Subscribe!"/> 
                                </form> 
                            </div>
                            <ul class="follow_us">
                                <li>
                                    <p>Follow Us : </p>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-wifi"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area ends -->

        <!-- footer menu start -->
        <div class="fotter-header">
            <header>
                <div class="footer-bg">
                    <div class="container">
                        <div class="header-item">
                            <div class="header-logo">
                                <p>&copy; 2020<a href="index.html">FoodBuzz</a>Designed by<a href="https://themeforest.net/user/labartisan">Labartisan</a></p>
                            </div>
                            <div class="header-menu d-none d-lg-block">
                                <nav class="primary-menu">
                                    <div class="main-menu-area">
                                        <ul class="main-menu">
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Food Menu</a></li>
                                            <li><a href="#">Pages</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Elements</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- <div class="footer-bottom"></div> -->
        </div>
        <!-- footer menu ends -->

        
        <!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i></a>
		<!-- scrollToTop ending here -->


		
		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/fontawesome.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/wow.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/progress.js"></script>
		<script src="assets/js/tab.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>
</html>