<?php
include 'header.php';
  echo '
<head>
  <title>Cart</title>
</head>
  <section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        ';
              require 'includes/db.inc.php';
              $uid=$_SESSION['userId'];
              $sql = "SELECT * FROM cart where userid='$uid'";
              $result = $conn->query($sql);
              if($conn){
                if ($result->num_rows > 0)
                {
                  echo '<div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>';
                  while($row = $result->fetch_assoc()){
                            echo '
                            <tr>
                            <td>
                              <div class="media">
                                <div class="d-flex">
                                  <img src="assets/product-images/'.$row['category'].'/'.$row['pimage'].'" alt="" />
                                </div>
                                <div class="media-body">
                                  <p>'.$row['pname'].'</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <h5>Rs '.$row['price'].'</h5>
                            </td>
                            <td>
                            <form action="includes/add-cart.inc.php" method="post">
                            <input type="hidden" value="'.$row['pid'].'" name="pid">
                            <button type="submit" name="delete-product" class="genric-btn danger-border circle">Delete Product</button>
                            </form>
                            </td>
                          </tr>';
                          }
                          require 'includes/db.inc.php';
                          $query="SELECT SUM(price) as 'sumcart' from cart WHERE userid='$uid'";
                          $res=mysqli_query($conn,$query);
                          $data=mysqli_fetch_array($res);
                          echo '
                          </tbody>
                        </table>
                        <div class="checkout_btn_inner float-right">
                          <h5>Total Price:- '.$data['sumcart'].'</h5>
                          <a class="btn_1" href="categories.php">Continue Shopping</a>
                          <a class="btn_1 checkout_btn_1" href="checkout.php">Proceed to checkout</a>
                        </div>';
                        }
                        else{
                          echo '<div>
                          <h2 style="text-align:center">Nothing is in the Cart</h2><br>
                          <div class="container-button">
                          <div class="center">
                          <a href="categories.php" class="genric-btn primary radius"> View Products </a>
                          </div>
                          </div>
                          </div>';
                        }
                      }
        echo '</div>
      </div>
      </div>
      </section>';
include 'footer.php';

