<?php
session_start();
if(isset($_POST['agree'])){
    $_SESSION['modalvalue']=0;
    header("Location: ../../".$_SESSION['pcategory'].".php");
}
elseif(isset($_POST['agree-newsletter'])){
    $_SESSION['newsletter']=0;
    header("Location: ../../index.php?Newsletter-Subscribed");
}
elseif(isset($_POST['agree-contact'])){
    $_SESSION['contact']=0;
    header("Location: ../../contact.php?Query-Raised");
}
else{
    header("Location: ../../index.php");
}