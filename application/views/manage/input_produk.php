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
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Manage Penjualan <small>Input Produk</small>
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
						<a href="#">Input Produk</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="portlet box green">
			<div class="portlet-title">
			<div class="caption">
								<i class="fa fa-gift"></i>Input Produk
								</div>
								</div>
			<div class="portlet-body form">
					<form  class="form-horizontal form-row-seperated" role="form" action="<?= $this->config->base_url(); ?>manage/produk/prosesadd" method="post" enctype="multipart/form-data"> 
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
										   
												<div class="form-group"> 
													<label class="col-md-4 control-label">Kategori Jenis: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
														 <select class="form-control" name="id_kategori_produk">
            <?php 

            foreach($kat as $row)
            { 
              echo '<option value="'.$row->id_kategori_produk.'">'.$row->kategori_produk.'</option>';
            }
            ?>
            </select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">Nama Produk: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="nama_produk" placeholder="Ayam Kate">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">Harga Produk: <span class="required">
													* </span>
													</label>
													<div class="col-md-1">
														<input type="text" class="form-control" value="Rp."readonly="">
													</div>
													<div class="col-md-1">
														<input type="text" class="form-control" name="harga_produk" placeholder="20000">
													</div>
													<div class="col-md-1">
														<input type="text" class="form-control" value="/unit"readonly="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">Berat Produk: <span class="required">
													* </span>
													</label>
													<div class="col-md-2">
														<input type="text" class="form-control" name="berat" placeholder="15">
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
														<input type="text" class="form-control" name="stok" placeholder="10">
													</div>
													<div class="col-md-1">
														<input type="text" class="form-control" value="unit"readonly="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-4 control-label">Deskripsi: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
														<textarea class="form-control" name="deskripsi"  placeholder="Ayam sehat dan baik untuk digunakan..." required></textarea>  
													</div>
												</div>
												
														<input type="hidden" class="form-control" name="id_user" readonly="" value='<?php echo $this->session->userdata('id_user');?>'>
													
												
												<div class="form-group">
												<label class="col-md-4 control-label">Upload Gambar: <span class="required">
													* </span>
													</label>
													<div class="col-md-4">
													<?php echo form_upload('pic');?>
													<h5><i>*) format gambar jpg, jpeg, png, gif</i></h5>
													</div>
												</div>
												<div class="form-group" align="center">
												<?php echo
												form_submit('submit', 'Save', 'class="btn green"')
												?>
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