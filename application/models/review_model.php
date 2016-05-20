<?php

class review_model extends CI_Model {

      public function detail($id_produk){
        $this->db->join('user', 'produk.id_user = user.id_user');
        $this->db->where('id_produk',$id_produk);
        return $this->db->get('produk')->row();
    }

      function tbh_review($id_produk){
        $id_user = $this->session->userdata('id_user');
        $insert_review = array(
            'id_produk' => $id_produk,
            'id_user' => $id_user,
            'review' => $this->input->post('isi_review'),
            'rating' => $this->input->post('rating'),
        );
          $this->db->set('tgl', 'NOW()', FALSE);
        $insert = $this->db->insert('review', $insert_review);
        return $insert;
    }

     function tmpil_review($id) {
        
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('user','review.id_user = user.id_user');
        $this->db->where('review.id_produk', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function con($id){

          $this->db->select('*');
           $this->db->from('review');
             $this->db->join('user','review.id_user = user.id_user');
        $this->db->where('review.id_produk', $id);
        $num_results = $this->db->count_all_results();
         return $num_results;
    }


      function rat($id){
        $this->db->select('avg(rating) rat');
       
        $this->db->where('review.id_produk', $id);
        $query = $this->db->get('review')->row();
        return $query->rat;
    }

     function rat2(){


        $this->db->select('avg(rating) rat');
        $query = $this->db->get('review')->row();
        return $query->rat;
    }

}
?>