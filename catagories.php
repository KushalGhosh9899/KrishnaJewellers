<?php
include 'header.php';
?>

    <main>

        <!-- Latest Products Start -->
        <section class="latest-product-area latest-padding">
            <div class="container">
                <div class="row product-btn d-flex justify-content-between">
                        <div class="properties__button">
                            <!--Nav Button  -->
                            <nav>                                                                                                
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" href="">All</a>

                                    <a class="nav-item nav-link" href="">Bracelets</a>

                                    <a class="nav-item nav-link" href="">Rings</a>

                                    <a class="nav-item nav-link" href="">Earrings</a>

                                    <a class="nav-item nav-link" href="">Necklace</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                        <div class="select-this d-flex">
                            <div class="featured">
                                <span>Sort by: </span>
                            </div>
                            <form action="#">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">Featured</option>
                                        <option value="">Featured A</option>
                                        <option value="">Featured B</option>
                                        <option value="">Featured C</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                </div>
                <!-- Nav Card -->
                <div class="tab-content" id="nav-tabContent">
                    <!-- card one -->
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single-product mb-60">
                                    <div class="product-img">
                                        <img src="assets/img/categori/product1.png" alt="">
                                        <div class="new-product">
                                            <span>New</span>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-ratting">
                                            <a href="#" class="genric-btn primary circle">Add to Cart</a>
                                        </div>
                                        <h4><a href="#">Green Dress with details</a></h4>
                                        <div class="price">
                                            <ul>
                                                <li>$40.00</li>
                                                <li class="discount">$60.00</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                          
                            
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