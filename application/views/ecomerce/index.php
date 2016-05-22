

<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
		
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span8">
					<div class="flexslider">
						<ul class="slides">
							<!-- <?php
							foreach($daftar_produk as $p){
							 echo  "<li><img src=". base_url($p->gbr_produk) ." alt='slide1'></li>"; 
							 }
							 ?> -->
							<li> <img src="../uploads/2844457204745552f1.png" alt=""></li>
							<li> <img src="../uploads/294835715c41f59042.jpg" alt=""></li>
							<li> <img src="../uploads/30794573a02d71e15f.jpg" alt=""></li>
						</ul>
					</div><!--end flexslider-->
				</div><!--end span8-->


				<div class="span4">
					<div id="homeSpecial">
						<div class="titleHeader clearfix">
							<h3>Special</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									<div class="btn-group">
										<button class="btn btn-mini vNext"><i class="icon-caret-down"></i></button>
										<button class="btn btn-mini vPrev"><i class="icon-caret-up"></i></button>
									</div>
									
								</div>
							</div>
						</div><!--end titleHeader-->

						<!-- iklan -->
						<ul class="vProductItems cycle-slideshow vertical clearfix"
					    data-cycle-fx="carousel"
					    data-cycle-timeout=0
					    data-cycle-slides="> li"
					    data-cycle-next=".vPrev"
					    data-cycle-prev=".vNext"
					    data-cycle-carousel-visible="2"
					    data-cycle-carousel-vertical="true">
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Space Iklan
										</a>
									</div>
									
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Space Iklan
										</a>
									</div>
									
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Space Iklan
										</a>
									</div>
									
								</div>
							</li>
						</ul>
					</div><!--end special-->
				</div><!--end span4-->

			</div><!--end row-->



			<div class="row">
				<div class="span12">

					<div id="featuredItems">
						
						<div class="titleHeader clearfix">
							<h3>Produk Ternak</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									<a href="<?php echo base_url() ?>ecomerce/pencarian"><button class="btn btn-mini">Lihat Semua</button></a>

								</div>
							</div>
						</div><!--end titleHeader-->

						<div class="row">

							<ul class="vProductItems clearfix">
								<?php foreach($daftar_produk as $p){	?>
								<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="<?php echo base_url()?>ecomerce/produk/detail/<?php echo $p->id_produk; ?>" class="invarseColor">
									<img src="<?php echo base_url($p->gbr_produk);?>" alt="" >

								</div>
								
									
									<div class="thumbSetting">
										<div class="thumbTitle">
											<a href="<?php echo base_url()?>ecomerce/produk/detail/<?php echo $p->id_produk; ?>" class="invarseColor">
												<?php echo $p->nama_produk; ?>
											</a>
										</div>
										<div class="thumbPrice">
											<span> Rp. <?php echo $p->harga_produk; ?></span>
										</div>

										<div class="thumbButtons">
											<?php if ($this->session->userdata('kategori_user') == 'Peternak' ||
											$this->session->userdata('kategori_user') == 'Pengguna Hasil Ternak' ) { ?>
											<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/buy/<?php echo $p->id_produk; ?>">
												<button class="btn btn-primary btn-small" data-title="Beli Produk" data-placement="top" data-toggle="tooltip">
													<i class="icon-shopping-cart"></i> 
												</button>
											</a>
											<?php }?>
										
											<a href="<?php echo base_url(); ?>ecomerce/compare_produk/com/<?php echo $p->id_produk; ?>">
												<button class="btn btn-small" data-title="+ Bandingkan" data-placement="top" data-toggle="tooltip">
													<i class="icon-refresh"></i>
												</button>
											</a>

										</div>
								</li>
								<?php }?>
								
							</ul>
						</div><!--end row-->
					</div><!--end featuredItems-->
				</div><!--end span12-->
			</div><!--end row-->

			


			
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

