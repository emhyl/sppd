<?php

use PharIo\Manifest\Type;
use phpDocumentor\Reflection\Types\Parent_;

defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Kendaraan extends CI_Controller {
	
	public function __construct()
	{
		Parent::__construct();
		// var_dump('expression');die();
		if(!$this->session->userdata('admin')){
			redirect(base_url('Login'));
		}
		
	}
	
	public function index()
	{
	
		$data['field'] = $this->M_DB->getField('tb_kendaraan');
		$data['data_kendaraan'] = $this->M_DB->getAll('tb_kendaraan');
		// var_dump($data);die();
		$this->load->view('tmpl/header');
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/data_kendaraan',$data);
		$this->load->view('tmpl/footer');
	}

	public function tambah()
	{
		$data = [];
		foreach ($_POST as $key => $value) {
			$data[$key] = $this->input->post($key);
		}
		$this->M_DB->add('tb_kendaraan',$data);
		redirect(base_url('data_Kendaraan'));
	}


	public function edit($id= null)
	{
		
		if(!$id == null){

			$data = [];
			foreach ($_POST as $key => $value) {
				$data[$key] = $this->input->post($key);
			}
			$this->M_DB->edit('tb_kendaraan',$data,['id'=>$id]);
			redirect(base_url('data_Kendaraan'));
		}else{
			redirect(base_url('data_Kendaraan'));
		}
	}


	public function hapus($id = null)
	{
		if(!$id == null){
			$this->M_DB->delete('tb_kendaraan',['id'=>$id]);
			redirect(base_url('data_Kendaraan'));
		}else{
			redirect(base_url('data_Kendaraan'));
		}
	}



}
