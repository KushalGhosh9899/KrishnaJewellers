<?php
    include "header.php";
?>
<head>
  <title>
    Signup Successful
  </title>
  <link rel="stylesheet" text="css/style" href="assets/css/success-popup.css">
</head>
<div class="txt">
<image class="img" src="assets/images/success.gif"><br><br><h2>
    <?php
    echo '<div><h2>Hello '.$_SESSION["fname"].'</h2></div>';
    ?>
You have Successfully created an Account </h2>
<button class="btn header-btn" onclick="window.location.href = 'login.php';"><span>Click to Login
</button>
</span>
</div>
<?php
    include "footer.php";
?>