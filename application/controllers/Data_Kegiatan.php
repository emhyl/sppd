<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Kegiatan extends CI_Controller {

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
	
		$data['field'] = $this->M_DB->getField('tb_kegiatan');
		$data['data_kegiatan'] = $this->M_DB->getAll('tb_kegiatan');
		// var_dump($data);die();
		$this->load->view('tmpl/header');
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/data_kegiatan',$data);
		$this->load->view('tmpl/footer');
	}


	public function tambah()
	{
		$data = [];
		foreach ($_POST as $key => $value) {
			$data[$key] = $this->input->post($key);
		}
		$this->M_DB->add('tb_kegiatan',$data);
		redirect(base_url('data_Kegiatan'));
	}

	public function edit($id= null)
	{
		
		if(!$id == null){

			$data = [];
			foreach ($_POST as $key => $value) {
				$data[$key] = $this->input->post($key);
			}
			$this->M_DB->edit('tb_kegiatan',$data,['id'=>$id]);
			redirect(base_url('data_Kegiatan'));
		}else{
			redirect(base_url('data_Kegiatan'));
		}
	}



	public function hapus($id = null)
	{
		if(!$id == null){
			$this->M_DB->delete('tb_kegiatan',['id'=>$id]);
			redirect(base_url('data_Kegiatan'));
		}else{
			redirect(base_url('data_Kegiatan'));
		}
	}

}
