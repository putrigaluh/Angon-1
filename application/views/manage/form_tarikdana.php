
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
			Form Tarik Dana 
			</h3><br><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Saldo</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Form Tarik Dana</a>
					</li>
				</ul>
				
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
					<div class="portlet box purple">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Form Tarik Dana
							</div>
							
						</div>
						<div class="portlet-body form">
							<!-- BEGIN FORM-->
							<form action="<?php echo base_url() ?>manage/tarikdana/tarik_dana" method="post" id="form_sample_1" class="form-horizontal">
								<div class="form-body">
								<?php 
								$error = $this->session->flashdata('error');
								if ($error != "") { ?>
									<div class="alert alert-danger">
										<button class="close" data-close="alert"></button>
										<?php echo $error ?>
									</div>
								<?php } ?>
									<div class="form-group">
										<label class="control-label col-md-3">Dana Tersedia <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
										<!-- <pre> -->
											<input type="text" disabled="" name="dana" data-required="1" class="form-control" value="<?php echo $d->saldo; ?>" />
											<!-- </pre> -->
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Jumlah Penarikan <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input name="jumlah-penarikan" type="text" class="form-control"/>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3">Nomor Rekening <span class="required">
										* </span>
										</label>

												<!-- <pre>
												<?php //var_dump($r) ?>
												</pre> -->
										<div class="col-md-4">
											<select class="form-control" name="selectbank" id="selectboxbank">
												<option value="">Pilih Bank</option>
												<?php foreach ($r as $rekening) { ?>
													<option value="<?php echo $rekening->id_rekening ?>"><?php echo $rekening->no_rekening.' a/n '.$rekening->nama_akun.' -- '.$rekening->nama_bank ?></option>
												<?php } ?>
												<option value="tambah">*Tambah No. Rekening</option>
											</select>
										</div>
									</div>

									<div class="form-group tambah" style="display: none;">
										<label class="control-label col-md-3">Nama Akun <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input name="nama-akun" type="text" class="form-control"/>
										</div>
									</div>

									<div class="form-group tambah" style="display: none;">
										<label class="control-label col-md-3">Nomor Rekening <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input name="nomor-rekening" type="text" class="form-control"/>
										</div>
									</div>

									<div class="form-group tambah" style="display: none;">
										<label class="control-label col-md-3">Nama Bank <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<select class="form-control" name="nama-bank">
												<option value="">Pilih Bank</option>
												<option value="Bank Mandiri">Bank Mandiri</option>
												<option value="Bank Central Asia">Bank Central Asia</option>
												<option value="Bank Negara Indonesia">Bank Negara Indonesia</option>
												<option value="Bank Rakyat Indonesia">Bank Rakyat Indonesia</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-3">Kata Sandi <span class="required">
										* </span>
										</label>
										<div class="col-md-4">
											<input name="kata-sandi" type="password" class="form-control"/>
										</div>
									</div>
									
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn btn-success uppercase ">Submit</button>
											<button type="button" class="btn default">Cancel</button>
										</div>
									</div>
								</div>
							</form>
							<!-- END FORM-->
						</div>
					</div>
					<!-- END VALIDATION STATES-->
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN VALIDATION STATES-->
			
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

<script type="text/javascript">
	$(document).ready(function(){
		$('#selectboxbank').change(function() {
		    if ($(this).val() === 'tambah') {
		        $('.tambah').css({'display': 'block'});
		    } else {
		    	$('.tambah').css({'display': 'none'});
		    }
		});
	});
</script>

							<script type="text/javascript">
							// function submit(){
							// 	$("#form_sample_1").submit();
							// }
							</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>