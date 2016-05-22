<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->


<body>

	<div id="mainContainer" class="clearfix">

		



		<div class="container">

			<div class="row">

				<div class="span9">
					<div class="account-list-outer">
						<div class="titleHeader clearfix">
							<h3>Histori Pemesanan</h3>
						</div><!--end titleHeader--><!--end checkout-header-->
						<?php foreach($pesanan_pembeli as $tr){ ?>
						<div class="checkout-content">

							<form class="form-horizontal">
								
								
								<div>
									Nomor Transaksi : <font size="4"><b> <?php echo $tr->id_transaksi ?></b></font><br>
									Pembelian pada tanggal : <?php echo $tr->tgl_transaksi ?><br>
									Status : <?php 
									if($tr->status == 'Pending') { 
										echo "Menunggu Pembayaran";
									} else if ($tr->status == 'Belum Verifikasi') {
										echo "Menunggu Verifikasi";
									}  else if ($tr->status == 'Proses') {
										echo "Proses";
									}  else if ($tr->status  == 'Selesai'){
										echo "Transaksi Selesai";
									}
									?>

									
								</div>
								<br>
								<div>
									<button id="detail-beli" value="<?php echo $tr->id_transaksi; ?>">Lihat Detail Pembelian</button>
								</div>
								<br>	
								<div class="details" style='display: none'>
									
								</div>
								
							</form>
						</div>
						<?php }?>
					</div>
				</div><!--end span9-->


				<div class="span3">
					<div class="titleHeader clearfix">
						<h3>Pesanan Saya</h3>
					</div><!--end titleHeader-->
					<ul class="unstyled my-account">
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi"><i class="icon-caret-right"></i> Status Pemesanan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi_pembayaran"><i class="icon-caret-right"></i> Konfirmasi Pembayaran</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi/konfirmasi_penerimaan"><i class="icon-caret-right"></i> Konfirmasi Penerimaan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/histori_pemesanan"><i class="icon-caret-right"></i> Histori Pemesanan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>manage/return_dana"><i class="icon-caret-right"></i> Pengembalian Dana</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>admin/keluhan/lihat_keluhan"><i class="icon-caret-right"></i> Histori Keluhan</a></li>
					</ul>
				</div>

			</div><!--end row-->

		</div><!--end conatiner-->

	</div><!--end mainContainer-->




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
    
    <script type="text/javascript">

	$(document).ready(function(){
		var buka = 0;
		$('#detail-beli').click(function(e) {
			//alert('');
			e.preventDefault();
			value = $(this).val();
		    if (value !== null ) {
		        request = $.ajax({
			        url: "<?php echo base_url('ecomerce/histori_pemesanan/detail_pembelian') ?>",
			        type: "post",
			        data: 'id_trans=' + value
			    });
			    request.done(function (response){
		    		$('.details').html(response);
         		});
		    }
		    if (buka == 1) {
		    	$('.details').css({'display': 'none'});
		    	buka = 0;
		    } else {
		    	$('.details').css({'display': 'block'});
		    	buka = 1;
		    }
		});
	});
	
	</script>
</body>


<!-- Mirrored from ahmedsaeed.me/shopfine/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->
</html>