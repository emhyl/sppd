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
		// if($key!=null){
		// 	var_dump($key);die();
		// }
		// $autRiwayat = $this->CForm->ascToNum($this->M_DB->getAll('tb_riwayat'),'id_formulir') ;
		// $data_sppd = [];
			
		// $sppd = $this->M_DB->join2tbl('*',['tb_pegawai','tb_formulir'],['nm_pegawai','nama']);
	
		// foreach($sppd as $row_sppd){
		// 	if(! in_array($row_sppd['id'],$autRiwayat)){
		// 		$data_sppd[] = $row_sppd;
		// 	}
		// }

		// $data['sppd'] = $data_sppd;
		// $data['riwayat'] = [];
		// $tujuan = [];

		// foreach($this->M_DB->getAll('tb_riwayat') as $rowRiwayat){
		// 	if(!in_array($rowRiwayat['tujuan'],$tujuan)){
		// 		$tujuan[] = $rowRiwayat['tujuan'];
		// 		$data['riwayat'] [] = $rowRiwayat;
		// 	}
		// }

		$data['sppd'] = $this->M_DB->getAllWhere('tb_formulir',['status'=>'berlansung']);
		// $data['riwayat'] = $this->M_DB->getAll('tb_riwayat');
		$tgl = [];
		$tujuan = [];
		$data['riwayat'] = [];
		foreach($this->M_DB->getAll('tb_riwayat') as $rowRiwayat){
			if( (!in_array($rowRiwayat['tgl'],$tgl)) || (!in_array($rowRiwayat['tujuan'],$tujuan))  ){

				$tgl[] = $rowRiwayat['tgl'];
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

	public function cari()
	{
		$key = $this->input->post('key');
		if($key == null){
			redirect(base_url('sppd'));
			exit();
		}
		$data['sppd'] = $this->M_DB->join2tbl('*',['tb_pegawai','tb_formulir'],['nm_pegawai','nama'],['tgl_berangkat'=>$key]);
		// $cari = $this->M_DB->like("nm_pegawai",$key,"tb_pegawai");
		// foreach ($cari as $value) {
		// 	$cek = $this->M_DB->getWhere('tb_formulir',['nama'=>$value['nm_pegawai']]);
		// 	if($cek != null){
		// 		$data['sppd'][] =$cek;

		// 	}
		// }
	
		// var_dump(date('Y-m-d'));die();
	
		$this->load->view('tmpl/header',['admin'=>$this->session->userdata('admin')['data']]);
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/sppd_cari',$data);
		$this->load->view('tmpl/footer');
	}

	public function detail($tgl = null, $tujuan = null)
	{
		$riwayat = $this->M_DB->getAllWhere('tb_riwayat',['tujuan'=>$tujuan,'tgl'=>$tgl]);
		// var_dump($riwayat);die();
		$sppd = $this->M_DB->join2tbl('*',['tb_pegawai','tb_formulir'],['nm_pegawai','nama'],['tempat_tujuan'=>$tujuan,'tgl_berangkat'=>$tgl,'status'=>'arsip']);


		// var_dump($sppd);die();
		$data['sppd'] = [];
		foreach ($riwayat as $value) {
			$data['sppd'][] = $this->M_DB->join2tbl('*',['tb_pegawai','tb_formulir'],['nm_pegawai','nama'],['tb_formulir.id'=>$value['id_formulir']])[0];
		}

		$data['tgl'] = $tgl;
		$data['tujuan'] = $tujuan;
	
		// var_dump($data['sppd']);die();
	
		$this->load->view('tmpl/header',['admin'=>$this->session->userdata('admin')['data']]);
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/sppd_detail',$data);
		$this->load->view('tmpl/footer');
	}

	public function r_surat_tugas($tgl = null , $tujuan = null){

		if(!$tujuan == null){

			$data['data'] = $this->M_DB->join2tbl('',['tb_pegawai','tb_formulir'],['nm_pegawai','nama'],['tgl_berangkat'=>$tgl,'tempat_tujuan'=>$tujuan]);

		}else{

			$data['data'] = $this->M_DB->join2tbl('',['tb_pegawai','tb_formulir'],['nm_pegawai','nama'],['status'=>'berlansung']);
		}

			
		// var_dump($data['data']);die();
		$this->load->library('Pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Portrait'
		);
		
		$this->pdf->load('admin/reportPDF/surat_tugas',$data,$paper);
	}

	public function laporan(){

		$data['data'] = $this->M_DB->join2tbl('',['tb_pegawai','tb_formulir'],['nm_pegawai','nama']);

			
		// var_dump($data['data']);die();
		$this->load->library('Pdf');
		$this->pdf->filename = 'laporan.pdf';
		$paper = array(
					'size' => 'A4',
					'orientation' => 'Portrait'
		);
		
		$this->pdf->load('admin/reportPDF/laporan',$data,$paper);
	}

	public function hapus($id = null)
	{	

		$dataRiwayat = $this->M_DB->getAllWhere('tb_riwayat',['tujuan'=>$id]);
		foreach ($dataRiwayat as $value) {
			$this->M_DB->delete('tb_formulir',['id'=>$value['id_formulir']]);
			$this->M_DB->delete('tb_riwayat',['id'=>$value['id']]);
			
		}
		// var_dump($dataRiwayat);die();

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

		$data = $this->M_DB->getAllWhere('tb_formulir',['status'=>'berlansung']);
		foreach ($data as $value) {
			$this->M_DB->add('tb_riwayat',['id_formulir' => $value['id'],'tujuan'=>$value['tempat_tujuan'],'tgl'=>$value['tgl_berangkat'] ]);
			$this->M_DB->edit('tb_formulir',['status'=>'arsip'],['id'=>$value['id']]);
		}
		redirect(base_url('sppd'));
		
		
	}

}
