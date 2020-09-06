<?php
    include "header.php";
?>
<head>
  <title>
    Login Successful
  </title>
  <link rel="stylesheet" text="css/style" href="assets/css/success-popup.css">
</head>
<div class="txt">
<image class="img" src="assets/images/success.gif"><br><br><h2>
    <?php
    echo '<div><h2>Welcome '.$_SESSION["fname"].'</h2></div>';
    ?>
You have Successfully Logged In </h2>
<button class="btn header-btn" onclick="window.location.href = 'index.php';"><span>Click to Continue
</button>
</span>
</div>
<?php
    include "footer.php";
?>