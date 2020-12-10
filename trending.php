<?php
include 'header.php';
?>
<head>
    <title>Trending Page</title>
</head>
    <main>

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <?php
                                require 'includes/db.inc.php';                            
                            $sql = "SELECT * FROM trending";
						    $result = $conn->query($sql);
						    if($conn){
							    if ($result->num_rows > 0)
							    {
								    while($row = $result->fetch_assoc()) {
                                        echo '<div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single-product mb-60">
                                            <div class="product-img zoom-without-container">
                                            <a href="product-details.php?&pid='.$row['pid'].'">
                                                <img src="assets/product-images/'.$row['category'].'/'.$row['pimage'].'" alt="">
                                            </a>
                                            <div class="new-product">
                                            <span>#'.$row['sno'].'</span>
                                            </div>
                                            </div>
                                            <div class="product-caption">
                                                <div class="product-ratting">
                                                <form action="includes/add-cart.inc.php" method="post" style="display:inline-block;">
                                                    <input type="hidden" name="pid" value="'.$row['pid'].'" >
                                                    <button type="submit" name="add-cart" class="genric-btn primary circle">Add to Cart</button>
                                                </form>
                                                    <a href="product-details.php?&pid='.$row['pid'].'" class="genric-btn success circle arrow" style="margin-left:10px;">View Details</a>
                                                </div>
                                                <h4><a href="product-details.php?&pid='.$row['pid'].'">'.$row['pname'].'</a></h4>
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