<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('tmpl/header');
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('tmpl/footer');
	}

}
