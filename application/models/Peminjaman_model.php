<?php
class Peminjaman_model extends CI_Model {

    function get_all() {
        $this->db->select('peminjaman.*, barang.nama_barang');
        $this->db->from('peminjaman');
        $this->db->join('barang', 'barang.id = peminjaman.barang_id', 'left');
        return $this->db->get()->result();
    }

    function insert($data) {
        $this->db->insert('peminjaman', $data);
        $this->db->set('stok', 'stok - ' . (int)$data['jumlah'], FALSE);
        $this->db->where('id', $data['barang_id']);
        $this->db->update('barang');
    }

    function kembalikan($id) {
        $p = $this->db->get_where('peminjaman', array('id' => $id))->row();
        $this->db->where('id', $id);
        $this->db->update('peminjaman', array('status' => 'dikembalikan'));
        $this->db->set('stok', 'stok + ' . (int)$p->jumlah, FALSE);
        $this->db->where('id', $p->barang_id);
        $this->db->update('barang');
    }

    function total_dipinjam() {
        return $this->db->where('status', 'dipinjam')->count_all_results('peminjaman');
    }

    function total_kembali() {
        return $this->db->where('status', 'dikembalikan')->count_all_results('peminjaman');
    }
}