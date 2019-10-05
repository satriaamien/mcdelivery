<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {

	
		public function getOffer()
	{
		# code...
		$this->load->view('template/header');
		$this->load->view('offer/V_sidebarOffer');
		$this->load->view('offer/V_offer');
		$this->load->view('template/V_footer');
	}
	
}
