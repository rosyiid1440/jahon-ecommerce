<?php
class Dbanggota extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function input($table=' ',$data=' '){
        $this->db->insert($table, $data);
    }

    public function ceklogin($table,$where){
        return $this->db->get_where($table,$where);
    }

    public function getprofile($where){
        return $this->db->get_where('anggota',$where)->result();
    }

    function updateprofile($table,$data,$where){
        $this->db->update($table,$data,$where);
    }
}
?>