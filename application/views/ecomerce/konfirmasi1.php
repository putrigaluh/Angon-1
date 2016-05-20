<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | Angon</title>
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/price-range.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/main.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?><?php echo base_url(); ?><?php echo base_url(); ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	
	
	<section>
		<div class="container">
			<div class="row">
				
					<div class="container"><!--product-details-->
						<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-15">
							<ul class="nav nav-tabs">
								<li><a href="#bayar" data-toggle="tab">Konfirmasi Pembayaran</a></li>
								<li><a href="#status" data-toggle="tab">Status Pemesanan</a></li>
								<li class="active"><a href="#terima" data-toggle="tab">Konfirmasi Penerimaan</a></li>
								<li><a href="#trans" data-toggle="tab">Daftar Transaksi</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="bayar" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url(); ?>images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url(); ?>images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
							<div class="tab-pane fade" id="status" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo base_url(); ?>images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade active in" id="terima" >
								<div class="col-sm-10">
									<div class="product-information"><!--/product-information-->
										<div class="col-sm-5">
										<div class="view-product">
										<img src="<?php echo base_url(); ?>images/product-details/1.jpg" alt="" />
										
										</div>
									</div>
										<h2><?php echo $pb['id_transaksi'] ?></h2>
										<p><b>Tanggal Transaksi:</b> </p>
										<p><?php print_r($pb); ?></p>
										
										<p><b>Tanggal Transaksi:</b> </p>
										<p><b>Total:</b><?php //echo $pb->total_harga; ?></p>
										<p><b>Brand:</b> E-SHOPPER</p>
										<br>
											<button type="button" class="btn btn-fefault cart">
												
												Sudah Terima
											</button>
											<button type="button" class="btn btn-fefault cart">
												
												Komplain
											</button>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="trans" >
								<!-- <div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="<?php echo base_url(); ?>images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div> -->
							</div>
							
						</div>
					</div><!--/category-tab-->
						<div class="col-sm-10">
							<!--/product-information-->
						</div>
					</div><!--/product-details-->
			</div>
		</div>
	</section>
	
	
	<script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url(); ?>js/price-range.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>
</html>