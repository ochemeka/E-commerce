<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php // include('includes/ps_pagination1.php'); ?>
<?php //include_once("includes/formvalidator.php"); ?>
<?php
$pagetitle="changepassword";
?>
<?php include ("includes/header_prod.php") ;?>
 <?php //include_once("includes/formvalidator.php"); 
 
$member = get_user_id($_SESSION['username']);
$member_part = mysqli_fetch_array($member);
 
 ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}


?>

<?php




// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
$errors = array();

		$required_fields = array('pass_nw','pass_nw2');
			foreach($required_fields as $fieldname) {
				if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))) { 
					$errors[] = $fieldname; 
				}
			}
			
		//$hash = $_GET['hash'];
		$email = $_GET['email'];
		$token = $_GET['token'];
		$hashed_email = md5($_GET['email']);	
		$hashed_token = md5($_GET['token']);	
		$email = mysqli_real_escape_string($connection,$_POST['hashed_email']);
		$token = mysqli_real_escape_string($connection,$_POST['hashed_token']);
		
			
		$hashed_pass1 = md5($pass_nw);
		$pass2 = stripslashes($_REQUEST['pass_nw']);
		$pass2 = mysqli_real_escape_string($connection,$_POST['pass_nw']);
		$hashed_pass2 = md5($pass2);
		$pass3 = stripslashes($_REQUEST['pass_nw2']);
		$pass3 = mysqli_real_escape_string($connection,$_POST['pass_nw2']);
		$hashed_pass3 = md5($pass3);
		$passmail = mysqli_real_escape_string($connection,$_POST['pass_nw2']);
		if ($pass2 != $pass3){
			echo "<script type='text/javascript'>alert('Confirm Password Do Not Match!')</script>";
			//redirect_to(SITE_PATH."login.php");
			 }else{

		if ( empty($errors) ) {
			// Check database to see if username and the hashed password exist there.
			//$email = $email = $_GET['email'];
			//$token = $_GET['token'];
			
			$query = "SELECT * ";
			$query .= "FROM newmember_tbl ";
			//$query .= "memcode = '{$_GET['hashed_token']}' ";hashed_email
			$query .= "WHERE email = '{$email}' ";
			//$query .= "WHERE email = '{$_GET['email']}' ";
			$query .= "AND id = '{$_SESSION['user_id']}' ";
			$query .= "LIMIT 1";
			$result_set = mysqli_query($connection,$query);
			confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				
				
					$query = 	"UPDATE newmember_tbl SET 
						 	
							password = '{$hashed_pass1}',
							 temp_pass = '{$passmail}'
							WHERE id = '{$_SESSION['user_id']}'
							";	
							/*$query = 	"UPDATE newmember_tbl SET 
							password = '{$pass2}', 
							temp_pass = '{$hashed_pass2}' 
						WHERE id = {$_SESSION['user_id']}";*/
			$result = mysqli_query($connection,$query);
			if (mysqli_affected_rows($connection) == 1) {
					// Success!
					echo "<script type='text/javascript'>alert('Password Change Successfully!')</script>";
					
					redirect_to(SITE_PATH."login.php");
				} else {
					// Display error message.
					echo "<p>Error.</p>";
					echo "<p>" . mysqli_error($connection) . "</p>";
				}


			} else {
				// username/password combo was not found in the database
				echo "<script type='text/javascript'>alert('Password change not successful')</script>";
			}			
		}
}
	}
?> 		

<?php /*?><?php
	
	if (logged_in()) {
		redirect_to(SITE_PATH."superuser/recoverpassword.php");
	}

	
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.
		$errors = array();

		// perform validations on the form data
		$required_fields = array('email');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		//$fields_with_lengths = array('username' => 30, 'password' => 30);
		//$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		//$pass = stripslashes($_REQUEST['password']);
//		$pass = mysqli_real_escape_string($connection,$_POST['password']);
//		$hashed_password = md5($password);
		
		if ( empty($errors) ) {
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT id, email, status ";
			$query .= "FROM newmember_tbl ";
			$query .= "WHERE email = '{$email}' ";
			$query .= "AND password = '{$hashed_password}' AND status=1 ";
			$query .= " LIMIT 1";
			//$query = ("SELECT adm_id, adm_username,adm_password, adm_status FROM admintbl WHERE adm_username='".$username."' AND adm_password='".$password."' AND adm_status='1', LIMIT 1");
			$result_set = mysqli_query($connection,$query);
			//confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				
				$found_user = mysqli_fetch_array($result_set);
				$_SESSION['user_id'] = $found_user['id'];
				$_SESSION['username'] = $found_user['email'];
				$_SESSION['status'] = $found_user['status'];
				
				
				 //header("Location: dashboard");
				redirect_to(SITE_PATH."superuser/dashboard");
			} else {
				// username/password combo was not found in the database
				$message = "Username/password combination incorrect.<br />
					Please make sure your caps lock key is off and try again.";
			}
		} else {
			if (count($errors) == 1) {
			} else {
			}
		}
		
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
		$username = "";
		$password = "";
	}
?> <?php */?>

		<!-- My Account Area -->
		<div class="my-account-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div align="center" class="page-title">
							<h3 style="color:#000000;"> Forget Password </h3>
                            
                           
						</div>
                        
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-2">
						<!--<div class="new-customers customer">
							<div class="customer-inner">
								<div class="user-title">
									<h2><i class="fa fa-file"></i>New Customers</h2>
								</div>
								<div class="user-content">
									<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
								</div>
							</div>
							<div class="user-bottom fix">
								<div class="user-bottom-inner">
									<button class="btn custom-button" type="button">Create an Account</button>
								</div>
							</div>
						</div>-->
					</div>
					<div class="col-md-8 col-sm-8">
						<div class="resestered-customers customer">
							<div class="customer-inner">
								<div class="user-title">
									<h2><i class="fa fa-file-text"></i>Forgetpass </h2>
								</div>

								<div class="user-content">
									<p>If you have an account with us, please log in.</p>
								</div>
								<div class="account-form">
									<form class="form-horizontal product-form"  method="post" enctype="multipart/form-data">
				 <?php if (!empty($message)) {echo "<div class='error'>" . $message . "</div>";} ?>
            <?php if (!empty($errors)) { display_errors($errors); } 
			
			?>								
									
									 <input type="hidden" class="form-control"  value="<?php //echo time(); ?>" name="time">
										<div class="form-goroup">
											<label>Password <sup>*</sup></label>
											 <input name="pass_nw" type="password" placeholder="Enter New Password" class="form-control"/>
										</div>
										
										<div class="form-goroup">
											<label>Confirm Password <sup>*</sup></label>
											  <input name="pass_nw2" type="password" placeholder="Enter Confirm Password" class="form-control"/> 
										</div>
                                        
									<!--	<div class="form-goroup">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" required class="form-control">
										</div>
										
										<button class="btn custom-button" name="login" value="login" type="button">Sign Up</button>-->
										<input class="btn custom-button" type="submit" name="submit" value="Submit">
									</form>
								</div>
								<!--<p class="reauired-fields floatright"><sup>*</sup> Required Fields</p>-->
							</div>
							<div class="user-bottom fix">
								<div class="user-bottom-inner">
							<!--		<a href="#">Forgot Your Password?</a>
									<button class="btn custom-button" name="login" value="login" type="button">Sign Up</button>-->
									
                         <h3>Not a Member? <a href="register.php"> Create Account</a></h3>

								</div>
							</div>
						</div>
					</div>
                    <div class="col-md-2 col-sm-2">
                    
                    </div>
				</div>
			</div>
		</div><!-- End My Account Area -->
		<!-- Brand Area -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="brand-add">
							<a href="#"><img src="img/brand-logo/bl5.png" alt="brand-logo"></a>
						</div>
					</div>
					<div class="col-md-8">
						<!-- Brand Logo -->
						<div class="brand-logo">
							<div id="logo-carousel" class="owl-carousel">
								<a href="#"><img src="img/brand-logo/bl1.png" alt="brand-logo"></a>
								<a href="#"><img src="img/brand-logo/bl2.png" alt="brand-logo"></a>
								<a href="#"><img src="img/brand-logo/bl3.png" alt="brand-logo"></a>
								<a href="#"><img src="img/brand-logo/bl4.png" alt="brand-logo"></a>
								<a href="#"><img src="img/brand-logo/bl1.png" alt="brand-logo"></a>
								<a href="#"><img src="img/brand-logo/bl2.png" alt="brand-logo"></a>
								<a href="#"><img src="img/brand-logo/bl3.png" alt="brand-logo"></a>
								<a href="#"><img src="img/brand-logo/bl4.png" alt="brand-logo"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- End Brand Area -->	
		<!-- Footer Area -->
		<div class="footer-area">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<!-- Block Subscribe -->
							<div class="block-subscribe">
								<div class="subscribe-title">
									<div class="icon"><i class="fa fa-envelope-o"></i></div>
									<h3>Send Newsletter</h3>
								</div>
								<div class="subscribe-form">
									<form action="#">
										<div class="subscribe-input-box">
										   <input type="text" title="Sign up for our newsletter" name="email" required>
										</div>
										<div class="subscribe-action">
										   <button title="Subscribe" type="submit">Subscribe</button>
										</div>
									</form>
								</div>
							</div><!-- End Block Subscribe -->
						</div>
						<div class="col-md-4">
							<!-- Social Footer -->
							<div class="social-footer">
								<ul class="link-follow">
									<li class="first">
										<a href="#" class="facebook fa fa-facebook"></a>
									</li>
									<li>
										<a href="#" class="twitter fa fa-twitter"></a>
									</li>
									<li>
										<a href="#" class="google fa fa-google-plus"></a>
									</li>
									<li>
										<a href="#" class="instagram fa fa-instagram"></a>
									</li>
								</ul>
							</div><!-- End Social Footer -->
						</div>
					</div>
				</div>
			</div><!-- End Footer Top -->
			<!-- Footer Static -->
			<div class="footer-static">
				<div class="container">
					<!-- Single Footer Static -->
					<div class="single-footer-static static-info">
						<div class="footer-static-title">
							<h3>Information</h3>
						</div>
						<div class="footer-static-content">
							<ul>
								<li><a href="#">About us</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Site Map</a></li>
							</ul>
						</div>
					</div><!-- End Single Footer Static -->
					<!-- Single Footer Static -->
					<div class="single-footer-static">
						<div class="footer-static-title">
							<h3>Customer Service</h3>
						</div>
						<div class="footer-static-content">
							<ul>
								<li><a href="#">Shipping Policy</a></li>
								<li><a href="#">Compensation First</a></li>
								<li><a href="#">My Account</a></li>
								<li><a href="#">Return Policy</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
					</div><!-- End Single Footer Static -->
					<!-- Single Footer Static -->
					<div class="single-footer-static static-shipping">
						<div class="footer-static-title">
							<h3>Payment & Shipping</h3>
						</div>
						<div class="footer-static-content">
							<ul>	
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Shipping Guide</a></li>
								<li><a href="#">Locations We Ship To</a></li>
								<li><a href="#">Estimated Delivery Time</a></li>
							</ul>
						</div>
					</div><!-- End Single Footer Static -->
					<!-- Single Footer Static -->
					<div class="single-footer-static static-account">
						<div class="footer-static-title">
							<h3>My Account</h3>
						</div>
						<div class="footer-static-content">
							<ul>								
								<li><a href="#">My Addresses</a></li>
								<li><a href="#">Gift Vouchers</a></li>
								<li><a href="#">Returns and Exchanges</a></li>
								<li><a href="#">Shipping Options</a></li>
								<li><a href="#">My personal info</a></li>
							</ul>
						</div>
					</div><!-- End Single Footer Static -->
					<!-- Single Footer Static -->
					<div class="single-footer-static static-contact">
						<div class="footer-static-title">
							<h3>Contact Us</h3>
						</div>
						<div class="footer-static-content">							
							<div class="contact-info">
								<p class="phone">Phone: 01737803547</p>
								<p class="email">Email: admin@bootexperts.com</p>
								<p class="adress">Address: No. 96, Jecica City, NJ 07305, New York, USA</p>
							</div>
						</div>
					</div><!-- End Single Footer Static -->
				</div>
			</div><!-- End Footer Static -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<!-- Copyright -->
							<div class="copyright">
								<p>Copyright &copy; <a href="http://bootexperts.com/">BootExperts</a> All Rights Reserved.</p>
							</div>						
						</div>
						<div class="col-md-6">
							<!-- Footer Payment -->
							<div class="footer-payment">
								<a href="#"><img src="img/logo/payment.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Footer Bottom -->
		</div><!-- End Footer Area -->
				
		
		
		
		
		
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
		<!-- nivo slider js
		============================================ --> 
		<script src="js/jquery.nivo.slider.pack.js"></script>
		<!-- Mean Menu js
		============================================ -->         
        <script src="js/jquery.meanmenu.min.js"></script>
		<!-- price-slider JS
		============================================ -->		
        <script src="js/jquery-price-slider.js"></script>
		<!-- Simple Lence JS
		============================================ -->
		<script type="text/javascript" src="js/jquery.simpleGallery.min.js"></script>
		<script type="text/javascript" src="js/jquery.simpleLens.min.js"></script>	
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- DB Click JS
		============================================ -->
        <script src="js/dbclick.min.js"></script>
		<!-- Countdown JS
		============================================ -->
        <script src="js/jquery.countdown.min.js"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from devitems.com/tf/selphy-preview/selphy/my-account.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2016 08:12:12 GMT -->
</html>
