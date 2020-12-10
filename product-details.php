<head>
<title>Product Detail</title>
</head>
<?php
    include 'header.php';
    require 'includes/db.inc.php';
    $pid=$_GET['pid'];
    $sql = "SELECT * FROM products where sno='$pid' ";
    $result = $conn->query($sql);
    if($conn){
        if ($result->num_rows > 0)
        {            
            while($row = $result->fetch_assoc()) {
                echo '                              
  <!--================Single Product Area =================-->
  <div class="product_image_area">
    <div class="container">      
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a class="breadcrumb-link" href="allproducts">Home</a></li>
            <li class="breadcrumb-item"><a class="breadcrumb-link" href="'.$row['category'].'.php">'.$row['category'].'</a></li>
            <li class="breadcrumb-item " aria-current="page">'.$row['pname'].'</li>
        </ol>
    </nav>
      <div class="row justify-content-center">
  
        <div class="col-lg-5">
          <div class="product_img_slide owl-carousel">
            <div class="single_product_img">
              <img src="assets/product-images/'.$row['category'].'/'.$row['pimage'].'" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="assets/product-images/'.$row['category'].'/'.$row['pimage'].'" alt="#" class="img-fluid">
            </div>
            <div class="single_product_img">
              <img src="assets/product-images/'.$row['category'].'/'.$row['pimage'].'" alt="#" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="single_product_text text-center">
            <h3>'.$row['pname'].'</h3>            
            <h4>Rs '.$row['price'].'</h5>
            <p>
            <b>Weight : </b>'.$row['weight'].' Gram<br>
            <b>Gold Weight : </b>'.$row['goldWght'].' Gram<br>
            ';
            if($row['DiamondWght']!=NULL){
                echo '<b>Diamond Weight : </b>'.$row['DiamondWght'].' Cents<br>';
            }
            echo '            
            <b>Gold Purity : </b>'.$row['goldPurity'].' Carat<br>
            <b>Hallmarking : </b>'.$row['hallmarking'].' <br>
            ';
            if($row['width']!=NULL){
                echo '<b>Width : </b>'.$row['width'].' Centimetre<br>';
            }
            if($row['length']!=NULL){
                echo '<b>Length : </b>'.$row['length'].' Centimetre<br>';
            }
            if($row['height']!=NULL){
                echo '<b>Height : </b>'.$row['height'].' Centimetre<br>';
            }
            echo '
            </p>           
            <div class="card_area">                
              <div class="add_to_cart">
              <form action="includes/add-cart.inc.php" method="post" style="display:inline-block;">
                  <input type="hidden" name="pid" value="'.$row['sno'].'" >
                  <button type="submit" name="add-cart" class="genric-btn primary-border e-large">Add to Cart</button>
              </form>
                  <a href="checkout.php" class="genric-btn success-border e-large">Proceed To Checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->';}}}
    include 'footer.php';
?>