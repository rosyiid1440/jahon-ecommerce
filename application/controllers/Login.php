<?php
class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Dbanggota');
    }

    public function index(){
        $this->load->view('Home/Header_h');
        $this->load->view('V_login');
        $this->load->view('Home/Footer_h');
    }

    public function cekLogin(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $whereadmin = array(
            'username' => $username,
            'password' => $password,
            'status' => 'penduwe'
            );
        $whereanggota = array(
            'username' => $username,
            'password' => $password,
            'status' => 'anggota'
            );    
        $cek = $this->Dbanggota->cekLogin("anggota",$whereadmin)->num_rows();
        if($cek > 0){

            $data_session = array(
                'nama' => $username,
                'status' => "login"
                );
            
            $this->session->set_userdata($data_session);
            redirect(base_url("admin"));
   
        }else if($this->Dbanggota->cekLogin("anggota",$whereanggota)->num_rows() > 0){
            redirect(base_url());
        }else{
            $this->session->set_flashdata('salah', 'Username atau Password salah');
            redirect(base_url('login'));
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
?>