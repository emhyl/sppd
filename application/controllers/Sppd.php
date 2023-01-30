<?php

use PharIo\Manifest\Type;
use phpDocumentor\Reflection\Types\Parent_;

defined('BASEPATH') OR exit('No direct script access allowed');

class Sppd extends CI_Controller {
	
	public function __construct()
	{
		Parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect(base_url('Login'));
		}
		
	}
 
	
	public function index()
	{
		$data['sppd'] = $this->M_DB->join2tbl('*',['tb_pegawai','tb_formulir'],['nm_pegawai','nama']);
	
		$this->load->view('tmpl/header');
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/sppd',$data);
		$this->load->view('tmpl/footer');
	}

	public function r_surat_tugas(){
		$data['data'] = $this->M_DB->join2tbl('',['tb_pegawai','tb_formulir'],['nm_pegawai','nama']);
			
		// var_dump($data['data']);die();?
		$this->load->library('Pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Portrait'
		);
		
		$this->pdf->load('admin/reportPDF/surat_tugas',$data,$paper);
	}

	public function hapus($id = null)
	{	
		$auth = $this->M_DB->getWhere('tb_formulir',['id'=>$id]);
		if($auth){
			$this->M_DB->delete('tb_formulir',['id'=>$id]);
			
			redirect(base_url('sppd'));
		}else{
			redirect(base_url('sppd'));
		}
		
	}

}
