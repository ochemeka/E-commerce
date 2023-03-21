<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php // include('includes/ps_pagination1.php'); ?>
<?php //include_once("includes/formvalidator.php"); ?>
<?php
$pagetitle="Login";
?>
<?php include ("includes/header_prod.php") ;?>
 <?php //include_once("includes/formvalidator.php"); ?>


<?php
	
	if (logged_in()) {
		redirect_to(SITE_PATH."dashboard");
	}

	
	// START FORM PROCESSING
	if (isset($_POST['reset'])) { // Form has been submitted.
		$errors = array();

		// perform validations on the form data
		$required_fields = array('email');
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));

		//$fields_with_lengths = array('username' => 30, 'password' => 30);
		//$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($connection,$_POST['email']);
		//$password = stripslashes($_REQUEST['password']);
		//$password = mysqli_real_escape_string($connection,$_POST['password']);
		//$hashed_password = md5($password);
		
		if ( empty($errors) ) {
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT email ";
			$query .= "FROM newmember_tbl ";
			$query .= "WHERE email = '{$email}'";
			//$query .= "AND password = '{$hashed_password}' AND status=1 ";
			$query .= " LIMIT 1";
			//$query = ("SELECT adm_id, adm_username,adm_password, adm_status FROM admintbl WHERE adm_username='".$username."' AND adm_password='".$password."' AND adm_status='1', LIMIT 1");
			$result_set = mysqli_query($connection,$query);
			confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match

				$aID = $email;
			    $query4="SELECT * from newmember_tbl where email = '$aID' order by id";
			    $result4 = mysqli_query($connection,$query4);
				$cat_set4=mysqli_fetch_array($result4);
				
				$user = $cat_set4["email"];
				$token = $cat_set4["memcode"];
				$hashed = md5($token);
				$url = "hash=".$hashed."&email=".$user."&token=".$token ;
				$fname = $cat_set4["firstname"];

		
$u = "changepassword?";               
$Recipient = $user ;
$sitename = SITE_NAME;
$sitepath = SITE_PATH; 
$SendName = "nigeriafoodmarket";
//$tocc = "articles@queensenglishediting.com";
//$tobcc = $_POST['BCC'];
$Replyto = "no-reply@nigeriafoodmarket.com";
$From = "no-reply@nigeriafoodmarket.com";
$Messagetitle = "Password Reset Link ";
$Message = $message = "Dear $fname,\r\n
Kindly click on the below link to reset your account password or best copy link and paste in your browser url to reset account password.\r\n
\r\n
Naija Restaurant Password Reset url:  $sitepath$u$url
	\r\n

	
Best regards 
\r\n
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
Support Agent \r\n
$SendName \r\n
E-mail: no-reply@naijarestaurant.com\r\n
URL: $sitepath \r\n
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

";




$headers = array();
$headers[] = 'MIME-Version: 1.0';
$headers []= 'Content-Type: text/html; charset=\"iso-8859-1\"\n';


$headers [] = 'Reply-To:'.$Replyto;
$headers [] = 'Return-Path:'.$Replyto;
$headers[] = 'X-Mailer: PHP/'.phpversion();

$headers = array();
$headers[] = 'From: ' .$SendName. '<'.$From.'>';
$headers [] = 'Reply-To: ' . $Replyto;
//$headers [] = 'Cc: ' . $tocc;
//$headers [] = 'Bcc: ' . $tobcc;



$blast = mail($Recipient, $Messagetitle, $Message, join("\r\n", $headers));


if($blast){
 echo "<script type='text/javascript'>alert('Reset Password Link have been sent to your Email successfully! Note: Check Inbox or Spam for Reset Mail')</script>";
					redirect_to(SITE_PATH."dashboard");

}
}
}
else {


// Display error message.
					echo "<script type='text/javascript'>alert('Email not associated with any account!')</script>";
					echo "<p>" . mysqli_error($connection) . "</p>";	
	
	
}


}
?>


<?php /*?><?php


// START FORM PROCESSING
if (isset($_POST['submit'])) { // Form has been submitted.
$errors = array();

			$required_fields = array('email');
			foreach($required_fields as $fieldname) {
				if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))) { 
					$errors[] = $fieldname; 
				}
			}
			
			$email = stripslashes($_REQUEST['email']);
			$email = mysqli_real_escape_string($connection,$_POST['email']);
		
		
			$query =  "SELECT * FROM newmember_tbl WHERE email = '$email' ";
			$result_set = mysqli_query($connection,$query);
			confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				$row = mysqli_fetch_array($result_set);
				$db_email = $row['email'];
				$db_id = $row['id'];
				$fullname = $row['firstname'];
				$memcode = $row['memcode']; //uniqid(md5(time()));//this is random token
				$hash = md5($row['memcode']);
				$reset_url = "recoverpassword?user=".'$db_email'."&memcode=".'$memcode'."&pass=".'$hash';
									
				
 	$to = "{$email}";
	$sitename = SITE_NAME;
	$sitepath = SITE_PATH;
    $subject = $sitename."Account Login Reset";
//    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers = 'X-Mailer: PHP/' . phpversion() . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= "From: $sitename<no-reply@nigeriafoodmarket.com>";
    $message = "Dear $fullname,\r\n\r\n
	Kindly find below url to reset password  \r\n\r\n
	
	--------------------------------
	Password Reset URL: $reset_url\r\n
	--------------------------------

	\r\n
	
	Best Regards,\r\n
	\r\n
	$sitename\r\n
    $sitepath\r\n
    ";

    mail($to, $subject, $message, $headers);
					// Success!
				
				
				echo "<script type='text/javascript'>alert('Password Reset Link have been sent to your email!')</script>";
					redirect_to(SITE_PATH."changepassword.php?p=success");
					
					
				} else {
					// Display error message.
					echo "<script type='text/javascript'>alert('Reset Password failed!')</script>";
					echo "<p>" . mysqli_error($connection) . "</p>";
				}
				
				
				
	}			

?><?php */?>


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
									
										<div class="form-goroup">
											<label>Email Address <sup>*</sup></label>
											<input type="text" placeholder="please enter your email"  name="email"required class="form-control">
										</div>
                                        
									<!--	<div class="form-goroup">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" required class="form-control">
										</div>
										
										<button class="btn custom-button" name="login" value="login" type="button">Sign Up</button>-->
										<input class="btn custom-button" type="submit" name="reset" value="Submit">
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
