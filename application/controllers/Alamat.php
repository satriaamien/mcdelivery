<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_alamat');

	}

	// List all your items
	public function index()
	{
		$kota = $this->input->post('kota',true);
		$alamat = $this->input->post('alamat',true);
		$dataAlamat = $this->M_alamat->getAlamatKota($kota,$alamat);
		$this->load->view('template/header');
		$this->load->view('alamat/V_alamat1',['dataAlamat'=>$dataAlamat]);
		$this->load->view('template/V_footer');
	}

	public function setAlamat($idAlamat)
	{
		
		$dataAlamat = $this->M_alamat->getDetailAlamatId($idAlamat);
		if (isset($dataAlamat)) {

			$this->form_validation->set_rules('rincian', 'Rincian', 'required');
			$this->form_validation->set_rules('petunjuk', 'Petunjuk', 'required');	

			if ($this->form_validation->run() == FALSE)
			{

				$this->load->view('template/header');
				$this->load->view('alamat/V_alamat2',['dataAlamat'=>$dataAlamat]); 
				$this->load->view('template/V_footer');
			}
			else {
				$rincian = $this->input->post('rincian');
				$petunjuk = $this->input->post('petunjuk');

				$data = array(
					"rincianAlamat" => $rincian,
					"petunjukAlamat" => $petunjuk, 
					"id_deskripsi" => $idAlamat
				);


				$id_alamat = $this->M_alamat->tambahDataAlamat($data);



				$akun = $this->session->userdata('akunLogin');


				$dataAkunAlamat = array('idAkun' => $akun['idAkun'],
					'idAlamat' => $id_alamat		
				);
				$this->M_alamat->setAlamatAkun($dataAkunAlamat);
				redirect('Account/gantiAlamat');

			}
		}
	}
	public function editpage($id)
	{

		$akun = $this->session->userdata('akunLogin');
		$data = $this->M_alamat->getDetailUser($akun['idAkun'],$id);
		$this->session->set_userdata('data_update',$data);

		$kota = $this->input->post('kota',true);
		$alamat = $this->input->post('alamat',true);
		$dataAlamat = $this->M_alamat->getAlamatKota($kota,$alamat);
		$this->load->view('template/header');
		$this->load->view('alamat/V_alamat1',['dataAlamat'=>$dataAlamat]);
		$this->load->view('template/V_footer');
	}
	//Update one item
	public function updateAlamat($idAlamat)
	{
		$dataAlamat = $this->M_alamat->getDetailAlamatId($idAlamat);
		if (isset($dataAlamat)) {

			$this->form_validation->set_rules('rincian', 'Rincian', 'required');
			$this->form_validation->set_rules('petunjuk', 'Petunjuk', 'required');	

			if ($this->form_validation->run() == FALSE)
			{

				$this->load->view('template/header');
				$this->load->view('alamat/V_alamat2',['dataAlamat'=>$dataAlamat]); 
				$this->load->view('template/V_footer');
			}
			else {
				$rincian = $this->input->post('rincian');
				$petunjuk = $this->input->post('petunjuk');

				$updateInfo = $this->session->userdata('data_update');


				$data = array(
					"rincianAlamat" => $rincian,
					"petunjukAlamat" => $petunjuk, 
					"id_deskripsi" => $idAlamat
				);
				
				$this->M_alamat->updateDataAlamat($data,$updateInfo[0]->idAlamat);


				$akun = $this->session->userdata('akunLogin');


				$dataAkunAlamat = array('idAkun' => $akun['idAkun'],
					'idAlamat' => $updateInfo[0]->idAlamat		
				);

				$this->M_alamat->updateAlamatAkun($dataAkunAlamat,$updateInfo[0]->id_detail);
				// var_dump($updateInfo[0]->id_detail);
				// exit();
				$this->session->unset_userdata('data_update');
				redirect('Account/gantiAlamat');


			}
		}
	}

	//Delete one item
	public function hapus($id)
	{
		$data = $this->session->userdata('akunLogin');
		$idAlamat = $this->M_alamat->getIdAlamat($id,$data['idAkun']);
		$this->M_alamat->deleteAlamatDetail($id);
		$this->M_alamat->deleteAlamat($idAlamat->idAlamat);
		redirect('Account/gantiAlamat');
	}
}

/* End of file Alamat.php */
/* Location: ./application/controllers/Alamat.php */
