<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_alamat');
		$this->load->model('M_user');
		$this->load->model('M_menu');
		$this->load->library('form_validation');

	}

	public function pesananLalu()
	{
		# code...
		$akun = $this->session->userdata('akunLogin');
		// var_dump($akun['idAkun']);
		// exit();
		$data = $this->M_menu->getTransaksi($akun['idAkun']);
		$this->load->view('template/header');
		$this->load->view('template/V_pesanan',['dataT' => $data]);
		// $this->load->view('template/V_footer');

	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/V_account_pengaturan');
		$this->load->view('template/V_footer');
	}
	public function gantiPass()
	{
		
		$this->load->view('template/header');
		$this->load->view('template/V_account_gantipass');
		$this->load->view('template/V_footer');
	
	}
	public function gantiPassword()
	{
		$akun = $this->session->userdata('akunLogin');
		$this->form_validation->set_rules('oldPassword', 'Old Paswword', 'required');
		$this->form_validation->set_rules('newPassword', 'New Password', 'required');	
		$this->form_validation->set_rules('confPassword', 'Confirm Password', 'required');	
		if ($this->form_validation->run() == false) {
			$this->gantiPass();
		} else {
			
			$passLama = $this->M_user->getPasswordById($akun['idAkun']);
			$oldPass = $this->input->post('oldPassword');
			$newPass = $this->input->post('newPassword');
			$confPass = $this->input->post('confPassword');
			
			if($passLama->password == $oldPass && $newPass == $confPass){
				$this->M_user->updatePassword($akun['idAkun'],$newPass);
				redirect('Home');
			}else{
				$this->gantiPass();
			}

		
		}
	}
	
	public function gantiAlamat()
	{
		$akun = $this->session->userdata('akunLogin');
		$data = $this->M_alamat->getAlamatUser($akun['idAkun']);
		$this->load->view('template/header');
		$this->load->view('template/V_account_bukualamat',['dataAlamat'=>$data]);
		$this->load->view('template/V_footer');
	}
	public function gantiFavorit()
	{
		$this->load->view('template/header');
		$this->load->view('template/V_account_favorit');
		$this->load->view('template/V_footer');
	}
	public function edit()
	{
		# code...
		$tmp = $this->session->userdata('akunLogin');

		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('day', 'Day', 'required');
		$this->form_validation->set_rules('month', 'Month', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');
		$this->form_validation->set_rules('kontak', 'No hp', 'required');

		if ($this->form_validation->run() == FALSE) {
			# code...
			redirect('Account');
		}else{
			$bulan = $this->input->post('month');
			$year =	$this->input->post('year');
			$tanggal = $this->input->post('day');
			$nama =	$this->input->post('nama');
			$kontak =	$this->input->post('kontak');
			$tgllahir = $tanggal."-".$bulan."-".$year;
				
			$data = array('nama' => $nama,
						  'tglLahir' => $tgllahir,
						  'noTelp' => $kontak, 
						  'idAkun' => $tmp['idAkun']
			);
			$tmp['nama'] = $nama;
			// var_dump($tmp['idAkun']);
			// exit();
			$this->M_user->updateAkun($tmp['idAkun'],$data);
			$this->session->set_userdata('akunLogin',$tmp);
			// var_dump($this->session->userdata('akunLogin'));
			// exit();
			redirect('home');
			# code...
		}

	}


}

/* End of file account.php */
/* Location: ./application/controllers/account.php */