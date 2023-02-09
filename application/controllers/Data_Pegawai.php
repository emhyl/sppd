<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Pegawai extends CI_Controller {
	
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
		$data['field'] = $this->M_DB->getField('tb_pegawai');
		$data['data_pegawai'] = $this->M_DB->getAll('tb_pegawai');
		// var_dump($data);die();

		$this->load->view('tmpl/header',['admin'=>$this->session->userdata('admin')['data']]);
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/data_pegawai',$data);
		$this->load->view('tmpl/footer');
	}

	public function tambah()
	{
		$data = [];
		foreach ($_POST as $key => $value) {
			$data[$key] = $this->input->post($key);
		}
		$this->M_DB->add('tb_pegawai',$data);
		redirect(base_url('data_Pegawai'));
	}

	public function hapus($id = null)
	{
		if(!$id == null){
			$this->M_DB->delete('tb_pegawai',['id'=>$id]);
			redirect(base_url('data_Pegawai'));
		}else{
			redirect(base_url('data_Pegawai'));
		}
	}


	public function edit($id= null)
	{
		
		if(!$id == null){

			$data = [];
			foreach ($_POST as $key => $value) {
				$data[$key] = $this->input->post($key);
			}
			$this->M_DB->edit('tb_pegawai',$data,['id'=>$id]);
			redirect(base_url('data_Pegawai'));
		}else{
			redirect(base_url('data_Pegawai'));
		}
	}


}
