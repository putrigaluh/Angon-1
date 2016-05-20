
<body>

	<div id="mainContainer" class="clearfix">
		<div class="container">

			<div class="row">
				<div class="span12">

				<table class="table table-compare">
					<tr>
						<td class="aligned-color"><h3>Produk</h3></td>
						<?php $i = 1; ?>
						<?php foreach($this->cart->contents() as $items) {
							echo form_hidden($i.'[rowid]', $items['rowid']); 
							echo "<td><h4><a href='#'' class='invarseColor'>".$items['name']."</a></h4></td>";
						 }?>
						
					</tr>
					<tr>
						<td class="aligned-color thumbnail" ><h3>Gambar</h3></td>
						<?php foreach($this->cart->contents() as $items) {
						 	echo "<td><a href='#'><img src='". base_url($items['image'])."'' alt='thumb product'></a></td>";
						}?>
						
					</tr>
					<tr>
						<td class="aligned-color"><h3>Harga</h3></td>
						<?php foreach($this->cart->contents() as $items) {
						echo "<td class='price'>Rp.".$items['price']."</td>";
						}?>
					</tr>
					 <tr>
						<td class="aligned-color"><h3>Nama Perusahaan / Toko</h3></td>
						<?php foreach($this->cart->contents() as $items) {
							echo "<td>".$items['nama_toko']."</td>";
						}?>
					</tr> 
					<!-- <tr>
						<td class="aligned-color"><h3>Rating</h3></td>

						<td>
							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
							
						</td>
						<td>
							<ul class="rating">
								<li><i class="star-on"></i></li>
								<li><i class="star-on"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
							
						</td>
						<td>
							<ul class="rating">
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
								<li><i class="star-off"></i></li>
							</ul>
							
						</td>
					</tr> -->
					<tr>
						<td class="aligned-color"><h3>Deskripsi</h3></td>
						<?php foreach($this->cart->contents() as $items) {
							echo "<td>".$items['deskripsi']."</td>";
						}?>
					</tr>
					<tr>
						<td class="aligned-color"><h3>Berat</h3></td>
						<?php foreach($this->cart->contents() as $items) {
							echo "<td>".$items['berat']." kg</td>";
						}?>
					</tr>
					<!-- <tr>
						<td class="aligned-color"><h3>Lokasi Penjual</h3></td>
						<td>0.90cm x 0.09cm x 2.00cm</td>
						<td>2.0cm x 0.00cm x 8.00cm</td>
						<td>1.0cm x 0.00cm x 7.99cm</td>
					</tr> -->
					<tr>
						<td class="aligned-color"></td>
						<?php foreach($this->cart->contents() as $items) {
						echo "<td>
							<a href='".base_url()."ecomerce/shoppingcart/buy/".  $items['rowid'] ."'>
							<button class='btn btn-small btn-primary' data-toggle='tooltip' data-title='+Beli Produk' data-placement='top'><i class='icon-shopping-cart'></i></button>
							</a>
							<a href='".base_url()."ecomerce/compare_produk/delete/". $items['rowid'] ."'>
							<button class='btn btn-small btn-danger' data-toggle='tooltip' data-title='Hapus' data-placement='top'><i class='icon-trash'></i></button>
							</a>
						</td>";
						}?>
					</tr>
					<tr>
						<td class="alignRight">
							<a href="<?php echo base_url();?>ecomerce/produk"><button class="btn">Tambah Produk</button></a>
						</td>
					</tr>
				</table>

				</div><!--end span12-->
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
    
</body>


<!-- Mirrored from ahmedsaeed.me/shopfine/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:24 GMT -->
</html>