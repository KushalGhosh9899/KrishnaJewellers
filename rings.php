<?php
include 'header.php';
?>
<head>
    <title>Rings - Products</title>
</head>
    <main>

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                <div class="row product-btn d-flex justify-content-between">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" href="categories.php">All</a>

                                    <a class="nav-item nav-link" href="bracelets.php">Bracelets</a>

                                    <a class="nav-item nav-link active" href="rings.php">Rings</a>

                                    <a class="nav-item nav-link" href="earrings.php">Earrings</a>

                                    <a class="nav-item nav-link" href="necklace.php">Necklace</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                        <div class="select-this d-flex">
                            <div class="featured">
                                <span>Sort by: </span>
                            </div>
                                <div class="select-itms">
                                <select name="select" id="select1" onchange="location = this.value;">
                                        <option value="#">Select Filter</option>
                                        <option value="rings.php?filter-product=ASC">Price : Low to High</option>
                                        <option value="rings.php?filter-product=DESC">Price : High to Low</option>                                        
                                        <option value="rings.php">Clear Filter</option>
                                    </select>
                                </div>
                        </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                        <?php
                            require 'includes/db.inc.php';
                            if(!isset($_GET['filter-product'])){
                            $sql = "SELECT sno,pname,pimage,price,category FROM products where category='rings'";
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
                        }elseif(isset($_GET['filter-product'])){
                            $filterproduct=$_GET['filter-product'];
                            $sql = "SELECT * FROM products where category='rings' ORDER BY price $filterproduct";
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
                        }
                            ?>                        
                            
                        </div>
                    </div>                   
                    
                </div>
                <!-- End Nav Card -->
            </div>
        </section>
        <!-- Latest Products End -->

    </main>

<?php 
include 'footer.php';
?>