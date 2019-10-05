<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model {

		public function getMenu($kategori)
		{
			$this->db->select('*');
			$this->db->from('menu');
			$this->db->where('kategori', $kategori);
			$query = $this->db->get();
			return $query->result();
		}
		public function getMenuId($id)
		{
			$this->db->select('*');
			$this->db->from('menu');
			$this->db->where('idMenu', $id);
			$query = $this->db->get();
			return $query->row();
		}

		public function getIdTransaksasi($id)
		{
			# code...
			$this->db->select('idTransaksi');
			$this->db->from('transaksi');
			$this->db->where('transaksi.idAkun', $id);
			$query = $this->db->get();
			return $query->row();
		}

		public function getTransaksi($idAkun)
		{
			# code...
			$this->db->select('*');
			$this->db->from('transaksi');
			$this->db->where('idAkun', $idAkun);
			$query = $this->db->get();
			return $query->result();
		}

		public function setTotalTransaksi($data,$id)
		{
			# code...
			$this->db->set('total', $data);
			$this->db->where('idTransaksi', $id);
			$this->db->update('transaksi');
		}
		public function setAlamatTransaksi($data,$id)
		{
			# code...
			$this->db->set('alamatKirim', $data);
			$this->db->where('idTransaksi', $id);
			$this->db->update('transaksi');
		}

		public function addTransaksi($data)
		{
			# code...
			$this->db->insert('transaksi',$data);
	        $id = $this->db->insert_id();
	        return (isset($id)) ? $id : FALSE;
		}
		public function addDetailMenu($data)
		{
			# code...
			$this->db->insert('detail_menu',$data);
		}
	

}

/* End of file M_menu.php */
/* Location: ./application/models/M_menu.php */