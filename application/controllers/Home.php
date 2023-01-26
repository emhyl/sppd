<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		

		$this->load->view('tmpl/header');
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('tmpl/footer');
		// $this->load->view('admin/reportPDF/surat_tugas');
	}
	
	public function report($id = ''){
		$data['data'] = $this->M_DB->getWhere('tb_formulir',['id'=>0]);
		// var_dump($data);die();
			
		$this->load->library('Pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Portrait'
		);
		
		$this->pdf->load('admin/reportPDF/domisili',$data,$paper);
	}
	
	public function report2($id = ''){
		$data['data'] = $this->M_DB->getWhere('tb_formulir',['id'=>0]);
		// var_dump($data);die();
			
		$this->load->library('Pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Portrait'
		);
		
		$this->pdf->load('admin/reportPDF/surat_tugas',$data,$paper);
	}

}
