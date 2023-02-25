<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Domisili</title>
    <link href="<?php echo base_url()?>assets/admin/css/report.css" rel="stylesheet">

</head>
<body>
    <div class="header">
        <div class="logo_kop" style="display: inline;">
            <img width="100" height="100" src="<?=base_url()?>assets/admin/img/logo.jpeg">
        </div><br>
        <div style="display: inline-block">
            <h5>
                PEMERINTAH KABUPATEN BULUKUMBA
            </h5>
            <h1>
                DINAS PARIWISATA PEMUDA & OLAHRAGA
            </h1>
            <span>
                Jl. Lanto Dg. Pasewang No. 31 Bulukumba. Telp/Fax : 0413 - 83700
            </span>
            <span id="kop_email">
                email : disbudparbulukumba@gmail.com   Website : www.budpar.bulukumbakab.go.id
            </span>
        </div>
        <hr>
    </div>
    <br>
    <!-- <div class="title">
        <p id="title">SURAT KETERANGAN DOMISILI</p>
        <p id="nomor_surat">Nomor  : 07/DBT/ XI /2021</p>
    </div> -->
    <br>
    <div id="isi">
        <table cellspacing="5" border="0">
            <tr>
                <td width="100">Kode Kegiatan </td>
                <td>:</td>
                <td><?= $data['kode_kegiatan'] ?></td>
            </tr>
            <tr>
                <td>Nama Kegiatan </td>
                <td>:</td>
                <td> <?= $data['nama_kegiatan'] ?></td>
            </tr>
            <tr>
                <td colspan="3"><p style="font-size: 30px;margin-top: 20px; font-weight: bold">K W  I T A N S I</p></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Sudah Terima </td>
                <td>:</td>
                <td>Bendahara Pengeluaran DINAS PARIWISATA PEMUDA & OLAHRAGA</td>
            </tr>
            <tr>
                <td>Terbilang </td>
                <td>:</td>
                <td><?= $data['terbilang'] ?></td>
            </tr>
            <tr>
                <td>Untuk Keperluan </td>
                <td>:</td>
                <td><?= $data['keperluan_bayar_kwitansi'] ?></td>
            </tr>
            <tr>
                <td>Uang Sejumlah </td>
                <td>:</td>
                <td>Rp. <?= ($kec->uang_harian*$data['lama_perjalanan'])+$kec->transport ?></td>
            </tr>
        </table>    
        <br>
        <h3 style="margin-left: 5px">Rincian Biaya Perjalanan</h3>

        <table id="tbl_rincian" cellspacing="0" style="margin-left: 5px">
            <tr>
                <th>No.</th>
                <th style="border-left: none;border-right: none">PERINCIAN BAIAYA</th>
                <th>JUMLAH</th>
                <th style="border-left: none;border-right: ; padding: 0 10px">KETERANGAN</th>
                <td style="border-left:1px solid black"></td>
            </tr>
            <tr>
                <td valign="top" style="border-left: 1px solid #000;border-right: 1px solid #000;text-align: center; padding-top: 5px">
                    1.
                    <br>
                    2.
                </td>
                <td style="padding: 5px 20px">
                    Biaya Uang Harian : Rp <?= $kec->uang_harian ?> x <?= $data['lama_perjalanan'] ?> Hari
                    <br>
                    Transport :
                    <br>
                     <?= $data['tempat_berangkat'] ?> - <?= $data['tempat_tujuan'] ?>
                    <br>
                     <b>JUMLAH</b>

                </td>
                <td valign="top" style="border-left: 1px solid #000;border-right: 1px solid #000;text-align: right; padding: 5px 20px">
                    <?= $kec->uang_harian*$data['lama_perjalanan'] ?>
                    <br>
                    <br>
                    <?= $kec->transport ?>
                    <br>
                    <b>Rp.  <?= ($kec->uang_harian*$data['lama_perjalanan'])+$kec->transport ?></b>
                </td>
                <td style="border-right: none;">

                </td>
                <td style="border-left:1px solid black"></td>
            </tr>
            <tr>
                <th  colspan="4" style="text-align: left;border-right: none;">
                    <b>Terbilang : </b> <span style="font-weight: normal;"><?= $data['terbilang'] ?></span>
                </th>
                <td style="border-left:1px solid black"></td>
            </tr>
            <tr>
                <td  colspan="4" style="text-align: right;border: none;">
                    <br>
                    <p>Bulukumba,</p>
                </td>
                <!-- <td style="border-left:1px solid black"></td> -->
            </tr>
        </table>
        <br>

        <table style="width: 100%" border="0">
            <tr>
                <th>PPTK &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Bendahara Pengeluaran&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                <th>Yang Menerima</th>
            </tr>
            <tr>
                <td style="padding: 20px"></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <th align="left"><u><?= $data['pptk'] ?></u></th>
                <th align="left"><u><?= $data['bendahara'] ?></u></th>
                <th align="left"><u><?= $data['nama'] ?></u></th>
            </tr>
            <tr>
                <td align="left">Nip.<?= $data['nip_pptk'] ?></td>
                <td align="left">Nip.<?= $data['nip_bendahara'] ?></td>
                <td align="left">Nip.<?= $data['nip'] ?></td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <div style="text-align: left;display: inline-block">
                        <br><br>
                        Mengetahui / Menyetujui <br>
                        <b>Pengguna Anggaran</b>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <div style="text-align: left;display: inline-block">
                        <br><br><br><br>
                        <u><b>Drs. Muhammad Daud Kahal,.M.Si</b></u><br>
                        Pangkat : Pembina Utama Muda <br>
                        NIP : 19680105 199703 1 011
                    </div>
                </td>
            </tr>
        </table>
        
    </div>




    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="header">
        <div class="logo_kop" style="display: inline;">
            <img width="100" height="100" src="<?=base_url()?>assets/admin/img/logo.jpeg">
        </div><br>
        <div style="display: inline-block">
            <!-- <br><br> -->
            <h5>
                PEMERINTAH KABUPATEN BULUKUMBA
            </h5>
            <h1>
                DINAS PARIWISATA PEMUDA & OLAHRAGA
            </h1>
            <span>
                Jl. Lanto Dg. Pasewang No. 31 Bulukumba. Telp/Fax : 0413 - 83700
            </span>
            <span id="kop_email">
                email : disbudparbulukumba@gmail.com   Website : www.budpar.bulukumbakab.go.id
            </span>
        </div>
        <hr>
    </div>
    <div style="display: inline-block;margin-left:60% ">
        <table>
            <tr>
                <td>Lembar</td>
                <td>:</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Kode No.</td>
                <td>:</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Nomor</td>
                <td>:</td>
                <td><?= $data['no_sppd'] ?></td>
            </tr>
        </table>
    </div>
    <br><br>
    <h3>
        <center> <u>SURAT PERINTAH PERJALANAN DINAS</u></center>
    </h3>
    <br>
    <table border="1" style="width: 100%;" cellspacing="0" cellpadding="10" id="tbl_sppd">
        <tr>
            <td>1.</td>
            <td>Yang Memerintah</td>
            <td>:</td>
            <td>KEPALA DINAS PARIWISATA PEMUDA & OLAHRAGA KABUPATEN BULUKUMBA</td>
        </tr>
        <tr>
            <td>2.</td>
            <td >
                Nama /NIP Pegawai yang diperintahkan melakukan perjalanan dinas
            </td>
            <td>:</td>
            <td>
                <?= $data['nama'] ?>
                <br>
                <?= $data['nip'] ?>
            </td>
        </tr>
        <tr>
            <td valign="top">3.</td>
            <td >
                <table border="0">
                    <tr>
                        <td valign="top">a</td>
                        <td>Pangkat / Gol ruang gaji menurut PP No. 6 Tahun 1997</td>
                    </tr>
                    <tr>
                        <td valign="top">b</td>
                        <td>Jabatan</td>
                    </tr>
                </table>
            </td>
            <td>:</td>
            <td valign="top">
                <table border="0">
                    <tr>
                        <td><?= $data['pangkat'] ?></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><?= $data['jabatan'] ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>4.</td>
            <td >
                Maksud mengadakan perjalanan
            </td>
            <td>:</td>
            <td>
                <?= $data['maksud_tujuan'] ?>
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td >
               Alat angkut yang digunakan
            </td>
            <td>:</td>
            <td><?= $data['alat_angkut'] ?></td>
        </tr>
        <tr>
            <td>6.</td>
            <td >
                <table border="0">
                    <tr>
                        <td valign="top">a</td>
                        <td>Tempat Berangkat</td>
                    </tr>
                    <tr>
                        <td valign="top">b</td>
                        <td>Tempat Tujuan</td>
                    </tr>
                </table>
            </td>
            <td>:</td>
            <td valign="top">
                <table border="0">
                    <tr>
                        <td><?= $data['tempat_berangkat'] ?></td>
                    </tr>
                
                    <tr>
                        <td><?= $data['tempat_tujuan'] ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>7.</td>
            <td >
                <table border="0">
                    <tr>
                        <td valign="top">a</td>
                        <td>Lamanya perjalanan dinas</td>
                    </tr>
                    <tr>
                        <td valign="top">b</td>
                        <td>Tanggal berangkat</td>
                    </tr>
                    <tr>
                        <td valign="top">c</td>
                        <td>Tanggal harus kembali</td>
                    </tr>
                </table>
            </td>
            <td>:</td>
            <td valign="top">
                <table border="0">
                    <tr>
                        <td><?= $data['lama_perjalanan'] ?> Hari</td>
                    </tr>
                    <tr>
                        <td><?= $data['tgl_berangkat'] ?></td>
                    </tr>
                    <tr>
                        <td><?= $data['tgl_kembali'] ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>8.</td>
            <td >
                <table border="0">
                <tr>
                    <td>Pembebanan Anggaran</td>
                </tr>
                <tr>
                    <td valign="top">b Instansi</td>
                </tr>
                <tr>
                    <td valign="top">c Mata Anggaran</td>
                </tr>
            </table>
            </td>
            <td>:</td>
            <td valign="top">
                <table border="0">
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>DINAS PARIWISATA PEMUDA & OLAHRAGA</td>
                    </tr>
                    <tr>
                        <td><?= $data['mata_anggaran'] ?></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>9.</td>
            <td >
                Keterangan Lain-lain
            </td>
            <td>:</td>
            <td></td>
        </tr>
    </table>
    <br>
    <div style="display: inline-block;margin-left:50% ">
        <table>
            <tr>
                <td>Dikeluarkan Di</td>
                <td>:</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>Pada Tanggal</td>
                <td>:</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td> <b> Kepala Dinas</b></td>
                
            </tr>
            <tr>
                <td colspan="3">
                    <br><br>
                    <u><b>Drs. Muhammad Daud Kahal,.M.Si</b></u>
                    <br>
                    Pangkat : Pembina Utama Muda
                    <br>
                    NIP. 19680105 199703 1 011
                </td>
            </tr>
        </table>
    </div>
    <!-- Page 3 -->
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <h3><center>LAPORAN PELAKSANAAN PERJALANAN DINAS</center></h3>
    <br><br>
    <div style="box-sizing: border-box;padding: 0 10px">

   
        <p>Pegawai yang melakukan perjalanan dinas :</p>
        <br>
        <table border="1" cellspacing="0" cellpadding="10" style="width: 1500px" >
            <tr>
                <td valign="top" rowspan="4" style="width:10px">1.</td>
                <td  style="width:200px">Nama</td>
                <td  style="width:5px">:</td>
                <td><?= $data['nama'] ?></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td><?= $data['nip'] ?></td>
            </tr>
            <tr>
                <td>Pangkat / Golongan</td>
                <td>:</td>
                    <td><?= $data['pangkat'] ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td><?= $data['jabatan'] ?></td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" rowspan="4">2.</td>
                <td colspan="3">Dasar pelaksanaan perjalanan dinas</td>
            </tr>
        
            <tr>
                <td>Nomor SPPD</td>
                <td>:</td>
                <td><?= $data['no_sppd'] ?></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><?= $data['tgl_surat_tugas'] ?></td>
            </tr>
            <tr>
                <td>Tempat Tujuan</td>
                <td>:</td>
                <td><?= $data['tempat_tujuan'] ?></td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" rowspan="2">3.</td>
                <td colspan="3">Hasil pelaksanaan perjalanan dinas</td>
            </tr>
            <tr>
                <td colspan="3">
                    a. <?= $data['hasil_perjalanan_dinas'] ?>
                </td> 
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td valign="top" rowspan="4">4.</td>
                <td colspan="3">Kesimpulan</td>
            </tr>
            <tr>
                <td colspan="3">
                a. <?= $data['kesimpulan'] ?>
                </td> 
            </tr>
        </table>
        <br>
        <p>Demikian laporan pelaksanaan perjalanan dinas ini dibuat untuk bahan seperlunya.</p>
        <br>
        <p style="text-align: right">Bulukumba, 17 Februari 2021&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <h4 style="float: left">Kepala SKPD</h4>
        <h4  style="float: right">Pembuat Laporan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
        <div style="clear: both"></div>
        <br><br><br><br>
        <div style="float: left">
            <h4><u>Drs. Muhammad Daud Kahal,.M.Si</u></h4>
            <p>Pangkat :  Pembina Utama Muda</p>
            <p>NIP. 19680105 199703 1 011</p>
        </div>
        <div  style="float: right;width:287px; red;">
            <h4><u><?= $data['nama'] ?></u></h4>
            Nip. <?= $data['nip'] ?>
        </div>
        <div style="clear: both"></div>
    </div>  
</body>
</html>