<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_user');
		$this->load->model('M_alamat');

	}

	public function index()
	{
		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		$dataAkun = $this->M_user->getDataAkun($username);
		if($pass == $dataAkun->password && isset($pass)){
			$addrs = $this->M_alamat->getUser($dataAkun->idAkun);
			$dataLogin = array(
				'idAkun' => $dataAkun->idAkun,
				'nama' => $dataAkun->nama
			);
			$this->session->set_userdata('akunLogin', $dataLogin);
			redirect('home');

		}else{
			redirect('home');
		}
	}

	public function loginAdmin()
	{
		# code...
		$username = $this->input->post('username');
		$pass = $this->input->post('password');

		$dataAkun = $this->M_user->getDataAdmin($username);
		if($pass == $dataAkun->password && isset($pass)){
			$dataLogin = array(
				'idAdmin' => $dataAkun->idAdmin,
				'username' => $dataAkun->username
			);
			$this->session->set_userdata('admin', $dataLogin);
			redirect('Admin');	
		}else{
			redirect('Admin/loginPage');
		}
	}

	public function signout()
	{
		# code...
		$this->session->sess_destroy();
		redirect('home');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */