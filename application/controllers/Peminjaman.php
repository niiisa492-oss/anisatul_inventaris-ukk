<?php
class Peminjaman extends CI_Controller {

    function index() {
        $this->load->model('Peminjaman_model');
        $data['peminjaman'] = $this->Peminjaman_model->get_all();
        $this->load->view('peminjaman', $data);
    }

    function create() {
        $this->load->model('Barang_model');
        $data['barang'] = $this->Barang_model->get_all();
        $this->load->view('Peminjaman_create', $data);
    }

    function store() {
        $this->load->model('peminjaman_model');
        $data = array(
            'barang_id' => $this->input->post('barang_id'),
            'nama_peminjam' => $this->input->post('nama_peminjam'),
            'jumlah' => $this->input->post('jumlah'),
            'status' => 'dipinjam'
        );
        $this->Peminjaman_model->($data);
        redirect('peminjaman');
    }

    function kembalikan($id) {
        $this->load->model('Peminjaman_model');
        $this->Peminjaman_model->kembalikan($id);
        redirect('peminjaman');
    }
}