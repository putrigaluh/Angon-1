<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<body>

	<div id="mainContainer" class="clearfix">

		<div class="container">

			<div class="row">

				<div class="span9">
					<div class="account-list-outer">
						<div class="titleHeader clearfix">
							<h3>Keluhan Pelanggan</h3>
						</div><!--end titleHeader--><!--end checkout-header-->

						<div class="checkout-content">
							<form method="post" action="<?php echo base_url();?>admin/keluhan/tambah_keluhan" class="form-horizontal" enctype="multipart/form-data">

								<div class="control-group success">
							    <label class="control-label" for="inputFirstName">No Order: <span class="text-error">*</span></label>
							    <div class="controls">
							    <select class="form-control" name="id_transaksi" id="select_transaksi">
							    	<option disabled selected>Pilih</option>
            						<?php 
            						foreach($kel as $row) { 
            							echo '<option value="'.$row->id_transaksi.'">'.$row->id_transaksi.'</option>';
            						} 
            						?>
					            </select>
							      <!-- <input type="text" name="id_transaksi" placeholder="1110009090"> -->
							    </div>
								</div><!--end control-group-->


								<div class="control-group success" id="select_produk_group" style="display: none">
							    <label class="control-label" for="inputFirstName">Barang: <span class="text-error">*</span></label>
							    <div class="controls">
							    <select class="form-control" name="id_produk" id="select_produk">
							    	<option disabled selected>Pilih</option>
							    </select>
							      <!-- <input type="text" name="id_transaksi" placeholder="1110009090"> -->
							    </div>
								</div><!--end control-group-->

								<script>

								$("#select_transaksi").change(function(event){
									var val = $("#select_transaksi").val();
									request = $.ajax({
								        url: window.location.origin + "/Angon/admin/keluhan/dropdown_produk",
								        type: "post",
								        data: 'id_trans='+val
								    });
								    request.done(function (response){
								    	$('#select_produk_group').show();
							        	$("#select_produk").html(response);
							        });
								});
								</script>

								<div class="control-group success">
								 <div class="controls">
								<input type="hidden" class="form-control" name="id_user" readonly="" value='<?php echo $this->session->userdata('id_user');?>'>
								</div>
								</div><!--end control-group-->

								<div class="control-group success">
							    <label class="control-label" for="inputFirstName">Isi Keluhan: <span class="text-error">*</span></label>
							    <div class="controls">
							    	<textarea  name="isi_keluhan" placeholder="Barang belum diterima"></textarea>
							    </div>
								</div><!--end control-group-->


								<div class="control-group success">
							    <label class="control-label" for="inputFirstName">Upload Gambar: <span class="text-error">*</span></label>
							    <div class="controls">
							    	<div class="form-group">
													<?php echo form_upload('pic');?>
													</div>
												</div>
							    </div>
								</div><!--end control-group-->
								

								<div class="control-group" align="right">
								<div class="controls">
								<div class="form-group">
								<?php echo
												form_submit('submit', 'Save', 'class="btn btn-primary"')
												?>
												</div>
								</div>
								</div>


								<div class="control-group" align="center">
							    <div class="controls">
								</div> 

							</form>
						</div>
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
						<li><a class="invarseColor" href="<?php echo base_url();?>ecomerce/konfirmasi/histori_pemesanan"><i class="icon-caret-right"></i> Histori Pemesanan</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>manage/return_dana"><i class="icon-caret-right"></i> Pengembalian Dana</a></li>
						<li><a class="invarseColor" href="<?php echo base_url();?>manage/keluhan/lihat_keluhan"><i class="icon-caret-right"></i> Histori Keluhan</a></li>
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

<!-- Mirrored from ahmedsaeed.me/shopfine/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:23 GMT -->
</html>