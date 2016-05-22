

<body>

	<div id="mainContainer" class="clearfix">

		<div class="container">

			<div class="row">

				<div class="titleHeader clearfix">
					<h3>Ringkasan Pemesanan</h3>
				</div>
				<div class="span6">
					<div class="cart-accordain" id="cart-acc">

						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#estimate">
									 Informasi Pemesanan
								</a>
							</div>
							<div id="estimate" class="accordion-body collapse in">
								<div class="accordion-inner">
									
									  <div class="control-group">
									    <font size="5">Menunggu Pembayaran<br></font>

									    Nomor Pesanan : <font size="5"><?php echo $sum->id_transaksi; ?></font><br>
									   	Status : <?php if($sum->status == "Pending"){ echo "Menunggu Pembayaran"; }?><br>
									   	Pemesanan Anda telah dikonfirmasi Angon. Sistem kami sedang menunggu konfirmasi pembayaran.<br><br>

									   	Pilih tombol <b>Histori Pemesanan</b> untuk melihat nomor pemesanan anda. <br>
									   	Pilih <b>Konfirmasi pembayaran</b> untuk mengkonfirmasikan jika Anda telah melakukan pembayaran.
									  </div><!--end control-group-->
									  <div class="control-group">
									 <div class="controls">
									      <a href="<?php echo base_url()?>ecomerce/histori_pemesanan"><button class="btn btn-primary">Histori Pemesanan</button></a>
									      <a href="<?php echo base_url()?>ecomerce/konfirmasi_pembayaran/konfirmasi_pembayaran"><button class="btn btn-primary">Konfirmasi Pembayaran</button></a>
									    </div>
							 		</div><!--end control-group-->
								</div>
							</div>

						</div><!--end accordion-group-->
					</div><!--end cart-accordain-->
				</div><!--end span7-->
				<aside  class="span6">
				<div class="">
					<div class="cart-accordain" id="cart-acc">

						<div class="accordion-group">
							<div class="accordion-heading">
								<a class="accordion-toggle" data-toggle="collapse" data-parent="#cart-acc" href="#estimate">
									 Detail Pesanan
								</a>
							</div>
							<div id="estimate" class="accordion-body collapse in">
								<div class="accordion-inner">
									<table class="table">
										<tr>
											<td>Nama Produk</td>
											<td>Jumlah</td>
											<td>Harga Produk</td>

										</tr>
										<?php foreach ($det as $d) {?>
										<tr>
											<td><?php echo $d->nama_produk ?></td>
											<td><?php echo $d->jumlah ?></td>
											<td><?php echo $d->harga_produk ?></td>
										</tr>
										<?php } ?>
										<tr>
											<td>Total Bayar : <?php echo $sum->total_bayar ?></td>
										</tr>
									</table>
									  
									  
								</div>
							</div>
						
						</div><!--end accordion-group-->
					</div><!--end cart-accordain-->
				</div><!--end span7-->
				</aside>
				
				<!--<div class="span12">
					<div class="account-list-outer">
							<div class="titleHeader clearfix">
							<h3>Ringkasan Pemesanan</h3>
							</div>
							<br>
							<br>
							<div class="checkout-content">
								<table class="table">
						
								<thead>
									<tr>
										<th>Image</th>
										<th class="desc">Nama Produk</th>
										<th>Jumlah</th>
										<th>Harga</th>
										<th>Total Harga</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
										</td>
										<td class="desc">
											<h4><a href="#" class="invarseColor">
												<?php echo $sum->id_transaksi; ?>
												</a></h4>
											
											<ul class="unstyled">
												<?php 

												echo "<li>Stok Tersedia</li>";
												echo "<li>Deskripsi</li>";
												?>
											</ul>
										</td>
										<td class="quantity">
											<div class="input-prepend input-append">
												<button class="btn"><i class="icon-chevron-left"></i></button>
												
												<button class="btn"><i class="icon-chevron-right"></i></button>
												</p>
											</div>
										</td>
										<td class="sub-price">
											
										</td>
										<td class="total-price">
											
											
										</td>
									
									</tr>									
								</tbody>
							</table>
							</div>
					</div>
				</div>end span9-->

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
