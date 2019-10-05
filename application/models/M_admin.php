<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
	
	public function getData()
	{
		# code...
		$this->db->select('*');
		$this->db->from('menu');
		$query = $this->db->get();
		return $query->result();
	}

	public function insertData($data)
	{
		# code...
		$this->db->insert('menu', $data);
	}
	
	public function updateData($data,$id)
	{
		# code...
		$this->db->where('idMenu', $id);
		$this->db->update('menu', $data);
	}
	public function hapusMenu($id)
	{
		# code...
		$this->db->where('idMenu', $id);
		$this->db->delete('menu');
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */