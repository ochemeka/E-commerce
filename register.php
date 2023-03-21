<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/pagination.php"); ?>
<?php include_once("includes/formvalidator.php"); ?>
<?php include ("includes/header_prod.php") ;?>
<?php 
include("includes/image_upload_functions.php") ?>

<?php
$pagetitle="Register"; ?>


<?php


$validator = new FormValidator();

if (isset($_POST['submit'])) {
$errors = array();
//$db_images = "";
											//sec_qst,sec_ans
			$required_fields = array('fullname','username','email','sec_qst','sec_ans','address','time','uid','phone','gender','password');
			foreach($required_fields as $fieldname) {
				if (!isset($_POST[$fieldname]) || (empty($_POST[$fieldname]))) { 
					$errors[] = $fieldname; 
				}
			}
			//include("includes/image_upload_app.php");
			//if(strlen($db_images) < 3){ $errors[] = "No image upload"; }


				// Perform Inssert
				//$passport = $db_images;
				/*
				
                $passport = $db_images;
				*/
				$fullname = stripslashes($_REQUEST['fullname']);
				$fullname = mysqli_real_escape_string($connection,$_POST['fullname']);
				$username = stripslashes($_REQUEST['username']);
				$username = mysqli_real_escape_string($connection,$_POST['username']);
				$sec_qst = stripslashes($_REQUEST['sec_qst']);
				$sec_qst = mysqli_real_escape_string($connection,$_POST['sec_qst']);
				$sec_ans = stripslashes($_REQUEST['sec_ans']);
				$sec_ans = mysqli_real_escape_string($connection,$_POST['sec_ans']);
				$gender = stripslashes($_REQUEST['gender']);
				$gender = mysqli_real_escape_string($connection,$_POST['gender']);
				$email = stripslashes($_REQUEST['email']);
				$email = mysqli_real_escape_string($connection,$_POST['email']);
				$address = stripslashes($_REQUEST['address']);
				$address = mysqli_real_escape_string($connection,$_POST['address']);
				$phone = stripslashes($_REQUEST['phone']);
				$phone = mysqli_real_escape_string($connection,$_POST['phone']);
				$temp_pass = stripslashes($_REQUEST['password']);
				$temp_pass = mysqli_real_escape_string($connection,$_POST['password']);
				$pass = md5($password);
				$passmail = mysqli_real_escape_string($connection,$_POST['password']);
				//$vcode = CC.$time.VEN;
				//$vcode = random_strings(15);
				$time = stripslashes($_REQUEST['time']);
				$time = mysqli_real_escape_string($connection,$_POST['time']);
				$vcode = stripslashes($_REQUEST['uid']);
				$vcode = mysqli_real_escape_string($connection,$_POST['uid']);
				//$vcode = rand(8);
				
				//$hash = md5( rand(0,1000) );
				// $passport = $db_images;
				/*$country = stripslashes($_REQUEST['country']);
				$country = mysqli_real_escape_string($connection,$_POST['country']);
				$state = stripslashes($_REQUEST['state']);
				$state = mysqli_real_escape_string($connection,$_POST['state']);
				$city = stripslashes($_REQUEST['city']);
				$city = mysqli_real_escape_string($connection,$_POST['city']);
				$address = stripslashes($_REQUEST['address']);
				$address = mysqli_real_escape_string($connection,$_POST['address']);
				$gender = stripslashes($_REQUEST['gender']);
				$gender = mysqli_real_escape_string($connection,$_POST['gender']);
				$phone = stripslashes($_REQUEST['phone']);
				$phone = mysqli_real_escape_string($connection,$_POST['phone']);
				$sec_qst = stripslashes($_REQUEST['sec_qst']);
				$sec_qst = mysqli_real_escape_string($connection,$_POST['sec_qst']);
				$sec_ans = stripslashes($_REQUEST['sec_ans']);
				$sec_ans = mysqli_real_escape_string($connection,$_POST['sec_ans']);
				$time = stripslashes($_REQUEST['time']);
				$time = mysqli_real_escape_string($connection,$_POST['time']);*/
				/*$sec_qst = stripslashes($_REQUEST['sec_qst']);
				$sec_qst = mysqli_real_escape_string($connection,$_POST['sec_qst']);
				$sec_ans = stripslashes($_REQUEST['sec_ans']);
				$sec_ans = mysqli_real_escape_string($connection,$_POST['sec_ans']);
				$hash = md5( rand(0,1000) );*/
				//$sortcode ="BOACC-".time();
				//$securecode ="USHSBACVR-".time();
				
				//Checking the password field against error.
				$validator->addValidation("password","req","Enter a valid password");
				$validator->addValidation("password","minlen=6","Invalid length of password. Length must be above 6 characters");
				$validator->addValidation("password","maxlen=30","Maximum length of password is 30 characters");
				//Checking user full name input field against error.
				$validator->addValidation("email","req","Enter your email");
				$validator->addValidation("email","alnum_s","Enter a valid email");
				$validator->addValidation("email","minlen=6","Invalid email. Length must be above 6 characters");
				$validator->addValidation("email","maxlen=30","Maximum length for name is 30 characters");
				//Checking user full name input field against error.
				$validator->addValidation("phone","req","Enter your phone number");
				$validator->addValidation("phone","alnum_s","Enter a valid phone number");
				$validator->addValidation("phone","minlen=5","Invalid full name. Length must be above 5 characters");
				$validator->addValidation("phone","maxlen=30","Maximum length for phone is 30 characters");
				
			if ($validator->ValidateForm() && empty($errors)) {
				// Perform Inssert
				// Check database to see if username and the hashed password exist there.
			$query = "SELECT * ";
			$query .= "FROM newmember_tbl ";
			$query .= "WHERE email = '{$email}' ";
			$query .= "LIMIT 1";
			$result_set = mysqli_query($connection,$query);
			confirm_query($result_set);
			if (mysqli_num_rows($result_set) == 1) {
			
							// username/password combo was not found in the database
				$errors[] = "Email Already Used";
		
}
	 else {
						//sec_qst,sec_ans
				$query1 = "INSERT INTO newmember_tbl (
						memcode, firstname, lastname, email, address, phone, gender, password, temp_pass, sec_qst, sec_ans, time
						) VALUES (
						'{$vcode}', '{$fullname}', '{$username}', '{$email}', '{$address}','{$phone}','{$gender}','{$pass}','{$temp_pass}','{$sec_qst}','{$sec_ans}','{$time}')";

				$result1 = mysqli_query($connection,$query1);
				if ($result1) {
					
				
 	$to = "{$email}";
	$sitename = SITE_NAME;
	$sitepath = SITE_PATH;
    $subject = $sitename."Signup | Email Confirmation";
//    $headers = "MIME-Version: 1.0" . "\r\n";
	$headers = 'X-Mailer: PHP/' . phpversion() . "\r\n";
    $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
    $headers .= "From: $sitename<support@lucianoluxuryhotel.com>";
    $message = "Dear $fullname,\r\n\r\n
	Thank you for registering with us, we appreciate your registration
	with us.
	Your account has been created, you can login with the following credentials tp place your reservation
	
	--------------------------------
	Username: $email\r\n
	Password: $passmail\r\n<br>
	Security Question: $sec_qst\r\n<br>
	Security Answer: $sec_ans\r\n<br>
	--------------------------------

	\r\n
	
	Best Regards,\r\n
	\r\n
	$sitename\r\n
    $sitepath\r\n
    ";

    mail($to, $subject, $message, $headers);
					// Success!
					//;redirect_to("login.php");
					echo "<script type='text/javascript'>alert('Account created successfully Login to Update profile!')</script>";
					redirect_to(SITE_PATH."login?p=success");
					
					
				} else {
					// Display error message.
					echo "<script type='text/javascript'>alert('Account creation failed!')</script>";
					echo "<p>" . mysqli_error($connection) . "</p>";
				}
	  }
			}else {
				// Errors occurred
				$message = "There were " . count($errors) . " errors in the form.";
			}
			
		
} // end: if (isset($_POST['submit']))
 ?>

		<!-- My Account Area -->
		<div class="my-account-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div align="center" class="page-title">
							<h2> Create an Account</h2>
                            
                           
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
									<h2><i class="fa fa-file-text"></i>Registered  Customers</h2>
								</div>
								<div class="user-content">
									<p>Please fill the required fields.</p>
								</div>
								<div class="account-form">
									 <form class="form-horizontal m-t-20"  method="post" enctype="multipart/form-data">
									 <?php if (!empty($message)) {echo "<div class='error'>" . $message . "</div>";} ?>
            <?php if (!empty($errors)) { display_errors($errors); } 
			?>
			
			 <input type="hidden" class="form-control"  value="<?php echo time(); ?>" name="time">
			  <input type="hidden" class="form-control"  value="<?php echo uniqid(15); ?>" name="uid">
										<div class="form-goroup">
											<label>Fullname <sup>*</sup></label>
											<input type="text" name="fullname" placeholder="fullname" required class="form-control">
										</div>
                                        <div class="form-goroup">
											<label>Username <sup>*</sup></label>
											<input type="text" name="username" placeholder="username" required class="form-control">
										</div>
                                        <div class="form-goroup">
											<label>Phone Number <sup>*</sup></label>
											<input type="text" name="phone" placeholder="eg +2348033229143" required class="form-control">
										</div>
										
                                        <div class="form-goroup">
											<label>Gender <sup>*</sup></label>
											<input type="text"  name="gender"required class="form-control">
										</div>
										<div class="form-goroup">
											<label>Email  <sup>*</sup></label>
											<input type="email"  name="email"required class="form-control">
										</div>
										<div class="form-goroup">
											<label>Resident Address <sup>*</sup></label>
											<input type="text"  name="address"required class="form-control">
										</div>
										<div class="form-goroup">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" required class="form-control">
										</div>
										<div class="form-goroup">
											<label>Security Security Question <sup>*</sup></label>
											 <select type="text" class="form-control"  placeholder="Select Security Question" name="sec_qst">
                      							<option value="0">Select Security Question</option>
                                               
                                                <option value="what is your mothers maaiden name">what is your mothers maiden name</option>
                                                <option value="What is the name of your pet?">What is the name of your pet?</option>
                                                <option value="What is your favourite colour?">What is your favourite colour? </option>
                                                <!--<option value="2018">2018</option>-->
                                            </select>
										</div>
										
										<div class="form-goroup">
											<label>Security Answer <sup>*</sup></label>
											<input type="text"  name="sec_ans"required class="form-control">
										</div>
									
                                    
                             <div class="user-bottom fix">
								<div class="user-bottom-inner">
									
									<button class="btn custom-button" name="submit" value="Sign up" type="submit">Sign up</button>
								</div>
							</div>
                                    	
										<!--<input class="btn custom-button" type="submit" name="submit" value="Sign up">-->
									</form>
								</div>
								<!--<p class="reauired-fields floatright"><sup>*</sup> Required Fields</p>-->
							</div>
							<div class="user-bottom fix">
								<div class="user-bottom-inner">
								<!--	<a href="#">Forgot Your Password?</a>
									<button class="btn custom-button" name="submit" value="submit" type="button">Sign Up</button>-->
									<!-- <button class="btn custom-button"  value="submit" name="submit" type="button">Log In</button>-->
									<!--<input class="btn custom-button" type="submit" name="submit" value="Sign up"-->
									
                         <h3>Already a Member? <a href="login.php"> Login</a></h3>

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
</php>
