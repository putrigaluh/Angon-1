<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<!-- END SIDEBAR TOGGLER BUTTON -->
				</li>
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<form class="sidebar-search " action="extra_search.html" method="POST">
						<a href="javascript:;" class="remove">
						<i class="icon-close"></i>
						</a>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
							<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					
				</li>
				<?php if($this->session->userdata('role') == 'super') { ?>

				
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Manage Penjualan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url(); ?>admin/produk/lihat_produk">
							<i class="icon-handbag"></i>
							Lihat Produk</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/pesanan_admin/index">
							<i class="icon-basket"></i>
							Lihat Pesanan</a>
						</li>
						
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-pencil"></i>
					<span class="title">Manage User</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>admin/user/index">
							<i class="icon-home"></i>
							Lihat User Terdaftar</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-pencil"></i>
					<span class="title">Konfirmasi Penerimaan Barang</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>ecomerce/konfirmasi/select_expired">
							<i class="icon-home"></i>
							Konfirmasi Penerimaan Expired</a>
						</li>
					</ul>
				</li>

				<?php }  ?>
				<?php
				
				if($this->session->userdata('role') == 'dana' || $this->session->userdata('role') == 'super') { 

				?>

				<li>
					<a href="javascript:;">
					<i class="icon-pencil"></i>
					<span class="title">Request Tarik Dana</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>manage/tarikdana/menampilkan_request">
							<i class="icon-home"></i>
							Lihat Request Tarik Dana</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-pencil"></i>
					<span class="title">Request Return Dana</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>manage/return_dana/select_returndana">
							<i class="icon-home"></i>
							Lihat Request Return Dana</a>
						</li>
					</ul>
				</li>
				
				<li>
					<a href="javascript:;">
					<i class="icon-pencil"></i>
					<span class="title">Konfirmasi Pembayaran</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>ecomerce/konfirmasi_pembayaran/menampilkan_pembayaran">
							<i class="icon-home"></i>
							Lihat Konfirmasi Pembayaran</a>
						</li>
					</ul>
				</li>

				<?php }  ?>
				<?php

				if($this->session->userdata('role') == 'keluhan' || $this->session->userdata('role') == 'super') {

				?>

				<li>
					<a href="javascript:;">
					<i class="icon-pencil"></i>
					<span class="title">Keluhan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">

						<li>
							<a href="<?php echo base_url(); ?>admin/keluhan/lihat_keluhan_admin">
							<i class="icon-home"></i>
							Lihat Keluhan</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>admin/keluhan/lihat_expired_keluhan">
							<i class="icon-home"></i>
							Lihat Keluhan Expired</a>
						</li>
					</ul>
				</li>

				<?php } ?>
				
			</ul>
			
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->