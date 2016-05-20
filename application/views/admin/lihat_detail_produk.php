	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<!-- /.modal -->
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN STYLE CUSTOMIZER -->
			
			<h3 class="page-title">
			Manage Penjualan <small>Edit Produk</small>
			</h3><br><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Manage Penjualan</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Edit Produk</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="portlet box green">
			<div class="portlet-title">
			<div class="caption">
								<i class="fa fa-gift"></i>Edit Produk
								</div>
								</div>
			<div class="portlet-body form">
			<form  class="form-horizontal form-row-seperated" role="form" action="<?= $this->config->base_url(); ?>manage/produk/prosesedit" method="post" enctype="multipart/form-data">
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">

													<div class="form-group"> 
												  <input type="hidden" name="id_produk" value="<?php print $p->row('id_produk');?>">
													</div>
												</div>
												
												<div class="form-group"> 
													<label class="col-md-4 control-label">Kategori Jenis: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
													<input readonly="" type="text"  class="form-control" name="id_kategori_produk" value="<?php print $p->row('kategori_produk');?>">
													</div>
													</label>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Nama Produk: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
													<input readonly="" type="text"  class="form-control" name="nama_produk" value="<?php print $p->row('nama_produk');?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Harga Produk: <span class="required">
													* </span>
													</label>
													<div class="col-md-1">
														<input readonly="" type="text" class="form-control" value="Rp."readonly="">
													</div>
													<div class="col-md-2">
														<input readonly="" type="text"  class="form-control" name="harga_produk" value="<?php print $p->row('harga_produk');?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Berat Produk: <span class="required">
													* </span>
													</label>
													<div class="col-md-2">
														<input readonly="" type="text"  class="form-control" name="berat" value="<?php print $p->row('berat');?>">
													</div>
													<div class="col-md-1">
														<input type="text" class="form-control" value="Kg"readonly="">
													</div>
												</div>


												<div class="form-group">
													<label class="col-md-4 control-label">Stok: <span class="required">
													* </span>
													</label>
													<div class="col-md-2">
														<input readonly="" type="text"  class="form-control" name="stok" value="<?php print $p->row('stok');?>">
													</div>
													<div class="col-md-1">
														<input readonly="" type="text" class="form-control" value="Satuan"readonly="">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Deskripsi: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
														<textarea readonly="" class="form-control" name="deskripsi"><?php print $p->row('deskripsi');?></textarea>  
													</div>
												</div>

												<div class="form-group">
													<div class="col-md-10">
														<input type="hidden" class="form-control" name="id_user"  value="<?php print $p->row('id_user');?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Tampilan Gambar:
													</label>
													<div class="col-md-3">

													<img src="<?php echo base_url($p->row('gbr_produk'));?>" width="500" alt="logo" class="logo-default"/> 
													</div>
												</div>

												
											</div>
										</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>