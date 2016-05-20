<body>

	<div id="mainContainer" class="clearfix">
		<div class="container">
			<div class="row">
				<aside class="span3">
					<div class="categories">
						<div class="titleHeader clearfix">
							<h3>Kategori</h3>
						</div><!--end titleHeader-->
						
						<ul class="unstyled">
							<?php if($this->session->userdata('kategori_user') =='Pengguna Hasil Ternak'){
							echo "<li><a class='invarseColor active' href='#'>Ternak</a>
								<ul class='submenu'>";
									 foreach($dr as $rw) { 
										echo "<li><a class='invarseColor' href='". base_url()."ecomerce/produk/cari_by_kategori/".$rw->id_kategori_produk."'>".
										$rw->kategori_produk."</a></li>";
									}
							echo "</ul>
							</li>";
							}
							else if($this->session->userdata('kategori_user') =='Peternak'){
							  foreach($kat as $row) { 
              						echo "<li value=''><a class='invarseColor' href='". base_url()."ecomerce/produk/cari_by_kategori/".$row->id_kategori_produk."'>".
              								$row->kategori_produk.
              								'</a></li>';
					            }
					        }
					        else if($this->session->userdata('kategori_user') == ''){
					        	echo "<li><a class='invarseColor active' href='#'>Ternak</a>
								<ul class='submenu'>";
									 foreach($dr as $rw) { 
										echo "<li><a class='invarseColor' href='". base_url()."ecomerce/produk/cari_by_kategori/".$rw->id_kategori_produk."'>".
										$rw->kategori_produk."</a></li>";
									}
								echo "</ul>
								</li>";
							 	foreach($kat as $row) {  	
              						echo "<li value=''><a class='invarseColor' href='". base_url()."ecomerce/produk/cari_by_kategori/".$row->id_kategori_produk."'>".
              								$row->kategori_produk.
              								'</a></li>';
					            }
					        }
					         ?>
							
						</ul>
					</div><!--end categories-->