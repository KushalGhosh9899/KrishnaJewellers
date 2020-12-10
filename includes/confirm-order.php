<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
session_start();
if(isset($_POST['pay-money'])){
  $_SESSION["fname"] = $_POST['fname'];
  $_SESSION["lname"] = $_POST['lname'];
  $_SESSION["email"] = $_POST['email'];
  $_SESSION["number"] = $_POST['number'];
  $_SESSION["State"] = $_POST['State'];
  $_SESSION["add1"] = $_POST['add1'];
  $_SESSION["add2"] = $_POST['add2'];
  $_SESSION["city"] = $_POST['city'];
  $_SESSION["pincode"] = $_POST['pincode'];
  $id=$_SESSION['userId'];
  $_SESSION['totalprice']=$_POST['price'];
  // echo $_SESSION["fname"].'<br>';
  // echo $_SESSION["lname"].'<br>';
  // echo $_SESSION["email"].'<br>';
  // echo $_SESSION["number"].'<br>'; 
  // echo $_SESSION["State"].'<br>'; 
  // echo $_SESSION["add1"].'<br>'; 
  // echo $_SESSION["add2"].'<br>'; 
  // echo $_SESSION["city"].'<br>'; 
  // echo $_SESSION["pincode"].'<br>';
  // echo $_SESSION['totalprice']; 

  echo '<body onload="autosubmit()">
  <form id="details" action="payment/pgRedirect.php" method=POST>
      <input type="hidden" id="ORDER_ID" name="ORDER_ID" value="ORDS' . rand(10000,99999999).'">
      <input type="hidden" id="CUST_ID" name="CUST_ID" value="'. $id .'">
      <input type="hidden" id="INDUSTRY_TYPE_ID" name="INDUSTRY_TYPE_ID" value="Retail">
      <input type="hidden" id="CHANNEL_ID"  name="CHANNEL_ID" value="WEB">
      <input type="hidden" title="TXN_AMOUNT" name="TXN_AMOUNT" value="'. $_SESSION['totalprice'].'">
  </form>
  <script>
  function autosubmit(){
    document.getElementById("details").submit();
  }
  </script>
  </body>';
}else{
    echo "<script>window.location.href='../index.php'</script>";
}