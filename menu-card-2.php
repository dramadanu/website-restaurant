<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
    var_dump($product_name);
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $sqlcart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
   $select_cart = mysqli_num_rows($sqlcart);
        

   if($select_cart > 0){
      $message[] = 'product already added to cart';
   }else{
    //   $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
    //   $message[] = 'product added to cart succesfully';
    $message[] = 'product Kosong';
    
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
		<!-- style scss -->
        <link rel="stylesheet" href="assets/css/style.css">
        
		<title>FoodBuzz</title>
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
                                <!-- <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul> -->
                            </li>
                            <li class="active"><a href="menu-card-2.html">Food Menu</a>
                                <!-- <ul>
                                    <li><a href="menu-card.html">Menu Card</a></li>
                                    <li class="active"><a href="menu-card-2.html">Menu Card 2</a></li>
                                    <li><a href="menu-card-3.html">Menu Card 3</a></li>
                                </ul> -->
                            </li>   
                            <!-- <li><a href="reserv.html">Reservation</a></li>
                            <li><a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog.html">Blog Style 1</a></li>
                                    <li><a href="blog-2.html">Blog Style 2</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li> -->
                            <li><a href="cart-page.html">Cart</a>
                                <!-- <ul>
                                    <li><a href="shop-page.html">Shop Page</a></li>
                                    <li><a href="shop-single.html">Shop Single</a></li>
                                    <li><a href="cart-page.html">Cart Page</a></li>
                                </ul> -->
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
                                            <!-- <ul>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="active"><a href="menu-card-2.html">Food Menu</a>
                                            <!-- <ul>
                                                <li><a href="menu-card.html">Menu Card</a></li>
                                                <li class="active"><a href="menu-card-2.html">Menu Card 2</a></li>
                                                <li><a href="menu-card-3.html">Menu Card 3</a></li>
                                            </ul> -->
                                        </li>   
                                        <!-- <li><a href="reserv.html">Reservation</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Style 1</a></li>
                                                <li><a href="blog-2.html">Blog Style 2</a></li>
                                                <li><a href="blog-single.html">Blog Single</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="cart-page.html">Cart</a>
                                            <!-- <ul>
                                                <li><a href="shop-page.html">Shop Page</a></li>
                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                <li><a href="cart-page.html">Cart Page</a></li>
                                            </ul> -->
                                        </li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="cart-search">
                                    <ul>
                                        <li class="search"><i class="icofont-search-2"></i></li>
                                        <li class="cart-area">
                                            <div class="cart-icon">
                                                <i class="icofont-cart-alt"></i>
                                            </div>
                                            <div class="count-item">04</div>
                                            <div class="cart-content">
                                                <div class="cart-title">
                                                    <div class="add-item">4 Items Added</div>
                                                    <div class="list-close"><a href="#">Close</a></div>
                                                </div>
                                                <div class="cart-scr scrollbar">
                                                    <div class="cart-con-item">
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="assets/images/product/01.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="assets/images/product/02.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="assets/images/product/03.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item">
                                                            <div class="cart-inner">
                                                                <div class="cart-top">
                                                                    <div class="thumb">
                                                                        <a href="#"><img src="assets/images/product/04.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <a href="#">Split Remedy Split End Shampoo</a>
                                                                    </div>
                                                                    <div class="remove-btn">
                                                                        <a href="#"><i class="icofont-close"></i></a>
                                                                    </div>
                                                                </div>
                                                                <div class="cart-bottom">
                                                                    <div class="sing-price">Tk. 140</div>
                                                                    <div class="cart-plus-minus"><div class="dec qtybutton">-</div>
                                                                        <div class="dec qtybutton">-</div>
                                                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                                                        <div class="inc qtybutton">+</div>
                                                                    <div class="inc qtybutton">+</div></div>
                                                                    <div class="total-price">Tk. 280.00</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="cart-scr-bottom">
                                                    <ul>
                                                        <li>
                                                            <div class="title">Subtotal</div>
                                                            <div class="price">Tk. 1045.00</div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Shipping</div>
                                                            <div class="price">Tk. 40.00</div>
                                                        </li>
                                                        <li>
                                                            <div class="title">Cart Total</div>
                                                            <div class="price">Tk. 1085.00</div>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="food-btn"><span>Place Order</span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div> -->
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
                    <h3>Our Best Food Menu</h3>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>Food Menu 2</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Page Header Section Ending Here -->
       
        <!-- Food Product Section Style 2 Start here -->
        <?php

        if(isset($message)){
        foreach($message as $message){
            echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
            };
        };

        ?>
        <section class="product style-2 padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/01.png" alt="product-bg">
                                        <h5>From The Grill</h5>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $sqlProduct = mysqli_query($conn, "SELECT * FROM `products`");
                                
                                while ($fetchProduct = mysqli_fetch_array($sqlProduct)){
                                ?>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                        <div class="product-item style-2">
                                                    <div class="product-thumb">
                                                    <img src="img/<?php echo $fetchProduct['image']; ?>" alt="">
                                                    <input type="hidden" name="product_image" value="<?php echo $fetchProduct['image']; ?>">
                                                        <span class="price"></span>
                                                    </div>
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="#"><?php echo $fetchProduct['name']; ?></a></h6>
                                                            <input type="hidden" name="product_name" value="<?php echo $fetchProduct['name']; ?>">
                                                            <div class="rating">
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                                <i class="icofont-star"></i>
                                                         </div>
                                                    </div>
                                                        <div class="product-desc">
                                                            <p href="#"><?php echo $fetchProduct['description']; ?></p>
                                                            
                                                            <input type="hidden" name="product_price" value="<?php echo $fetchProduct['price']; ?>">
                                                            
                                                        </div>
                                                        <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart">    -->
                                                         <a href="inputCart.php?id=<?php echo $fetchProduct['id']; ?>" class="btn">Masuk Cart</a>
                                                    </div>
                                                </div>
                                                <?php               
                                                };
                                                ?>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/pork.png" alt="food-product">
                                                    <span class="price">70k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">US Pork Chop 300 gr</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Contains Pork Chop from US, Marbling score 5, di dryage 30 hari</p>
                                                    </div>
                                                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/Steak.png" alt="food-product">
                                                    <span class="price">80k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Grilled Yellow Fin Tuna Steak 200 gr</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Medium-rare daging yellow fin tuna, di sajikan dengan charred avocado, di serve dengan sauce ponzu</p>
                                                    </div>
                                                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/steaks.png" alt="food-product">
                                                    <span class="price">120k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">AUS Stockyard Gold Angus Tomahawk</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Australian beef, Angus, Grass Fed, Marbling score 3+, di dry age 28 hari</p>
                                                    </div>
                                                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/Cheeseburger.png" alt="food-product">
                                                    <span class="price">120k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Phoenix Cheeseburger</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>100% Wagyu beef burger, dengan roti Brioche bun dan sauce tonkotsu khas Jepang</p>
                                                    </div>
                                                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/02.png" alt="product-bg">
                                        <h5>Pasta & Rice</h5>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/udang.png" alt="food-product">
                                                    <span class="price">80k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Black Squid Ink Fried Rice</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Nasi goreng yg dimasak dengan bumbu tinta cumi, dan di topping dengan calamari, udang dan ikura</p>
                                                    </div>
                                                    <input type="submit" class="btn-2" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/Tokubetsu.png" alt="food-product">
                                                    <span class="price">90k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Tokubetsu Gyu Don</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Japanese rice, yg disajikan dengan Australian beef striploin, shoyu egg dan special house gyudon sauce</p>
                                                    </div>
                                                    <input type="submit" class="btn-2" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/meetball.png" alt="food-product">
                                                    <span class="price">60k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Oven Baked Meatballs Spaghetti</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Spaghetti bolognese yg di topping dengan pomodoro sauce, bechamel dan meatball khas itali, grana padano cheese</p>
                                                    </div>
                                                    <input type="submit" class="btn-2" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/spageti.png" alt="food-product">
                                                    <span class="price">60k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Spaghetti Aglio Olio e Peperoncini With Prawn</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Home-made pasta yg di stuffed dengan truffle mushroom, dan disajikan dengan creamy truffle sauce dan sliced truffle.</p>
                                                    </div>
                                                    <input type="submit" class="btn-2" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/tortelli.png" alt="food-product">
                                                    <span class="price">40k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Tortelli Pumpkin</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Home-pasta yg di isi dengan pumpkin puree, di sajikan dengan pumpkin sauce dan grilled pumpkin kabocha</p>
                                                    </div>
                                                    <input type="submit" class="btn-2" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/03.png" alt="product-bg">
                                        <h5>Small Plates</h5>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/caesar.png" alt="food-product">
                                                    <span class="price">30k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Caesar salad</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Charred romaine lettuce, di topping dengan caesar dressing, anchovy emulsion, beef bacon, grana padano dan cured egg.</p>
                                                    </div>
                                                    <input type="submit" class="btn-3" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/Loaded.png" alt="food-product">
                                                    <span class="price">50k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Ultimate Loaded Fries</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Kentang goreng yg di isi dengan saus keju, mayo, saus tomat, pepperoni dan sosis.</p>
                                                    </div>
                                                    <input type="submit" class="btn-3" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/italian.png" alt="food-product">
                                                    <span class="price">50k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Italian Meatball</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Italian meatballs yg disajikan dengan saos tomat pomodoro dan grana padano cheese.</p>
                                                    </div>
                                                    <input type="submit" class="btn-3" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/scallops.png" alt="food-product">
                                                    <span class="price">60k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Hokkaido scallops 3 ways</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Import scallop dari hokkaido yg di sajikan dengan 3 method masakan yg berbeda (Pan-seared, carpaccio crudo, crackers)</p>
                                                    </div>
                                                    <input type="submit" class="btn-3" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/telors.png" alt="food-product">
                                                    <span class="price">50k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Tiger Prawn Bisque (Photo kurang peashoot)</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Tiger prawn yg di sajikan dengan bisque sauce dan asparagus.</p>
                                                    </div>
                                                    <input type="submit" class="btn-3" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="foodlist-item style-2">
                                <div class="product-header text-center">
                                    <div class="bg-shape">
                                        <img src="assets/images/product/header-image/bg.png" alt="shape">
                                    </div>
                                    <div class="ph-content">
                                        <img src="assets/images/product/header-image/04.png" alt="product-bg">
                                        <h5>Dessert</h5>
                                        <div class="rating">
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                            <i class="icofont-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/carpaccio.png" alt="food-product">
                                                    <span class="price">70k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Pineapple Carpaccio</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Nanas yang sudah di infused dengan beberapa spices yang dipadukan dengan sorbet nanas dan basil</p>
                                                    </div>
                                                    <input type="submit" class="btn-4" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/tiramisu.png" alt="food-product">
                                                    <span class="price">40k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Tiramisu</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Dessert kopi khas italy yang di develop dengan berbagai condiments untuk melengkapi tekstur dan rasa.</p>
                                                    </div>
                                                    <input type="submit" class="btn-4" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/rose.png" alt="food-product">
                                                    <span class="price">60k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">The Lychee Rose</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Home made Lychee mousse yang light dan memberikan rasa segar, manis dan asam yang seimbang.</p>
                                                    </div>
                                                    <input type="submit" class="btn-4" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/Soerabi.png" alt="food-product">
                                                    <span class="price">40k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Soerabi Duriant</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Home made soerabi yang menonjolkan cita rasa lokal dari buah exotic Indonesia.</p>
                                                    </div>
                                                    <input type="submit" class="btn-4" value="add to cart" name="add_to_cart">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="assets/img/Boiled edamame.png" alt="food-product">
                                                    <span class="price">20k</span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#">Boiled edamame</a></h6>
                                                        <div class="rating">
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                            <i class="icofont-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Edamame yg di rebus dan di campur dengan togarashi dan garlic chili oil.</p>
                                                    </div>
                                                    <input type="submit" class="btn-4" value="add to cart" name="add_to_cart">
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
        </section>
        <!-- Food Product Section Style 2 Ending here -->

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
                                <h5>Work with best resturant theme</h5>
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
		<script src="assets/js/progress.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
        <script src="assets/js/functions.js"></script>
	</body>
</html>