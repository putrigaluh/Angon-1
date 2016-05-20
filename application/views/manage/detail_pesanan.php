
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
			<div class="theme-panel hidden-xs hidden-sm">
				<div class="toggler">
				</div>
				<div class="toggler-close">
				</div>
				<div class="theme-options">
					<div class="theme-option theme-colors clearfix">
						<span>
						THEME COLOR </span>
						<ul>
							<li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default">
							</li>
							<li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue">
							</li>
							<li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue">
							</li>
							<li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey">
							</li>
							<li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light">
							</li>
							<li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2">
							</li>
						</ul>
					</div>
					<div class="theme-option">
						<span>
						Theme Style </span>
						<select class="layout-style-option form-control input-sm">
							<option value="square" selected="selected">Square corners</option>
							<option value="rounded">Rounded corners</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Layout </span>
						<select class="layout-option form-control input-sm">
							<option value="fluid" selected="selected">Fluid</option>
							<option value="boxed">Boxed</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Header </span>
						<select class="page-header-option form-control input-sm">
							<option value="fixed" selected="selected">Fixed</option>
							<option value="default">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Top Menu Dropdown</span>
						<select class="page-header-top-dropdown-style-option form-control input-sm">
							<option value="light" selected="selected">Light</option>
							<option value="dark">Dark</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Mode</span>
						<select class="sidebar-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Menu </span>
						<select class="sidebar-menu-option form-control input-sm">
							<option value="accordion" selected="selected">Accordion</option>
							<option value="hover">Hover</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Style </span>
						<select class="sidebar-style-option form-control input-sm">
							<option value="default" selected="selected">Default</option>
							<option value="light">Light</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Sidebar Position </span>
						<select class="sidebar-pos-option form-control input-sm">
							<option value="left" selected="selected">Left</option>
							<option value="right">Right</option>
						</select>
					</div>
					<div class="theme-option">
						<span>
						Footer </span>
						<select class="page-footer-option form-control input-sm">
							<option value="fixed">Fixed</option>
							<option value="default" selected="selected">Default</option>
						</select>
					</div>
				</div>
			</div>
			<!-- END STYLE CUSTOMIZER -->
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Detail Pemesanan 
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
						<a href="#">Lihat Pesanan</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Detail Pesanan</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-shopping-cart"></i>Detail Pesanan
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="tabbable">
								<ul class="nav nav-tabs nav-tabs-lg">
									<li class="active">
										<a href="#tab_1" data-toggle="tab">
										Details </a>
									</li>
									
									
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab_1">
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="portlet yellow-crusta box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Detail Pesanan
														</div>
														<!--<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>-->
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																 Nomor Detil Pesanan:
															</div>
															<?php  ?>
															<div class="col-md-7 value">
																 <?php 
																 echo $transaksi->id_transaksi; ?> 
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Tanggal Transaksi
															</div>
															<div class="col-md-7 value">
																 <?php echo $transaksi->tgl_transaksi; ?> 
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Status Pemesanan
															</div>
															<div class="col-md-7 value">
																<span class="label label-success">
																<?php echo $transaksi->status; ?>  </span>
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Total Transaksi
															</div>
															<div class="col-md-7 value">
																 <?php echo $transaksi->total_bayar; ?> 
															</div>
														</div>
														
													</div>
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="portlet blue-hoki box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Informasi Pengiriman
														</div>
														<!--<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>-->
													</div>
													<div class="portlet-body">
														<div class="row static-info">
															<div class="col-md-5 name">
																 Nama Pembeli:
															</div>
															<div class="col-md-7 value">
																 <?php echo $transaksi->nama_pengiriman; ?> 
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Alamat Pengiriman
															</div>
															<div class="col-md-7 value">
																 <?php echo $transaksi->alamat_pengiriman; ?> 
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Kota:
															</div>
															<div class="col-md-7 value">
																 <?php echo $transaksi->nama_kota; ?> 
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Kode pos:
															</div>
															<div class="col-md-7 value">
																 <?php echo $transaksi->kodepos; ?> 
															</div>
														</div>
														<div class="row static-info">
															<div class="col-md-5 name">
																 Nomor Telephone:
															</div>
															<div class="col-md-7 value">
																 <?php echo $transaksi->no_telp; ?> 
															</div>
														</div>

													</div>
													
												</div>
											</div>
										</div>
										
											
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<div class="portlet grey-cascade box">
													<div class="portlet-title">
														<div class="caption">
															<i class="fa fa-cogs"></i>Produk Yang Dipesan
														</div>
														<!--<div class="actions">
															<a href="javascript:;" class="btn btn-default btn-sm">
															<i class="fa fa-pencil"></i> Edit </a>
														</div>-->
													</div>
													<div class="portlet-body">
														<div class="table-responsive">
															<table class="table table-hover table-bordered table-striped">
															<thead>
															<tr>
																<th>
																	 Nama Produk
																</th>
																<th>
																	 Harga
																</th>
																<th>
																	 Jumlah Beli
																</th>
																<th>
																	 Total
																</th>
																<th>
																	 Status
																</th>
															</tr>
															</thead>
															<tbody>
															<?php foreach ($details as $detail){ ?>

															<tr>
																<td>
																	<a href="javascript:;">
																		<?php echo $detail->nama_produk; ?>
																	</a>
																</td>
																<td>
																	<?php echo $detail->harga_produk; ?>
																</td>
																<td>
																	 <?php echo $detail->jumlah; ?>
																</td>
																<td>
																	 <?php echo ($detail->harga_produk * $detail->jumlah); ?>
																</td>
																
																<td>
																	<?php if($detail->status_kirim == "Pending") {
																	 echo "<form action='". base_url()."manage/pesanan/update_data/".$detail->id_det_transaksi."' method='post'>

							           						 			<select name='order_status' class='form-control form-filter input-sm' onchange='this.form.submit()'>
																			
																			<option value='Pending' selected>Pending</option>
																			
																			<option value='Terkirim' >Terkirim</option>
																		</select>
																	</form>";
																	} else if ($detail->status_kirim == "Terkirim"){
																		echo $detail->status_kirim;

																		if ($detail->no_resi == null) {
																		echo "<form action='". base_url()."manage/pesanan/update_resi/".$detail->id_det_transaksi."' method='post'>


							           						 			<input type='text' name='resi' placeholder='No. Resi' />
							           						 			<button type='submit' >Simpan</button>
																	</form>";
																}
																	}?>
																</td>

															</tr>

															<?php } ?>
															
															</tbody>
															</table>
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
					<!-- End: life time stats -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->
	
