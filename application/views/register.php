<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:21 GMT -->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Angon : Registrasi</title>
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
</head>

<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
		
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span9">
					<div class="register">

						<div class="titleHeader clearfix">
							<h3>Buat Akun Baru</h3>
						</div><!--end titleHeader-->

						<form method="post" action="regis" class="form-horizontal" autocomplete="off">

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;1. Informasi Personal</h4>
							<input  type="hidden" placeholder="" name="id"/>
							<div class="control-group">
							    <label class="control-label" >Nama Lengkap: <span class="text-error">*</span></label>
							    <div class="controls">
							      <input type="text" id="inputFirstName" name="nama" placeholder="Budi" required>
							      <!--<span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span>-->
							    </div>
							</div><!--end control-group-->

							<div class="control-group">
							    <div class="control-label">Daftar Sebagai: <span class="text-error">*</span></div>
							    <div class="controls">
							      <select name="kategori" id="pilihkategori" required >
							      	<option disabled="" selected="" value="" >-- Pilih Kategori --</option>
									<option value="Peternak">Peternak</option>
									<option value="Industri Ternak">Industri Ternak</option>
									<option value="Pengguna Hasil Ternak">Pengguna Hasil Ternak</option>
							      </select>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputTele">Nomor Telepon: <span class="text-error">*</span></label>
							    <div class="controls">
							      <input type="text" id="inputTele" name="notelp" placeholder="085755141414" required>
							    </div>
							</div><!--end control-group-->

							

							<!--end control-group-->

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;2. Informasi Lokasi Pengiriman</h4>

							<div class="control-group namaPerusahaan" style="display: none;">
							    <label class="control-label" for="inputCompany">Nama Perusahaan / Nama Toko:</label>
							    <div class="controls">
							      <input type="text" id="inputCompany" name="toko" placeholder="PT. Jaya Kusuma" >
							    </div>
							</div><!--end control-group-->

							<!--end control-group-->

							<div class="control-group">
							    <label class="control-label" for="inputFirstAdd">Alamat: <span class="text-error">*</span></label>
							    <div class="controls">
							      <textarea  id="inputFirstAdd" name="alamat" placeholder="3st el-hikem" required></textarea>
							    </div>
							</div><!--end control-group-->

							<!--end control-group-->
							<div class="control-group">
							    <div class="control-label">Provinsi: <span class="text-error">*</span></div>
							    <div class="controls">
							      <select name="provinsi">
							      	<option disabled="" selected="" value="#">-- Pilih Provinsi --</option>
							      	<option value="Jawa Timur">Jawa Timur</option>
							      	<option value="Jawa Barat">Jawa Barat</option>
							      	<option value="Jawa Tengah">Jawa Tengah</option>
							      </select>
							    </div>
							</div>

							<div class="control-group">
							    <label class="control-label" for="inputCity">Kota: <span class="text-error">*</span></label>
							    <div class="controls">
							      <select name="kota" required>
							      	<option value="">-- Pilih Kota --</option>
										<?php
											foreach ($daftar_kota as $k) {
											 	echo "<option value='".$k->id_kota."'>".$k->nama_kota."</option>";
											 } 
										?>
							      </select>
							    </div>
							</div><!--end control-group-->

							<div class="control-group">
							    <label class="control-label" for="inputPostCode">Kodepos: <span class="text-error">*</span></label>
							    <div class="controls">
							      <input type="text" id="inputPostCode" name="kodepos" placeholder="65142" required maxlength="6">
							    </div>
							</div><!--end control-group-->

							<!--end control-group-->

							

							<h4>&nbsp;&nbsp;&nbsp;&nbsp;3. Set Username dan Password</h4>

							<div class="control-group">
							    <label class="control-label" for="inputPass">Username: <span class="text-error">*</span></label>
							    <div class="controls">
							      <input type="text" id="input-username" name="username" placeholder="budi" required>
							      <span class="help-inline" style="display: none" id="status-kosong"> Silahkan isi</span>
							      <span class="help-inline" style="display: none" id="status-tersedia"><i class="icon-ok"></i> Username tersedia</span>
							      <span class="help-inline" style="display: none" id="status-sudahada"><i class="icon-remove"></i> Username sudah ada</span>
							    </div>
							</div><!--end control-group-->

							<div class="control-group ">
							    <label class="control-label" for="inputConPass">Password: <span class="text-error">*</span></label>
							    <div class="controls">
							      <input type="text" id="inputConPass" name="password" placeholder="**********" required>
							    </div>
							</div><!--end control-group-->

							<hr>

							<div class="control-group">
							    <div class="controls">
							        <label class="checkbox">
								      <input type="checkbox" required=""> Semua data yang saya masukkan benar 

								    </label>
								    <br>
								    <button type="submit" class="btn btn-primary" name="btnSubmit" id="btnSubmit">Register</button>
							    </div>
							</div><!--end control-group-->

						</form><!--end form-->

					</div><!--end register-->
				</div><!--end span9-->


				<!--end span3-->

			</div><!--end row-->

		</div><!--end conatiner-->


		<!--begain footer-->
		
		<!--end footer-->

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

    <script src="<?php echo base_url() ?>js/cek_username.js"></script>


    <script type="text/javascript">
	$(document).ready(function(){
		$('#pilihkategori').change(function() {
		    if ($(this).val() === 'Industri Ternak' || $(this).val() === 'Peternak') {
		        $('.namaPerusahaan').css({'display': 'block'});
		        
		    } else {
		    	$('.namaPerusahaan').css({'display': 'none'});
		    	
		    }
		});
	});
	</script>


</body>


<!-- Mirrored from ahmedsaeed.me/shopfine/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:21 GMT -->
</html>