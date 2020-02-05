<?php

class Daftar_model extends CI_Model
{
    public function getAllDaftar()
    {
        $query = $this->db->get('daftar');
        return $query->result_array();
	}
	
	// fungsi crud
	function insert_data($data,$table) 
	{
		$this->db->insert($table,$data);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function edit_data($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	function delete_data($where,$table)
	{
		$this->db->delete($table,$where);
	}

}
