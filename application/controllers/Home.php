<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


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
		

		$this->load->view('tmpl/header',['admin'=>$this->session->userdata('admin')['data']]);
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('tmpl/footer');
	}
	
	public function report($id = ''){
		$data['data'] = $this->M_DB->join2tbl('*',['tb_pegawai','tb_formulir'],['nm_pegawai','nama'],['tb_formulir.id'=>$id])[0];

		$data['kec'] = $this->M_DB->getWhere('tb_sbu',['id'=>$data['data']['id_kecematan']]);
			
		// var_dump($data['data']);die();
		$this->load->library('Pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Portrait'
		);
		
		$this->pdf->load('admin/reportPDF/report',$data,$paper);
	}

}
