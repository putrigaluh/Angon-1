<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/product_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:28 GMT -->
<body>

	<div id="mainContainer" class="clearfix">

	
		<div class="container">

			<div class="row">
				
				<div class="span9">
					<div class="row">

						<div class="product-details clearfix">
							<div class="span5">
								
								<div class="product-img">
									<a class="fancybox" href="<?php echo base_url($det->gbr_produk); ?>"><img src="<?php echo base_url($det->gbr_produk); ?>" alt=""></a>
								</div><!--end product-img-->
								<div class="product-img-thumb">
									
								</div><!--end flexslider-thumb-->
							</div><!--end span5-->

							<div class="span4">
								<div class="product-set">
									<div class="product-title">
									<b><h3><?php echo $det->nama_produk; ?></h3></b>
									</div>
									<div class="product-price">
										<span>Rp <?php echo $det->harga_produk; ?></span>
									</div><!--end product-price-->
									<div class="product-rate clearfix">
										<ul class="rating">
										<?php 
										if($rat >'0' && $rat <='1' ){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										 else if($rat >'1' && $rat <='2'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										  else if($rat >'2' && $rat <='3'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										  else if($rat >'3' && $rat <='4'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										  else if($rat >'4' && $rat <='5'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										
										 	else{
											echo  

											"<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										?>
										</ul>
										<span><?php 
										
											echo $con;
										
										 ?> Review(s) </span>

									</div><!--end product-inputs-->
									<div class="product-info">
										<dl class="dl-horizontal">
										  <dt>Ketersediaan:</dt>
										  <?php if($det->stok >= 0){
										    echo "<dd>Stok Tersedia</dd>";
										  } ?>
										  <dt>Berat Produk:</dt>
										  <dd><?php echo $det->berat; ?> Kg</dd>

										</dl>
									</div><!--end product-info-->
									<div class="product-inputs">
										<!--<form method="post" action="http://ahmedsaeed.me/shopfine/page">
											<!--<div class="controls-row">
											<select class="span2" name="#">
												<option>-- Select Color --</option>
												<option value="">Red</option>
												<option value="">Blue</option>
												<option value="">Brown</option>
											</select>
											<select class="span2" name="#">
												<option>-- Select Size --</option>
												<option value="">Size 36</option>
												<option value="">Size 12</option>
												<option value="">Size 18</option>
											</select>
											</div>

											<div class="controls-row">
											<input type="text" class="span2" name="" value="" placeholder="input...">
											<input type="text" class="span2" name="" value="" placeholder="input...">
											</div>

											<div class="controls-row">
											<input type="text" class="span3" name="" value="" placeholder="input...">
											<input type="text" class="span1" name="" value="" placeholder="input...">
											</div>

											<textarea name="" class="span4" placeholder="textarea..."></textarea>-->

											<div class="input-append">
											<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/buy/<?php echo $det->id_produk; ?>">
											<button class="btn btn-primary"><i class="icon-shopping-cart"></i> Beli Produk</button></a>
											<br>
											<br>
											</div>
											
										<!--</form>end form-->

									</div><!--end product-inputs-->
								</div><!--end product-set-->
							</div><!--end span4-->

						</div><!--end product-details-->

					</div><!--end row-->
					<div class="product-tab">
						<ul class="nav nav-tabs">
						  <li class="active">
						  	<a href="#descraption" data-toggle="tab">Deskripsi</a>
						  </li>
						
						  <li class="dropdown">
						  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Review<i class="icon-caret-down"></i></a>
						  	<ul class="dropdown-menu">
						  		<li><a href="#read-review" data-toggle="tab">Baca Review</a></li>
						  		<li><a href="#make-review" data-toggle="tab">Tulis Review</a></li>
						  	</ul>
						  </li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="descraption">
								
								<p>
									<?php echo $det->deskripsi;?>
								</p>
							</div>
							
							<div class="tab-pane" id="read-review">
								<?php foreach($r as $review) { ?>
								<div class="single-review clearfix">

									<div class="review-header">
										<ul class="rating">
										<?php 
										if($review->rating === '1'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										 else if($review->rating === '2'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										  else if($review->rating === '3'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										  else if($review->rating === '4'){
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-off'></i></li>";
										 }
										  else {
											echo  

											"<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>
											<li><i class='star-on'></i></li>";
										 }
										?>
										</ul>
										<h4><?php echo $review->nama_user?></h4>
										<small><?php echo $review->tgl?></small>
									</div><!--end review-header-->

									<div class="review-body">
										<p><?php echo $review->review?></p>
									</div><!--end review-body-->
								</div><!--end single-review-->
								<?php } ?>

								
							</div>

							<div class="tab-pane" id="make-review">
								<form method="post" action="<?php echo base_url();?>ecomerce/review/tambah_review/<?php echo $det->id_produk;?>" class="form-horizontal">
									<div class="control-group">
									    <label class="control-label" for="inputName">Nama Produk:<span class="text-error"></span></label>
									    <div class="controls">
									      <?php echo $det->nama_produk; ?>
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputReview">Isi Review <span class="text-error">*</span></label>
									    <div class="controls">
									      <textarea name="isi_review" id="isi_review" placeholder="Kualitas oke.."></textarea>
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" >Beri Rating <span class="text-error">*</span></label>
									    <div class="controls">
									       <div class="btn-group" data-toggle="buttons-radio" id="rate" >
									       <button type="submit" class="btn" data-toggle="tooltip" data-title="1/5" name="rating" value="1"><i class="icon-star"></i>
											  </button>
											  <button type="submit" class="btn" data-toggle="tooltip" data-title="2/5" name="rating" value="2"><i class="icon-star" value="2/5"></i></button>
											  <button type="submit" class="btn" data-toggle="tooltip" data-title="3/5" name="rating" value="3" ><i class="icon-star"></i></button>
											  <button type="submit" class="btn" data-toggle="tooltip" data-title="4/5"  name="rating" value="4"><i class="icon-star"></i></button>
											  <button type="submit" class="btn" data-toggle="tooltip" data-title="5/5" name="rating" value="5"><i class="icon-star"></i></button>

										   </div>
									    </div>
									   
									</div>
									
								</form><!--end form-->
							</div>
						</div><!--end tab-content-->
					</div><!--end product-tab-->

					
				</div><!--end span9-->


				<aside class="span3">
				<div class="aside-inner" id="product-aside">
					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Informasi Penjual</h3>
						</div><!--end titleHeader-->

						<ul class="vProductItemsTiny">
							<li class="span7 clearfix">
								
									<a class="fancybox" href="<?php echo base_url($det->gbr_produk); ?>"><img src="<?php echo base_url($det->gbr_produk); ?>" alt="" width="100"></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											<?php echo $det->nama_toko; ?>
										</a>
									
									
									<div class="product-info">
										Lokasi : <?php echo $det->nama_kota; ?><br>
										Menerima pesanan sebanyak 8x pesanan
									</div>
									<div class="">
										<a href="<?php echo base_url();?>ecomerce/produk/lihat_toko/<?php echo $det->id_user; ?>" class="invarseColor">
											<button class="btn">Lihat Semua Barang</button>
										</a>
									</div>
								</div>
							</li>
							
						</ul>
					</div><!--end special-->



					

				</div><!--end aside-inner-->
				</aside><!--end span3-->

			</div><!--end row-->

		</div><!--end conatiner-->

</div>
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
</html>

