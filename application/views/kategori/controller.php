<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('M_buku');
        $this->load->library('form_validation');
    }

    // FORM INPUT
    public function index(){
        $data['kategori'] = $this->M_buku->get_kategori();
        $this->load->view('buku/form', $data);
    }

    // SIMPAN DATA
    public function simpan(){
        $data = [
            'kode_buku' => $this->input->post('kode_buku'),
            'judul' => $this->input->post('judul'),
            'penulis' => $this->input->post('penulis'),
            'penerbit' => $this->input->post('penerbit'),
            'tahun' => $this->input->post('tahun'),
            'id_kategori' => $this->input->post('kategori'),
            'stok' => $this->input->post('stok'),
            'lokasi_rak' => $this->input->post('lokasi_rak')
        ];

        $this->M_buku->insert($data);
        redirect('buku/data');
    }

    // TAMPIL DATA
    public function data(){
        $data['buku'] = $this->M_buku->get_all();
        $this->load->view('buku/data', $data);
    }

    // HAPUS
    public function hapus($id){
        $this->M_buku->delete($id);
        redirect('buku/data');
    }
}