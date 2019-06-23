<?php
class Keranjang extends CI_Controller{
    public function index(){
        $this->load->view('Home/Header_h');
        $this->load->view('V_keranjang');
        $this->load->view('Home/Footer_h');
    }
}
?>