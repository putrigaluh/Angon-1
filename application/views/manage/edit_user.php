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
			
			<div class="portlet box green">
			<div class="portlet-title">
			<div class="caption">
								<i class="fa fa-gift"></i>Manage User
								</div>
								</div>
			<div class="portlet-body form">
			<form  class="form-horizontal form-row-seperated" role="form" action="<?= $this->config->base_url(); ?>manage/produk/proses_edit_user" method="post" enctype="multipart/form-data">
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">

													<div class="form-group"> 
												  <input type="hidden" name="id_user" value="<?php echo $u[0]->id_user; ?>">
												</div>
											
														 
												<div class="form-group"> 
													<label class="col-md-4 control-label">Nama: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
													 <input type="text"  class="form-control" name="nama_user" value="<?php echo $u[0]->nama_user; ?>" readonly>
													</div>
													</label>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Kategori: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
													<select  class="form-control" name="kategori_user">
														<option value="peternak" <?php if ($u[0]->kategori_user == 'Peternak') echo "selected"; ?>>Peternak</option>
														<option value="industri ternak" <?php if ($u[0]->kategori_user == 'Industri Ternak') echo "selected"; ?>>Industri Ternak</option>
														<option value="pengguna hasil ternak" <?php if ($u[0]->kategori_user == 'Pengguna Hasil Ternak') echo "selected"; ?>>Pengguna Hasil Ternak</option>
													</select>
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Alamat: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
														<input type="text"  class="form-control" name="alamat_user" value="<?php echo $u[0]->alamat_user; ?>">
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Kota: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
														<select  class="form-control" name="id_kota" value="<?php echo $u[0]->nama_kota; ?>">
															<?php foreach ($daftar_kota as $k) { ?>
															 	<option value="<?php echo $k->id_kota ?>" <?php if($u[0]->id_kota == $k->id_kota) echo "selected" ?>>
															 	<?php echo $k->nama_kota ?>
															 	</option>
															<?php } ?>
													</select>
													</div>
												</div>


												<div class="form-group">
													<label class="col-md-4 control-label">Username: <span class="required">
													 </span>
													</label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="username"  value="<?php echo $u[0]->username; ?>" readonly> 
													</div>
												</div>

												<div class="form-group">
													<label class="col-md-4 control-label">Password: <span class="required">
													* </span>
													</label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="password"  value="<?php echo $u[0]->password; ?>">
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