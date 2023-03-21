<?php
$pagetitle="Checkout";
?>
<?php include ("includes/header_prod.php") ;?>

		<!-- Checkout area -->
		<div class="checkout-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="page-title">
							<h2>Checkout</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9 col-sm-12">
						<!-- Payment Method -->
						<div class="payment-method">
							<!-- Panel Gropup -->
							<div class="panel-group" id="accordion">
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" class="active" data-parent="#accordion" href="#checkut1">
											<span class="number">1</span>Checkout Method</a>
										</h4>
									</div>
									<div id="checkut1" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row">
											<div class="col-md-6 col-sm-6">
												<form class="checkout-form product-form">
													<h2>Checkout as a Guest or Register</h2>
													<div class="checkout-form-inner">
														<p>Register with us for future convenience:</p>
														<div class="i_boxb">											
															<input class="checkout_radio" type="radio" name="tag" id="credio"/>
															<label class="cradio" for="credio">Checkout as Guest</label>
														</div>
														<div class="i_boxb">											
															<input class="checkout_radio" type="radio" name="tag" id="craiot"/>
															<label class="cradio" for="craiot">Register</label>
														</div>
														<p>
															<span>Register and save time!</span><br />
															Register with us for future convenience:<br />
															Fast and easy check out<br />
															Easy access to your order history and status<br />
														</p>										
													</div>
													<div class="user-bottom fix">
														<button class="btn custom-button" type="button">Create an Account</button>
													</div>
												</form>
											</div>
											<div class="col-md-6 col-sm-6">
												<form class="checkout-form product-form">
													<h2>Login</h2>
													<div class="submit_review">
														<p class="title"><b>Already registered?</b></p>
														<p>Please log in below</p>
														<div class="account-form">
															<div class="form-goroup">
																<label>Email Address <sup>*</sup></label>
																<input type="text" required class="form-control">
															</div>
															<div class="form-goroup">
																<label>Password <sup>*</sup></label>
																<input type="password" required class="form-control">
															</div>
														</div>						
													</div>
													<div class="user-bottom fix">
														<a href="#">Forgot Your Password?</a>
														<button class="btn custom-button" type="button">login</button>
													</div>
												</form>
											</div>
										</div>									
										</div>
									</div>
								</div><!-- End Panel Default -->
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#checkut2">
											<span class="number">2</span>Billing Information</a>
										</h4>
									</div>
									<div id="checkut2" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<form action="#">
													<div class="form">
														<div class="card_control">
															<ul>
																<li>
																	<div class="field fix">
																		<div class="input-box">
																			<label class="label" for="first">First Name <em>*</em></label>
																			<input type="text" class=" border_color" id="first">
																		</div>
																		<div class="input-box">
																			<label class="label" for="middle">Middle Name/Initial </label>
																			<input type="text" class=" border_color" id="middle">
																		</div>
																		<div class="input-box">
																			<label class="label" for="last">Last Name<em>*</em></label>
																			<input type="text" class=" border_color" id="last">
																		</div>
																	</div>
																</li>
																<li>
																	<div class="field fix">
																		<div class="input-box">
																			<label class="label" for="Company">Company </label>
																			<input type="text" class=" border_color" id="Company">
																		</div>
																		<div class="input-box">
																			<label class="label" for="email">Email Address <em>*</em></label>
																			<input type="email" class=" border_color" id="email"/>
																		</div>						
																	</div>
																</li>
																<li>
																	<div class="field fix">
																		<div class="input-box inhun">
																			<label class="label" for="addr">Address <em>*</em></label>
																			<input type="text" class=" border_color" id="addr"/>
																			<input type="text" class=" border_color"/>
																		</div>							
																	</div>	
																</li>
																<li>
																	<div class="field fix">
																		<div class="input-box">
																			<label class="label" for="City">City <em>*</em></label>
																			<input type="text" class=" border_color" id="City">
																		</div>				
																		<div class="input-box">
																			<label class="label" for="State">State/Province<em>*</em></label>
																			<div class="i_box">
																				<select  id="State">
																					<option value="" selected>Select</option>
																					<option value="">Japan</option>
																					<option value="">Germani</option>
																					<option value="">India</option>
																					<option value="">US</option>
																				</select>
																			</div>
																		</div>
																	</div>										
																</li>
																<li>
																	<div class="field fix">
																		<div class="input-box">
																			<label class="label" for="Zip">Zip/Postal Code <em>*</em></label>
																			<input type="text" class=" border_color" id="Zip">
																		</div>
																		<div class="input-box">
																			<label class="label" for="Country">Country<em>*</em></label>
																			<div class="i_box">
																				<select  id="Country">
																					<option value="" selected>Select</option>
																					<option value="">Japan</option>
																					<option value="">Germani</option>
																					<option value="">India</option>
																					<option value="">US</option>
																				</select>
																			</div>
																		</div>								
																	</div>									
																</li>
																<li>
																	<div class="field fix">
																		<div class="input-box">
																			<label class="label" for="Telephone">Telephone <em>*</em></label>
																			<input type="text" class=" border_color" id="Telephone">
																		</div>									
																		<div class="input-box">
																			<label class="label" for="Fax">Fax <em>*</em></label>
																			<input type="text" class=" border_color" id="Fax">
																		</div>			
																	</div>
																</li>
																<li>
																	<div class="chackoutl">
																		<div class="i_boxb topmargin">											
																			<input class="checkout_radio" type="radio" name="tag" id="guest"/>
																			<label class="cradio" for="guest">Checkout as Guest</label>
																		</div>
																		<div class="i_boxb">											
																			<input class="checkout_radio" type="radio" name="tag" id="regis"/>
																			<label class="cradio" for="regis">Register</label>
																		</div>									
																	</div>											
																</li>
															</ul>
														</div>
														<div class="button_check">									
															<div class="">									
																<span class="left_btn"><a href="#"><i class="fa fa-long-arrow-up"></i>Back</a></span><button type="submit" class="btn right_btn custom-button">Continue</button>
															</div>										
														</div>
													</div>
												</form>
											</div>									
										</div>
									</div>
								</div><!-- End Panel Default -->
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#checkut4">
											<span class="number">3</span>Shipping Method</a>
										</h4>
									</div>
									<div id="checkut4" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="flatrate">
													<p>Flat Rate</p>
													<p>Fixed &dollar;150.00</p>
												</div>								
												<div class="button_check">									
													<div class="">									
														<span class="left_btn"><a href="#"><i class="fa fa-long-arrow-up"></i>Back</a></span><button type="submit" class="btn right_btn custom-button">Continue</button>
													</div>										
												</div>											
											</div>										
										</div>
									</div>
								</div><!-- End Panel Default -->
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#checkut5">
											<span class="number">4</span>Payment Information</a>
										</h4>
									</div>
									<div id="checkut5" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="flatrate">
													<p><input type="radio" id="Money"/><label for="Money">Check / Money order </label></p>
													<p><input type="radio" id="Credit"/><label for="Credit">Credit Card (saved) </label></p>
												</div>								
												<div class="button_check">					
													<div class="">							
														<span class="left_btn"><a href="#"><i class="fa fa-long-arrow-up"></i>Back</a></span><button type="submit" class="btn right_btn custom-button">Continue</button>
													</div>										
												</div>											
											</div>
										</div>
									</div>
								</div><!-- End Panel Default -->	
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#checkut6">
											<span class="number">5</span>Order Review</a>
										</h4>
									</div>
									<div id="checkut6" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="table-responsive">
													<table class="tablec">
														<tr>
															<td>Product Name</td>
															<td>Price</td>
															<td>Qty</td>
															<td>Subtotal</td>
														</tr>
														<tr>
															<td>Cras neque metus</td>
															<td><p class="tabletextp">&dollar;155</p></td>
															<td>1</td>
															<td><p class="tabletextp">&dollar;155.00</p></td>
														</tr>
														<tr>
															<td colspan="3">
															<p class="tabletext">Subtotal</p>
															<p class="tabletext">Shipping & Handling (Flat Rate - Fixed)</p>
															<p class="tabletext">Grand Total</p>
															</td>
															<td>
																<p class="tabletextp">&dollar;155.00</p>
																<p class="tabletextp">&dollar;5.00</p>
																<p class="tabletextp">&dollar;160.00</p>
															</td>
														</tr>
														<tr>
															<td colspan="4">
																<div class="button_check">									
																	<div class="">									
																		<span class="left_btn"><a href="#">Forgot an Item? Edit Your Cart</a></span><button type="submit" class="btn right_btn custom-button">Continue</button>
																	</div>										
																</div>					
															</td>
														</tr>														
													</table>
												</div>
											</div>										
										</div>
									</div>
								</div><!-- End Panel Default -->												
							</div><!-- End Panel Gropup -->
						</div><!-- End Payment Method -->		
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="checkout-sidebar">
							<h4>Checkout Progress</h4>
							<ul>
								<li>Checkout Method</li>
								<li>Billing Information</li>
								<li>Shipping Method</li>
								<li>Payment Information</li>
								<li>Order Review</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end discount area -->	
		
		
		
		
		
		
		
		
		
		
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

<!-- Mirrored from devitems.com/tf/selphy-preview/selphy/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2016 08:12:12 GMT -->
</html>
