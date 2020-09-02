<?php
session_start();
if(isset($_POST['agree'])){
    $_SESSION['modalvalue']=0;
    header("Location: ../../".$_SESSION['pcategory'].".php");
}
else{
    header("Location: ../../index.php");
}