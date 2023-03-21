<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/constant.php"); 
include('includes/pagination.php');
?>
<?php
$pagetitle="Nigeria Food Market: Local Food Items, Provision and ready made meal::  Return";
?>

<?php include ("includes/header_prod.php") ;?>
		
		<!-- Breadcurb Area -->
		<div class="breadcurb-area">
			<div class="container">
				<!--<ul class="breadcrumb">
					<li class="home"><a href="index.php">Home</a></li>
					<li>Shop</li>
				</ul>-->
			</div>
		</div><!-- End Breadcurb Area -->
		<!-- Shop Product Area -->
		<div class="shop-product-area">
			<div class="container">
				<div class="row">
					<!--<div class="col-md-3 col-sm-12">-->
						<!-- Left Sidebar-->
						<!--<div class="left-sidebar">-->
							<!--<div class="left-sidebar-title">
								<h2>Shop By</h2>
							</div>-->
							<!-- Shop Layout -->
							<!--<div class="shop-layout">
								<div class="layout-title">
									<h2>Category</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#">Dreeses</a></li>
										<li><a href="#">Shoes</a></li>
										<li><a href="#">Handbages</a></li>
										<li><a href="#">Clothing</a></li>
									</ul>
								</div>
							</div>--><!-- End Shop Layout Area -->
							<!-- Price Filter -->
							<!--<div class="price-filter-area shop-layout">
								<div class="price-filter">
									<div class="layout-title">
										<h2>Price</h2>
									</div>
									<div id="slider-range"></div>
									<p>
									  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
									</p>
									<button class="btn btn-default">Filter</button>
								</div>
							</div>--><!-- End Price Filter Area -->
							<!-- Shop Layout -->
							<!--<div class="shop-layout">
								<div class="layout-title">
									<h2>Manufacturer</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#">Adidas</a></li>
										<li><a href="#">Chanel</a></li>
										<li><a href="#">Dolce</a></li>
										<li><a href="#">Gabbana</a></li>
										<li><a href="#">Nike</a></li>
										<li><a href="#">Vogue</a></li>
									</ul>
								</div>
							</div>--><!-- End Shop Layout Area -->
							<!-- Shop Layout -->
							<!--<div class="shop-layout">
								<div class="layout-title">
									<h2>Color</h2>
								</div>
								<div class="layout-list">
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Brown</a></li>
										<li><a href="#">Pink</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">While</a></li>
										<li><a href="#">Yellow</a></li>
									</ul>
								</div>
							</div>--><!-- End Shop Layout -->
							<!-- Shop Layout Banner -->
							<!--<div class="shop-layout-banner single-banner">
								<a href="product_details.php">
									<img alt="banner" src="img/banner/banner1.png">
								</a>
							</div>--><!-- End Shop Layout Banner -->
							<!-- Popular Tag Area -->
							<?php /*?><div class="popular-tag-area">
								<div class="tag-title">
									<h2>Popular Tags</h2>
								</div>
								<!-- Shop Layout -->
								<div class="shop-layout">
									<div class="popular-tag">
										<div class="tag-list">
											<ul>
												<li><a href="#">Clothing</a></li>
												<li><a href="#">accessories</a></li>
												<li><a href="#">fashion</a></li>
												<li><a href="#">footwear</a></li>
												<li><a href="#">good</a></li>
												<li><a href="#">kid</a></li>
												<li><a href="#">Men</a></li>
												<li><a href="#">Women</a></li>
											</ul>
										</div>
										<div class="tag-action">
											<ul>
												<li><a href="shop.php">View all tags</a></li>
											</ul>
										</div>
									</div>
								</div><!-- End Shop Layout -->
							</div><?php */?><!-- End Popular Tag Area -->
						<!--</div>--><!-- End Left Sidebar -->
					<!--</div>-->
					<div align="center" class="col-md-12 col-sm-12">
						<!-- Shop Product View -->
						<div class="shop-product-view">
							<!-- Shop Category Image -->
							<div class="shop-category-image">
                                    <div class="featured-product-area">
                                            <div class="featured-product-title">
                                            <!--<img src="img/banner/banner-grid2.png" alt="banner">-->
                                            <img  src="<?php echo SITE_PATH; ?>img/banner/return_refund.jpg"  oncontextMenu = "return false" alt="banner">
                                            </div>
                                     </div>
							</div>
							<!-- Shop Product Tab Area -->
							<div class="product-tab-area">
								<!-- Tab Bar -->
							<!--	<div class="tab-bar">
									<div class="tab-bar-inner">
										<ul class="nav nav-tabs" role="tablist">
											<li class="active"><a href="#shop-product" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
											<li><a href="#shop-list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
										</ul>
									</div>-->
									<!--<div class="toolbar">
										<div class="sorter">
											<div class="sort-by">
												<label>Sort By</label>
												<select>
													<option value="position">Position</option>
													<option value="name">Name</option>
													<option value="price">Price</option>
												</select>
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</div>
										<div class="pager-list">
											<div class="limiter">
												<label>Show</label>
												<select>
													<option value="9">12</option>
													<option value="12">15</option>
													<option value="24">18</option>
													<option value="36">36</option>
												</select>
												per page
											</div>
										</div>
									</div>-->
							<!--	</div> End Tab Bar -->
								<!-- Tab Content -->
								<?php /*?><div class="tab-content">
									<!-- Shop Product-->
									<div class="tab-pane active" id="shop-product">
										<!-- Tab Single Product-->
										<div class="tab-single-product">
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s1.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Proin lectus ipsum</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s2.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Aliquam consequat</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Fusce aliquam</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s4.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Pellentesque habitant </a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
										</div><!-- End Tab Single Product-->
										<!-- Tab Single Product-->
										<div class="tab-single-product">
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s5.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Quisque in arcu</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s1.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Donec ac tempus </a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s7.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">voluptas nulla</a></h2>
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
														<p><span>$232.00</span>$132.00</p>
													</div>
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Etiam gravida</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
										</div><?php */?><!-- End Tab Single Product-->
										<!-- Tab Single Product-->
										<?php /*?><div class="tab-single-product">
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s8.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Proin lectus ipsum</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s9.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Proin lectus ipsum</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-new">New</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s7.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Cras neque metus</a></h2>
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
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
											<!-- Single Product -->
											<div class="singel-product single-product-col">
												<div class="label-pro-sale">hot</div>
												<!-- Single Product Image -->
												<div class="single-product-img">
													<a href="product_details.php"><img src="img/products/s5.jpg" alt="product"></a>
												</div>
												<!-- Single Product Content -->
												<div class="single-product-content">
													<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Fusce aliquam</a></h2>
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
														<p><span>$175.00</span>$125.00</p>
													</div>
													<!-- Single Product Actions -->
													<div class="product-actions">
														<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div><!-- End Single Product Actions -->
												</div><!-- End Single Product Content -->
											</div><!-- End Single Product -->
										</div><?php */?><!-- End Tab Single Product-->
									</div><!-- End Shop Product-->
									<!-- Shop List -->
									<div class="tab-pane" id="shop-list">
										<!-- Single Shop -->
										<?php /*?><div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="product_details.php"><img src="img/products/s1.jpg" alt="product"></a>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-product-content">
														<h2 class="product-name"><a href="product_details.php" title="Proin lectus ipsum">Proin lectus ipsum</a></h2>
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
														<div class="single-shop-details">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														</div><!-- End Single Product Actions -->
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="product_details.php"><img src="img/products/s2.jpg" alt="product"></a>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-product-content">
														<h2 class="product-name"><a href="product_details.php" title="Proin lectus ipsum">Aliquam consequat</a></h2>
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
															<p><span>$300.00</span>$155.00</p>
														</div>
														<div class="single-shop-details">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														</div><!-- End Single Product Actions -->
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-product-content">
														<h2 class="product-name"><a href="product_details.php" title="Proin lectus ipsum">Fusce aliquam</a></h2>
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
															<p><span>$245.00</span>$199.00</p>
														</div>
														<div class="single-shop-details">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														</div><!-- End Single Product Actions -->
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="product_details.php"><img src="img/products/s4.jpg" alt="product"></a>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-product-content">
														<h2 class="product-name"><a href="product_details.php" title="Proin lectus ipsum">Pellentesque habitant </a></h2>
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
														<div class="single-shop-details">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														</div><!-- End Single Product Actions -->
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
										<!-- Single Shop -->
										<div class="single-shop single-product">
											<div class="row">
												<div class="col-md-4 col-sm-4">
													<div class="single-product-img">
														<a href="product_details.php"><img src="img/products/s5.jpg" alt="product"></a>
														<div class="add-to-link">
															<ul class="">
																<li class="quic-view"><button data-toggle="modal" data-target="#productModal" type="button"><i class="fa fa-search"></i>Quick view</button></li>
																<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
																<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="col-md-8 col-sm-8">
													<div class="single-product-content">
														<h2 class="product-name"><a href="product_details.php" title="Proin lectus ipsum">Quisque in arcu</a></h2>
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
															<p>$234.00</p>
														</div>
														<div class="single-shop-details">
															<p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva </p>
														</div>
														<!-- Single Product Actions -->
														<div class="product-actions">
															<button type="button" title="Add to Cart" class="button btn-cart"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
														</div><!-- End Single Product Actions -->
													</div>
												</div>
											</div>
										</div><!-- End Single Shop -->
									</div><?php */?><!-- End Shop List -->
								</div><!-- End Tab Content -->
								<!-- Tab Bar -->
								<!--<div class="tab-bar tab-bar-bottom">
									<div class="toolbar">
										<div class="sorter">
											<div class="sort-by">
												<label>Sort By</label>
												<select>
													<option value="position">Position</option>
													<option value="name">Name</option>
													<option value="price">Price</option>
												</select>
												<a href="#"><i class="fa fa-long-arrow-up"></i></a>
											</div>
										</div>
										<div class="pages">
											<strong>Page:</strong>
											<ol>
												<li class="current">1</li>
												<li><a href="#">2</a></li>
												<li><a title="Next" href="#"><i class="fa fa-arrow-right"></i></a></li>
											</ol>
										</div>
									</div>
								</div>--><!-- End Tab Bar -->
							</div><!-- End Shop Product Tab Area -->
						</div><!-- End Shop Product View -->
					</div>
				</div>
			</div>
			
			<div class="brand-area">
			<div class="container">
				<div class="row">
                
                
					<div style="margin-left:auto90px;" align="center" class="col-md-3">
					
					<!--<div class="single-services-icon">
										<img src="img/\banner\placing-order.png" alt="toop">
									</div>-->
									<div class="single-services-content">
                                    
                                  <div> <img src="<?php echo SITE_PATH; ?>img/banner/returnn.png" alt="toop"></div><br /><br />
									
                                    	<h2 style="color:#000000;">ENJOY OUR EASY RETURN AND REFUND POLICY</h2>
										<p>
                                        You can return all eligible item(s) within 7 business days 
                                        </p>
										


									</div>
					
					</div>
				<!--						-->
					<div style="margin-left:auto90px;" align="center" class="col-md-3">
					
					<!--<div class="single-services-icon">
										<img src="img/\banner\placing-order.png" alt="toop">
									</div>-->
									<div class="single-services-content">
                                    
                                  <div> <img src="<?php echo SITE_PATH; ?>img/banner/track_car.png" alt="toop"></div><br /><br />
									
                                    	<h2 style="color:#000000;">PREPARE THE ITEM</h2>
										
										<p>
                                        Place the item in its original packaging, else your return will be invalid.
                                        </p>


									</div>
					
					</div>
					<!--                   -->
                    <!--						-->
					<div style="margin-left:auto90px;" align="center" class="col-md-3">
					
					<!--<div class="single-services-icon">
										<img src="img/\banner\placing-order.png" alt="toop">
									</div>-->
									<div class="single-services-content">
                                    
                                  <div> <img src="<?php echo SITE_PATH; ?>img/banner/drop.png" alt="toop"></div><br /><br />
									
                                    	<h2 style="color:#000000;">SCHEDULE A PICK UP</h2>
										
										<p> 
                                        Return the item at our pickup stations or we can pick up from you within 1 - 4 business days. Always ensure your return slip is signed by our agents as your proof of return.
                                        </p>


									</div>
					
					</div>
					<!--                   -->
                    
					<div style="margin-left:auto90px;" align="center" class="col-md-3">
					
					<!--<div class="single-services-icon">
										<img src="img/\banner\placing-order.png" alt="toop">
									</div>-->
									<div class="single-services-content">
                                    
                                  <div> <img src="<?php echo SITE_PATH; ?>img/banner/cash.png" alt="toop"></div><br /><br />
									
                                    	<h2 style="color:#000000;">REFUND PROCESSED</h2>
										
										
                                            <p>
                                            Once we receive your returned item, we will inspect it and process your refund within 10 business days
                                            
                                            </p>

									</div>
					
					</div>
					<!---->
                    
                    
                    
                    
				</div>
			</div>
			</div>		
		</div><!-- End Shop Product Area -->
        
        
        
      <!-- FAQ	-->
       <!--  <div align="center" class="col-md-12 col-sm-12">
      <div class="col-md-9 col-sm-12">-->
						<!-- Payment Method 
						
						</div>-->
        <div class="brand-area">
			<div class="container">
				<div class="row">
                        <div align="center"  class="col-md-12">
                                <div class="page-title">
                                    <h2 style="color:#000000;">FAQ</h2>
                                </div>
                        </div>
                
              <div class="col-md-2">
                 
                 </div>
                 
            <div class="col-md-8 col-sm-12">
                <div class="payment-method">
							<!-- Panel Gropup -->
							<div class="panel-group" id="accordion">
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" class="active" data-parent="#accordion" href="#checkut1">
											<span class="number">1.</span>&nbsp;&nbsp;Can I cancel my order?</a>
										</h4>
									</div>
									<div id="checkut1" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="row">
											
											<div class="col-md-12 col-sm-12">
												
													<h5>
                                                   

Yes, you can cancel your order when it is in Order In Progress. Please note that orders in shipped status cannot be canceled.
								</h5>
												
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
											<span class="number">2.</span>&nbsp;&nbsp;My order was prepaid, how will I get a refund?</a>
										</h4>
									</div>
									<div id="checkut2" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<h5>
                                                   

If your order is prepaid, we will proceed with the refund within 7 days and notify you. Your refund will be credited to your E-wallet. You can either use the credit to make a new purchase or withdraw it into a bank account.


								</h5>
													
											</div>									
										</div>
									</div>
								</div><!-- End Panel Default -->
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#checkut3">
											<span class="number">3.</span>&nbsp;&nbsp;My order has been shipped but I still want to cancel it.</a>
										</h4>
									</div>
									<div id="checkut3" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<h5>
                                                   
If your order has been shipped, not to worry, once you are contacted by our delivery agent, kindly reject the delivery of the shipped order.


								</h5>									
											</div>										
										</div>
									</div>
								</div><!-- End Panel Default -->
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#checkut4">
										<span class="number">4.</span>&nbsp;&nbsp; I ordered for more than one Item, will they all arrive in the same day?</a>
										</h4>
									</div>
									<div id="checkut4" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="flatrate">
													<p>If your order consists of items from more than one seller, your items will arrive separately. If your order consists of items from a single seller, your items may arrive together or separately. If your orders arrive separately, be rest assured that the remaining item(s) will be delivered shortly.</p>
													
												</div>								
												<!--<div class="button_check">					
													<div class="">							
														<span class="left_btn"><a href="#"><i class="fa fa-long-arrow-up"></i>Back</a></span><button type="submit" class="btn right_btn custom-button">Continue</button>
													</div>										
												</div>	-->										
											</div>
										</div>
									</div>
								</div><!-- End Panel Default -->	
								<!-- Panel Default -->
								<div class="panel panel_default">
									<div class="panel_heading">
										<h4 class="check-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#checkut5">
											<span class="number">5.</span>&nbsp;&nbsp; Why do I see different prices for the same product?</a>
										</h4>
									</div>
									<div id="checkut5" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="table-responsive">
                                                <p>
                                                There are different sellers with different prices. We believe that by supporting these 'third-party' sellers, we can offer you a wider product selection, more choice, increased convenience, and better pricing. We at <strong>NFM</strong> are committed to bringing you online marketplace that supports Nigerian entrepreneurs.
                                                </p>
                                                
													
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
											<span class="number">6.</span>&nbsp;&nbsp; Who will deliver my order?</a>
										</h4>
									</div>
									<div id="checkut6" class="panel-collapse collapse">
										<div class="panel-body">
											<div class="col-lg-12 col-md-12 col-sm-12">
												<div class="table-responsive">
                                                <p>
                                               Your order may be delivered by Our courier companies or other courier services
                                                </p>
                                                
													
												</div>
											</div>										
										</div>
									</div>
								</div><!-- End Panel Default -->
                                
                                												
							</div><!-- End Panel Gropup --> 
           </div>      
           
                   <!-- FAQ	-->
			<div class="col-md-2">
                 
                 </div>	

                </div>
              </div> 
         </div>  </div></div>     
        <!-- FAQ	-->
        
        
        
        
        
		<!-- Brand Area -->
		<div class="brand-area">
			<div class="container">
				<div class="row">
                
                 <!-- FAQ	-->
                 
                                
                	<div class="col-md-4">
						<div class="brand-add">
							<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl5.png" alt="brand-logo"></a>
						</div>
					</div>
					<div class="col-md-8">
						<!-- Brand Logo -->
						<div class="brand-logo">
							<div id="logo-carousel" class="owl-carousel">
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl1.png" alt="brand-logo"></a>
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl2.png" alt="brand-logo"></a>
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl3.png" alt="brand-logo"></a>
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl4.png" alt="brand-logo"></a>
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl1.png" alt="brand-logo"></a>
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl2.png" alt="brand-logo"></a>
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl3.png" alt="brand-logo"></a>
								<a href="#"><img src="<?php echo SITE_PATH; ?>img/brand-logo/bl4.png" alt="brand-logo"></a>
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
		
		
		
		
		
		
		
		
		
		
		<!-- Quickview Product -->
		<div id="quickview-wrapper">
			<!-- Modal -->
			<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<div class="modal-product">
								<div class="product-images">
									<div class="main-image images">
										<img alt="product" src="img/products/s1.jpg">
									</div>
								</div><!-- End product-images -->
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
											<div class="product-actions">
												<button class="button btn-cart" title="Add to Cart" type="button"><i class="fa fa-shopping-cart">&nbsp;</i><span>Add to Cart</span></button>
											</div>
										</form>
									</div>
									<div class="social-sharing">
										<div class="widget widget_socialsharing_widget">
											<h3 class="widget-title-modal">Share this product</h3>
											<ul class="social-icons">
												<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
												<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
												<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
												<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
												<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
								</div><!-- End product-info -->
							</div><!-- End modal-product -->
						</div><!-- End modal-body -->
					</div><!-- End modal-content -->
				</div><!-- End modal-dialog -->
			</div><!-- End Modal -->
		</div><!-- End Quickview Product -->
				
		
		
		
		
		
		<!-- jquery
		============================================ -->		
        <script src="<?php echo SITE_PATH; ?>js/vendor/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="<?php echo SITE_PATH; ?>js/bootstrap.min.js"></script>
		<!-- nivo slider js
		============================================ --> 
		<script src="<?php echo SITE_PATH; ?>js/jquery.nivo.slider.pack.js"></script>
		<!-- Mean Menu js
		============================================ -->         
        <script src="<?php echo SITE_PATH; ?>js/jquery.meanmenu.min.js"></script>
		<!-- price-slider JS
		============================================ -->		
        <script src="<?php echo SITE_PATH; ?>js/jquery-price-slider.js"></script>
		<!-- Simple Lence JS
		============================================ -->
		<script type="text/javascript" src="<?php echo SITE_PATH; ?>js/jquery.simpleGallery.min.js"></script>
		<script type="text/javascript" src="<?php echo SITE_PATH; ?>js/jquery.simpleLens.min.js"></script>	
		<!-- owl.carousel JS
		============================================ -->		
        <script src="<?php echo SITE_PATH; ?>js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="<?php echo SITE_PATH; ?>js/jquery.scrollUp.min.js"></script>
		<!-- DB Click JS
		============================================ -->
        <script src="<?php echo SITE_PATH; ?>js/dbclick.min.js"></script>
		<!-- Countdown JS
		============================================ -->
        <script src="<?php echo SITE_PATH; ?>js/jquery.countdown.min.js"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="<?php echo SITE_PATH; ?>js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="<?php echo SITE_PATH; ?>js/main.js"></script>
    </body>

<!-- Mirrored from devitems.com/tf/selphy-preview/selphy/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 Jul 2016 08:11:58 GMT -->
</html>
