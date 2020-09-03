<?php
Class M_latihan extends CI_Model{

    function get_produk($limit, $page){
        $this->db->limit($limit, $page);
        $data=$this->db->get('barang')->result_array();
        return $data;
    }

    function page_produk(){
        $data=$this->db->get('barang')->num_rows();
        return $data;
    }
}