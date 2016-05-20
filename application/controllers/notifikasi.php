<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notifikasi extends CI_Controller {
	
	function __construct() {
		parent::__construct();
        $this->load->model('notifikasi_model');
	}

    //notif untuk admin
    public function get() {
        $notifikasi = $this->notifikasi_model->select_notif_admin();
        foreach ($notifikasi as $n) { ?>
        	<li>
                <a id="notif<?php echo $n->id_notif ?>">              
                    <span class="time"><?php echo $n->waktu ?></span>
                    <span class="details">
                        <span class="label label-sm label-icon label-success">
                            <i class="fa fa-plus"></i>
                        </span>
                        <?php echo $n->isi_pesan ?> 
                    </span>
                </a>
            </li>
            
            <script>
            $("#notif<?php echo $n->id_notif ?>").click(function(){
                $.ajax({
                    url: "<?php echo base_url() ?>notifikasi/ubah_status/admin/<?php echo $n->id_notif ?>",
                    cache: false,
                    success: function(msg){
                        location.href = '<?php echo base_url(). $n->link ?>';
                    }
                });
            });
            </script>
            <?php
        }
    }

    public function hitung() {
        echo $this->notifikasi_model->hitung_notif_admin();
    }

//notif untuk penjual
    public function get_penjual() {
        $notifikasi = $this->notifikasi_model->select_notif_penjual();
        foreach ($notifikasi as $n) {               
            ?>
            <li>
                <a id="notif<?php echo $n->id_notif ?>">              
                    <span class="time"><?php echo $n->waktu ?></span>
                    <span class="details">
                        <span class="label label-sm label-icon label-success">
                            <i class="fa fa-plus"></i>
                        </span>
                        <?php echo $n->isi_pesan ?> 
                    </span>
                </a>
            </li>
            
            <script>
            $("#notif<?php echo $n->id_notif ?>").click(function(){
                $.ajax({
                    url: "<?php echo base_url() ?>notifikasi/ubah_status/penjual/<?php echo $n->id_notif ?>",
                    cache: false,
                    success: function(msg){
                        location.href = '<?php echo base_url(). $n->link ?>';
                    }
                });
            });
            </script>
            <?php
        }
    }

   
    public function hitung_penjual() {
        echo $this->notifikasi_model->hitung_notif_penjual();
    }

    public function ubah_status(){
        $tabel = $this->uri->segment(3);
        $id_notif = $this->uri->segment(4);
        $this->notifikasi_model->update_sudahbaca($tabel, $id_notif);
    }

}
?>