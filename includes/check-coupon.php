<?php
session_start();
if(isset($_SESSION['userId'])){
    if(isset($_POST['check'])){
        $coupon=$_POST['coupon-code'];
        $uid=$_SESSION['userId'];
        require 'db.inc.php';
        $sql = "SELECT * FROM couponTable where code='$coupon'";
        $result = $conn->query($sql);
        if($conn){
            if ($result->num_rows > 0)
            {
                $row = $result->fetch_assoc();
                $discount=$row['discount'];
                $query="SELECT SUM(price) as 'sumcart' from cart WHERE userid='$uid'";
                $res=mysqli_query($conn,$query);
                $data=mysqli_fetch_array($res);
                $discount=($discount/100)*$data['sumcart'];
                $discountedPrice=$data['sumcart']-$discount;

                //update the price
                $_SESSION['discountedPrice']=$discountedPrice;
                header("Location: ../checkout.php?Coupon-code-redeemed-Successfully");
            }
            else{
                header("Location: ../checkout.php?Invalid-coupon-code");
            }
        }
    }
    else{
        header("Location: ../index.php");
    }
}
else{
    header("Location: ../index.php");
}