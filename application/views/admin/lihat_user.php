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
			Users <small>user listing</small>
			</h3><br><br>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Manage User</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">Lihat User</a>
					</li>
				</ul>
			
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<!-- <div class="note note-danger">
						<p>
							 NOTE: The below datatable is not connected to a real database so the filter and sorting is just simulated for demo purposes only.
						</p>
					</div> -->
					<!-- Begin: life time stats -->
					<div class="portlet">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Users
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
								<table class="table table-striped table-bordered table-hover" id="datatable_user">
								<thead>
								<tr role="row" class="heading">
									
									<th width="10%">
										 ID
									</th>
									<th width="15%">
										 Nama&nbsp;User
									</th>
									<th width="15%">
										 Kategori User
									</th>
									<th width="10%">
										 Alamat
									</th>
									<th width="15%">
										 Kota
									</th>
									<th width="10%">
										 Username
									</th>
									<th width="10%">
										 Password
									</th>
									<th width="10%">
										 Actions
									</th>
								</tr>
								<tr role="row" class="filter">
									
								
								</tr>
								</thead>
								<tbody>
									
           							<?php
									foreach ($u as $user) {
									?>
										<td><?php echo $user->id_user; ?></td>
        								<td><?php echo $user->nama_user; ?></td>
        								<td><?php echo $user->kategori_user; ?></td>
        								<td><?php echo $user->alamat_user; ?></td>
        								<td><?php echo $user->nama_kota; ?></td>
										<td><?php echo $user->username; ?></td>
										<td><?php echo $user->password; ?></td>
									
									<td>
										<div class="margin-bottom-5">
											<?php print "<a href=" . $this->config->base_url() . 'admin/user/edit/' . $user->id_user . "><button class='btn btn-sm yellow filter-submit margin-bottom ><i class=''></i>Edit </button></a>" ?> 

										</div>
										<div class="margin-bottom-5">
											<?php print "<a href=" . $this->config->base_url() . 'admin/user/delete/' . $user->id_user . "><button class='btn btn-sm red filter-submit margin-bottom ><i class=''></i>Delete </button></a>" ?>
										</div>
									</td>
								</tr>
								<?php } ?>
									   
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