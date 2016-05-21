<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
	
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span12">
					<form method="post" autocomplete="off">

					<?php $i = 1; ?>
					<?php
					$cart_contents = array();
					if($this->cart->contents() != null){
						foreach ($this->cart->contents() as $items) {
							$cart_contents[$items['id_user']]['id_penjual'] 			= $items['id_user'];
							$cart_contents[$items['id_user']]['nama_toko'] 				= $items['nama_toko'];
							$cart_contents[$items['id_user']]['kota'] 					= $items['kota'];

							$cart_contents[$items['id_user']]['item_per_penjual'][$items['id']] 	= $items;
						}
					}else{
						echo "<div align='center'>Anda belum menambah produk ke keranjang belanja</div>";
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
									<tr>
										<td>
										<li class="span2">
											<a href="#"><img src="<?php echo base_url($item['image']);?>" alt=""></a>
										</li>
										</td>
										<td class="desc">
											<h4><a href="#" class="invarseColor">
												<?php echo $item['name']; ?>
												</a>
											</h4>
										</td>
										<td class="quantity">
											<h4><a href="#" class="invarseColor" id='stok<?php echo $i ?>'>
												<?php echo $item['stok']; ?></a></h4>
										</td>
										<td class="quantity">
											<div class="input-prepend input-append">
												<?php echo form_input(array('name' => 'qty', 'value' => $item['qty'], 'maxlength' => '4', 'size' => '5', 'id' => 'input-qty'.$i, 'class' => 'change-when-type')); ?>
											</div>
										</td>
										<td class="sub-price">
											<h3><?php echo $this->cart->format_number($item['price']); ?></h3>
										</td>
										<td class="total-price">
											<h3 id="subtotal<?php echo $i ?>">Rp. <?php echo $this->cart->format_number($item['subtotal']); ?></h3>
											<input type="hidden" id='hidden-subtotal<?php echo $i ?>' class='subtotal' value="<?php echo $item['subtotal']; ?>">
										</td>
										<td>
											<h3 id="berat<?php echo $i ?>">
												<?php 
												$berat = $item['berat'] * $item['qty'];
												echo  $berat;
												?>
											</h3>
										</td>
										<td>
											<button class="btn btn-small" type="submit" data-title="Refresh" data-placement="top" data-toggle="tooltip"><i class="icon-refresh"></i></button>
											
											<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/delete/<?php echo $item['rowid'] ?>" class="btn btn-small" data-title="Remove"><i class="icon-trash"></i></a>
										</td>
										
									</tr>	
					
									<script>
										$("#input-qty<?php echo $i ?>").keyup(function(event){
											var stok = <?php echo $item['stok'] ?>;
										    var qty = $("#input-qty<?php echo $i ?>").val();

											// Fire off the request to /form.php
											var sisa = (parseInt(stok) || 0) - (parseInt(qty) || 0);

											if ((parseInt(sisa) || 0) < 0){
												$("#stok<?php echo $i ?>").html(<?php echo $item['stok'] ?>);
												event.preventDefault();
												return false;
											}

											$("#stok<?php echo $i ?>").html(sisa);

											if(sisa >= 0 && (parseInt(qty) || 0) >= 0){
												$("#subtotal<?php echo $i ?>").text("Rp. " + <?php echo $item['price']; ?> * (parseInt(qty) || 0));
												$("#hidden-subtotal<?php echo $i ?>").val(<?php echo $item['price']; ?> * (parseInt(qty) || 0));
												$("#berat<?php echo $i ?>").text("Rp. " + <?php echo $item['berat']; ?> * (parseInt(qty) || 0));

												if((parseInt(qty) || 0) > 0){
												    request = $.ajax({
												    	url: window.location.origin + "/Angon/ecomerce/shoppingcart/update",
												    	type: "post",
												    	data: "rowid=<?php echo $item['rowid'] ?>&qty=" + qty
												     });
												}
											}
										});
									</script>
									<?php $i++;?>
									<?php $total_berat[$cart['id_penjual']] += $berat; ?>
								<?php endforeach; ?>

								<!-- <tr>
									<td>Total Berat <?php echo $total_berat[$cart['id_penjual']]; ?></td>
									<input type=hidden name='berat' value='<?php //echo $total_berat; ?>'>
								</tr> -->
							</tbody>							
						</table>
						<br>
					<?php endforeach; ?>
					</form>
				</div><!--end span12-->

				<div class="span7"></div>
				<div align="right" class="span5">
					<div class="cart-receipt">
						<table class="table table-receipt">
							<tr>
								<td class="alignRight"><h2>Total</h2></td>
								<td class="alignLeft"><h2 id="total">Rp. <?php echo $this->cart->format_number($this->cart->total()); ?></h2></td>
							</tr>
							<tr>
								<td class="alignRight"><a href="<?php echo base_url();?>ecomerce/kategori_grid"><button class="btn">Lanjutkan Belanja</button></a></td>
								<?php if($this->cart->contents() != null){
								echo "<td class='alignLeft'><a href='".base_url()."ecomerce/checkout'><button class='btn btn-primary'>Checkout</button></a>";
								} ?>
								</td>
							</tr>
						</table>
						<script type="text/javascript">
							function setTotal(){
								var total = 0;
								$('.subtotal').each(function(e, val) {
									total += parseInt(val.value);
								});
								$("#total").html("Rp. " + total);
							}

							$(".change-when-type").keyup(function(){
								setTotal();
							})
						</script>
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
