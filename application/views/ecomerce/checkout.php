

		<div class="container">

			<div class="row">
				<div class="span8">
					<div class="row">
						<div class="product-details clearfix">
							<?php if($this->session->userdata('is_logged_in') == false) {
							echo
							"<div class='checkout-outer'>
								<div class='checkout-header'>
									<a href='#'' class='invarseColor pull-right' data-toggle='tooltip' data-placment='top' data-title='EDIT' style='margin-right:12px; color:#333; font-size:13px;'><i class='icon-pencil'></i></a>
									<h4><i class='icon-caret-down'></i> Checkout Options</h4>
								</div><!--end checkout-header-->

								<div class='checkout-content'>
									<div class='login'>
										<table>
											<tr>
												<td>
													<h3>Pelanggan Baru</h3>
													<form method='post' action=''>
														<label class='radio'>
														  <input type='radio' name='optionsRadios' value='1' checked>
														  Registeration Account.
														</label>
														<label class='radio'>
														  <input type='radio' name='optionsRadios' value='0'>
														  Contuine as guest account.
														</label>
													</form><!--end form-->
													<p>Jika anda memiliki usaha di bidang peternakan atau membutuhkan hasil ternak, silahkan gabung bersama kami untuk mendapat kemudahan mencari informasi</p>
													<a href='".base_url()."regis' class='btn'>Register</a>
												</td>

												<td>
													<h3>Login</h3>
													<form method='post' action='".base_url()."login'>
														<div class='controls'>
															<label>Masukkan Username: <span class='text-error'>*</span></label>
															<input type='text' name='username'value='' placeholder='budi'>
														</div>
														<div class='controls'>
															<label>Masukkan Password: <span class='text-error'>*</span></label>
															<input type='password' name='password' value='' placeholder='**************'>
														</div>
														<div class='controls'>
															
														    </label>
														    <button type='submit' class='btn btn-primary'>Login</button>
														</div>
													</form><!--end form-->
												</td>
											</tr>
										</table>
									</div><!--end login-->
								</div><!--end checkout-content-->
							</div><!--end checkout-outer-->";

							}?>

							<div class="checkout-outer">
								<div class="checkout-header">
									<a href="#" class="invarseColor pull-right" data-toggle="tooltip" data-placment="top" data-title="EDIT" style="margin-right:12px; color:#333; font-size:13px;"><i class="icon-pencil"></i></a>
									<h4><i class="icon-caret-down"></i> Informasi Pengiriman</h4>
								</div><!--end checkout-header-->

								<div class="checkout-content">
									<form method="post" action="" class="form-inline">
										<label class="radio inline">
										  <input type="radio" name="add" value="option1" id="radio_data_pribadi"> Gunakan data saya
										</label>&nbsp;&nbsp;
										<label class="radio inline">
										  <input type="radio" name="add" value="option2" id="radio_data_baru"> Saya ingin membuat informasi pengiriman lain
										</label>
									</form><!--end form-->

									<hr>

									<form method="post" action="<?php echo base_url();?>ecomerce/checkout/check" class="form-horizontal">

										<div class="control-group">
										    <label class="control-label" for="inputFirstName">Nama Lengkap: <span class="text-error">*</span></label>
										    <div class="controls">
										      <input type="text" id="inputFirstName" name="nama" placeholder="Masukkan nama penerima.." required>
										      <!--<span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span>-->
										    </div>
										</div><!--end control-group-->
										<?php if ($this->session->userdata('kategori_user') == 'Industri Ternak' || $this->session->userdata('kategori_user') == 'Peternak' ) {
										echo "<div class='control-group'>
										    <label class='control-label' for='inputCompany'>Nama Perusahaan / Nama Toko:</label>
										    <div class='controls'>
										      <input type='text' id='inputCompany' name='toko' placeholder='Masukkan nama toko penerima..'>
										    </div>
										</div>";
										} ?>

										<div class="control-group">
										    <label class="control-label" for="inputFirstAdd">Alamat: <span class="text-error">*</span></label>
										    <div class="controls">
										      <textarea  id="inputFirstAdd" name="alamat" placeholder="Masukkan  alamat penerima.." required></textarea>
										    </div>
										</div><!--end control-group-->

										<div class="control-group">
									    <label class="control-label" for="inputTele">Nomor Telepon: <span class="text-error">*</span></label>
									    <div class="controls">
									      <input type="text" id="inputTele" name="notelp" placeholder="Masukkan nomor telepon penerima.." required>
									    </div>
										</div><!--end control-group-->
										

										

										<div class="control-group">
										    <div class="control-label">Provinsi: <span class="text-error">*</span></div>
										    <div class="controls">
										      <select name="provinsi" id="select-provinsi">
										      	<option value="pilih">-- Pilih Provinsi --</option>
										      	<?php
														foreach ($daftar_provinsi as $prov) {
														 	echo "<option value='".$prov->id_provinsi."' >".$prov->nama_provinsi."</option>";
														}
													?>
										      </select>
										    </div>
										</div>

										<div class="control-group">
										    <label class="control-label" for="inputCity">Kota: </label>
										    <div class="controls">
										      <select name="kota" id="select-kota" required>
										      	<option value="pilih" selected disabled>-- Pilih Kota --</option>
													<?php
														foreach ($daftar_kota as $k) {
														 	echo "<option value='".$k->id_kota."' >".$k->nama_kota."</option>";
														}
													?>
										      </select>
										    </div>
										</div>
										<div class="control-group">
										    <label class="control-label" for="inputPostCode">Kodepos: </label>
										    <div class="controls">
										      <input type="text" id="inputPostCode" name="kodepos" placeholder="Masukkan kodepos penerima.." required>
										      <input type="hidden" class="total-bayar" name="total_bayar" >
										    </div>
										</div>


									

									<!--end form-->
								</div><!--end checkout-content-->
							</div><!--end checkout-outer-->

							<div class="checkout-outer">
								<div class="checkout-header">
									<a href="#" class="invarseColor pull-right" data-toggle="tooltip" data-placment="top" data-title="EDIT" style="margin-right:12px; color:#333; font-size:13px;"><i class="icon-pencil"></i></a>
									<h4><i class="icon-caret-right"></i> Metode Pembayaran</h4>
								</div><!--end checkout-header-->

								<div class="checkout-content">
									<!-- content here-->
									Metode pembayaran yang tersedia saat ini adalah transfer melalui rekening bersama Angon.
									 <div class="control-group">
										    <label class="control-label" for="inputPostCode">BCA A/n PT Angon Indonesia <span class="text-error">*</span></label>
										    <div class="controls">
										       <label class="control-label" for="inputPostCode">333-678-987 <span class="text-error">*</span></label>
										    </div>
									</div>
									<div class="control-group" align="center">
									    <div class="controls">
										    <input type="submit" name="submit" class="btn btn-primary" values="Checkout">
									    </div>
									</div><!--end control-group-->

								</div><!--end checkout-content-->
							</div><!--end checkout-outer-->
							</form>	
						</div>
					</div>
				</div><!--end span12-->
				<aside class="span4">
					<div class="accordion-group">
						<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#estimate">
									<i class="icon-caret-right"></i>Estimasi Ongkos Pengiriman 
								</a>
						</div>
						<form action="<?php echo base_url().'ecomerce/shoppingcart/get_cost'; ?>" method="post" >
							<?php $i = 1; ?>
							<?php
							$cart_contents = array();

								foreach ($this->cart->contents() as $items) {
									$cart_contents[$items['id_user']]['id_penjual'] 			= $items['id_user'];
									$cart_contents[$items['id_user']]['nama_toko'] 				= $items['nama_toko'];
									$cart_contents[$items['id_user']]['kota'] 					= $items['kota'];

									$cart_contents[$items['id_user']]['item_per_penjual'][$items['id']] 	= $items;
								}
							?>
							<div id="estimate" class="accordion-body collapse in">
								<div class="accordion-inner">
									<div class="control-group">
									
									
									<?php foreach ($cart_contents as $cart): ?>
									<br>
									<div class="product-info">Pembelian dari <?php echo $cart['nama_toko']; ?> </div>

									<table class="table">
										<tr>
											<td>Produk</td>
											<td>Jumlah</td>
											<td>Harga</td>
										</tr>
														
										<?php $total_berat[$cart['id_penjual']] = 0; ?>	

										<?php foreach ($cart['item_per_penjual'] as $item):?>
										<tr>
											<div class="product-info">
												<td><?php echo $item['name']; ?></td>
												<td><?php echo $item['qty']; ?></td>
												<td><?php echo $item['price'];?></td>
											</div>
											<?php $berat = $item['berat'] * $item['qty'];?>
											<?php $total_berat[$cart['id_penjual']] += $berat; ?>
										</tr>	
										<?php endforeach; ?>
										</table>
										<div align="right" id="ongkir<?php echo $i ?>"></div>
										
										<?php $i++ ?>
										

									<?php endforeach; ?>	
											
									<br>
									</div><!--end control-goup-->

									<div id="cost">
										<img src="<?php echo base_url()?>ecom/img/loading.gif" id="loading" style="display: none">
										<div class="thumbTitle">Subtotal : Rp. <?php echo $this->cart->total() ?></div>
										<div class="thumbTitle" id="total-ongkir"></div>
										<div class="thumbTitle" id="total-bayar" class="total-bayar"></div>
									</div>
								
									<?php $i = 0 ?>
									<?php foreach ($cart_contents as $cart): ?>
										<!-- <input type='text' name='total_ongkir' id='input-total-ongkir'></br> -->
										<input type='hidden' name='kota_asal[<?php echo $i ?>]' value="<?php echo $cart['kota']; ?>" ></br>
										<input type='hidden' name='berat[<?php echo $i ?>]' value='<?php echo $total_berat[$cart['id_penjual']]; ?>'>
										<?php $i++ ?>
									<?php endforeach; ?>

										
									
								</div>
							</div>
							</form>
						</div><!--end accordion-group-->
				</aside>
			</div><!--end row-->

		</div><!--end conatiner-->


		<!--begain footer-->
		
		<!--end footer-->

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


    <script>

    $("#radio_data_pribadi").click(function(){
    	$("#inputFirstName").val("<?php echo $data_pengirim->nama_user; ?>");
    	$("#inputCompany").val("<?php echo $data_pengirim->nama_toko; ?>");
    	$("#inputFirstAdd").val("<?php echo $data_pengirim->alamat_user; ?>");
    	$("#inputTele").val("<?php echo $data_pengirim->no_telp; ?>");
    	$("#select-provinsi").val("<?php echo $data_pengirim->id_provinsi; ?>");
    	$("#select-kota").val("<?php echo $data_pengirim->id_kota; ?>");
    	$("#inputPostCode").val("<?php echo $data_pengirim->kodepos; ?>");

    	var selectKota = $("#select-kota").val();
    	if(selectKota != "pilih"){
    		getCost();
    	}

    });

    function getCost(){
     	var value = $("#select-kota").val();

     	var data = "";
     	<?php $i = 0 ?>
     	<?php foreach ($cart_contents as $cart): ?>
			data += "kota_asal[<?php echo $i ?>]=<?php echo $cart['kota'] ?>&berat[<?php echo $i ?>]=<?php echo $total_berat[$cart['id_penjual']]; ?>";
			<?php if ($i < count($cart_contents) - 1) { ?>
				data += "&";
			<?php } ?>
			<?php $i++ ?>
     	<?php endforeach; ?>

     	request = $.ajax({
          	url: "<?php echo base_url().'ecomerce/shoppingcart/get_cost'; ?>",
          	type: "post",
          	data: 'kota='+value+"&"+data
     	});
     	
     	document.getElementById('loading').style.display = 'block';
     	document.getElementById('total-ongkir').style.display = 'none';
     	document.getElementById('total-bayar').style.display = 'none';

    	request.done(function (response){
		   	var harga = response.split('---');
		   	var totalOngkir = 0;
		   	for (var i = 1; i <= harga.length - 1; i++) {
		   		$('#ongkir'+i).text("Ongkos Kirim : Rp. " + harga[i - 1]);
		   		totalOngkir = parseInt(totalOngkir) + parseInt(harga[i - 1]);
		   	}
		   	document.getElementById('loading').style.display = 'none';
		   	$('#total-ongkir').text("Total Ongkos Kirim : Rp. " + totalOngkir);
		   	$('#total-bayar').text("Total Bayar : Rp. " + (parseInt("<?php echo $this->cart->total() ?>") + parseInt(totalOngkir)));
		   	$('.total-bayar').val( (parseInt("<?php echo $this->cart->total() ?>") + parseInt(totalOngkir)));
	     	document.getElementById('total-ongkir').style.display = 'block';
	     	document.getElementById('total-bayar').style.display = 'block';
		   	// $('#input-total-ongkir').val(totalOngkir);
	    });
    }
   
	$("#radio_data_baru").click(function(){
    	$("#inputFirstName").val("");
    	$("#inputCompany").val("");
    	$("#inputFirstAdd").val("");
    	$("#inputTele").val("");
    	$("#select-provinsi").val("pilih");
    	$("#select-kota").val("pilih");
    	$("#inputPostCode").val("");
    });

    $("#select-kota").change(function(event){
     	getCost();
	});

    </script>
    
</body>

