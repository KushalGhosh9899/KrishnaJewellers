<?php 
include 'header.php';
?>
<head>
    <title>Signup Page</title>
</head>
    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>Whatever you’ve got in mind, we’ve got inside.</p>
                            <a href="#" class="btn_3">Shop Products</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Signup</h3>
                            <form class="row contact_form" action="includes/signup.inc.php" method="post">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="fname" required
                                        placeholder="Enter Your First Name" >
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="lname" required
                                        placeholder="Enter Your Last Name">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="uid" required
                                        placeholder="Enter Your Username">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="email" class="form-control" id="name" name="mail" required
                                        placeholder="Enter Your Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="pwd" required
                                        placeholder="Enter Your Password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="pwd-repeat" required
                                        placeholder="Confirm Your Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector" required>
                                        <label for="f-option">I agree to Terms and Conditions</label>
                                    </div>
                                    <button type="submit" name="signup-submit" class="btn_3">
                                        Create an Account
                                    </button> 
                                    <a class="lost_pass" href="login.php">Already Have an Account? Login</a><br>                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

<?php 
include 'footer.php';
?>