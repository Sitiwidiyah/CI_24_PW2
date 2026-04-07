<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kategori_model extends CI_Model {
    private $table = 'kategori';

    //Ambil Semua Data//
    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }
    //INSERT DATA//
    public function insert($data)
    {
        return $this->db->insert($this->table,$data);
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, ['id'=>$id]);
    }
    public function update($id,$data)
    {
        $this->db->where('id',$id);
        return $this->db->update($this->table, $data);
    }
}