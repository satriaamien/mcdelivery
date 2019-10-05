<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_admin');
	}

	public function loginPage()
	{
		# code...
		$this->load->view('admin/V_loginAdmin');
	}

	public function index()
	{
		$data = $this->M_admin->getData();
		$this->load->view('admin/V_homeAdmin',['menu' => $data]);		
	}
	public function tambahPage()
	{
		// $data = $this->M_admin->getData();
		$this->load->view('admin/V_admin');		
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama Menu', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->index();
			echo "hahaha";
		} else {
			# code...
			$config['upload_path'] = './assets/foto';    
			$config['allowed_types'] = 'jpg|png|jpeg';  
			$config['removed_space'] = TRUE;

			// var_dump($config);
			// exit();
			$this->load->library('upload', $config);
			
			if (!$this->upload->do_upload('foto')){
				$this->index();
			}

			$file = $this->upload->data();
			$gambar = $file['file_name'];
			$data = array('nama' => $this->input->post('nama'),
				'kategori' => $this->input->post('kategori'),
				'harga' => $this->input->post('harga'),
				'gambar' => $gambar
			);
			$this->M_admin->insertData($data);
			redirect('Admin');

		}
	}
	
		//Update one item
	public function update()
	{
		$idMenu = $this->input->post('idMenu');
		$nama = $this->input->post('nama');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$config['upload_path'] = './assets/foto';    
		$config['allowed_types'] = 'jpg|png|jpeg';  
		$config['removed_space'] = TRUE;

			// var_dump($config);
			// exit();
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('foto')){
			var_dump("gagal");
		}

		$file = $this->upload->data();
		$gambar = $file['file_name'];

		$data = array(
			"nama" => $nama,
			"kategori" => $kategori,
			"harga" => $harga,
			"gambar" => $gambar
		);
		$this->M_admin->updateData($data,$idMenu);
		redirect('Admin');
	}
	
		//Delete one item
	public function deleteMenu($id)
	{
		$this->M_admin->hapusMenu($id);
		
		redirect('Admin');
	}	

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */