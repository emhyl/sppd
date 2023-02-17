<?php

use PharIo\Manifest\Type;
use phpDocumentor\Reflection\Types\Parent_;

defined('BASEPATH') OR exit('No direct script access allowed');

class Formulir extends CI_Controller {
	public $data_formulir;
	public $item_pegawai;
	public $item_kegiatan;
	public $item_kendaraan;
	public $option_kepala_dinas = "";
	public $option_nama_kegiatan = "";
	public $option_nama_kendaraan = "";
	public $option_tempat_tujuan = "";
	public $option_sbu = "";
	public function __construct()
	{
		Parent::__construct();

		if(!$this->session->userdata('admin')){
			redirect(base_url('Login'));
		}
		$this->data_formulir = $this->M_DB->getField('tb_formulir');
		$this->item_pegawai =  $this->M_DB->getAll('tb_pegawai');
		$this->item_kegiatan =  $this->M_DB->getAll('tb_kegiatan');
		$this->item_kendaraan =  $this->M_DB->getAll('tb_kendaraan');

		foreach($this->item_pegawai as $item){
			$this->option_kepala_dinas .= "<option value='{$item['id']}'>{$item['nm_pegawai']}</option>";
		}
		foreach($this->item_kegiatan as $item){
			$this->option_nama_kegiatan .= "<option value='{$item['kd_kegiatan']}'>{$item['nm_kegiatan']}</option>";
		}
		foreach($this->item_kendaraan as $item){
			$this->option_nama_kendaraan .= "<option value='{$item['nm_kendaraan']}'>{$item['nm_kendaraan']}</option>";
		}
		foreach( $this->M_DB->getAll('tempat_tujuan') as $item){
			$this->option_tempat_tujuan .= "<option value='{$item['tujuan']}'>{$item['tujuan']}</option>";
		}
		
		foreach( $this->M_DB->getAll('tb_sbu') as $item){
			$this->option_sbu .= "<option value='{$item['id']}'>{$item['kecematan']}</option>";
		}
		
	}
 
	
	public function index()
	{
		$label_baris1 = [
			[
				'label' => 'Kepala Dinas',
				'typ' => 'text',
				'type' => 'select',
				'item' => $this->option_kepala_dinas,
				'select' => 'coba',
				'name' => 'kepala_dinas'
			],
			[
				'label' => 'Sekertaris',
				'typ' => 'text',
				'type' => 'select',
				'item' => $this->option_kepala_dinas,
				'select' => 'coba',
				'name' => 'sekertaris'
			],
			[
				'label' => 'PPTK',
				'type' => 'select',
				'typ' => 'text',
				'item' => $this->option_kepala_dinas,
				'select' => 'coba',
				'name' => 'pptk'
			],
			[
				'label' => 'Nama Kegiatan',
				'typ' => 'text',
				'type' => 'select',
				'item' =>  $this->option_nama_kegiatan,
				'select' => 'coba',
				'name' => 'nama_kegiatan'
			],
			[
				'label' => 'Kode Kegiatan',
				'typ' => 'text',
				'type' => 'input',
				'enable' => false,
				'value' => '001',
				'name' => 'kode_kegiatan'
			],
			[
				'label' => 'Bendahara',
				'type' => 'select',
				'typ' => 'text',
				'item' =>  $this->option_kepala_dinas,
				'select' => 'coba',
				'name' => 'bendahara'
			]
		];

		$label_baris2 = [
			[
				'label' => 'No. Surat tugas Kepala Dinas',
				'typ' => 'text',
				'type' => 'input',
				'enable' => true,
				'value' => '094 /....... /Pariwisata/III/2021',
				'name' => 'no_surat_tugas_kepala_dinas'
			],
			[
				'label' => 'No. Surat tugas( umum )',
				'typ' => 'text',
				'type' => 'input',
				'enable' => true,
				'value' => '094 /....... /Pariwisata/III/2021',
				'name' => 'no_surat_tugas_umum'
			],
			[
				'label' => 'No. SPPD',
				'typ' => 'text',
				'type' => 'input',
				'enable' => true,
				'value' => '....... /Dispar.1/II/2021',
				'name' => 'no_sppd'
			],
			[
				'label' => 'Alat Angkut',
				'typ' => 'text',
				'type' => 'select',
				'item' =>  $this->option_nama_kendaraan,
				'select' => 'coba',
				'name' => 'alat_angkut'
			],
			[
				'label' => 'Tempat Berangkat',
				'typ' => 'text',
				'type' => 'input',
				'enable' => true,
				'value' => 'BULUKUMBA',
				'name' => 'tempat_berangkat'
			]
		];

		$label_baris2_1 = [
			[
				'label' => 'Tempat Tujuan',
				'typ' => 'text',
				'type' => 'select',
				'item' =>  $this->option_tempat_tujuan,
				'select' => 'coba',
				'name' => 'tempat_tujuan'
			],
			[
				'label' => 'Mata Anggaran Pj. Dalam Daerah',
				'typ' => 'text',
				'type' => 'input',
				'enable' => true,
				'value' => '5.1.02.04.01.0003',
				'name' => 'mata_anggaran'
			]
		];
	
		$label_baris3 = [
			[
				'label' => 'Dasar Surat Tugas',
				'typ' => 'textarea',
				'type' => 'input',
				'enable' => true,
				'value' => 'Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:',
				'name' => 'dasar_surat_tugas'
			],
			[
				'label' => 'Maksud & Tujuan Pelaksanaan Perjalanan Dinas',
				'typ' => 'textarea',
				'type' => 'input',
				'enable' => true,
				'value' => 'Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).',
				'name' => 'maksud_tujuan'
			]
		];

		$label_baris4 = [
			[
				'label' => 'Lama Perjalanan (Hari)',
				'typ' => 'text',
				'type' => 'number',
				'enable' => true,
				'value' => '1',
				'name' => 'lama_perjalanan'
			],
			[
				'label' => 'Tgl. Berangkat ',
				'typ' => 'text',
				'type' => 'date',
				'enable' => true,
				'value' => date('Y-m-d'),
				'name' => 'tgl_berangkat'
			],
			[
				'label' => 'Tgl. Kembali',
				'typ' => 'text',
				'type' => 'date',
				'enable' => true,
				'value' => date('Y-m-d'),
				'name' => 'tgl_kembali'
			],
			[
				'label' => 'Tgl. Surat Tugas',
				'typ' => 'text',
				'type' => 'date',
				'enable' => true,
				'value' => date('Y-m-d'),
				'name' => 'tgl_surat_tugas'
			],
			[
				'label' => 'Tgl. Laporan',
				'typ' => 'text',
				'type' => 'date',
				'enable' => true,
				'value' => date('Y-m-d'),
				'name' => 'tgl_laporan'
			],
			[
				'label' => 'No. Surat tugas ( driver ) ',
				'typ' => 'text',
				'type' => 'input',
				'enable' => true,
				'value' => '00',
				'name' => 'no_surat_tugas_driver'
			]
		];

		
		$label_baris4_1 = [
			[
				'label' => 'Hasil Perjalanan Dinas',
				'typ' => 'textarea',
				'type' => 'input',
				'enable' => true,
				'value' => 'Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).',
				'name' => 'hasil_perjalanan_dinas'
			],
			[
				'label' => 'Kesimpulan',
				'typ' => 'textarea',
				'type' => 'input',
				'enable' => true,
				'value' => '1.Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang',
				'name' => 'kesimpulan'
			]
		];
		
		$label_baris5 = [
			[
				'label' => 'Keperluan Pembayaran Kwitansi',
				'typ' => 'textarea',
				'type' => 'input',
				'enable' => true,
				'value' => 'Biaya perjalanan dinas dalam rangka Menghadiri Musrembang tingkat Kecamatan di Kecamatan Kajang sesuai SPPD terlampir.',
				'name' => 'keperluan_bayar_kwitansi'
			]
		];

		$label_baris6 = [
			[
				'label' => 'Nama',
				'typ' => 'text',
				'type' => 'select',
				'item' => $this->option_kepala_dinas,
				'select' => 'coba',
				'name' => 'nama'
			],
			[
				'label' => 'NIP',
				'typ' => 'text',
				'type' => 'input',
				'enable' => false,
				'value' => '',
				'name' => 'nip'
			],
			[
				'label' => 'Pangkat',
				'typ' => 'text',
				'type' => 'input',
				'enable' => false,
				'value' => '',
				'name' => 'pangkat'
			],
			[
				'label' => 'Jabatan',
				'typ' => 'text',
				'type' => 'input',
				'enable' => false,
				'value' => '',
				'name' => 'jabatan'
			]
		];

		$label_baris6_1 = [
			[
				'label' => 'SBU PERJALANAN DINAS DALAM DAERAH (KECAMATAN)',
				'typ' => 'text',
				'type' => 'select',
				'item' => $this->option_sbu,
				'select' => 'coba',
				'name' => 'kecematan'
			],
			[
				'label' => 'Uang Perjalanan Dinas',
				'typ' => 'text',
				'type' => 'input',
				'enable' => false,
				'value' => '',
				'name' => 'biaya'
			],
			[
				'label' => 'Terbilang',
				'typ' => 'text',
				'type' => 'input',
				'enable' => true,
				'value' => '',
				'name' => 'terbilang'
			]
		];


	
		$data['input_baris_1'] = $this->input_sbaris_1($label_baris1);
		$data['input_baris_2'] = $this->input_sbaris_1($label_baris2);
		$data['input_baris_2_1'] = $this->input_sbaris_1($label_baris2_1);
		$data['input_baris_3'] = $this->input_sbaris_1($label_baris3,"vertical");
		$data['input_baris_4'] = $this->input_sbaris_1($label_baris4);
		$data['input_baris_4_1'] = $this->input_sbaris_1($label_baris4_1,"vertical");
		$data['input_baris_5'] = $this->input_sbaris_1($label_baris5,"vertical");
		$data['input_baris_6'] = $this->input_sbaris_1($label_baris6);
		$data['input_baris_6_1'] = $this->input_sbaris_1($label_baris6_1);

		$this->load->view('tmpl/header',['admin'=>$this->session->userdata('admin')['data']]);
		$this->load->view('tmpl/sidebar');
		$this->load->view('admin/formulir',$data);
		$this->load->view('tmpl/footer');
	}



	private function input_sbaris_1($label = [], $type=null){
		


		$input = "";
		$class_awal = "pr-1";
		foreach($label as $row){


			if($row['type'] == 'input' || $row['type'] == 'date' || $row['type'] == 'number'){

				$enable = "";
				if(!$row['enable']){
					$enable = "readonly";
				}
				// Bagian Vertikal
				if($type == "vertical"){

					if($row['typ'] == "textarea"){
						$input .= "
							<div class='row'>
								<label for='{$row['name']}' class='col-sm-3 col-form-label'>{$row['label']} : </label>
								<div class='col-sm-9'>
									<div class='mb-3'>
										<textarea name='{$row['name']}' class='form-control border p-1 rounded' id='{$row['name']}' rows='3'>{$row['value']}</textarea>
									</div>
								</div>
							</div>

						";
					}else{

						$input .= "
									<div class='row'>
										<label for='{$row['name']}' class='col-sm-3 col-form-label'>{$row['label']} : </label>
										<div class='col-sm-9'>
										<input name='{$row['name']}' type='text' class='form-control' id='{$row['name']}'>
										</div>
									</div>
								";
					}
				// bagian Horizontal
				}else{
					
					$input .= "
								<div class='col {$class_awal}'>
									<div class='form-group'>
									<label for='{$row['name']}'>{$row['label']}</label>
									<input name='{$row['name']}' {$enable} type='{$row['type']}' class='form-control' id='{$row['name']}' value='{$row['value']}'>
									</div>
								</div>
					";
				}


			}else{

				$input .= "
							<div class='col {$class_awal}'>
								<div class='form-group'>
									<label class='d-block'>{$row['label']}</label>
									<select name='{$row['name']}' id='{$row['name']}' class='form-group p-2 rounded border w-100' aria-label='Default select example'>
										{$row['item']}
									</select>
								</div>
							</div>  
						";				
			}
			
			$class_awal ="pl-1";
		

		}
		// <option selected>--Pilih Kepala Dinas--</option>

		
		return $input;
	}
	
	public function save()
	{
		
		$dt_post = $this->input->post();
		// var_dump($dt_post);die();
		$data = [
			'kepala_dinas' => $this->M_DB->getWhere('tb_pegawai',['id'=>$dt_post['kepala_dinas']])->nm_pegawai,
			'sekertaris' => $this->M_DB->getWhere('tb_pegawai',['id'=>$dt_post['sekertaris']])->nm_pegawai,
			'pptk' => $this->M_DB->getWhere('tb_pegawai',['id'=>$dt_post['pptk']])->nm_pegawai,
			'nip_pptk' => $this->M_DB->getWhere('tb_pegawai',['id'=>$dt_post['pptk']])->nip,
			'nama_kegiatan' => $this->M_DB->getWhere('tb_kegiatan',['kd_kegiatan'=>$dt_post['nama_kegiatan']])->nm_kegiatan,
			'kode_kegiatan' => $dt_post['kode_kegiatan'],
			'bendahara' => $this->M_DB->getWhere('tb_pegawai',['id'=>$dt_post['bendahara']])->nm_pegawai,
			'nip_bendahara' => $this->M_DB->getWhere('tb_pegawai',['id'=>$dt_post['bendahara']])->nip,
			'no_surat_tugas_kepala_dinas' => $dt_post['no_surat_tugas_kepala_dinas'],
			'no_surat_tugas_umum' => $dt_post['no_surat_tugas_umum'],
			'no_sppd' => $dt_post['no_sppd'],
			'alat_angkut' => $dt_post['alat_angkut'],
			'tempat_berangkat' => $dt_post['tempat_berangkat'],
			'tempat_tujuan' => $dt_post['tempat_tujuan'],
			'mata_anggaran' => $dt_post['mata_anggaran'],
			'dasar_surat_tugas' => $dt_post['dasar_surat_tugas'],
			'maksud_tujuan' => $dt_post['maksud_tujuan'],
			'lama_perjalanan' => $dt_post['lama_perjalanan'],
			'tgl_berangkat' => $dt_post['tgl_berangkat'],
			'tgl_kembali' => $dt_post['tgl_kembali'],
			'tgl_surat_tugas' => $dt_post['tgl_surat_tugas'],
			'tgl_laporan' => $dt_post['tgl_laporan'],
			'no_surat_tugas_driver' => $dt_post['no_surat_tugas_driver'],
			'hasil_perjalanan_dinas' => $dt_post['hasil_perjalanan_dinas'],
			'kesimpulan' => $dt_post['kesimpulan'],
			'keperluan_bayar_kwitansi' => $dt_post['keperluan_bayar_kwitansi'],
			'nama' => $this->M_DB->getWhere('tb_pegawai',['id'=>$dt_post['nama']])->nm_pegawai,
			'nip' => $dt_post['nip'],
			'pangkat' => $dt_post['pangkat'],
			'jabatan' => $dt_post['jabatan'],
			'id_kecematan' => $dt_post['kecematan'],
			'terbilang' => $dt_post['terbilang'],
			'status' => 'berlansung'
		];

		// var_dump($data);die();

		$this->M_DB->add('tb_formulir',$data);
		redirect(base_url('sppd'));
	}
	
	public function get_data_pegawai($key = null)
	{
		
		$data = json_encode($this->M_DB->getWhere('tb_pegawai',['id'=>$key]));
		echo $data;
	}
	
	public function get_sbu($key = null)
	{
		$data = json_encode($this->M_DB->getWhere('tb_sbu',['id'=>$key]));
		echo $data;
	}

}
