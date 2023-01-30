<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		Parent::__construct();
		if($this->session->userdata('admin')){
			$this->session->sess_destroy();
			redirect(base_url('Login'));
		}
		
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function validasi(){
		$data = [
			'username' => $this->input->post('username'),
			'password' => $this->input->post('pass'),
		];

		$auth = $this->M_DB->getWhere('tb_admin',$data);
		if($auth){
			$this->session->set_userdata('admin',['data'=>$auth]);
			redirect(base_url(''));
		}else{
			$this->session->set_flashdata('err','
				<div class="p-2">
					<div class="alert alert-danger" role="alert">
					  Username Atau Password Salah!
					</div>
				</div>
				');
			redirect(base_url('login'));
		}
	}
	

}
