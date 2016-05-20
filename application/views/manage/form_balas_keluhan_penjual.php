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
			Keluhan <small>Balas Keluhan</small>
			</h3><br><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Keluhan</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Balas Keluhan</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->

			<div class="row">
				<div class="col-md-12">
					<form  class="form-horizontal form-row-seperated" role="form" action="<?= $this->config->base_url(); ?>admin/keluhan/insert_balas_keluhan_penjual/<?php echo $p->id_keluhan?>" method="post" enctype="multipart/form-data"> 
						<div class="portlet">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-shopping-cart"></i>Keluhan
								</div>
								<div class="actions btn-set">
									
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Balas Keluhan </a>
										</li>
									</ul>
										
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
											<input type="hidden" readonly="" class="form-control"  name="id_keluhan" value="<?php print $p->id_keluhan?>">
										   <input type="hidden" readonly="" class="form-control" name="id_transaksi" value="<?php print $p->id_transaksi?>">
										   <input type="hidden" readonly="" class="form-control" name="id_user" value="<?php print $p->id_user?>">
										   <input type="hidden" readonly="" class="form-control" name="id_produk" value="<?php print $p->id_produk?>">

												<div class="form-group">
													<label class="col-md-2 control-label">Kepada: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
													<input type="text" readonly="" class="form-control" name="nama_user" value="<?php print $p->nama_user?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-2 control-label">Isi Keluhan: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
													<input type="text" readonly="" class="form-control" name="isi_keluhan" value="<?php print $p->isi_keluhan?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Gambar: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
													<?php if($p->gbr_keluhan != null ){
													 echo "<img src='".base_url($p->gbr_keluhan)."' alt='tidak ada gambar' width='500'>";
													}	else{
														echo "tidak ada gambar";

													}
													?>
													</div>
												</div>
												
												<div class="form-group">
													<label class="col-md-2 control-label">Balasan: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="isi_balasan"></textarea>  
													</div>
												</div>
																							
												<?php echo
												form_submit('submit', 'Kirim', 'class="btn green"')
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
	<!-- END CONTENT -->