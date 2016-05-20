<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
	
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span12">
					<form action="<?php echo base_url().'ecomerce/shoppingcart/update'; ?>" method="post" >

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
					<?php foreach ($cart_contents as $cart): ?>
						<?php //echo $cart['id_penjual']; ?> 
						Pembelian dari : <?php echo $cart['nama_toko']; ?> </br>
						<input type="hidden" name='kota_asal' value="<?php echo $cart['kota']; ?>" ></br>

						<table class="table">
							<thead>
								<tr>
									<th>Image</th>
									<th class="desc">Nama Produk</th>
									<th>Stok</th>
									<th>Jumlah</th>
									<th>Harga</th>
									<th>Total Harga</th>
									<th>berat</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $total_berat[$cart['id_penjual']] = 0; ?>
								<?php foreach ($cart['item_per_penjual'] as $item):?>
									<?php echo form_hidden($i.'[rowid]', $item['name']); ?>
									<tr>
										<td>
										<li class="span2 clearfix">
											<a href="#"><img src="<?php echo base_url($item['image']);?>" alt=""></a>
										</li>
										</td>
										<td class="desc">
											<h4><a href="#" class="invarseColor">
												<?php echo $item['name']; ?>
												</a></h4>
										</td>
										<td class="quantity">
											<h4><a href="#" class="invarseColor">
												<?php echo "<li>".$item['stok']."</li>"; ?>
												</a></h4>
										</td>
										<td class="quantity">
											<div class="input-prepend input-append">
												<?php echo form_input(array('name' => 'qty'.$i, 'value' => $item['qty'], 'maxlength' => '3', 'size' => '5')); ?>
												<?php if ($this->cart->has_options($item['rowid']) == TRUE): ?>
													<p>
														<?php foreach ($this->cart->product_options($item['rowid']) as $option_name => $option_value): ?>
															<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
														<?php endforeach; ?>
													</p>
												<?php endif; ?>
											</div>
										</td>
										<td class="sub-price">
											<h3><?php echo $this->cart->format_number($item['price']); ?></h3>
										</td>
										<td class="total-price">
											<h3>Rp. <?php echo $this->cart->format_number($item['subtotal']); ?></h3>
										</td>
										<td>
											<?php 
											$berat = $item['berat'] * $item['qty'];
											echo  $berat;
											?>
										</td>
										<td>
											<button class="btn btn-small" type="submit" data-title="Refresh" data-placement="top" data-toggle="tooltip"><i class="icon-refresh"></i></button>
											
											<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/delete/<?php echo $item['rowid'] ?>" class="btn btn-small" data-title="Remove"><i class="icon-trash"></i></a>
										</td>
										
									</tr>
									<?php $i++;?>
									<?php $total_berat[$cart['id_penjual']] += $berat; ?>	
								<?php endforeach; ?>

								<!-- <tr>
									<td>Total Berat <?php echo $total_berat[$cart['id_penjual']]; ?></td>
									<input type=hidden name='berat' value='<?php echo $total_berat; ?>'>
								</tr> -->
							</tbody>							
						</table>
						<br>
					<?php endforeach; ?>
					</form>
				</div><!--end span12-->

				<div class="span7">
						<!--<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#estimate">
									<i class="icon-caret-right"></i>Estimasi Ongkos Pengiriman 
								</a>
							</div>
							<div id="estimate" class="accordion-body collapse in">
								<div class="accordion-inner">
									<form action="<?php echo base_url().'ecomerce/shoppingcart/get_cost'; ?>" method="post" >
										<?php $i = 0 ?>
										<?php foreach ($cart_contents as $cart): ?>
											<input type='hidden' name='kota_asal[<?php echo $i ?>]' value="<?php echo $cart['kota']; ?>" ></br>
											<input type='hidden' name='berat[<?php echo $i ?>]' value='<?php echo $total_berat[$cart['id_penjual']]; ?>'>
											<?php $i++ ?>
										<?php endforeach; ?>
										<div class="control-group">
									    <div class="control-label">
									    	<strong>Provinsi</strong>
									    </div>
									    <div class="controls">
									      <select name="">
									      	<option value="">-- Pilih Provinsi --</option>
									      	<option value="">Country1</option>
									      	<option value="">Country2</option>
									      	<option value="">Country3</option>
									      	<option value="">Country4</option>
									      	<option value="">Country5</option>
									      	<option value="">Country6</option>
									      </select>
									    </div>
									  	</div>
									  <div class="control-group">
									    <div class="control-label">
									    	<strong>Kota</strong>
									    </div>
									    <div class="controls">
									       <select name="kota_tujuan">
								      		<option value="">-- Pilih Kota --</option>
											<?php
												foreach ($daftar_kota as $k) {
												 	echo "<option value='".$k->nama_kota."'>".$k->nama_kota."</option>";
												 } 
											?>
								      </select>
									    </div>
									  </div>
									  <div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary">Hitung Ongkir</button>
									    </div>
									  </div>
									</form>
								</div>
							</div>
						</div>end accordion-group-->
				</div>

				<div align="right" class="span5">
					<div class="cart-receipt">
						<table class="table table-receipt">
							<tr>
								<td class="alignRight"><h2>Total</h2></td>
								<td class="alignLeft"><h2>Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></h2></td>
							</tr>
							<tr>
								<td class="alignRight"><a href="<?php echo base_url();?>ecomerce/kategori_grid"><button class="btn">Lanjutkan Belanja</button></a></td>
								<td class="alignLeft"><a href="<?php echo base_url();?>ecomerce/checkout"><button class="btn btn-primary">Checkout</button></a>
								</td>
							</tr>
						</table>
					</div>
				</div><!--end span5-->


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
    
 
    
</body>
