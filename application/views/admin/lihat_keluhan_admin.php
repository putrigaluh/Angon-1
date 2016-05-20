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
			Daftar Keluhan
			</h3><br>
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
						<a href="#">Daftar Keluhan</a>
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
								<i class="fa fa-shopping-cart"></i>Daftar Keluhan
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
										 No. Keluhan
									</th>
									<th width="5%">
										 No. Order
									</th>
									<th width="15%">
										 Nama Pembeli
									</th>
									<th width="15%">
										 Barang
									</th>
									<th width="20%">
										 Isi Keluhan
									</th>
									<th width="20%">
										 Isi Balasan
									</th>

									<?php if ($this->session->userdata('role') == 'keluhan') { ?>
									<th width="10%">
										 Aksi
									</th>
									<?php }
									?>
									
								</tr>
								
								</thead>

								<tbody>
									<?php
										foreach($ka as $keluhanadmin){
									?>
											<tr>
												<td><?php echo $keluhanadmin->id_keluhan; ?></td>
		           						 		<td><?php echo $keluhanadmin->id_transaksi; ?></td>  
		           						 		<td><?php echo $keluhanadmin->nama_user; ?></td>
		           						 		<td><?php echo $keluhanadmin->nama_produk; ?></td>
		           						 		<td><?php echo $keluhanadmin->isi_keluhan; ?></td>
		           						 		<td>
		           						 		<?php if ($keluhanadmin->isi_balasan != null){
		           						 			echo $keluhanadmin->isi_balasan; 
		           						 		} else {
		           						 			echo "-";
		           						 		} ?>
		           						 		</td>
		           						 		
		           						 		<?php if ($this->session->userdata('role') == 'keluhan') { ?>
		           						 		<td><a href="<?php echo base_url('admin/keluhan/balas/'.$keluhanadmin->id_keluhan)?>"><button class="btn btn-sm green filter-submit margin-bottom" >Balas</button></a></td> 
		           						 		<?php }
									?>
		           						 		
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