<?php

@include 'config.php';

if (isset($_POST['add_to_cart'])) {

    $product_name = $_POST['product_name'];
    var_dump($product_name);
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;



    $sqlcart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");
    $select_cart = mysqli_num_rows($sqlcart);


    if ($select_cart > 0) {
        $message[] = 'product already added to cart';
    } else {
        //   $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
        //   $message[] = 'product added to cart succesfully';
        $message[] = 'product Kosong';
    }
}

if (isset($_GET['id'])) {
    $category = $_GET['id'];
    $sqlProduct = mysqli_query($conn, "SELECT * FROM products where category = $category");
} else {
    $sqlProduct = mysqli_query($conn, "SELECT * FROM products");
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html">About Us</a>
                        </li>
                        <li class="active"><a href="menu.php">Food Menu</a>
                        </li>
                        <li><a href="checkout.php">Cart</a>
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
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.html">About Us</a>
                                    </li>
                                    <li class="active"><a href="menu.php">Food Menu</a>
                                    </li>
                                    <li><a href="checkout.php">Cart</a>
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
                <h3>Our Best Food Menu</h3>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Food Menu 2</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Page Header Section Ending Here -->

    <?php

    if (isset($message)) {
        foreach ($message as $message) {
            echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
        };
    };

    ?>

    <!-- Food Product Section Style 2 Start here -->
    <section class="product style-2 padding-tb">

        <div class="container">
            <div class="section-wrapper">
                <div class="row justify-content-center" id="menu-links">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Category Menu
                            </div>
                            <div class="card-body">
                                <a href="menu.php#menu-links" class="btn btn-default"> All Menu </a>
                                <a href="menu.php?id=1#menu-links" class="btn btn-default"> Main Course </a>
                                <a href="menu.php?id=2#menu-links" class="btn btn-default"> Dessert </a>
                                <a href="menu.php?id=4#menu-links" class="btn btn-default"> Snack </a>
                                <a href="menu.php?id=3#menu-links" class="btn btn-default"> Drink  </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-12">
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

                            while ($fetchProduct = mysqli_fetch_array($sqlProduct)) {
                            ?>
                                <div class="tabcontent">
                                    <div class="row no-gutters">
                                        <div class="col-12">
                                            <div class="product-item style-2">
                                                <div class="product-thumb">
                                                    <img src="img/<?php echo $fetchProduct['image']; ?>" alt="">
                                                    <span class="price"></span>
                                                </div>
                                                <div class="product-content">
                                                    <div class="product-title">
                                                        <h6><a href="#"><?php echo $fetchProduct['name']; ?></a></h6>
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
                                                    </div>
                                                    <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart">    -->
                                                    <a href="inputCart.php?id=<?php echo $fetchProduct['id']; ?>" class="btn">Masuk Cart</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            };
                            ?>
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
                                <input class="searchTerm" placeholder="Your Email" autocomplete="off">
                                <input type="submit" class="searchBtn" value="Subscribe!" />
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


    <script src="script.js"></script>
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