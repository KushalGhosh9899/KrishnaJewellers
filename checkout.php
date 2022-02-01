<?php
include 'header.php';
if(!isset($_SESSION['userId'])){
  echo '<script> window.location.href="login.php?Please-login-first" </script>';
}
?>
<head>
  <title>
    Checkout Page
  </title>
</head>
                  

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">      
      <div class="cupon_area">
        <div class="check_title">
          <h2>
            Have a coupon?
          </h2>
        </div>
        <form action="includes/check-coupon.php" method="post">
        <input name="coupon-code" type="text" placeholder="Enter coupon code" required/>
        <button name="check" type="submit" class="tp_btn">Apply Coupon</button>
        </form>
      </div>
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
            <form class="row contact_form" action="includes/confirm-order.php" method="post">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" placeholder="Enter Your First Name*" id="first" name="fname" required/>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" placeholder="Enter Your Last Name*" id="last" name="lname" required/>
              </div>              
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" placeholder="Enter Your Number*" required />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="email" class="form-control" placeholder="Enter Your Email*" id="email" name="email" required/>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select" name="State" required>
                  <option >Delhi</option>
                  <option >West Bengal</option>
                  <option >Punjab</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" placeholder="Address Line 1*" name="add1" required/>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add2" placeholder="Line 2*" name="add2" required/>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" placeholder="City*" required name="city" />
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" placeholder="Pincode*" required name="pincode" />
              </div>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                <?php
                require 'includes/db.inc.php';
                $uid=$_SESSION['userId'];
                $sql = "SELECT * FROM cart where userid='$uid'";
                $result = $conn->query($sql);
                if($conn){
                  if ($result->num_rows > 0)
                  {
                    while($row = $result->fetch_assoc()){
                      echo '
                      <li>
                        <a href="#">'.$row['pname'].'
                          <span class="last">Rs '.$row['price'].'</span>
                        </a>
                      </li>';
                    }
                  }
                }
                ?>
                <li>
              </ul>
              
              <ul class="list list_2">
                <li>
                <?php
                
                if(isset($_SESSION['userId'])){
                  require 'includes/db.inc.php';
                  $uid=$_SESSION['userId'];
                  $query="SELECT SUM(price) as 'sumcart' from cart WHERE userid='$uid'";
                  $res=mysqli_query($conn,$query);
                  $data=mysqli_fetch_array($res);
                  $total=$data['sumcart']+50;
                  echo '
                  <a href="#">Subtotal
                    <span>Rs '.$data['sumcart'].'</span>
                  </a>
                </li>';
                  if(isset($_SESSION['discountedPrice'])){                    
                    $total=$total-$_SESSION['discountedPrice'];
                    echo '
                    <li>
                    <a href="#">Discount
                    <span> - Rs '.$total.'</span></a>
                    </li>
                    <li>
                    <a href="#">Total
                    <span>Rs '.$_SESSION['discountedPrice'].'</span>
                    </a>
                    <input type=hidden name="price" value="'.$_SESSION['discountedPrice'].'">';
                  }
                  else{
                    echo '
                    <li>
                    <a href="#">Total
                    <span>Rs '.$total.'</span></a>
                    <input type=hidden name="price" value="'.$total.'">';
                  }
                }
                else{
                  echo '<a href="#">Subtotal
                  <span>Rs 0</span>
                </a>
              </li>
              <li>
                <a href="#">Shipping
                  <span>Flat rate: Rs 0</span>
                </a>
              </li>
              <li>
                <a href="#">Total
                  <span>Rs 0</span>
                </a>';
                }               
                ?>                
                </li>
              </ul>
              <div class="creat_account">
                <input required type="checkbox" id="f-option4" name="selector"/>
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>
              <button type="submit" name="pay-money" class="btn_3" >Proceed to Payment</button>
            </div>
          </div>
        </div>

        </form>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

<?php 
include 'footer.php';
?>