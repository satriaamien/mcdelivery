<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_alamat');
		$this->load->model('M_menu');
		$this->load->library('cart');
	}

	public function index()
	{
		$akun = $this->session->userdata('akunLogin');
		$data = $this->M_alamat->getAlamatUser($akun['idAkun']);
		$this->load->view('template/header');
		$this->load->view('template/V_home',['dataAlamat'=>$data]);
		$this->load->view('template/V_footer');
	}

	public function setAlamat()
	{
		$akun = $this->session->userdata('akunLogin');		
		$data = $this->M_alamat->getAlamatYangDipilih($akun['idAkun'],$this->input->post('alamat'));
		$this->session->set_userdata('_adrs',$data);
        $this->cart->destroy();
		redirect('Menu/menu/istimewa');			
		// var_dump($data->id_detail);
		// exit();

	}
}
