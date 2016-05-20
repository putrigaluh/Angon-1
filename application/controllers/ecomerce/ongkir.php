<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ongkir extends MY_Controller {

public function __construct() {
    parent::__construct();
 }

 public function get_city(){
    require_once '../libraries/REST_Ongkir.php';
    
    $rest = new REST_Ongkir(array(
        'server' => 'http://api.ongkir.info/'
    ));
    
    $result = $rest->post('city/list', array(
        'query' 	=> 'band', 
        'type' 	=> 'origin',
        'courier' 	=> 'jne',
        'API-Key' 	=> '53f9a309a0f9994922ef59be3b3ccd2b'
    ));
    
    try
    {
        $status = $result['status'];
        
        // Handling the data
        if ($status->code == 0)
        {
            $cities = $result['cities'];
            
            foreach ($cities->item as $item)
            {
                echo 'Kota: ' . $item . '<br />';
            }
        }
        else
        {
            echo 'Tidak ditemukan kota yang diawali "band"';	
        }
        
    }
    catch (Exception $e)
    {
        echo 'Processing error.';
    }
}

public function get_cost($dari,$ke,$berat)
{
    require_once 'library_location/REST_Ongkir.php';
    
    $rest = new REST_Ongkir(array(
        'server' => 'http://api.ongkir.info/'
    ));
    
    $result = $rest->post('cost/find', array(
        'from' 	=> $dari, 
        'to' 		=> $ke,
        'weight'	=> $berat, 
        'courier'	=> 'jne',
        'API-Key' 	=> '53f9a309a0f9994922ef59be3b3ccd2b'
    ));
    
    try
    {
        $status = $result['status'];
        
        // Handling the data
        if ($status->code == 0)
        {
            $prices = $result['price'];
            $city	= $result['city'];
            
            echo 'Ongkos kirim dari ' . $city->origin . ' ke ' . $city->destination . '<br /><br />';
            
            foreach ($prices->item as $item)
            {
                echo 'Layanan: ' . $item->service . ', dengan harga : Rp. ' . $item->value . ',- <br />';
            }	
        }
        else
        {
            echo 'Tidak ditemukan jalur pengiriman dari surabaya ke jakarta';
        }
        
    }
    catch (Exception $e)
    {
        echo 'Processing error.';
    }
}
}
?>