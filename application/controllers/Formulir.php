<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {

	public function index($coba = null)
	{
		$this->load->view('tmpl/header');
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/formulir');
		$this->load->view('tmpl/footer');
	}

}
