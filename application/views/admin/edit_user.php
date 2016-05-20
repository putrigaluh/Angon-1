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
			Manage User <small>Edit User</small>
			</h3><br><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Manage User</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Edit User</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->

			<div class="row">
				<div class="col-md-12">
					<form  class="form-horizontal form-row-seperated" role="form" action="<?= $this->config->base_url(); ?>admin/user/prosesedit" method="post" enctype="multipart/form-data">     
						<div class="portlet">
							<div class="portlet-title">
								<div class="caption">
									<i class="fa fa-shopping-cart"></i>Manage User
								</div>
								<div class="actions btn-set">
								
								</div>
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									<ul class="nav nav-tabs">
										<li class="active">
											<a href="#tab_general" data-toggle="tab">
											Edit User </a>
										</li>
									</ul>
										
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group"> 
													  <input type="hidden" name="id_user" value="<?php echo $u[0]->id_user; ?>">
												</div>
												<div class="form-group"> 
													<label class="col-md-2 control-label">Nama: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														 <input disabled="" type="text" class="form-control" name="nama_user" value="<?php echo $u[0]->nama_user; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Kategori: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
													<select disabled=""  class="form-control" name="kategori_user">
														<option value="peternak" <?php if ($u[0]->kategori_user == 'Peternak') echo "selected"; ?>>Peternak</option>
														<option value="industri ternak" <?php if ($u[0]->kategori_user == 'Industri Ternak') echo "selected"; ?>>Industri Ternak</option>
														<option value="pengguna hasil ternak" <?php if ($u[0]->kategori_user == 'Pengguna Hasil Ternak') echo "selected"; ?>>Pengguna Hasil Ternak</option>
													</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Alamat: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input disabled="" type="text"  class="form-control" name="alamat_user" value="<?php echo $u[0]->alamat_user; ?>">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Kota: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select disabled="" class="form-control" name="id_kota" value="<?php echo $u[0]->nama_kota; ?>">
															<?php foreach ($daftar_kota as $k) { ?>
															 	<option value="<?php echo $k->id_kota ?>" <?php if($u[0]->id_kota == $k->id_kota) echo "selected" ?>>
															 	<?php echo $k->nama_kota ?>
															 	</option>
															<?php } ?>
													</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Username: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input disabled="" type="text" class="form-control" name="username"  value="<?php echo $u[0]->username; ?>"> 
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Password: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="password"  value="<?php echo $u[0]->password; ?>">
													</div>
												</div>
											</div>
											<center><button class="btn green"><i class="fa fa-check" ></i>Simpan</button>
											</center>
												
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