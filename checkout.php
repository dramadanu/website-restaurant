<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:checkout.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:checkout.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:checkout.php'); 
};

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
        
		<title>Shoping Cart</title>
	</head>

	<body>
        <!-- preloader start here -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="preloader-icon">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- preloader ending here -->
        
        <!-- search area -->
        <div class="search-area">
            <div class="search-input">
                <div class="search-close">
                    <span></span>
                    <span></span>
                </div>
                <form>
                    <input type="text" name="text" placeholder="*Search Here.......">
                    <button class="search-btn"><span class="serch-icon"><i class="icofont-search-2"></i></span></button>
                </form>
            </div>
        </div>
        <!-- search area -->

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
                                        <li class="active"><a href="checkout.html">Cart</a>
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
                    <h3>Cart Page</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Cart Page</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->

        <!-- Shop Cart Page Section start here -->		            
	    <div class="shop-cart padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="cart-top">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>

                              <?php 
         
                              $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                              $grand_total = 0;
                              if(mysqli_num_rows($select_cart) > 0){
                                 while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                              ?>

                                <tr>
                                    <td class="product-item">
                                        <div class="p-thumb">
                                            <a href="#"><img src="img/<?php echo $fetch_cart['image']; ?>" alt="product"></a>
                                            <a><?php echo $fetch_cart['name']; ?></a>
                                        </div>
                                        <div class="p-content">
                                             <td>Rp<?php echo ($fetch_cart['price']); ?></td>
                                        </div>
                                    </td>
                                    <td>
                                       <form action="" method="post">
                                       <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                                       <input class="btn" type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                                       <input class="btn" type="submit" value="update" name="update_update_btn">
                                       </form>
                                    </td>
                                    <td>Rp<?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
                                    <td>
                                        <a href="checkout.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"><img src="assets/images/shop/del.png" alt="product"></a>
                                    </td>
                                </tr>
                                <?php
                                   $grand_total += $sub_total;  
                                    };
                                 };
                                 ?>
                                 <tr class="table-bottom">
                                 <td><a href="menu.php" class="btn">continue shopping</a></td>
                                 <td colspan="2">grand total</td>
                                 <td>Rp<?php echo $grand_total; ?></td>
                                 <td><a href="checkout.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
                                 </tr>
                                 
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-bottom">
                        <div class="cart-checkout-box">
                            <form class="coupon">
                            </form>
                            <form class="cart-checkout">
                            <a href="complete.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Cart Page Section ending here -->
    

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
                                <h5>Enjoy with best resturant</h5>
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
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>
</html>