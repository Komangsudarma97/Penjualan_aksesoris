<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frontend extends CI_Controller{
    function  __construct() { 
        parent :: __construct();
        $this->load->model('M_latihan');
    }
    function Home($page=0)
    {
        $data['title']="Latihan Table";
        $data['meta']="Ini adalah Produk Untuk Latihan Html";
        $config['total_rows']=$this->M_latihan->page_produk();
        $config['per_page']=20;
        $config['base_url']=site_url('Frontend/home');
        $data['barang_id']=$this->M_latihan->get_produk($config['per_page'],$page);
        $this->pagination->initialize($config);
        $this->load->view('template_frontend', $data);
    }
    
    function keranjang()
    {
        $this->load->view('keranjang');
    }

    function checkout()
    {
        $this->load->view('checkout');
    }

    function category()
    {
        $this->load->view('category');
    }

    function kontak()
    {
        $this->load->view('kontak');
    }
}?>