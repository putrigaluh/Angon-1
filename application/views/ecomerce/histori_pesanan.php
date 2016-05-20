<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Angon : Histori Pemesanan</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/font-awesome.css">
	<!-- jquery ui css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/jquery-ui-1.10.1.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/customize.css">
	
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
</head>

<body>

	<div id="mainContainer" class="clearfix">

		<div class="container">

			<div class="row">

				<div class="span9">
					<div class="account-list-outer">
							<div class="titleHeader clearfix">
							<h3>Riwayat Pemesanan</h3>
							</div><!--end titleHeader--><!--end checkout-header-->
							<br>
							<div class="checkout-content">
							<table class="table">
										<thead>
										<tr>
											
											<th>Detail Transaksi</th>
											<th>Nama Toko</th>
											<th>Status</th>
											<th>Tindakan</th>

										</tr>
										</thead>
										<tbody>
											
											<?php 

											foreach ($pesanan_pembeli as $pp){ ?>
											<tr>
												
												<td align="left">
													Nomor Detail Pesanan : <?php echo $pp->id_det_transaksi ?>
													<h3>Rp. <?php echo ($pp->jumlah * $pp->harga_produk) ?></h3>
													<h4><?php echo $pp->tgl_transaksi ?></h4>
												</td>
												<td>
													<?php echo $pp->nama_toko; ?>
												</td>
												<td>
													<?php echo $pp->status ?>
												</td>
												<td>
													<?php 
														if($pp->status=='Pending'){
															echo "<a href='".base_url()."ecomerce/konfirmasi_pembayaran/'><button class ='btn btn-group'>Bayar</button></a>";
														}else if($pp->status_kirim =='Terkirim'){
															echo "<a href='".base_url()."ecomerce/konfirmasi/update_status_penerimaan_by_id/". $pp->id_det_transaksi."''><button class ='btn btn-group'>Diterima</button></a>";
														}else if($pp->status_kirim =='Diterima'){
															echo "<a href='".base_url()."ecomerce/produk/detail/". $pp->id_produk."''><button class ='btn btn-group'>Beri Review</button></a>";
														}

														else if($pp->status =='Belum Verifikasi'){
															echo "Tunggu verifikasi dari admin Angon";
														}else if($pp->status =='Terbayar'){
															echo "Tunggu aksi penjual";
														}
													?>
												</td>
											</tr>
											<?php }?>
										</tbody>
									</table>
						</div>
					</div>
				</div><!--end span9-->


				<div class="span3">
					<div class="titleHeader clearfix">
						<h3>Pesanan Saya</h3>
					</div><!--end titleHeader-->
					<ul class="unstyled my-account">
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi/"><i class="icon-caret-right"></i> Status Pemesanan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi_pembayaran"><i class="icon-caret-right"></i> Konfirmasi Pembayaran</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi/konfirmasi_penerimaan"><i class="icon-caret-right"></i> Konfirmasi Penerimaan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi/histori_pemesanan"><i class="icon-caret-right"></i> Histori Pemesanan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>manage/return_dana"><i class="icon-caret-right"></i> Pengembalian Dana</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>admin/keluhan/lihat_keluhan"><i class="icon-caret-right"></i> Histori Keluhan</a></li>
					</ul>
				</div>

			</div><!--end row-->

		</div><!--end conatiner-->

	</div><!--end mainContainer-->


	<!-- Sidebar Widget
	================================================== -->
	<div class="switcher">
		<h3>Site Switcher</h3>
		<a class="Widget-toggle-link">+</a>

		<div class="switcher-content clearfix">
			<div class="layout-switch">
				<h4>Layout Style</h4>
				<div class="btn-group">
					<a id="wide-style" class="btn">Wide</a>
	  				<a id="boxed-style" class="btn">Boxed</a>
				</div>
			</div><!--end layout-switch-->

			<div class="color-switch clearfix">
				<h4>Color Style</h4>
				<a id="orange-color" class="color-switch-link">orange</a>
				<a id="blue-color" class="color-switch-link">blue</a>
				<a id="green-color" class="color-switch-link">green</a>
				<a id="brown-color" class="color-switch-link">brown</a>
				<a id="red-color" class="color-switch-link">red</a>
			</div><!--end color-switch-->

			<div class="pattern-switch">
				<h4>BG Pattern</h4>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/retina_wood.png);">retina_wood</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/bgnoise_lg.png);">bgnoise_lg</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/purty_wood.png);">purty_wood</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/irongrip.png);">irongrip</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/low_contrast_linen.png);">low_contrast_linen</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/tex2res5.png);">tex2res5</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/wood_pattern.png);">wood_pattern</a>
			</div><!--end pattern-switch-->

		</div><!--end switcher-content-->
	</div>
	<!-- End Sidebar Widget-->


	<!-- JS
	================================================== -->
	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
	<!-- jQuery.Cookie -->
	<script src="<?php echo base_url(); ?>ecom/js/jquery.cookie.js"></script>
	<!-- bootstrap -->
    <script src="<?php echo base_url(); ?>ecom/js/bootstrap.min.js"></script>
    <!-- flexslider -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.flexslider-min.js"></script>
    <!-- cycle2 -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url(); ?>ecom/js/jquery.cycle2.carousel.min.js"></script>
    <!-- tweets -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.tweet.js"></script>
    <!-- fancybox -->
    <script src="<?php echo base_url(); ?>ecom/js/fancybox/jquery.fancybox.js"></script>
    <!-- custom function-->
    <script src="<?php echo base_url(); ?>ecom/js/custom.js"></script>
    
</body>
 <script type="text/javascript">

	$(document).ready(function(){
		$('#pilih-id-transaksi').change(function() {
			value = $(this).val();
		    if (value !== null ) {
		        request = $.ajax({
			        url: "<?php echo base_url('ecomerce/konfirmasi/histori_pemesanan') ?>",
			        type: "post",
			        data: 'id_trans=' + value
			    });
			    request.done(function (response){
			    	if(response == 'Pending'){
			        $('.stat-pending').css({'display': 'block'});
			        $('.stat-pending').html(response);
			    	}
			    	else if(response == 'Terbayar'){
			        $('.stat-terbayar').css({'display': 'block'});
			        $('.stat-terbayar').html(response);
			    	}
			    	else if(response == 'Proses'){
			        $('.stat-proses').css({'display': 'block'});
			        $('.stat-proses').html(response);
			    	}
			    	else if(response == 'Proses'){
			        $('.stat-dikirim').css({'display': 'block'});
			        $('.stat-dikirim').html(response);
			    	}
         		});
		    } else {
		    	$('.stat').css({'display': 'none'});
		    	
		    }
		});
	});
	
	</script>

<!-- Mirrored from ahmedsaeed.me/shopfine/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->
</html>