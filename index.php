<?php 
include 'header.php';
?>
<head>
<title>Krishna Jewellers</title>
<style>
.gallery-img{
    width:100%;
}
</style>
</head>
<main>

<!-- slider Area Start -->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider slider-height" data-background="assets/images/fronty.png" style="padding-top:5%;height:50%">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                        <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                            <img src="assets/images/frony.png" alt="" style="width:38rem;height:30rem">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                        <div class="hero__caption">
                            <span data-animation="fadeInRight" data-delay=".4s">10% Discount</span>
                            <h1 data-animation="fadeInRight" data-delay=".6s">Jewellery <br> Collection</h1>
                            <p data-animation="fadeInRight" data-delay=".8s">Best Jewellery Collection By 2020!</p>
                            <!-- Hero-btn -->
                            <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                <a href="categories.php" class="btn hero-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->
<!-- Category Area Start-->
<section class="category-area section-padding30">
    <div class="container-fluid">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center mb-85">
                    <h2>Shop by Category</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="single-category mb-30">
                    <div class="category-img">
                        <img src="assets/images/b2.png" alt="">
                        <div class="category-caption">
                            <h2 class="banner-heading">Rings</h2>
                            <span class="best"><a href="rings.php">Best New Deals</a></span>
                            <span class="collection">New Collection</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-category mb-30">
                    <div class="category-img text-center">
                        <img src="assets/images/b4.png" alt="">
                        <div class="category-caption">
                            <span class="collection">Discount!</span>
                            <h2 class="banner-heading">Earrings</h2>
                            <span class="best"><a href="earrings.php">Best New Deals</a></span>
                            <span class="collection">New Collection</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-category mb-30">
                    <div class="category-img">
                        <img src="assets/images/b1.png" alt="">
                        <div class="category-caption">
                            <h2 class="banner-heading">Necklace</h2>
                            <span class="best"><a href="necklace.php">Best New Deals</a></span>
                            <span class="collection">New Collection</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="single-category mb-30">
                    <div class="category-img">
                        <img src="assets/images/b3.png" alt="">
                        <div class="category-caption">
                            <h2 class="banner-heading">Bracelets</h2>
                            <span class="best"><a href="bracelets.php">Best New Deals</a></span>
                            <span class="collection">New Collection</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category Area End-->
<!-- Latest Products Start -->
<section class="latest-product-area padding-bottom">
    <div class="container">
        <div class="row product-btn d-flex justify-content-end align-items-end">
            <!-- Section Tittle -->
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="section-tittle mb-30">
                    <h2>Latest Products</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7">
                <div class="properties__button f-right">
                    <!--Nav Button  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" href="categories.php">All</a>

                            <a class="nav-item nav-link" href="bracelets.php">Bracelets</a>

                            <a class="nav-item nav-link" href="rings.php">Rings</a>

                            <a class="nav-item nav-link" href="earrings.php">Earrings</a>

                            <a class="nav-item nav-link" href="necklace.php">Necklace</a>
                        </div>
                    </nav>
                    <!--End Nav Button  -->
                </div>
            </div>

        </div>
        <!-- Nav Card -->
        <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                    <?php
                    $sql = "SELECT sno,pname,pimage,price,category FROM products ORDER BY price DESC LIMIT 6";
                    $result = $conn->query($sql);
                    if($conn){
                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc()) {
                                echo '<div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img zoom-without-container">
                                    <a href="product-details.php?&pid='.$row['sno'].'">
                                        <img src="assets/product-images/'.$row['category'].'/'.$row['pimage'].'" alt="">
                                    </a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                        <form action="includes/add-cart.inc.php" method="post" style="display:inline-block;">
                                            <input type="hidden" name="pid" value="'.$row['sno'].'" >
                                            <button type="submit" name="add-cart" class="genric-btn primary circle">Add to Cart</button>
                                        </form>
                                            <a href="product-details.php?&pid='.$row['sno'].'" class="genric-btn success circle arrow" style="margin-left:10px;">View Details</a>
                                        </div>
                                        <h4><a href="product-details.php?&pid='.$row['sno'].'">'.$row['pname'].'</a></h4>
                                        <div class="price">
                                            <ul>
                                                <li>Rs '.$row['price'].'</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                            }
                        }
                    }
                    ?>                     
                </div>
                <div class="container-button">
                <div class="center">
                <a href="categories.php" class="genric-btn primary radius"> Load More </a>
                </div>
                </div>
                
            </div>
        </div>
        <!-- End Nav Card -->
    </div>
</section>
<!-- Gallery Start-->
<div class="gallery-wrapper lf-padding">
    <div class="gallery-area">
        <div class="container-fluid">
        <h1 style="text-align:center">Gallery</h1>
            <div class="row">
                <div class="gallery-items">
                    <img src="assets/images/g1.jpg" class="gallery-img" alt="">
                </div>
                <div class="gallery-items">
                    <img src="assets/images/g2.jpg" class="gallery-img" alt="">
                </div>
                <div class="gallery-items">
                    <img src="assets/images/g3.jpg" class="gallery-img" alt="">
                </div>
                <div class="gallery-items">
                    <img src="assets/images/g4.jpg" class="gallery-img" alt="">
                </div>
                <div class="gallery-items">
                    <img src="assets/images/g5.jpg" class="gallery-img" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End-->
<!-- Shop Method Start-->
<div class="shop-method-area section-padding30">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <i class="ti-package"></i>
                    <h6>Free Shipping Method</h6>
                    <p>Available only in Delhi</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <i class="ti-unlock"></i>
                    <h6>Secure Payment System</h6>
                    <p>Credit/Debit Card Accepted</p>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6">
                <div class="single-method mb-40">
                    <i class="ti-reload"></i>
                    <h6>Try at Home</h6>
                    <p>Your Favourite Design at Home</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Method End-->
   <!-- subscribe part here -->
   <section class="subscribe_part section_padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <div class="subscribe_part_content">
                      <h2>Get promotions & updates!</h2>
                      <p>Subscribe to our Newsletter for Exciting Offers</p>
                      <div class="subscribe_form">
                      <form action="includes/add-newsletter.php" method="post">
                          <input type="email" name="newsemail" placeholder="Enter your mail" required>
                          <button type="submit" name="add-email" class="btn_1">Subscribe</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!-- subscribe part end -->
</main>

<?php 
include 'footer.php';
?>