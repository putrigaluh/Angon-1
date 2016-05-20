
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
			Daftar Produk 
			</h3>
			<br><br>
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
						<a href="#">Daftar Produk</a>
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
								<i class="fa fa-gift"></i>Produk Peternakan
								<br>
								<br>
								<a href=" <?php echo base_url() ?>manage/produk"> <button class="btn btn-sm red filter-submit margin-bottom" ><i class=""></i>Tambah Produk</button></a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-container">
								<div class="table-actions-wrapper">
									<span>
									</span>
									<select class="table-group-action-input form-control input-inline input-small input-sm">
										<option value="">Select...</option>
										<option value="publish">Publish</option>
										<option value="unpublished">Un-publish</option>
										<option value="delete">Delete</option>
									</select>
									<button class="btn btn-sm yellow table-group-action-submit"><i class="fa fa-check"></i> Submit</button>
								</div>
								<table class="table table-striped table-bordered table-hover" id="datatable_orders" >
								<thead >
								<tr role="row" class="heading">
									<th width="12%" align="Center">
										Kategori Produk
									</th>
									<th width="12%">
										 Nama&nbsp;Produk
									</th>
									<th width="3%">
										 Harga&nbsp;Produk
									</th>
									<th width="5%">
										 Berat
									</th>
									<th width="5%">
										 Stok
									</th>
									<th width="15%">
										 Deskripsi
									</th>
									<th width="15%">
										 Aksi
									</th>
								</tr>
								<?php
									foreach ($p as $produk) {
									?>
								<tr >
									<td>
										<?php print $produk->kategori_produk; ?>
									</td>
									<td>
										<?php print $produk->nama_produk; ?>
									</td>
									<td>
										<?php print $produk->harga_produk; ?>
									</td>
									<td>
										<?php print $produk->berat;?>
									</td>
									<td>
										<?php print $produk->stok; ?>
									</td>
									<td>
										<?php print $produk->deskripsi; ?>
									</td>
									<td>
										<a href=" <?php echo base_url() ?>manage/produk/edit/<?php  echo 
											$produk->id_produk  ?> "> <button class="btn btn-sm green filter-submit margin-bottom" ><i class=""></i>Edit </button></a>
											

										<a href=" <?php echo base_url() ?>manage/produk/delete/<?php  echo 
											$produk->id_produk  ?> "> <button class="btn btn-sm green filter-submit margin-bottom" ><i class=""></i>Hapus </button></a>
										

										<a href=" <?php echo base_url() ?>ecomerce/produk/detail/<?php  echo 
											$produk->id_produk  ?> "> <button class="btn btn-sm green filter-submit margin-bottom" ><i class=""></i>Lihat</button></a>
									</td>
								</tr>
								<?php } ?>
								</thead>
								<tbody>
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