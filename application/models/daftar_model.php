<?php

class Daftar_model extends CI_Model
{
    public function getAllDaftar()
    {
        $query = $this->db->get('daftar');
        return $query->result_array();
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('daftar', ['id' => $id])->row_array();
    }

    public function getDaftar($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('kategori', $keyword);
            $this->db->or_like('nama', $keyword);
            $this->db->or_like('harga', $keyword);
            $this->db->or_like('tanggal', $keyword);
            $this->db->or_like('toko', $keyword);
        }
        $this->db->order_by('id', 'desc');
        return $this->db->get('daftar', $limit, $start)->result_array();
    }

    public function countAllDaftar()
    {
        return $this->db->get('daftar')->num_rows();
    }
}
