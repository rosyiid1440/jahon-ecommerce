<?php

class Home extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('Dbbarang');
	}

    public function index(){
        $data["products"] = $this->Dbbarang->getAll('barang');
        $this->load->view('Home/Header_h');
        $this->load->view('Home/V_home',$data);
        $this->load->view('Home/Footer_h');
    }

    public function keranjang(){
        $this->load->view('Home/Header_h');
        $this->load->view('Home/V_home');
        $this->load->view('Home/Footer_h');
    }

    public function viewpost($id){
        $table = 'barang';
        $where = array(
            'id' => $id
            );
        $data["products"] = $this->Dbbarang->getbarangid($table,$where);
        $this->load->view('Home/Post/Viewpost',$data);
    }

}

?>