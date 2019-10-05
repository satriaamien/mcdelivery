<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alamat extends CI_Model {

	public function getAlamatKota($kota,$alamat){
		$this->db->select('*');
		$this->db->from('deskripsi_alamat');
		$this->db->where('kota', $kota);
		$this->db->like('nama_jalan',$alamat);
		$query = $this->db->get();
		return $query->result();
	}

	public function GetDetailAlamat(){

		$this->db->select('*');
		$this->db->from('deskripsi_alamat');
		$query = $this->db->get();
		return $query->result();
	}

	public function getIdAlamat($idDetail,$idAkun)
	{
		# code...
		$this->db->select('alamat.idAlamat');
		$this->db->from('alamat');
		$this->db->join('deskripsi_alamat', 'alamat.id_deskripsi = deskripsi_alamat.id_deskripsi');
		$this->db->join('detail_alamat', 'detail_alamat.idAlamat = alamat.idAlamat');
		$this->db->join('akun', 'akun.idAkun = detail_alamat.idAkun');
		$this->db->where('akun.idAkun', $idAkun);
		$this->db->where('id_detail', $idDetail);
		$query = $this->db->get();
		return $query->row();
	}

	public function GetDetailAlamatId($id){
		$this->db->select('*');
		$this->db->from('deskripsi_alamat');
		$this->db->where('id_deskripsi', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function tambahDataAlamat($data)
	{
		$this->db->insert('alamat', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;		
	}
	public function updateDataAlamat($data,$id)
	{
		$this->db->where('idAlamat', $id);
		$this->db->update('alamat', $data);		
	}
	

	public function setAlamatAkun($data)
	{
		$this->db->insert('detail_alamat', $data);
		# code...
	}
	public function updateAlamatAkun($data,$id)
	{

		$this->db->where('id_detail', $id);
		$this->db->update('detail_alamat', $data);
		# code...
	}

	public function findDataAlamat($rincian)
	{
		$this->db->select('idAkun');
		$this->db->from('akun');
		$this->db->where('rincianAlamat', $rincian);
		return $this->db->get()->result()[0]->idAkun;
	}
	public function getUser($id)
	{
		# code...
		$this->db->select('akun.idAkun');
		$this->db->from('akun');
		$this->db->where('idAkun', $id);
		$query = $this->db->get();
		return $query->result();
	}

	public function getAlamatUser($idAkun)
	{
		# code...
		$this->db->select('kota,nama_jalan,nama_tempat,kelurahan,rincianAlamat,id_detail,petunjukAlamat,alamat.idAlamat');
		$this->db->from('alamat');
		$this->db->join('deskripsi_alamat', 'alamat.id_deskripsi = deskripsi_alamat.id_deskripsi');
		$this->db->join('detail_alamat', 'detail_alamat.idAlamat = alamat.idAlamat');
		$this->db->join('akun', 'akun.idAkun = detail_alamat.idAkun');
		$this->db->where('akun.idAkun', $idAkun);
		$query = $this->db->get();
		return $query->result();
	}

	public function getAlamatUserByDetailAlamat($idAkun,$idDetail,$idAlamat)
	{
			# code...
		$this->db->select('kota,nama_jalan,nama_tempat,kelurahan,rincianAlamat,id_detail,petunjukAlamat,alamat.idAlamat');
		$this->db->from('alamat');
		$this->db->join('deskripsi_alamat', 'alamat.id_deskripsi = deskripsi_alamat.id_deskripsi');
		$this->db->join('detail_alamat', 'detail_alamat.idAlamat = alamat.idAlamat');
		$this->db->join('akun', 'akun.idAkun = detail_alamat.idAkun');
		$this->db->where('akun.idAkun', $idAkun);
		$this->db->where('id_detail', $idDetail);
		$this->db->where('alamat.idAlamat', $idAlamat);
		$query = $this->db->get();
		return $query->row();
	}

	


	public function getDetailUser($idAkun,$idDetail)
	{
		# code...
		$this->db->select('id_detail,alamat.idAlamat');
		$this->db->from('alamat');
		$this->db->join('deskripsi_alamat', 'alamat.id_deskripsi = deskripsi_alamat.id_deskripsi');
		$this->db->join('detail_alamat', 'detail_alamat.idAlamat = alamat.idAlamat');
		$this->db->join('akun', 'akun.idAkun = detail_alamat.idAkun');
		$this->db->where('akun.idAkun', $idAkun);
		$this->db->where('id_detail', $idDetail);
		$query = $this->db->get();
		return $query->result();
	}
	public function getAlamatYangDipilih($idAkun,$idDetail)
	{
		# code...
		$this->db->select('id_detail,alamat.idAlamat');
		$this->db->from('alamat');
		$this->db->join('deskripsi_alamat', 'alamat.id_deskripsi = deskripsi_alamat.id_deskripsi');
		$this->db->join('detail_alamat', 'detail_alamat.idAlamat = alamat.idAlamat');
		$this->db->join('akun', 'akun.idAkun = detail_alamat.idAkun');
		$this->db->where('akun.idAkun', $idAkun);
		$this->db->where('id_detail', $idDetail);
		$query = $this->db->get();
		return $query->row();
	}

	public function deleteAlamatDetail($id)
	{
		$this->db->where('id_detail', $id);
		$this->db->delete('detail_alamat');
	}
	public function deleteAlamat($id)
	{
		# code...
	}

}

/* End of file M_alamat.php */
/* Location: ./application/models/M_alamat.php */