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
			Konfirmasi Pembayaran
			</h3><br>
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
						<a href="#">Konfirmasi Pembayaran</a>
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
								<i class="fa fa-shopping-cart"></i>Konfirmasi Pembayaran

							</div>

						</div>
							
					</div>

					<div class="portlet-body">
							
							<div class="table-container">
								<div class="table-actions-wrapper">
									
								</div>
								
								<table class="table table-striped table-bordered table-hover" id="datatable_orders">
								<thead>
								<tr role="row" class="heading">
									
									<th hidden="" width="50px">
										 Id Konfirmasi
									</th>
									<th width="30px">
										 id transaksi
									</th>
									<th width="50px%">
										 Tanggal
									</th>
									<th width="100px">
										 Total
									</th>
									<th width="350px">
										 Nama Bank
									</th>
									<th width="250px">
										 Nama Akun
									</th>
									<th width="300px">
										 Nomor Rekening
									</th>
									<th width="400px">
										 Status
									</th>
									<th width="200px">
										 Aksi
									</th>
									
								</tr>

								<tr role="row" class="filter">
								<form action="<?= $this->config->base_url(); ?>ecomerce/konfirmasi_pembayaran/menampilkan_pembayaran" method="get">
									<td>
									</td>
									
									<td>
										<div class="input-group date date-picker margin-bottom-5" data-date-format="yyyy-mm-dd">
											<input name="tanggal" type="date" class="reset form-control" value="<?php echo ($this->input->get('tanggal') != '') ? $this->input->get('tanggal') : '' ?>"/>
											
										</div>
									</td>
									<td>
										
									</td>
									<td>
										<select name="nama_bank" class="reset form-control form-filter input-sm">
											<option disabled="" selected="" value="">Pilih...</option>
											<option value="Bank Mandiri" <?php echo ($this->input->get('nama_bank') == 'Bank Mandiri') ? 'selected' : '' ?>>Bank Mandiri</option>
											<option value="Bank Central Asia" <?php echo ($this->input->get('nama_bank') == 'Bank Central Asia') ? 'selected' : '' ?>>Bank Central Asia</option>
											<option value="Bank Negara Indonesia" <?php echo ($this->input->get('nama_bank') == 'Bank Negara Indonesia') ? 'selected' : '' ?>>Bank Negara Indonesia</option>
											<option value="Bank Rakyat Indonesia" <?php echo ($this->input->get('nama_bank') == 'Bank Rakyat Indonesia') ? 'selected' : '' ?>>Bank Rakyat Indonesia</option>
										</select>
									</td>

									<td>
										
									</td>
									<td>
										<td>
										<select name="status" class="reset form-control form-filter input-sm">
											<option value="" disabled="" selected="">Pilih...</option>
											<option value="Terbayar" <?php echo ($this->input->get('status') == 'Terbayar') ? 'selected' : '' ?>>Terbayar</option>
											<option value="Belum Verifikasi"<?php echo ($this->input->get('status') == 'Belum Verifikasi') ? 'selected' : '' ?>>Belum Verifikasi</option>
										</select>
									</td>
									
									</td>
									<td>
										<div class="margin-bottom-5">
											<button class="btn btn-sm yellow filter-submit margin-bottom"><i class="fa fa-search"></i> Search</button>
										</div>
										<button class="btn btn-sm red filter-cancel" id="button-reset"><i class="fa fa-times"></i> Reset</button>

										<script type="text/javascript">
											$('#button-reset').click(function(){
												$('.reset').val('');
											})
										</script>
									</td>
									</form>
								</tr>
								
								</thead>

								<tbody>
									<?php foreach($b as $bayar){ ?>
										<tr>
												<td hidden=""><?php echo $bayar->id_konfirmasi_pembayaran; ?></td>
		           						 		<td><?php echo $bayar->id_transaksi; ?></td>
		           						 		<td><?php echo $bayar->tgl; ?></td>
		           						 		<td><?php echo $bayar->total_bayar; ?></td>
		           						 		<td><?php echo $bayar->nama_bank; ?></td>
		          						  		<td><?php echo $bayar->nama_akun; ?></td>
		           						 		<td><?php echo $bayar->no_rekening; ?></td>
		           						 		<td style=" vertical-align: middle;">
		           						 			<?php
		           						 			if ($this->session->userdata('role') == 'dana'){
													 if($bayar->status == "Belum Verifikasi") {
														 echo "<form action='". base_url()."ecomerce/konfirmasi_pembayaran/update_status/".$bayar->id_transaksi."' method='post'>

				           						 			<select name='req_status' class='form-control form-filter input-sm' onchange='this.form.submit()'>
																
																<option value='Belum Verifikasi' selected>Belum Verifikasi</option>
																
																<option value='Terbayar' >Terbayar</option>
															</select>
														</form>";
														} else if ($bayar->status == "Terbayar"){
															echo '<center><span class="label label-success" style="font-size: medium;">'.$bayar->status.'</span></center>';
														}
													}
														else {
														echo $bayar->status;
													}
													?>
		           						 		</td>
		           						 		<td></td>
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