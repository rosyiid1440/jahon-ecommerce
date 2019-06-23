<?php
class Register extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Dbanggota');
    }

    public function index(){
        $this->load->view('Home/Header_h');
        $this->load->view('V_register');
        $this->load->view('Home/Footer_h');
    }

   public function input(){
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $status = $this->input->post('status');
    
    $data = array(
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'status' => $status
    );

    $this->Dbanggota->input('anggota',$data);
    redirect(base_url('Login'));
   }
}
?>