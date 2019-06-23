<?php
class Dbbarang extends CI_Model{

    public function input($table,$data){
        $this->db->insert($table, $data);
    }

    public function getAll($table)
    {
        return $this->db->get($table)->result();
    }

    public function delete($id){
        $this->db->delete('barang', array("id" => $id));
    }

    public function editbarang($table,$where){
        return $this->db->get_where($table,$where)->result();
    }

    function updatebarang($table,$data,$where){
        $this->db->update($table,$data,$where);
    }

    public function getbarangid($table,$where){
        return $this->db->get_where($table,$where)->result();
    }

    public function getkategori1($table){
        return $this->db->get($table)->result();
    }

    public function getkategori2($table,$where){
        $query = $this->db->get_where($table,$where);
        $output = '<option value="">Pilih Kategori</option>';
        foreach($query->result() as $row)
        {
        $output .= '<option value="'.$row->nama_kategori2.'">'.$row->nama_kategori2.'</option>';
        }
        return $output;
    }
}
?>