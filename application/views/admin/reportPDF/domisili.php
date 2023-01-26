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
        </div>
        <div style="display: inline-block">
            <h5>
                PEMERINTAH KABUPATEN BULUKUMBA
            </h5>
            <h1>
                DINAS PARIWISATA
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
        <table cellspacing="5">
            <tr>
                <td>Kode Kegiatan </td>
                <td>:</td>
                <td><?=$data->kode_kegiatan?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 5.1.02.04.01.0003</td>
            </tr>
            <tr>
                <td>Nama Kegiatan </td>
                <td>:</td>
                <td> XXXXXXXXXX</td>
            </tr>
            <tr>
                <td><p style="font-size: 30px;margin-top: 20px; font-weight: bold">K W  I T A N S I</p></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Sudah Terima </td>
                <td>:</td>
                <td>Bendahara Pengeluaran DINAS PARIWISATA</td>
            </tr>
            <tr>
                <td>Terbilang </td>
                <td>:</td>
                <td>xx</td>
            </tr>
            <tr>
                <td>Untuk Keperluan </td>
                <td>:</td>
                <td>xx</td>
            </tr>
            <tr>
                <td>Uang Sejumlah </td>
                <td>:</td>
                <td>xx</td>
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
                    Biaya Uang Harian : Rp 60.000 x 2 Hari
                    <br>
                    Transport :
                    <br>
                     BULUKUMBA - KAJANG
                    <br>
                     <b>JUMLAH</b>

                </td>
                <td valign="top" style="border-left: 1px solid #000;border-right: 1px solid #000;text-align: right; padding: 5px 20px">
                    240,000
                    <br>
                    <br>
                    20,000
                    <br>
                    <b>Rp.  540,000</b>
                </td>
                <td style="border-right: none;">

                </td>
                <td style="border-left:1px solid black"></td>
            </tr>
            <tr>
                <th  colspan="4" style="text-align: left;border-right: none;">
                    <b>Terbilang : </b>
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

        <table style="width: 100%">
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
                <th align="left"> &nbsp; &nbsp; &nbsp; &nbsp;<u>xxxxx</u></th>
                <th align="left"> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<u>xxxxx</u></th>
                <th align="left"> &nbsp; &nbsp; &nbsp; &nbsp;<u>xxxxx</u></th>
            </tr>
            <tr>
                <td> &nbsp; &nbsp; &nbsp; &nbsp;xxx</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;xxx</td>
                <td>&nbsp; &nbsp; &nbsp; &nbsp;xxx</td>
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
                        <u><b>Mengetahui / Menyetujui</b></u><br>
                        Pangkat : xxx <br>
                        NIP : xxxxx
                    </div>
                </td>
            </tr>
        </table>
        
    </div>




    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="header">
        <div class="logo_kop" style="display: inline;">
            <img width="100" height="100" src="<?=base_url()?>assets/admin/img/logo.jpeg">
        </div>
        <div style="display: inline-block">
            <br><br>
            <h5>
                PEMERINTAH KABUPATEN BULUKUMBA
            </h5>
            <h1>
                DINAS PARIWISATA
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
                <td>......../Dispar.1/II/2021</td>
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
            <td>KEPALA DINAS PARIWISATA KABUPATEN BULUKUMBA</td>
        </tr>
        <tr>
            <td>2.</td>
            <td >
                Nama /NIP Pegawai yang diperintahkan melakukan perjalanan dinas
            </td>
            <td>:</td>
            <td>
                Muh Ali Saleng,SH,M.Si
                <br>
                19681231 199403 1 051
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
                        <td>Pembina Utama Muda / IV.</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>Kepala Dinas</td>
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
                Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).
            </td>
        </tr>
        <tr>
            <td>5.</td>
            <td >
               Alat angkut yang digunakan
            </td>
            <td>:</td>
            <td>xxxxx</td>
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
                        <td>Pembina Utama Muda / IV.</td>
                    </tr>
                
                    <tr>
                        <td>Kepala Dinas</td>
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
                        <td>Pembina Utama Muda / IV.</td>
                    </tr>
                    <tr>
                        <td>Pembina Utama Muda / IV.</td>
                    </tr>
                    <tr>
                        <td>Kepala Dinas</td>
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
                        <td>Pembina Utama Muda / IV.</td>
                    </tr>
                    <tr>
                        <td>Kepala Dinas</td>
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
    <div style="display: inline-block;margin-left:60% ">
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
                <td>Kepala Dinas</td>
                <td>:</td>
                <td>......../Dispar.1/II/2021</td>
            </tr>
            <tr>
                <td>
                    <br><br>
                    <u><b>xxxxxx</b></u>
                    <br>
                    Pangkat : xxxx
                    <br>
                    NIP. xxxx
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
                <td>XXXXXX</td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>:</td>
                <td>XXXXXX</td>
            </tr>
            <tr>
                <td>Pangkat / Golongan</td>
                <td>:</td>
                <td>XXXXXX</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>XXXXXX</td>
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
                <td>XXXXXX</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td>XXXXXX</td>
            </tr>
            <tr>
                <td>Tempat Tujuan</td>
                <td>:</td>
                <td>XXXXXX</td>
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
                    a. Telah Masing-masing menghadiri rapat Musrenbang Tingkat Kecamatan Tahun 2021 sesuai jadwal yang telah ditetapkan dan tetap mengutamakan protokol kesehatan Covid-19 (3M).
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
                a. Usulan dari masing-masing desa maksimal 3 usulan program kegiatan.2.Usulan akan ditindak lanjuti di Musrenbang Kabupaeten yang akan dikawal oleh tim yang ditunjuk oleh Camat Kajang
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
            <h4><u>xxxxxxxxxx</u></h4>
            <p>Pangkat : XXXXXXXXXX</p>
            <p>NIP. XXXXXXXXXX</p>
        </div>
        <div  style="float: right;width:287px; red;"><h4><u>XXXXXXX</u></h4>
        </div>
        <div style="clear: both"></div>
    </div>  
</body>
</html>