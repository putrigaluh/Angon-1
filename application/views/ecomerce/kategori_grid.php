




					<div class="special">
						
					</div><!--end special-->

				</aside><!--end aside-->


				<div class="span9">

				


					<div class="productFilter clearfix">


						
						<div class="compareItem inline pull-left">
							<a href="<?php echo base_url()?>ecomerce/compare_produk">
							<button class="btn">Bandingkan Produk</button>
							</a>
						</div><!--end compareItem-->

						<div class="displaytBy inline pull-right">
							
							<div class="btn-group">
								
							</div>
						</div><!--end displaytBy-->

					</div><!--end productFilter-->


					<div class="row">
						<ul class="hProductItems clearfix">
							<?php foreach($cari_produk as $p){	?>
							<li class="span3 clearfix">
								<div class="thumbnail">

									<a href="<?php echo base_url()?>ecomerce/produk/detail/<?php echo $p->id_produk; ?>"><img src="<?php echo base_url($p->gbr_produk);?>" alt=""></a>

								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="<?php echo base_url()?>ecomerce/produk/detail/<?php echo $p->id_produk; ?>" class="invarseColor">
											<?php echo $p->nama_produk; ?>
										</a>
									</div>
									<div class="thumbPrice">
										<span>Rp. <?php echo $p->harga_produk; ?></span>
									</div>

									<div class="thumbButtons">
											
											<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/buy/<?php echo $p->id_produk; ?>">
												<button class="btn btn-primary btn-small" data-title="Beli Produk" data-placement="top" data-toggle="tooltip">
													<i class="icon-shopping-cart"></i> 
												</button>
											</a>
											
											<a href="<?php echo base_url(); ?>ecomerce/compare_produk/com/<?php echo $p->id_produk; ?>">
											<button class="btn btn-small" data-title="+To Compare" data-placement="top" data-toggle="tooltip">
												<i class="icon-refresh"></i>
											</button>
											</a>
										</div>
								</div>
							</li>

							<?php }?>
							
						</ul>
					</div><!--end row-->

					<div class="pagination pagination-right">
						
						<ul>
							<?php foreach($links as $link){
								echo $link;
							}
							?>
						</ul>
					</div><!--end pagination-->

				</div><!--end span9-->

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

