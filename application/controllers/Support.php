<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Support extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');		
		$this->load->view('support/V_sidebar');
		$this->load->view('support/V_support1');
		$this->load->view('template/V_footer');		
	}
	public function getPrivacy()
	{
		# code...
		$this->load->view('template/header');
		$this->load->view('support/V_sidebar');
		$this->load->view('support/V_support2');
		$this->load->view('template/V_footer');
	}
	public function getFAQ()
	{
		 $this->load->view('template/header');
		 $this->load->view('support/V_sidebar');
		 $this->load->view('support/V_support4');
		  $this->load->view('template/V_footer');

	}

}

/* End of file Support.php */
/* Location: ./application/controllers/Support.php */