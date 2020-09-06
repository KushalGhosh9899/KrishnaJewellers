<?php
session_start();
if(isset($_SESSION['userId'])){
    require 'db.inc.php';
    if(isset($_POST['add-email'])){
        $email=$_POST['newsemail'];
        $sqlquery = "INSERT INTO newsletter(email) VALUES(?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sqlquery);
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);
        $_SESSION['newsletter']=1;
        header('Location: ../index.php?Newsletter-Subscribed');
    }
}