<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_buku extends CI_Model {

    // Ambil semua data buku + kategori
    public function get_all_buku()
    {
        $this->db->select('buku.*, kategori.nama_kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.id_kategori');
        return $this->db->get()->result();
    }

    // Ambil data kategori (untuk dropdown)
    public function get_kategori()
    {
        return $this->db->get('kategori')->result();
    }

    // Tambah buku
    public function insert($data)
    {
        return $this->db->insert('buku', $data);
    }

    // Hapus buku
    public function delete($id)
    {
        return $this->db->delete('buku', ['id' => $id]);
    }
}