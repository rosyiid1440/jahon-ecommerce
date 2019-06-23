<?php
class Admin extends CI_Controller{
    function __construct(){
		parent::__construct();
		$this->load->model('Dbanggota');
		$this->load->model('Dbbarang');
		$this->load->library('upload');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

    public function index(){
    $this->load->view('admin/Home');
	}
	
	public function barang(){
		$data["products"] = $this->Dbbarang->getkategori1('kategori1');
		$this->load->view('admin/post/home',$data);
	}

	public function getkategori2(){
		$nama = $this->input->post('kategori1_id');
		if($this->input->post('kategori1_id'))
		{
			$table = 'kategori2';
			$where = array(
            'nama_kategori1' => $nama
            );
			echo $this->Dbbarang->getkategori2($table,$where);
		}
	}

	public function inputbarang(){
		$config['upload_path'] = './assets/img/post/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/post/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 710;
                $config['new_image']= './assets/img/post/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
				$nama = $this->input->post('nama');
				$deskripsi = $this->input->post('deskripsi');
				$harga = $this->input->post('harga');
				$kategori1 = $this->input->post('kategori1');
				$kategori2 = $this->input->post('kategori2');
				
				
				$data = array(
					'nama' => $nama,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'kategori1' => $kategori1,
					'kategori2' => $kategori2,
					'gambar' => $gambar
				);
			
				$this->Dbbarang->input('barang',$data);
				redirect(base_url('admin/listbarang'));
        }else{
            redirect('admin/barang');
        }
                      
        }else{
            redirect('admin/barang');
        }
	}

	public function listbarang(){
        $data["products"] = $this->Dbbarang->getAll('barang');
        $this->load->view("admin/post/Listbarang", $data);
	}

	function editbarang($id){
		$table = 'barang';
		$where = array(
            'id' => $id
			);
		$data["products"] = $this->Dbbarang->getkategori1('kategori1');
		$data["data"] = $this->Dbbarang->editbarang($table,$where);
		$this->load->view('admin/post/editbarang', $data);
	}

	function updatebarang($id){
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$harga = $this->input->post('harga');
		$kategori1 = $this->input->post('kategori1');
		$kategori2 = $this->input->post('kategori2');
		
		$config['upload_path'] = './assets/img/post/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 
        $this->upload->initialize($config);
        if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/img/post/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 710;
                $config['new_image']= './assets/img/post/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
				
				$table = 'barang';
				$data = array(
					'nama' => $nama,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'kategori1' => $kategori1,
					'kategori2' => $kategori2,
					'gambar' => $gambar
				);
				$where = array(
					'id' => $id
					);
			
				$this->Dbbarang->updatebarang($table,$data,$where);
				redirect(base_url('admin/listbarang'));
        }else{
            redirect('admin/editbarang/'.$id);
        }
                      
        }else{
			$table = 'barang';
				$data = array(
					'nama' => $nama,
					'deskripsi' => $deskripsi,
					'harga' => $harga,
					'kategori1' => $kategori1,
					'kategori2' => $kategori2
				);
				$where = array(
					'id' => $id
					);
			
				$this->Dbbarang->updatebarang($table,$data,$where);
				redirect(base_url('admin/listbarang'));
        }
	}

	function deletebarang($id){
		if (!isset($id)) show_404();
        
		$this->Dbbarang->delete($id);
		redirect('admin/listbarang');
	}

	function editprofile(){
		$username = $this->session->userdata('nama');
		$where = array(
            'username' => $username
            );
		$data["data"] = $this->Dbanggota->getprofile($where);
		$this->load->view('admin/editprofile', $data);
	}

	function updateprofile(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$session = $this->session->userdata('nama');
		$table = 'anggota';
		$data = array(
			'username' => $username,
			'email' => $email,
			'password' => $password
			);
		$where = array(
			'username' => $session
			);
		$this->Dbanggota->updateprofile($table,$data,$where);
		redirect('admin/editprofile');
	}
}

?>