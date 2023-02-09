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
		$autRiwayat = $this->CForm->ascToNum($this->M_DB->getAll('tb_riwayat'),'id_formulir') ;
		$data_sppd = [];
		
	
		
		$sppd = $this->M_DB->join2tbl('*',['tb_pegawai','tb_formulir'],['nm_pegawai','nama']);
	
		foreach($sppd as $row_sppd){
			if(! in_array($row_sppd['id'],$autRiwayat)){
				$data_sppd[] = $row_sppd;
			}
		}
		$data['sppd'] = $data_sppd;
		$data['riwayat'] = [];
		$tujuan = [];
		foreach($this->M_DB->getAll('tb_riwayat') as $rowRiwayat){
			if(!in_array($rowRiwayat['tujuan'],$tujuan)){
				$tujuan[] = $rowRiwayat['tujuan'];
				$data['riwayat'] [] = $rowRiwayat;
			}
		}

		// var_dump($data['riwayat']);die();
	
		$this->load->view('tmpl/header',['admin'=>$this->session->userdata('admin')['data']]);
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/sppd',$data);
		$this->load->view('tmpl/footer');
	}

	public function r_surat_tugas($tujuan = null){
		$data['data'] = $this->M_DB->join2tbl('',['tb_pegawai','tb_formulir'],['nm_pegawai','nama'],['tempat_tujuan'=>$tujuan]);
			
		// var_dump($data['data']);die();
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

		$this->M_DB->delete('tb_formulir',['tempat_tujuan'=>$id]);
		$this->M_DB->delete('tb_riwayat',['tujuan'=>$id]);
		redirect(base_url('sppd'));
		
		// $auth = $this->M_DB->getWhere('tb_formulir',['id'=>$id]);
		// if($auth){
		// 	$this->M_DB->delete('tb_formulir',['id'=>$id]);
			
		// 	redirect(base_url('sppd'));
		// }else{
		// 	redirect(base_url('sppd'));
		// }
		
	}

	public function riwayatkan($id = null,$tujuan = null,$tgl = null)
	{	
		$auth = $this->M_DB->add('tb_riwayat',['id_formulir'=>$id,'tujuan'=>$tujuan,'tgl'=>$tgl]);
		redirect(base_url('sppd'));
		
		
	}

}
