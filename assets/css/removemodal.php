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
else{
    header("Location: ../../index.php");
}