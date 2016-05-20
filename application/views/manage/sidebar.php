<div class="clearfix">
</div>
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
							<a  class="btn submit"><i></i></a>
							</span>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<!-- <a href="javascript:;"> -->
					<a href="<?php echo base_url(); ?>ecomerce/produk">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
					</a>
					
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-basket" ></i>
					<span class="title">Manage Penjualan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url(); ?>manage/produk">
							<i class="icon-pencil"></i>
							Input Produk</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>manage/produk/lihat_produk">
							<i class="icon-handbag"></i>
							Lihat Produk</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>manage/pesanan">
							<i class="icon-basket"></i>
							Lihat Pesanan</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>manage/produk/lihat_review">
							<i class="icon-basket"></i>
							Lihat Review</a>
						</li>
						
						
						
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Saldo</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url(); ?>manage/tarikdana/select_saldo">
							<i class="icon-pencil"></i>
							Lihat Saldo</a>
						</li>
						<li>
							<a href="<?php echo base_url(); ?>manage/tarikdana/lihat_dana">
							<i class="icon-pencil"></i>
							Tarik Dana</a>
						</li>
												
					</ul>
				</li>

				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Keluhan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						<li>
							<a href="<?php echo base_url(); ?>admin/keluhan/lihat_keluhan_penjual">
							<i class="icon-pencil"></i>
							Lihat Keluhan</a>
						</li>
												
					</ul>
				</li>

				
				<?php if($this->session->userdata('kategori_user')=='Peternak') {
				echo "<li>";
					echo "<a href= ". base_url() ."ecomerce/produk>";
					echo "<i class='icon-basket'></i>";
					echo "<span class='title'>Beli Produk</span>";
					echo "<span class='arrow' ></span>";
					echo "</a>";
				echo "</li>";
				
				}
				?>
			</ul>
			
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->