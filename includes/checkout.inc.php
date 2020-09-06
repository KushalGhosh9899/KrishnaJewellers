<?php
session_start();
if($_SESSION['userId']){
    require 'db.inc.php';
    $sqlquery="INSERT INTO deliveryDetails() VALUES(?,)";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt,$sqlquery);
    mysqli_stmt_bind_param($stmt,"",);
    mysqli_stmt_execute($stmt);
}else{
    header("Location: ../index.php");
}