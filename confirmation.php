<?php 
include 'header.php';
?>
<head>
<title>Order Placed Successfully</title>
</head>

  <!--================ confirmation part start =================-->
  <section class="confirmation_part section_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="confirmation_tittle">
            <span>Thank you. Your Order has been Placed Successfully.</span>
          </div>
        </div>
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>order info</h4>
            <ul>
            <?php
            if(isset($_SESSION['userId'])){
              require 'includes/db.inc.php';
              $uid=$_SESSION['userId'];
              $orderid=$_SESSION['orderid'];
              $sql = "SELECT * FROM deliveryDetails where userid='$uid' AND orderid='$orderid'";
              $result = $conn->query($sql);
              if($conn){
                if ($result->num_rows > 0)
                {
                  $row = $result->fetch_assoc();
                    echo '
                    <li>
                      <p>order number</p><span>: '.$row['orderid'].'</span>
                    </li>
                    <li>
                      <p>date and Time</p><span>: '.$row['timestam'].'</span>
                    </li>
                    <li>
                      <p>total</p><span>: Rs '.$row['price'].'</span>
                    </li>
                    <li>
                      <p>Payment method</p><span>: Net Banking</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-lx-4">
                <div class="single_confirmation_details">
                  <h4>Personal Details</h4>
                  <ul>
                    <li>
                      <p>First name</p><span>: '.$row['fname'].'</span>
                    </li>
                    <li>
                      <p>last name</p><span>: '.$row['lname'].'</span>
                    </li>
                    <li>
                      <p>Phone Number</p><span>: '.$row['number'].'</span>
                    </li>
                    <li>
                      <p>Email</p><span>: '.$row['email'].'</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-lx-4">
                <div class="single_confirmation_details">
                  <h4>shipping Address</h4>
                  <ul>
                  <li>
                  <p>Line 1</p><span>: '.$row['add1'].'</span>
                </li>
                <li>
                  <p>Line 2</p><span>: '.$row['add2'].'</span>
                </li>
                <li>
                  <p>state</p><span>: '.$row['state'].'</span>
                </li>
                <li>
                  <p>pincode</p><span>: '.$row['pincode'].'</span>
                </li>
                  </ul>
                </div>
              </div>';
                  }}
            }
            ?>
      </div>
      
    </div>
    <br><br><br>
    <div class="container-button">
                <div class="center">
                <a href="index.php" class="genric-btn primary e-large"> Continue </a>
                </div>
                </div>
  </section>

  <!--================ confirmation part end =================-->

<?php 
include 'footer.php';
?>