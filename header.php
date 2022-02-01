<?php
session_start();
require 'includes/db.inc.php';
if(isset($_SESSION['userId'])){
    $id=$_SESSION['userId'];
    $sql = "SELECT * FROM cart WHERE userid='$id'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
  }else {
    $count = "0";
  }
echo '
<head>
<style>
.header-bottom .header-right .shopping-card::before {
    content:"'.$count.'";
}
</head>
</style>
';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.png">

    
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/customcss.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .logo,.logo1,.logo1-txt{
            display: inline-block!important;
            height: 6vh;            
        }
        .logo1-txt{
            width: 20vh;
        }
        .logo{
            width:25vh;
        }
        /* Without Container */
        .zoom-without-container {
        transition: transform .2s; /* Animation */
        margin: 0 auto;
        }
        .zoom-without-container img{
            width:100%;
            height:auto;	
        }
        .zoom-without-container:hover {
        transform: scale(1.5); 
        z-index:1;
        /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .breadcrumb{
            background-color:white!important;
        }
        .breadcrumb-link{
            color:black;
        }
        .breadcrumb-link:hover{
            color:blue;
        }
        .gallery-img{
            width:23rem;
            height:20rem;
        }
        .container-button { 
        position: relative; 
        }
        .banner-heading{
            color:white!important;
        }
        .center {
        margin: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        }
        
        @media only screen and (max-width: 990px){
            .owl-item img
                {
                    margin-top: 50%!important;
                }
        }
    </style>
</head>

<body>

    <!-- Preloader Start
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
     Preloader Start -->

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top top-bg d-none d-lg-block">
                    <div class="container-fluid">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left d-flex">
                                    <div class="flag">
                                        <img src="assets/images/flag.png" alt="">
                                    </div>
                                    <div class="select-this">                                      
                                            <div class="select-itms">                                               
                                                <select name="select" id="select1">
                                                    <option value="">IND</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="contact-now">
                                        <li>+91 9899328607</li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul>
                                        <li><a href="myaccount.php">My Account </a></li>
                                        <li><a href="checkout.php">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                                <a href="index.php">
                                <div class="logo">                                    
                                        <img class="logo1" src="assets/img/logo/logo.png" alt="">
                                        <img class="logo1-txt" src="assets/img/logo/txt-logo.png" alt="">                                    
                                </div>
                                </a>
                            </div>
                            <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="categories.php">All Products</a>
                                                <ul class="submenu">
                                                    <li><a href="bracelets.php"> Bracelets</a></li>
                                                    <li><a href="rings.php"> Rings</a></li>
                                                    <li><a href="necklace.php"> Necklace</a></li>
                                                    <li><a href="earrings.php"> Earrings</a></li>
                                                </ul>
                                            </li>
                                            <li class="hot"><a href="trending.php">Trending</a>
                                            </li> 
                                            <li><a href="myaccount.php">My Account</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                                <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                    <li class="d-none d-xl-block">
                                        <form action="categories.php" method="get">
                                            <div class="form-box f-right ">
                                                <input type="text" name="search-product" placeholder="Search products">
                                                <div class="search-icon">
                                                    <button type="submit"style="background-color:white;border:0px;">
                                                    <i class="fas fa-search special-tag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </li>
                                    
                                    <?php
                                    if(isset($_SESSION["userId"])){
                                        echo '<li>
                                        <div class="shopping-card">
                                            <a href="cart.php"><i class="fas fa-shopping-cart"></i></a>
                                        </div>
                                    </li>';
                                        
                                    }?>
                                    <?php
                                    if(isset($_SESSION["userId"])){
                                        echo '<li class="d-none d-lg-block"> <a href="includes/logout.inc.php" class="btn header-btn" style="background-color:#f44a40">Logout</a></li>';
                                        
                                    }
                                    else{
                                        echo '<li class="d-none d-lg-block"> <a href="login.php" class="btn header-btn">Login</a></li>';
                                    }
                                    ?>    
                                </ul>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>