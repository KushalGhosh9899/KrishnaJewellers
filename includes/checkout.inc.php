<?php
session_start();
if($_SESSION['userId']){
    require 'db.inc.php';
    $fname = $_SESSION["fname"];
    $lname = $_SESSION["lname"];
    $email = $_SESSION["email"];
    $number = $_SESSION["number"];
    $state = $_SESSION["State"];
    $add1 = $_SESSION["add1"];
    $add2 = $_SESSION["add2"];
    $pincode = $_SESSION["pincode"]; 
    $city = $_SESSION["city"];
    $price = $_SESSION["totalprice"];
    $id=$_SESSION['userId'];
    $orderid=$_SESSION['orderid'];

    //Adding User Data in Database
    $sqlquery="INSERT INTO deliveryDetails(userid,fname,lname,number,email,state,add1,add2,pincode,city,price,orderid) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sqlquery);
    mysqli_stmt_bind_param($stmt,"ssssssssssis",$id,$fname,$lname,$number,$email,$state,$add1,$add2,$pincode,$city,$price,$orderid);
    mysqli_stmt_execute($stmt);

    //Adding Data in Order History Table

    $sql = "SELECT * FROM cart WHERE userid='$id'";
    $result = $conn->query($sql);
    if($conn){
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()) {
    $sql = "INSERT INTO orderHistory(pname, pid, pimage, price, userid,category,orderid) VALUES(?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"sisisss",$row['pname'],$row['pid'],$row['pimage'],$row['price'],$row['userid'],$row['category'],$orderid);
    mysqli_stmt_execute($stmt);


    //Updating Track order Page

    //step 1 - order placed
    $order='done';
    $sql="INSERT INTO trackorderstatus (userid,product_name,orderPlaced) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"sss",$id,$row['pname'],$order);
    mysqli_stmt_execute($stmt);

    $order=date("Y-m-d");
    $sql="INSERT INTO trackordercomments (userid,product_name,orderPlaced) VALUES (?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sql);
    mysqli_stmt_bind_param($stmt,"sss",$id,$row['pname'],$order);
    mysqli_stmt_execute($stmt);    

    }}}

$sql = "DELETE FROM cart WHERE userid='$id'";
$result = $conn->query($sql);

    //Clearing Session Tokens
    $stmt->close();
    $conn->close();
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['number']);      
    unset($_SESSION['email']);
    unset($_SESSION['State']);
    unset($_SESSION['add1']);
    unset($_SESSION['add2']);
    unset($_SESSION['pincode']);
    unset($_SESSION['city']);
    unset($_SESSION['totalprice']);
    unset($_SESSION['discountedPrice']);
    header("Location: ../confirmation.php?Transaction-Successful");
}else{
    header("Location: ../index.php");
}