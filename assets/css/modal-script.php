
<head>
<style>
  
.modal-style {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 10%; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
  }
  
  /* Modal Content */
  .modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 40%;
    height:60%;
    border-radius:10px;
    box-shadow: 0 4px 8px 0 , 0 6px 20px 0 ;
  }
  
  /* The Close Button */
  .close-btn {
    color: #aaaaaa;
    float: right;
    font-size: 45px;
    font-weight: bold;
    position:absolute;
    right:0;
    top:0;
    padding-right:20px;
  }
  
  .close-btn:hover,
  .close-btn:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }
  .heading{
    text-align:center;
    font-weight :bold;
    font-size:30px;
  }
  .check{
  display:inline;
  padding-bottom: 20px;
  width:20px;  
  font-weight:bold;
}
.btn-cnfm {
  position:absolute;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  margin: 10px 4px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius:40px;
}
.agree {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
  right:45%; 
  bottom:5%;
  font-size:18px;
}
.agree:hover {
  background-color: #4CAF50;
  color: white;
}
.para-contents{
    text-align:center;
  padding: 10% 2%;
  font-size:20px;
}
  @media only screen and (max-width: 600px) {
    .modal {
      padding-top:40%;
    }
    .modal-content {
      width: 80%;
      height: 70%;
    }
    .close-btn {
      font-size:24px;
    }
    .heading{
      font-size:28px;
    }
    .btn-cnfm {
      padding: 8px 10px;
      }
    .agree {
    right:38%; 
    }
  }
  @media only screen and (max-width: 350px) {
    .modal {
      padding-top:30%;
    }
    .modal-content {
      width: 80%;
      height: 80%;
    }
    .close-btn {
      font-size:28px;
    }
    .heading{
      font-size:20px;
    }
    .btn-cnfm {
      padding: 5px 8px;
      }
    .agree {
    right:45%; 
    }
  }
</style>
</head>

<!-- Cart Modal -->
<div id="myModal" class="modal-style">

  <!-- Modal content -->
  <div class="modal-content">
    <h2 class="heading">Product Added</h2>

    <form action="assets/css/removemodal.php" method="post">
    
    <p class="para-contents">
    <img src="assets/images/success.gif">
    <br>
    Product Added To Cart Successfully.
    </p> 
    <button type="submit" class="btn-cnfm agree" name="agree">OK</button>
    </form>
  </div>

</div>

<!-- Newsletter Popup -->
<div id="newsletterModal" class="modal-style">

  <!-- Modal content -->
  <div class="modal-content">
    <h2 class="heading">Newsletter</h2>

    <form action="assets/css/removemodal.php" method="post">
    
    <p class="para-contents">
    <img src="assets/images/success.gif">
    <br>
    Newsletter Subscribed Successfully.
    </p> 
    <button type="submit" class="btn-cnfm agree" name="agree-newsletter">OK</button>
    </form>
  </div>

</div>

<!-- contact Popup -->
<div id="contactModal" class="modal-style">

  <!-- Modal content -->
  <div class="modal-content">
    <h2 class="heading">Contact Us</h2>

    <form action="assets/css/removemodal.php" method="post">
    
    <p class="para-contents">
    <img src="assets/images/success.gif">
    <br>
    Thanks for Reaching Us.
    </p> 
    <button type="submit" class="btn-cnfm agree" name="agree-contact">OK</button>
    </form>
  </div>

</div>

<script>

var btn = <?php if(isset($_SESSION['modalvalue'])){
    echo $_SESSION['modalvalue'];
}else{
    echo 00;
}
 ?>;
var nwsbtn = <?php if(isset($_SESSION['newsletter'])){
    echo $_SESSION['newsletter'];
}else{
    echo 00;
}?>;
var contactbtn = <?php if(isset($_SESSION['contact'])){
    echo $_SESSION['contact'];
}else{
    echo 00;
}?>;
// Get the modal
var modal = document.getElementById("myModal");
var nwsmodal = document.getElementById("newsletterModal");
var contactmodal = document.getElementById("contactModal");

// Get the <span> element that closes the modal
var span_cls = document.getElementsByClassName("close-btn")[0];

// When the user clicks the button, open the modal 
 if(btn==1) {
  modal.style.display = "block";
}
if(nwsbtn==1){
  nwsmodal.style.display = "block";
}
if(contactbtn==1){
  contactmodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span_cls.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>
