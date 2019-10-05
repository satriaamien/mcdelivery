<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_alamat');
		$this->load->model('M_user');
		$this->load->library('form_validation');

	}
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('reglogin/V_headerReg');;
		$this->load->view('template/V_footer');
	}


	public function getAlamat()
	{
		# code...
		$kota = $this->input->post('kota',true);
		$alamat = $this->input->post('alamat',true);
		$dataAlamat = $this->M_alamat->getAlamatKota($kota,$alamat);
		$this->load->view('template/header');
		$this->load->view('reglogin/V_headerReg');
		$this->load->view('reglogin/V_alamat',['dataAlamat'=>$dataAlamat]);
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
				$this->load->view('reglogin/V_headerReg');
				$this->load->view('reglogin/V_setAlamat',['dataAlamat'=>$dataAlamat]); 
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
				$this->session->set_userdata('id_alamat', $id_alamat);

				redirect('Registrasi/registrasi');
			}
		}
	} 

	public function registrasi()
	{
			$this->load->view('template/header');
			$this->load->view('reglogin/V_registrasi'); // Ini Masih Proses 
			$this->load->view('template/V_footer');
	}

	public function prosesRegistrasi()
	{


		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');	
		$this->form_validation->set_rules('month', 'Month', 'required');	
		$this->form_validation->set_rules('day', 'Day', 'required');	
		$this->form_validation->set_rules('notelp', 'NomorTelp', 'required');	
		$this->form_validation->set_rules('email', 'Email', 'required');	
		$this->form_validation->set_rules('password', 'Password', 'required');	
		$this->form_validation->set_rules('konfpass', 'konfpass', 'required');	
		if($this->form_validation->run() == FALSE){
			$this->registrasi();
		}else{
			$nama = $this->input->post('nama');
			$year = $this->input->post('year');
			$month = $this->input->post('month');
			$day = $this->input->post('day');
			$notelp = $this->input->post('notelp');
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$konfPass = $this->input->post('konfpass');		
			$tglLahir = $year."-".$month."-".$day;
			if($pass == $konfPass){
					$data = array(
						"nama" => $nama,
						"tglLahir" => $tglLahir, 
						"password" => $pass,
						"noTelp" => $notelp,
						"email" => $email,
					);

					$id_akun = $this->M_user->Register($data);

					// code dibawah untuk set detail_alamat
					$dataAkunAlamat = array('idAkun' => $id_akun,
											'idAlamat' => $this->session->userdata('id_alamat')		
					 );
					$this->M_alamat->setAlamatAkun($dataAkunAlamat);
					//sampe sini
					
					$this->session->unset_userdata('id_alamat');

					redirect(base_url());
			}
		}

	}


}

/* End of file Registrasi.php */
/* Location: ./application/controllers/Registrasi.php */