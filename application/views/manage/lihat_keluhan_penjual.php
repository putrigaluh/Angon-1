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
									<th width="10%">
										 Aksi
									</th>
									
								</tr>
								
								</thead>

								<tbody>
									<?php
										foreach($kp as $keluhanpenjual)	{
									?>
											<tr>
												<td><?php echo $keluhanpenjual->id_keluhan; ?></td>
		           						 		<td><?php echo $keluhanpenjual->id_transaksi; ?></td>  
		           						 		<td><?php echo $keluhanpenjual->nama_user; ?></td>
		           						 		<td><?php echo $keluhanpenjual->nama_produk; ?></td>
		           						 		<td><?php echo $keluhanpenjual->isi_keluhan; ?></td>
		           						 		<td>
		           						 		<?php if ($keluhanpenjual->isi_balasan != null){
		           						 			echo $keluhanpenjual->isi_balasan; 
		           						 		} else {
		           						 			echo "-";
		           						 		} ?>
		           						 		</td>
		           						 		<td><a href="<?php echo base_url('admin/keluhan/balas_penjual/'.$keluhanpenjual->id_keluhan)?>"><button class="btn btn-sm yellow filter-submit margin-bottom" >Balas</button></a></td>
		           						 		
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