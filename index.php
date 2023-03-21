<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php require_once("includes/constant.php"); 

include('includes/pagination.php');
?>

<?php

$pagetitle="Home";

//$pagetitle="Nigeria Food Market: Local Food Items, Provision and ready made meal:: Home";

//$member = get_user_id($_SESSION['username']);
//$member_part = mysqli_fetch_array($member);


//$member = get_user_id11();
//$member_part = mysqli_fetch_array($member);

?>

<?php
$pagetitle="Index";
?>
<?php include ("includes/header.php") ; ?>
		<!-- Main Slider Area -->
		<div class="main-slider-area another-home">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<!-- Slider Left Banner -->
						<div class="slider-banner">
<?php  
	 $item_per_page      = 2; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>gal";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM advertsleft "); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM advertsleft ORDER BY a_id ASC LIMIT $page_position, $item_per_page");



//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?> 						
							<!-- Single Banner -->
							<div class="single-banner">
								<!--<a href="product_details.php"><img src="img/banner/banner1.png" alt="banner"></a>-->
								<?php 
														$img_url = $row["advert_image"];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){ 
?>
									<img alt="Banner1" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" />	
                                    
									
									<?php } } ?>
								
							</div>
<?php } ?>							
							<!-- Single Banner -->
							<!--<div class="single-banner">
								<a href="product_details.php"><img src="img/banner/banner2.png" alt="banner"></a>
							</div>-->
							<!-- Single Banner -->
							<!--<div class="single-banner">
								<a href="product_details.php"><img src="img/banner/banner3.png" alt="banner"></a>
							</div>-->
						</div><!-- End Slider Left Banner -->
					</div>
					
					<div class="col-md-6">
						<!-- Main Slider -->
						<div class="main-slider">
							<div class="slider">
						
								<div style="height:361px;" id="mainSlider" class="nivoSlider slider-image">
		 <?php  
	 $item_per_page      = 5; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>slider";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM slider "); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM slider ORDER BY s_id ASC LIMIT $page_position, $item_per_page");

//Display records fetched from database.
//WHERE gal_status=1 ORDER BY gal_id desc

//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?>							
								
								<?php 
														$img_url = $row["slider_image"];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){  ?>
									<img style="height:361px; width:570px;" alt="Slider1" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" />	<?php } } ?>
									
									<?php } ?>	
									<!--<a href="product_details.php"><img src="img/slider/slider7.jpg" alt="main slider"></a>-->
									
									
									
									
									
									<!--<a href="product_details.php"><img src="img/slider/slider8.jpg" alt="main slider"></a>
                                    <a href="product_details.php"><img src="img/slider/slider7.jpg" alt="main slider"></a>
									<a href="product_details.php"><img src="img/slider/slider8.jpg" alt="main slider"></a>-->
								</div>
								
							
								
							</div>
						</div><!-- End Main Slider -->
					</div>
					<div class="col-md-3">
						<!-- Slider Left Banner -->
						<div class="slider-banner banner-bottom">
							<!-- Single Banner -->
<?php  
	 $item_per_page      = 2; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>advertsright";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM advertsright "); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM advertsright ORDER BY r_id ASC LIMIT $page_position, $item_per_page");

//Display records fetched from database.
//WHERE gal_status=1 ORDER BY gal_id desc

//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?>							
							<div class="single-banner">
								
						<?php 
														$img_url = $row["r_image"];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){ 
?>
									<img alt="Banner1" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" />	
                                    
									
									<?php } } ?>		
								
								
								<!--<a href="product_details.php"><img src="img/banner/banner7.png" alt="banner"></a>-->
								
								
							</div>
<?php } ?>								
							<!-- Single Banner -->
							<!--<div class="single-banner">
								<a href="product_details.php"><img src="img/banner/banner8.png" alt="banner"></a>
							</div>-->
							<!-- Single Banner -->
							<!--<div class="single-banner">
								<a href="product_details.php"><img src="img/banner/banner9.png" alt="banner"></a>
							</div>-->
						</div><!-- End Slider Left Banner -->
					</div>
				</div>
			</div>
		</div><!-- End Main Slider Area -->	
		
		<!-- Single Product Area -->
		<div class="single-product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Single Product Tab -->
						<div class="single-product-tab custom-tab">
							<!-- Tabs Bar -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active"><a href="#bestseller" data-toggle="tab">Bestseller Products</a></li>
								<li><a href="#most-viewed" data-toggle="tab">Most Viewed Products</a></li>
								<li><a href="#random" data-toggle="tab">Random Products</a></li>
							</ul><!-- End Tabs Bar -->
							<!-- Tab Content-->
							<div class="tab-content">
								<!-- Tab Pane-->
								<div class="tab-pane active" id="bestseller">
									<!-- Bestsell Carousel -->
									<div id="bestsell-carousel" class="owl-carousel custom-carousel">
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
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
														<!--<ul class="">
															<li class="quic-view"><button type="button" data-target="#productModal" data-toggle="modal"><i class="fa fa-search"></i>Quick view</button></li>
															<li class="wishlist"><a href="product_details.php"><i class="fa fa-heart"></i></a></li>
															<li class="refresh"><a href="product_details.php"><i class="fa fa-refresh"></i></a></li>
														</ul>-->
													</div>
												</div><!-- End Single Product Actions -->
											</div><!-- End Single Product Content -->
										</div><!-- End Single Product -->
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
									</div><!-- Bestsell Carousel -->
								</div><!-- End Tab Pane-->
								<!-- Tab Pane-->
								<div class="tab-pane" id="most-viewed">
									<!-- Most Viewed Carousel -->
									<div id="most-viewed-carousel" class="owl-carousel custom-carousel">
										<!-- Single Product -->
										<div class="singel-product single-product-col">
											<div class="label-pro-new">New</div>
											<!-- Single Product Image -->
											<div class="single-product-img">
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Donec non est</a></h2>
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
										<!-- Single Product -->
										<div class="singel-product single-product-col">
											<div class="label-pro-sale">hot</div>
											<!-- Single Product Image -->
											<div class="single-product-img">
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
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
											<div class="label-pro-sale">hot</div>
											<!-- Single Product Image -->
											<div class="single-product-img">
												<a href="product_details.php"><img src="img/products/s10.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">consequences</a></h2>
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
												<a href="product_details.php"><img src="img/products/s9.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Nunc facilisis</a></h2>
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
												<a href="product_details.php"><img src="img/products/s6.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">occaecati cupiditate</a></h2>
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
												<a href="product_details.php"><img src="img/products/s4.jpg" alt="product"></a>
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
												<a href="product_details.php"><img src="img/products/s8.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Accumsan elit</a></h2>
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
												<a href="product_details.php"><img src="img/products/s6.jpg" alt="product"></a>
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
									</div><!-- Most Viewed Carousel -->
								</div><!-- End Tab Pane-->
								<!-- Tab Pane-->
								<div class="tab-pane" id="random">
									<!-- Random Carousel -->
									<div id="random-carousel" class="owl-carousel custom-carousel">
										<!-- Single Product -->
										<div class="singel-product single-product-col">
											<div class="label-pro-sale">hot</div>
											<!-- Single Product Image -->
											<div class="single-product-img">
												<a href="product_details.php"><img src="img/products/s5.jpg" alt="product"></a>
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
													<p><span>$111.00</span>$99.00</p>
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
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php"> Donec ac tempus </a></h2>
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
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
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
												<a href="product_details.php"><img src="img/products/s1.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Nunc facilisis</a></h2>
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
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">consequences</a></h2>
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
												<a href="product_details.php"><img src="img/products/s6.jpg" alt="product"></a>
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
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
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
									</div><!-- Random Carousel -->
								</div><!-- End Tab Pane-->
							</div><!-- End Tab Content-->
						</div><!-- End Single Product Tab -->
					</div>
				</div>
			</div>
		</div><!-- End Single Product Area -->
        
        <!-- Top Banner Area -->
		<div class="top-banner-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<!-- Single Banner -->
						<div class="single-banner">
						
						<?php  
	 $item_per_page      = 3; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>gal";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM bannerlong "); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM bannerlong WHERE id = 2 ORDER BY id ASC LIMIT $page_position, $item_per_page");



//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?> 	
	 					
							<!-- Single Banner -->
							<div class="single-banner">
								<!--<a href="product_details.php"><img src="img/banner/banner1.png" alt="banner"></a>-->
								<?php 
														$img_url = $row["image"];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){ 
?>
									<img alt="Banner1" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" oncontextMenu = "return false" />	
                                    
									
									<?php } } ?>
								
							</div>
<?php } ?>							
							<!-- Single Banner -->
							<!--<div class="single-banner">
								<a href="product_details.php"><img src="img/banner/banner2.png" alt="banner"></a>
							</div>-->
							<!-- Single Banner -->
							<!--<div class="single-banner">
								<a href="product_details.php"><img src="img/banner/banner3.png" alt="banner"></a>
							</div>-->
						</div><!-- End Slider Left Banner -->
					</div>
					
					<?php /*?><div class="col-md-12">
						<!-- Main Slider -->
						<div class="main-slider">
							<div class="slider">
						
								<div id="mainSlider" class="nivoSlider slider-image">
		 <?php  
	 $item_per_page      = 1; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>bannerlong";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM bannerlong"); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM bannerlong WHERE id = 2 ORDER BY id ASC LIMIT $page_position, $item_per_page");

//Display records fetched from database.
//WHERE gal_status=1 ORDER BY gal_id desc

//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?>							
								
								<?php 
														$img_url = $row[""];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){  ?>
								<a href="product_details.php">	<img  alt="bann" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" />	<?php } } ?></a>
									
									<?php } ?>	
							<!--<a href="product_details.php"><img src="img/banner/banner13.png" alt="banner"></a>-->
						</div>
						
					</div>
<?php */?>			
		<?php /*?><div class="col-md-4 col-sm-4">
						<!-- Single Banner -->
						<div class="single-banner">
							<a href="product_details.php"><img src="img/banner/banner14.png" alt="banner"></a>
						</div>
					</div><?php */?>
				</div>
			</div>
		</div><!-- End Top Banner Area -->
        
        
		<!-- Product Area -->
		<div class="product-area">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<!-- Product View Area -->
						<div class="product-view-area fix">
							<!-- Single Product Category -->
							<div class="single-product-category">
								<!-- Product Category Title-->
								<div class="head-title">
									<p><a href="shop.php">Laptop</a></p>
								</div>
								<!-- Product View -->
								<div class="product-view">
									<!-- Product View Carousel -->
									<div id="laptop-carousel" class="owl-carousel custom-carousel">
										<!-- Single Product -->
										<div class="singel-product single-product-col">
											<div class="label-pro-sale">hot</div>
											<!-- Single Product Image -->
											<div class="single-product-img">
												<a href="product_details.php"><img src="img/products/s5.jpg" alt="product"></a>
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
													<p><span>$111.00</span>$99.00</p>
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
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php"> Donec ac tempus </a></h2>
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
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
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
												<a href="product_details.php"><img src="img/products/s1.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Nunc facilisis</a></h2>
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
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">consequences</a></h2>
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
												<a href="product_details.php"><img src="img/products/s6.jpg" alt="product"></a>
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
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
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
									</div><!-- End Product View Carousel -->
								</div><!-- End Product View-->
								<!-- Product Banner-->
								<div class="product-banner">
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="single-banner first">
	
	<?php  
	 $item_per_page      = 3; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>gal";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM bannerlong "); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM bannerlong WHERE id = 1 ORDER BY id ASC LIMIT $page_position, $item_per_page");



//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?> 

<?php 
														$img_url = $row["image"];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){ 
?>
									<a href="product_details.php"><img  alt="Banner1" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" />	</a>
									
                                    
									
									<?php } } ?>


<?php } ?>										
												<!--<img src="img/banner/banner4.png" alt="banner"></a>-->
											</div>
										</div>
										<!--<div class="col-md-4 col-sm-4">
											<div class="single-banner">
												<a href="product_details.php"><img src="img/banner/banner5.png" alt="banner"></a>
											</div>
										</div>-->
									</div>
								</div><!-- End Product Banner-->
							</div><!-- End Single Product Category -->
							<!-- Single Product Category -->
							<div class="single-product-category">
								<!-- Product Category Title-->
								<div class="head-title">
									<p><a href="shop.php">Tablet</a></p>
								</div>
								<!-- Product View -->
								<div class="product-view">
									<!-- Product View Carousel -->
									<div id="tablet-carousel" class="owl-carousel custom-carousel">
										<!-- Single Product -->
										<div class="singel-product single-product-col">
											<div class="label-pro-sale">hot</div>
											<!-- Single Product Image -->
											<div class="single-product-img">
												<a href="product_details.php"><img src="img/products/s9.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php"> Donec ac tempus </a></h2>
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
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
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
												<a href="product_details.php"><img src="img/products/s1.jpg" alt="product"></a>
											</div>
											<!-- Single Product Content -->
											<div class="single-product-content">
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">Nunc facilisis</a></h2>
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
												<h2 class="product-name"><a title="Proin lectus ipsum" href="product_details.php">consequences</a></h2>
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
												<a href="product_details.php"><img src="img/products/s6.jpg" alt="product"></a>
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
												<a href="product_details.php"><img src="img/products/s3.jpg" alt="product"></a>
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
									</div><!-- End Product View Carousel -->
								</div><!-- End Product View-->
								<!-- Product Banner-->
								<div class="product-banner">
									<div class="row">
										<div class="col-md-12 col-sm-12">
											<div class="single-banner first">
			<?php  
	 $item_per_page      = 3; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>gal";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM bannerlong "); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM bannerlong WHERE id = 3 ORDER BY id ASC LIMIT $page_position, $item_per_page");



//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?> 

<?php 
														$img_url = $row["image"];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){ 
?>
									<img  alt="Banner1" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" />	
                                    
									
									<?php } } ?>


<?php } ?>									
												<!--<a href="product_details.php"><img src="img/banner/banner6.png" alt="banner"></a>-->
											</div>
										</div>
										<!--<div class="col-md-8 col-sm-8">
											<div class="single-banner">
												<a href="product_details.php"><img src="img/banner/banner6.png" alt="banner"></a>
											</div>
										</div>-->
									</div>
								</div><!-- End Product Banner-->
							</div><!-- End Single Product Category -->
						</div><!-- End Product View Area -->
					</div>
					<div class="col-md-3">
						<!-- Product Right Sidebar Area -->
						<div class="product-right-siderbar">
							<!-- Timer product -->
							<div class="timer-product">
								<div class="timer-product-title">
									<h2>Deal of the days</h2>
								</div>
								<!-- Timer product Carousel-->
								<div id="timer-product-carousel" class="owl-carousel custom-carousel">
									<!-- Single Product -->
									<div class="singel-product single-product-col">
										<!-- Single Product Image -->
										<div class="single-product-img">
											<a href="product_details.php"><img src="img/products/s5.jpg" alt="product"></a>
										</div>
										<!-- Countdown -->
										<div class="counterdown">
											<div class="counter">
												<div class="timer">
													<div data-countdown="2022/03/04"></div>
												</div>
											</div>
										</div><!-- End Countdown -->
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
												<p><span>$111.00</span>$99.00</p>
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
										<!-- Single Product Image -->
										<div class="single-product-img">
											<a href="product_details.php"><img src="img/products/s6.jpg" alt="product"></a>
										</div>
										<!-- Countdown -->
										<div class="counterdown">
											<div class="counter">
												<div class="timer">
													<div data-countdown="2022/03/04"></div>
												</div>
											</div>
										</div><!-- End Countdown -->
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
												<p><span>$346.00</span>$249.00</p>
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
										<!-- Single Product Image -->
										<div class="single-product-img">
											<a href="product_details.php"><img src="img/products/s4.jpg" alt="product"></a>
										</div>
										<!-- Countdown -->
										<div class="counterdown">
											<div class="counter">
												<div class="timer">
													<div data-countdown="2022/03/04"></div>
												</div>
											</div>
										</div><!-- End Countdown -->
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
												<p><span>$255.00</span>$120.00</p>
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
										<!-- Single Product Image -->
										<div class="single-product-img">
											<a href="product_details.php"><img src="img/products/s10.jpg" alt="product"></a>
										</div>
										<!-- Countdown -->
										<div class="counterdown">
											<div class="counter">
												<div class="timer">
													<div data-countdown="2022/03/04"></div>
												</div>
											</div>
										</div><!-- End Countdown -->
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
												<p><span>$300.00</span>$220.00</p>
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
								</div><!-- End Timer product Carousel-->
							</div><!-- End Timer product -->
							<!-- Product Single Banner -->
							<div class="product-banner-single">
								<!-- Single Banner -->
								<div class="single-banner">
								<?php  
	 $item_per_page      = 1; //item to display per page
	 $page_url           = "<?php echo SITE_PATH ; ?>smallbanner";
	 if(isset($_GET["page"])){ //Get page number from $_GET["page"]
    $page_number = filter_var($_GET["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
    if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
}else{
    $page_number = 1; //if there's no page number, set it to 1
}


$results = $connection->query("SELECT COUNT(*) FROM smallbanner "); //get total number of records from database
$get_total_rows = $results->fetch_row(); //hold total records in variable

$total_pages = ceil($get_total_rows[0]/$item_per_page); //break records into pages

################# Display Records per page ############################
$page_position = (($page_number-1) * $item_per_page); //get starting position to fetch the records
//Fetch a group of records using SQL LIMIT clause
$results = $connection->query("SELECT * FROM smallbanner WHERE id = 2 ORDER BY id ASC LIMIT $page_position, $item_per_page");



//echo '<ul class="contents">';
//if(!$results) die(mysql_error());
//           		$x=0;
while($row = $results->fetch_assoc()) {
	// $x++
	 ?> 

<?php 
														$img_url = $row["image"];
														$img_arr = explode(',', $img_url);
													foreach($img_arr as $img_url1)		
						{
						 ?>

<?php  if(strlen($img_url1)>4){ 
?>
									<a href="product_details.php"><img  alt="Banner1" class="img-responsive" src="<?php echo SITE_PATH; ?>uploads/<?php echo $img_url1;  ?>" />	</a>
                                    
									
									<?php } } ?>


<?php } ?>	
									<!--<a href="product_details.php"><img src="img/banner/banner1.png" alt="banner"></a>-->
								
								</div>
							</div><!-- End Product Single Banner -->
							<!-- Featured Product Area -->
							<div class="featured-product-area">
								<div class="featured-product-title">
									<h2>Featured Products</h2>
								</div>
								<!-- Featured Products -->
								<div class="featured-products">
									<div class="featured-product-category">
										<div class="featured-product-img">
											<a href="product_details.php"><img src="img/products/featured-products/f1.jpg" alt="product"></a>
										</div>
										<div class="featured-product-content">
											<h2 class="product-name">
												<a href="product_details.php" title="Proin lectus ipsum">Accumsan elit</a>
											</h2>
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
												<p>$115.00</p>
											</div>
										</div>
									</div>
								</div><!-- End Featured Products -->
								<!-- Featured Products -->
								<div class="featured-products">
									<div class="featured-product-category">
										<div class="featured-product-img">
											<a href="product_details.php"><img src="img/products/featured-products/f4.jpg" alt="product"></a>
										</div>
										<div class="featured-product-content">
											<h2 class="product-name">
												<a href="product_details.php" title="Proin lectus ipsum">Aliquam consequat</a>
											</h2>
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
												<p><span>$160.00</span>$99.00</p>
											</div>
										</div>
									</div>
								</div><!-- End Featured Products -->
								<!-- Featured Products -->
								<div class="featured-products">
									<div class="featured-product-category">
										<div class="featured-product-img">
											<a href="product_details.php"><img src="img/products/featured-products/f2.jpg" alt="product"></a>
										</div>
										<div class="featured-product-content">
											<h2 class="product-name">
												<a href="product_details.php" title="Proin lectus ipsum">consequences</a>
											</h2>
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
												<p>$180.00</p>
											</div>
										</div>
									</div>
								</div><!-- End Featured Products -->
								<!-- Featured Products -->
								<div class="featured-products">
									<div class="featured-product-category">
										<div class="featured-product-img">
											<a href="product_details.php"><img src="img/products/featured-products/f3.jpg" alt="product"></a>
										</div>
										<div class="featured-product-content">
											<h2 class="product-name">
												<a href="product_details.php" title="Proin lectus ipsum">Cras neque metus</a>
											</h2>
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
												<p><span>$125.00</span>$75.00</p>
											</div>
										</div>
									</div>
								</div><!-- End Featured Products -->
								<!-- Featured Products -->
								<div class="featured-products">
									<div class="featured-product-category">
										<div class="featured-product-img">
											<a href="product_details.php"><img src="img/products/featured-products/f4.jpg" alt="product"></a>
										</div>
										<div class="featured-product-content">
											<h2 class="product-name">
												<a href="product_details.php" title="Proin lectus ipsum">Donec non est</a>
											</h2>
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
										</div>
									</div>
								</div><!-- End Featured Products -->
							</div><!-- End Featured Product Area -->
						</div><!-- End Product Right Sidebar Area -->
					</div>
				</div>
			</div>
		</div><!-- End Product Area -->
		<!-- Services Group -->
		<div class="services-group">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<!-- Our Services -->
						<div class="our-services">
							<div class="head-title">
								<p>Our Services</p>
							</div>
							<!-- Our Services Content -->
							<div class="our-services-content">
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa-truck"></i>
									</div>
									<div class="single-services-content">
										<h2>Free delivery</h2>
										<p>Worldwide delivery on all orders over $100</p>
									</div>
								</div><!-- End Single Services -->
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa-tags"></i>
									</div>
									<div class="single-services-content">
										<h2>Sales & discounts</h2>
										<p>Worldwide delivery on all orders over $100</p>
									</div>
								</div><!-- End Single Services -->
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa-thumbs-o-up"></i>
									</div>
									<div class="single-services-content">
										<h2>Buy online</h2>
										<p>Worldwide delivery on all orders over $100</p>
									</div>
								</div><!-- End Single Services -->
								<!-- Single Services -->
								<div class="single-services">
									<div class="single-services-icon">
										<i class="fa fa fa-check"></i>
									</div>
									<div class="single-services-content">
										<h2>Quality assurance</h2>
										<p>Worldwide delivery on all orders over $100</p>
									</div>
								</div><!-- End Single Services -->
							</div><!-- End Our Services Content -->
						</div><!-- End Our Services -->
					</div>
					<div class="col-md-4">
						<!-- Client Testmonials Area -->
						<div class="client-testimonals-area">
							<div class="head-title">
								<p>Client testimonals</p>
							</div>
							<div id="client-carousel" class="owl-carousel custom-carousel-2">
								<!-- Client Testmonials -->
								<div class="client-testimonals">
									<!-- Single Client Testmonials -->
									<div class="single-client-testimonals">
										<div class="client-testimonals-img">
											<img src="img/blog/client.png" alt="client">
										</div>
										<div class="client-testimonals-content">
											<a href="testmonial.php">Fusce ornare bibendum suscipit. Phasellus eget sem non erat consequat mattis at ut sapien. Fusce rhoncus egestas purus...</a>
											<div class="post-by">							
												<span class="testimonial-author">Lacuada</span>
												<span class="testimonial-date">January 19, 2016</span>
											</div>
										</div>
									</div><!-- End Single Client Testmonials -->
									<!-- Single Client Testmonials -->
									<div class="single-client-testimonals">
										<div class="client-testimonals-img">
											<img src="img/blog/client.png" alt="client">
										</div>
										<div class="client-testimonals-content">
											<a href="testmonial.php">Fusce ornare bibendum suscipit. Phasellus eget sem non erat consequat mattis at ut sapien. Fusce rhoncus egestas purus...</a>
											<div class="post-by">							
												<span class="testimonial-author">Lacuada</span>
												<span class="testimonial-date">January 19, 2016</span>
											</div>
										</div>
									</div><!-- End Single Client Testmonials -->
								</div><!-- End Client Testmonials -->
								<!-- Client Testmonials -->
								<div class="client-testimonals">
									<!-- Single Client Testmonials -->
									<div class="single-client-testimonals">
										<div class="client-testimonals-img">
											<img src="img/blog/client.png" alt="client">
										</div>
										<div class="client-testimonals-content">
											<a href="testmonial.php">Fusce ornare bibendum suscipit. Phasellus eget sem non erat consequat mattis at ut sapien. Fusce rhoncus egestas purus...</a>
											<div class="post-by">							
												<span class="testimonial-author">Lacuada</span>
												<span class="testimonial-date">January 19, 2016</span>
											</div>
										</div>
									</div><!-- End Single Client Testmonials -->
									<!-- Single Client Testmonials -->
									<div class="single-client-testimonals">
										<div class="client-testimonals-img">
											<img src="img/blog/client.png" alt="client">
										</div>
										<div class="client-testimonals-content">
											<a href="testmonial.php">Fusce ornare bibendum suscipit. Phasellus eget sem non erat consequat mattis at ut sapien. Fusce rhoncus egestas purus...</a>
											<div class="post-by">							
												<span class="testimonial-author">Lacuada</span>
												<span class="testimonial-date">January 19, 2016</span>
											</div>
										</div>
									</div><!-- End Single Client Testmonials -->
								</div><!-- End Client Testmonials -->
							</div>
						</div><!-- End Client Testmonials Area -->
					</div>
					<div class="col-md-4">
						<!-- Blog Post Area -->
						<div class="blog-post-area">
							<div class="head-title">
								<p>From the blog</p>
							</div>
							<div id="blog-post-carousel" class="owl-carousel custom-carousel-2">
								<!-- Single Blog Post -->
								<div class="single-blog-post">
									<div class="blog-post-img">
										<a href="blog_details.php"><img src="img/blog/blog1.jpg" alt="blog"></a>
									</div>
									<!-- Single Blog Post Content -->
									<div class="single-blog-post-content">
										<h2><a href="blog_details.php">Donec tristique eget enim eu elementum.  Vivamus orci libero</a></h2>
										<div class="date-time">
											<div class="time-blog">
												<i class="fa fa-calendar-o">&nbsp;</i> 01 Jan 1970 <span>/</span>
											</div>
											<div class="time-comment">
												<span><i class="fa fa-comments-o"></i>0 comments </span>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elementum dui quis tortor luctus, eu ultricies nibh facilisis. Donec porttitor sed leo nec...</p>
										<a href="blog_details.php" class="readmore">Read more</a>
									</div><!-- End Single Blog Post Content -->
								</div><!-- End Single Blog Post -->
								<!-- Single Blog Post -->
								<div class="single-blog-post">
									<div class="blog-post-img">
										<a href="blog_details.php"><img src="img/blog/blog2.jpg" alt="blog"></a>
									</div>
									<!-- Single Blog Post Content -->
									<div class="single-blog-post-content">
										<h2><a href="blog_details.php">Donec tristique eget enim eu elementum.  Vivamus orci libero</a></h2>
										<div class="date-time">
											<div class="time-blog">
												<i class="fa fa-calendar-o">&nbsp;</i> 01 Jan 1970 <span>/</span>
											</div>
											<div class="time-comment">
												<span><i class="fa fa-comments-o"></i>0 comments </span>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elementum dui quis tortor luctus, eu ultricies nibh facilisis. Donec porttitor sed leo nec...</p>
										<a href="blog_details.php" class="readmore">Read more</a>
									</div><!-- End Single Blog Post Content -->
								</div><!-- End Single Blog Post -->
								<!-- Single Blog Post -->
								<div class="single-blog-post">
									<div class="blog-post-img">
										<a href="blog_details.php"><img src="img/blog/blog3.jpg" alt="blog"></a>
									</div>
									<!-- Single Blog Post Content -->
									<div class="single-blog-post-content">
										<h2><a href="blog_details.php">Donec tristique eget enim eu elementum.  Vivamus orci libero</a></h2>
										<div class="date-time">
											<div class="time-blog">
												<i class="fa fa-calendar-o">&nbsp;</i> 01 Jan 1970 <span>/</span>
											</div>
											<div class="time-comment">
												<span><i class="fa fa-comments-o"></i>0 comments </span>
											</div>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elementum dui quis tortor luctus, eu ultricies nibh facilisis. Donec porttitor sed leo nec...</p>
										<a href="blog_details.php" class="readmore">Read more</a>
									</div><!-- End Single Blog Post Content -->
								</div><!-- End Single Blog Post -->
							</div>
						</div><!-- End Blog Post Area -->
					</div>
				</div>
			</div>
		</div><!-- End Services Group -->
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
<?php include ("includes/footer1.php") ; ?>		