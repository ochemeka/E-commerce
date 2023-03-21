<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/constant.php"); 

include('includes/pagination.php');
?>
<?php
$pagetitle="Nigeria Food Market: Local Food Items, Provision and ready made meal:: Product Detail";
?>
<?php include ("includes/header_prod.php") ;?>
		<!-- Breadcurb Area -->
		<div class="breadcurb-area">
			<div class="container">
				<ul class="breadcrumb">
					<li class="home"><a href="index.php">Home</a></li>
					<li class=""><a href="product_details.php">Laptop</a></li>
					<li>product</li>
				</ul>
			</div>
		</div><!-- End Breadcurb Area -->
		<!-- Single Product details Area -->
		<div class="single-product-detaisl-area">
			<!-- Single Product View Area -->
			<div class="single-product-view-area">
				<div class="container">
					<div class="row">
						<div class="col-md-5">
							<!-- Single Product View -->
							<div class="single-procuct-view">
								<!-- Simple Lence Gallery Container -->
								<div class="simpleLens-gallery-container" id="p-view">
									<div class="simpleLens-container tab-content">
										<div class="tab-pane active" id="p-view-1">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/1.jpg">
													<img src="img/products/single-product/medium/1.jpg" class="" alt="productd">
                                                    <!--<img src="img/products/single-product/medium/1.jpg" class="simpleLens-big-image" alt="productd">-->
												</a>
											</div>
										</div>
										<!--<div class="tab-pane" id="p-view-2">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/2.jpg">
													<img src="img/products/single-product/medium/2.jpg" class="simpleLens-big-image" alt="productd">
												</a>
											</div>
										</div>-->
										<!--<div class="tab-pane" id="p-view-3">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/3.jpg">
													<img src="img/products/single-product/medium/3.jpg" class="simpleLens-big-image" alt="productd">
												</a>
											</div>
										</div>-->
										<!--<div class="tab-pane" id="p-view-4">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/4.jpg">
													<img src="img/products/single-product/medium/4.jpg" class="simpleLens-big-image" alt="productd">
												</a>
											</div>
										</div>-->
										<!--<div class="tab-pane" id="p-view-5">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/1.jpg">
													<img src="img/products/single-product/medium/1.jpg" class="simpleLens-big-image" alt="productd">
												</a>
											</div>
										</div>
										<div class="tab-pane" id="p-view-6">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/2.jpg">
													<img src="img/products/single-product/medium/2.jpg" class="simpleLens-big-image" alt="productd">
												</a>
											</div>
										</div>
										<div class="tab-pane" id="p-view-7">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/3.jpg">
													<img src="img/products/single-product/medium/3.jpg" class="simpleLens-big-image" alt="productd">
												</a>
											</div>
										</div>
										<div class="tab-pane" id="p-view-8">
											<div class="simpleLens-big-image-container">
												<a class="simpleLens-lens-image" data-lens-image="img/products/single-product/large/4.jpg">
													<img src="img/products/single-product/medium/4.jpg" class="simpleLens-big-image" alt="productd">
												</a>
											</div>
										</div>-->
									</div>
									<!-- Simple Lence Thumbnail -->
									<div class="simpleLens-thumbnails-container">
										<div id="single-product" class="owl-carousel custom-carousel">
											<ul class="nav nav-tabs" role="tablist">
												<li class="active"><a href="#p-view-1" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/1.jpg" alt="productd"></a></li>
												<li class=""><a href="#p-view-2" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/2.jpg" alt="productd"></a></li>
												<li class="last-li"><a href="#p-view-3" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/3.jpg" alt="productd"></a></li>
												<li class="hidden-md hidden-xs"><a href="#p-view-4" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/4.jpg" alt="productd"></a></li>
											</ul>
											<ul class="nav nav-tabs" role="tablist">
												<li class=""><a href="#p-view-5" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/1.jpg" alt="productd"></a></li>
												<li class=""><a href="#p-view-6" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/2.jpg" alt="productd"></a></li>
												<li class="last-li"><a href="#p-view-7" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/3.jpg" alt="productd"></a></li>
												<li class="hidden-md hidden-xs"><a href="#p-view-8" role="tab" data-toggle="tab"><img src="img/products/single-product/thumbnail/4.jpg" alt="productd"></a></li>
											</ul>
										</div>
									</div><!-- End Simple Lence Thumbnail -->
								</div><!-- End Simple Lence Gallery Container -->
							</div><!-- End Single Product View -->
						</div>
						<div class="col-md-7">
							<!-- Single Product Content View -->
							<div class="single-product-content-view">
								<div class="product-info">
									<h1>Proin lectus ipsum</h1>
									<div class="ratings">
										<div class="rating-box">  
											<div class="rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>  
										</div>
									</div>
									<p class="rating-links">
										<a href="#">1 Review(s)</a>
										<span class="separator">|</span>
										<a href="#" class="add-to-review">Add Your Review</a>
									</p>
									<p class="availability in-stock">Availability: <span>In stock</span></p>
									<div class="quick-desc">
										Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti
									</div>
									<div class="price-box">
										<p class="price"><span class="special-price"><span class="amount">$155.00</span></span></p>
									</div>
								</div><!-- End product-info -->
								<!-- Add to Box -->
								<div class="add-to-box add-to-box2">
									<div class="actions-inner">
										<ul class="add-to-links">
											<li><a class="link-wishlist" title="Add to Wishlist" href="#"><i class="fa fa-star"></i></a></li>
											<li><a class="link-compare" title="Add to Compare" href="#"><i class="fa fa-retweet"></i></a></li>
											<li class="email-friend" title="Email to a Friend"><a href="#"><i class="fa fa-envelope"></i></a></li>
										</ul>
									</div>
									<div class="product-select product-color">
										<h2>Color <sup>*</sup></h2>
										<select>
											<option>--Please Select--</option>
											<option>Green +$2.00</option>
											<option>Blue +$1.00</option>
											<option>White +$3.00</option>
										</select>
									</div>
									<div class="product-select product-size">
										<h2>Size <sup>*</sup></h2>
										<select>
											<option>--Please Select--</option>
											<option>XL +$3.00</option>
											<option>L +$2.00</option>
											<option>M +$1.00</option>
										</select>
									</div>
									<div class="price-box">
										<p class="price"><span class="special-price"><span class="amount">$155.00</span></span></p>
									</div>
									<div class="quick-add-to-cart">
										<form method="post" class="cart">
											<div class="qty-button"> 	
												<input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
												
												<div class="box-icon button-plus"> 
													<input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
												</div>	
												<div class="box-icon button-minus">
													<input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
												</div>
											</div>
											<a href="cart.php">
											<div class="product-actions">
												<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button></div></a>
											</div>
										</form>
									</div>
								</div><!-- End Add to Box -->
								<!-- Social Shiring -->
								<div class="social-sharing">
									<a href="#"><img src="img/icon/social.png" alt="social"></a>
								</div><!-- End Social Shiring -->
							</div><!-- End Single Product Content View -->
						</div>
					</div>
				</div>
			</div><!-- End Single Product View Area -->
			<!-- Single Description Tab -->
			<div class="single-product-description">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="product-description-tab custom-tab">
								<!-- tab bar -->
								<ul class="nav nav-tabs" role="tablist">
									<li class="active"><a href="#product-des" data-toggle="tab">Product Description</a></li>
									<li><a href="#product-rev" data-toggle="tab">Reviews</a></li>
									<li><a href="#product-tag" data-toggle="tab">Product Tags</a></li>
								</ul>
								<!-- Tab Content -->
								<div class="tab-content">
									<div class="tab-pane active" id="product-des">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis. Suspendisse aliquet urna pretium eros convallis interdum. Quisque in arcu id dui vulputate mollis eget non arcu. Aenean et nulla purus. Mauris vel tellus non nunc mattis lobortis. </p>
									</div>
									<div class="tab-pane" id="product-rev">
										<div class="row">
											<div class="col-md-6">
												<div class="product-rev-left">
													<p class="product-action">
														<a href="http://bootexperts.com/">BootExperts</a> <b>Review by</b> <span>BootExperts</span>
													</p>
													<div class="product-ratting">
														<table class="">
															<tr>
																<td>Quality</td>
																<td>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</td>
															</tr>
															<tr>
																<td>Price</td>
																<td>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</td>
															</tr>
															<tr>
																<td>Value</td>
																<td>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																</td>
															</tr>
														</table>
													</div>
													<p>BootExperts <span class="posted">(Posted on 20/02/2016)</span></p>
												</div>
											</div>
											<div class="col-md-6">
												<div class="product-rev-right">
													<h3>You're reviewing: Proin lectus ipsum</h3>
													<h3><b>How do you rate this product? <span>*</span></b></h3>
													<div class="product-rev-right-table table-responsive">
														<table>
															<thead>
																<tr class="first last">
																	<th>&nbsp;</th>
																	<th><span class="nobr">1 star</span></th>
																	<th><span class="nobr">2 stars</span></th>
																	<th><span class="nobr">3 stars</span></th>
																	<th><span class="nobr">4 stars</span></th>
																	<th><span class="nobr">5 stars</span></th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th>Quality</th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																	<th><input type="radio" class="radio" name="ratings[1]"></th>
																</tr>
																<tr>
																	<th>Price</th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																	<th><input type="radio" class="radio" name="ratings[2]"></th>
																</tr>
																<tr>
																	<th>Value</th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																	<th><input type="radio" class="radio" name="ratings[3]"></th>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="porduct-rev-right-form">
														<form action="#" class="form-horizontal product-form">
															<div class="form-goroup">
																<label>Nickname <sup>*</sup></label>
																<input type="text" class="form-control" required>
															</div>
															<div class="form-goroup">
																<label>Summary of Your Review <sup>*</sup></label>
																<input type="text" class="form-control" required>
															</div>
															<div class="form-goroup">
																<label>Review <sup>*</sup></label>
																<textarea class="form-control" rows="5" required></textarea>
															</div>
															<div class="form-goroup form-group-button">
																<button class="btn custom-button" value="submit">Submit Review</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="product-tag">
										<h2>Other people marked this product with these tags:</h2>
										<p class="product-action">
											<a href="http://bootexperts.com/">Laptop </a> <span>(1)</span>
										</p>
										<form action="#" class="product-form">
											<label>Add Your Tags:</label>
											<input type="text" class="form-control" required>
											<button class="btn custom-button" value="submit">Add Tags</button>
										</form>
										<p>Use spaces to separate tags. Use single quotes (') for phrases.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- End Single Description Tab -->
			<!-- Product Area -->
			<div class="product-area ">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- Product View Area -->
							<div class="product-view-area fix">
								<!-- Single Product Category Related Products -->
								<div class="single-product-category related-products">
									<!-- Product Category Title-->
									<div class="head-title">
										<p>Related Products</p>
									</div>
									<!-- Product View -->
									<div class="product-view">
										<!-- Product View Carousel -->
										<div id="related-products-carousel" class="owl-carousel custom-carousel">
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s5.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Etiam gravida</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$111.00</span>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s2.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Proin lectus ipsum</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s9.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php"> Donec ac tempus </a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$114.00</span>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s3.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Proin lectus ipsum</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$345.00</span>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s1.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Nunc facilisis</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s2.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">consequences</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s6.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Proin lectus ipsum</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s5.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Quisque in arcu</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s4.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Proin lectus ipsum</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s3.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Cras neque metus</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$345.00</span>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
										</div><!-- End Product View Carousel -->
									</div><!-- End Product View-->
								</div><!-- End Single Product Category -->
								<!-- Single Product Category UpSell Product -->
							<?php /*?>	<div class="single-product-category upsell-products">
									<!-- Product Category Title-->
									<!--<div class="head-title">
										<p>UpSell Products</p>
									</div>-->
									<!-- Product View -->
									<div class="product-view">
										<!-- Product View Carousel -->
										<div id="upsell-products-carousel" class="owl-carousel custom-carousel">
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s9.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php"> Donec ac tempus </a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$114.00</span>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s3.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Proin lectus ipsum</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$345.00</span>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s1.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Nunc facilisis</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s2.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">consequences</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s6.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Proin lectus ipsum</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s5.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Quisque in arcu</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s4.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Proin lectus ipsum</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="#"><img src="img/products/s3.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product-details.php">Cras neque metus</a></h2>
													<div class="ratings">
														<div class="rating-box">  
															<div class="rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
															</div>  
														</div>
													</div>
													<div class="product-price">
														<p><span>$345.00</span>$99.00</p>
													</div>
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
										</div><!-- End Product View Carousel -->
									</div><!-- End Product View-->
								</div><!-- End Single Product Category -->
							</div><?php */?><!-- End Product View Area -->
						</div>
					</div>
				</div>
			</div><!-- End Product Area -->
		</div><!-- End Single Product details Area -->
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


<?php include ("includes/footer1.php") ;?>


		
	<?php /*?>	<!-- Footer Area -->
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

<!-- Mirrored from devitems.com/tf/selphy-preview/selphy/product-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2016 08:12:10 GMT -->
</php>
<?php */?>