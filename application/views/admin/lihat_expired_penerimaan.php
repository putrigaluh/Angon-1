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
			Daftar Penerimaan Expired
			</h3><br><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Manage Dana</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Request Tarik Dana</a>
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
								<i class="fa fa-shopping-cart"></i>Order Listing
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Select...</option>
										<option value="Cancel">Cancel</option>
										<option value="Cancel">Hold</option>
										<option value="Cancel">On Hold</option>
										<option value="Close">Close</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
							

								<table class="table table-striped table-bordered table-hover" id="datatable_orders">
								<thead>
								<tr role="row" class="heading">
									
									<th width="5%">
										 Id Transaksi
									</th>
									<th width="15%">
										 Tanggal Expired
									</th>
									<!-- <th width="15%">
										 Nomor Rekening
									</th>
									<th width="10%">
										 Nama Akun
									</th>
									<th width="10%">
										 Nama Bank
									</th> -->
									<th width="10%">
										 Status
									</th>
									
								</tr>
								
								</thead>
								<tbody>
									<?php
										foreach($e as $expired){
									?>
											<tr>
												<td><?php echo $expired->id_transaksi; ?></a></td>
		           						 		<td><?php echo $expired->tgl_expired; ?></td>
		           						 		<!-- <td><?php echo $expired->no_rekening; ?></td>
		            							<td><?php echo $expired->nama_akun; ?></td>
		          						  		<td><?php echo $expired->nama_bank; ?></td> -->
		           						 		<td>
		           						 		<?php 
		           						 		if($expired->status_kirim == "Terkirim") {
														 echo "<form action='". base_url()."ecomerce/konfirmasi/update_status/".$expired->id_det_transaksi."' method='post'>

				           						 			<select name='status' class='form-control form-filter input-sm' onchange='this.form.submit()'>
																
																<option value='Terkirim' selected>Terkirim</option>
																
																<option value='Diterima' >Diterima</option>
															</select>
														</form>";
														} else if ($expired->status_kirim == "Diterima"){
															echo $expired->status_kirim;		
														}
													?>
		           						 			
		           						 		</td>
												
		       							 	</tr>
		       							 	<?php 
		       							}
		       						?>
									   
								</tbody>
								</table>
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