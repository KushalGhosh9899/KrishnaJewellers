<?php
require 'header.php';
if(!isset($_SESSION['userId'])){
  echo '<script> window.location.href="login.php?Please-login-first" </script>';
}
?>
<head>
<title>My Account</title>
</head>>
  <!--================ confirmation part start =================-->
  <section class="confirmation_part section_padding">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6 col-lx-4">
          <div class="single_confirmation_details">
            <h4>Personal Details</h4>
            <ul>
            <?php
            if(isset($_SESSION['userId'])){
              require 'includes/db.inc.php';
              $uid=$_SESSION['userId'];
              $sql = "SELECT * FROM users where user_id='$uid'";
              $result = $conn->query($sql);
              if($conn){
                if ($result->num_rows > 0)
                {
                  $row = $result->fetch_assoc();
                    echo '                    
                    <li>
                      <p>First name</p><span>: '.$row['fname'].'</span>
                    </li>
                    <li>
                      <p>last name</p><span>: '.$row['lname'].'</span>
                    </li>
                    <li>
                      <p>Username</p><span>: '.$row['uidUsers'].'</span>
                    </li>
                    <li>
                      <p>Email</p><span>: '.$row['emailUsers'].'</span>
                    </li>
                    <li>
                      <p>Account Created on</p><span>: '.$row['timeStam'].'</span>
                    </li>
                  </ul>
                </div>
              </div>';
                  }}
            }
            ?>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="order_details_iner">
            <h3>Order History</h3>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col" colspan="2">Product</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                  <th scope="col">Track</th>
                </tr>
              </thead>
              <tbody>
              <?php 
               if(isset($_SESSION['userId'])){
                require 'includes/db.inc.php';
                $uid=$_SESSION['userId'];
                $sql = "SELECT * FROM orderHistory where userid='$uid'";
                $result = $conn->query($sql);
                if($conn){
                  if ($result->num_rows > 0)
                  {while($row = $result->fetch_assoc()){
                      echo '<tr>
                      <th colspan="2"><span>'.$row['pname'].'</span></th>
                      <th><img src="assets/product-images/'.$row['category'].'/'.$row['pimage'].'" width=100rem height=100rem></th>
                      <th> <span>Rs '.$row['price'].'</span></th>
                      <th> <form action="trackorder.php" method="post">
                      <input type="hidden" value="'.$row['pname'].'" name="pid">
                      <button type="submit" name="check-status" class="genric-btn success-border circle arrow">Status</button></form></th>
                    </tr>';
                  }}
                }}
              ?>                               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--================ confirmation part end =================-->
<?php
require 'footer.php';
?>