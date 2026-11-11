<?php
class Barang_model extends CI_Model {

    function get_all() {
        return $this->db->get('barang')->result();
    }

    function insert($data) {
        $this->db->insert('barang', $data);
    }

    function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('barang');
    }
}