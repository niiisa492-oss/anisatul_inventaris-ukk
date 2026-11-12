<?php
class Barang extends CI_Controller {

    function index() {
        $this->load->model('Barang_model');
        $data['barang'] = $this->Barang_model->get_all();
        $this->load->view('barang', $data);
    }

    function create() {
        $this->load->view('barang_create');
    }

    function store() {
        $this->load->model('Barang_model');
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'stok' => $this->input->post('stok')
        );
        $this->Barang_model->insert($data);
        redirect('barang');
    }

    function delete($id) {
        $this->load->model('Barang_model');
        $this->Barang_model->delete($id);
        redirect('barang');
    }
}