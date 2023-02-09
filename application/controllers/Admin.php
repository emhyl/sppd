<?php

use PharIo\Manifest\Type;
use phpDocumentor\Reflection\Types\Parent_;

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		Parent::__construct();
				
	}
 
	
	public function index()
	{
		$this->load->view('tmpl/header');
		$this->load->view('tmpl/sidebar',['admin'=>$this->session->userdata('admin')['data']]);
		$this->load->view('admin/admin');
		$this->load->view('tmpl/footer');
	}
	
	public function edit()
	{
		if(isset($_POST['btn-simpan'])){
			unset($_POST['btn-simpan']);
			$id = $this->session->userdata('admin')['data']->id;
			$data = [];
			foreach ($_POST as $key => $value) {
				if($value != ''){
					$data[$key] = $this->input->post($key);
				}
			}

			if(!count($data)>0){

				if($_FILES['gambar']['name'] == ""){
					redirect(base_url('admin'));
					exit();
				}
			}


			if(isset($data['password']) || isset($data['password-baru'])){
				if(isset($data['password']) && isset($data['password-baru'])){
					$pass = $this->M_DB->getWhere('tb_admin',['password'=>$data['password']]);
					if($pass){
						$data['password'] = $data['password-baru'];
						unset($data['password-baru']);
					}else{
						redirect(base_url('admin'));
						exit();
					}
				}else{
					redirect(base_url('admin'));
					exit();
				}
			}


			if(($_FILES['gambar']['name'] != "")){


				$cfg['upload_path']          = './assets/admin/img/profil/';
				$cfg['allowed_types']        = 'jpg|png|jpeg';

				$this->load->library('upload', $cfg);
				if(!$this->upload->do_upload('gambar')){
					// var_dump($this->upload->display_errors());
					// die();
				    $this->session->set_flashdata('message', '

				    <div class="alert alert-danger alert-dismissible fade show" role="alert">
				        <strong>Gagal</strong> '.'Gagal upload file.!'.'
				        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				        <span aria-hidden="true">&times;</span>
				        </button>
				    </div>
				    
				    ');
				    redirect(base_url('admin'));
				    die;
				}else{
				    $data['foto'] = $this->upload->data('file_name');
				} 

			}

			$this->M_DB->edit('tb_admin',$data,['id'=>$id]);
			$this->session->set_flashdata('sukses', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				    <strong>Gagal</strong> '.'Gagal upload file.!'.'
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				    </button>
				</div>
			');
			redirect(base_url('login'));

		}else{
			redirect(base_url('admin'));
		}
	}



}
