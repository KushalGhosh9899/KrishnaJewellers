<?php
require 'header.php';
?>
<head>
  <title>Track Order</title>
  <style>
time{
  color:red;
}
    .track{
      width:100%;
      height:50vh;
      }
      .track1{
        width:100%;
        height:50vh;

      }
      .pp{

        font-size: 30px;
      }
      .orderstatus {
  color: #939393;
  display: block;
  padding: 1em 0;
  position: relative;
  text-align: center;
  min-height: 150px;
}

.orderstatus.done:before {
  background: #32841f;

}
.orderstatus:before {
  content: '';
  height: 100%;
  position: absolute;
  left: 50%;
  width: 2px;
  background: #939393;
  margin: 0 25px;
}

.orderstatus:last-child:before {
  height: 0;
}

.orderstatus.done {
  color: #333;
}

@media only screen and (max-width: 40em) {
  .orderstatus {
    text-align: left;
  }
  .orderstatus:before {
    left: 0;
  }
  .orderstatus .orderstatus-text {
    left: 0;
    width: 100%;
  }
}

.orderstatus-text {
  position: relative;
  width: 50%;
  left: 50%;
  text-align: left;
  padding-left: 60px;
}

@media only screen and (min-width: 40em) {
  .orderstatus:nth-child(2n) .orderstatus-text {
    left: 10px;
    text-align: right;
    padding-right: 20px;
  }
}

.orderstatus-container {
  padding-top:2em;
  width:100%;
}

.orderstatus time {
  display: block;
  font-size: 1em;
  color: #939393;
}

.orderstatus.done time {
  color: #368d22;
}

@media only screen and (max-width: 40em) {
  .orderstatus-container {
    text-align: center;
    width:300px;
  }
}

.orderstatus-check {
  font-family: "Helvetica", Arial, sans-serif;
  border: 2px solid #939393;
  width: 50px;
  height: 50px;
  display: inline-block;
  text-align: center;
  line-height: 48px;
  border-radius: 50%;
  margin-bottom: 0.5em;
  background: #fff;
  z-index: 2;
  position: absolute;
  color: #939393;
  left: 50%;
}

.done .orderstatus-check {
  color: #368d22;
  border-color: #368d22;
}

@media only screen and (max-width: 40em) {
  .orderstatus-check {
    left: 0;
  }
}

.orderstatus-active {
  text-align: center;
  position: relative;
  left: 25px;
  top: 20px;
  color: #939393;
}

@media only screen and (max-width: 40em) {
  .orderstatus-active {
    display: none;
  }
}
.medium-12{

  text-align: center;
  width:100%;
}
@media only screen and (max-width: 600px) {
  .track1{
    width:auto;
}
}

.txt{
  text-align: center;
  height:49vh;
}
span{
  display-inline;
}
.done{
  font-weight:600;
}
p{
  color:#368d22;
  font-weight:430;
}
  </style>
</head>


        <?php
        if(isset($_SESSION['userId'])&&isset($_POST['check-status'])){
        $id=$_SESSION['userId'];
        $pid=$_POST['pid'];
        $sql = "SELECT * FROM trackorderstatus where userid='$id' AND product_name='$pid'";
        $result = $conn->query($sql);
        if($conn){
          if ($result->num_rows > 0)
          {
            $row = $result->fetch_assoc();

            $sql = "SELECT * FROM trackordercomments where userid='$id' AND product_name='$pid'";
            $result2 = $conn->query($sql);
            if($conn){
              if ($result2->num_rows > 0)
              {
                $row2 = $result2->fetch_assoc();

        echo '
        <h3 style="text-align:center">Product Name: '.$pid.'</h3>
        <div class="track">
          <section>
            <div class="row orderstatus-container">
              <div class="medium-12 columns">
        <div class="orderstatus '.$row['orderPlaced'].'">
          <div class="orderstatus-check"><span class="orderstatus-number">1</span></div>
          <div class="orderstatus-text '.$row['orderPlaced'].'">
            <time> <u>Order Placed </u></time>
            <p>'.$row2['orderPlaced'].'</p>
          </div>
        </div>
        <div class="orderstatus '.$row['orderProcessing'].'">
          <div class="orderstatus-check"><span class="orderstatus-number">2</span></div>
          <div class="orderstatus-text '.$row['orderProcessing'].'">

            <time> <u>Order Processing </u></time>
            <p>'.$row2['orderProcessing'].'</p>
          </div>
        </div>
        <div class="orderstatus '.$row['dispatchReady'].'">
          <div class="orderstatus-check"><span class="orderstatus-number">3</span></div>
          <div class="orderstatus-text '.$row['dispatchReady'].'">

            <time> <u>Ready to Dispatch </u></time>
            <p>'.$row2['dispatchReady'].'</p>
          </div>
        </div>
        <div class="orderstatus '.$row['delivery'].'">
          <div class="orderstatus-check"><span class="orderstatus-number">4</span></div>
          <div class="orderstatus-text  '.$row['delivery'].'">

            <time> <u>Out for Delivery </u></time>
            <p>'.$row2['delivery'].'</p>
          </div>
        </div>
        <div class="orderstatus '.$row['delivered'].'">
          <div class="orderstatus-check"><span class="orderstatus-number">5</span></div>
          <div class="orderstatus-text  '.$row['delivered'].'">

            <time> <u>Delivered </u></time>
            <p>'.$row2['delivered'].'</p>
          </div>
        </div>
        <div class="orderstatus '.$row['orderComplete'].'">
          <div class="orderstatus-check"><span class="orderstatus-number">6</span></div>
          <div class="orderstatus-text  '.$row['orderComplete'].'">

            <time> <u>Order Completed </u></time>
            <p>'.$row2['orderComplete'].'</p>
          </div>
        </div>
        </div>
      </div>

    </section>
  ';}}
      }
        }
      }?>


<?php
require 'footer.php';
?>
