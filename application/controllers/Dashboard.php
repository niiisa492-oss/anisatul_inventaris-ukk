<?php
class Dashboard extends CI_Controller {
    function index () {
        $this->load->model('Barang_model');
        $this->load->model('Peminjaman_model');

        $data['barang'] = $this->Barang_model->get_all();
        $data['dipinjam'] = $this->Peminjaman_model->total_dipinjam();
        $data['kembali'] = $this->Peminjaman_model->total_kembali();

        $this->load->view('dashboard', $data);
    }
}