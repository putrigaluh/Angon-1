<html>
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>ANGON</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/bootstrap.min.css" media="screen">
	<!-- jquery ui css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/jquery-ui-1.10.1.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/customize.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/style.css">
	<!-- flexslider css-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/flexslider.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/js/fancybox/jquery.fancybox.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/font-awesome-ie7.css">
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>ecom/images/favicon.html">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon.html">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon-72x72.html">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon-114x114.html">


	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	

</head>
<body>

	<div id="mainContainer" class="clearfix">
<header>
			<div class="upperHeader">
				<div class="container">
					<ul class="pull-right inline">
						<?php if($this->session->userdata('kategori_user') == 'Peternak'){
							echo "<li><a class='invarseColor' href='".base_url()."manage/pesanan'>Penjualan Saya</a></li>
						<li class='divider-vertical'></li>";
						} ?>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi">Pesanan Saya</a></li>
						<li class="divider-vertical"></li>

						<li><a class="invarseColor" href="<?php echo base_url(); ?>admin/keluhan/input_keluhan">Customer Care</a></li>

					</ul>
					<p>
					
					<?php if($this->session->userdata('is_logged_in') == true){ 
						echo "Selamat datang di ANGON, ". $this->session->userdata('username');
						echo "<h4><a href='". base_url()."logout'><i class='fa fa-lock'></i> Logout</a></h4>";
						}else{
						echo "<h4><a href='". base_url()."login'><i class='fa fa-lock'></i> Login</a></h4> Atau <a href='". base_url()."regis'><i class='fa fa-lock'></i> Buat Akun Baru</a>";
						}
					?> 
					</p>
				</div><!--end container-->
			</div><!--end upperHeader-->

				<div class="middleHeader">
				<div class="container">

					<div class="middleContainer clearfix">

					<div class="siteLogo pull-left">
						<h1><a href="<?php echo base_url();?>">Angon</a></h1>
					</div>

					<div class="pull-right">
						<form method="get" action="<?php echo base_url();?>ecomerce/kategori_grid/pencarian" class="siteSearch">
							<div class="input-append">
								<input type="text" name="cari" class="span2" id="appendedInputButton" placeholder="Search...">
								<button class="btn btn-primary" type="submit" ><i class="icon-search"></i></button>
							</div>
						</form>
					</div>

					<div class="pull-right">
						
						<div class="btn-group">
							<a class="btn " data-toggle="" href="<?php echo base_url();?>ecomerce/shoppingcart">
							    <i class="icon-shopping-cart"></i> <?php //echo count($this->cart->contens()); ?> Lihat Keranjang Belanja
							    
							</a>
							<!--<div class="dropdown-menu cart-content pull-right">
								<table class="table-cart">
									<tbody>

									
									
									<?php //foreach ($this->cart->contents() as $items) { ?>
									<tr>
										<td class="cart-product-info">
											<a href="#"><img src="<?php echo base_url(); ?>ecom/img/72x72.jpg" alt="product image"></a>
											<div class="cart-product-desc">
												<p><a class="invarseColor" href="#"><?php //echo $items['name']; ?></a></p>
												<ul class="unstyled">
													<li>Available: Yes</li>
													<li>Color: Black</li>
												</ul>
											</div>
										</td>
										<td class="cart-product-setting">
											<p><strong><?php //echo $items['price']; ?></strong></p>
											<a href="#" class="remove-pro" data-toggle="tooltip" data-title="Delete"><i class="icon-trash"></i></a>
										</td>
									</tr>
									<?php //} ?>
								</tbody>
								<tfoot>
									<tr>
										<td class="cart-product-info">
											<a href="<?php echo base_url();?>ecomerce/shoppingcart" class="btn btn-small">cart</a>
											<a href="#" class="btn btn-small btn-primary">Checkout</a>
										</td>
										<td>
											<h3>TOTAL<br>Rp. <?php //echo $items['subtotal']; ?></h3>
										</td>
									</tr>
								</tfoot>
								</table>
							</div>-->
						</div>
					</div><!--end pull-right-->

					</div><!--end middleCoontainer-->

				</div><!--end container-->
			</div><!--end middleHeader-->

			<div class="mainNav">
				<div class="container">
					<div class="navbar">
					     	
				      	<ul class="nav">
				      		<li style="font-size: x-small"><a href="<?php echo base_url()?>ecomerce/produk">Home</a></li>
				      		<?php 
					        	foreach($kat as $row) { 
								 	
              						echo "<li value=''><a href='". base_url()."ecomerce/kategori_grid/cari_by_kategori/".$row->id_kategori_produk."'>".
              								$row->kategori_produk.
              								'</a></li>';
					            }
					            echo "<li><a href='#'>Ternak &nbsp;<i class='icon-caret-down'></i></a>
						     	<div>
						     		<ul>";
					     		
					     		 foreach($dr as $rw) { 
								 	
              						echo "<li><a href='". base_url()."ecomerce/kategori_grid/cari_by_kategori/".$rw->id_kategori_produk."'>".
              								$rw->kategori_produk.
              								"</a></li>";
					            }
					        

					        ?>
					     			</ul>

					     		</div>
					     	</li>

				      	</ul><!--end nav-->

					</div>
				</div><!--end container-->
			</div><!--end mainNav-->
			
		</header>