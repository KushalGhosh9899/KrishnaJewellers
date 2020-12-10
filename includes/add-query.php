<?php
session_start();
if(isset($_SESSION['userId'])){
    require 'db.inc.php';
    if(isset($_POST['ask-query'])){
        $email=$_POST['email'];
        $name=$_POST['name'];
        $message=$_POST['message'];
        $subject=$_POST['subject'];
        $sqlquery = "INSERT INTO contactus(name,email,subject,message) VALUES(?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($stmt,$sqlquery);
        mysqli_stmt_bind_param($stmt,"ssss",$name,$email,$subject,$message);
        mysqli_stmt_execute($stmt);
        $_SESSION['contact']=1;
        header('Location: ../contact.php?Query-Raised');
    }
}