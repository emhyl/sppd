<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report Domisili</title>
    <link href="<?php echo base_url()?>assets/admin/css/ST.css" rel="stylesheet">

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
    <!-- <div class="title">
        <p id="title">SURAT KETERANGAN DOMISILI</p>
        <p id="nomor_surat">Nomor  : 07/DBT/ XI /2021</p>
    </div> -->
    <div id="isi">
        <p id="title">SURAT PERINTAH TUGAS</p>
        <p><center>Nomor : 094/..... /Dispar.1/II/2021</center></p>
        <br>
        <hr style="border-width:1px ">
        <p>
            Berdasarkan surat Bupati Bulukumba, Nomor: 050.2/72/Bappeda, Tanggal 20 Januari 2021 perihal Jadawal Pelaksanaan Musrenbang Tingkat Kecamatan Tahun 2021, Maka dipandang perlu:
        </p>
        <br>
        <br>
        <h4><center>MENUGASKAN</center></h4>
        <br>
        <p>Kepada :</p>
        <?php for($x=0; $x<50; $x++): ?>
        <table style="margin-left: 60px">
            <tr>
                <td>Kepada</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>XXXXXXXXXX</td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>XXXXXXXXXX</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>XXXXXXXXXX</td>
            </tr>
        </table>
        <?php endfor ?>
        <!-- <table>
            <tr>
                <td>Kepada</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <table>
                        <tr>
                            <td  valign="top">1.</td>
                            <td>
                                <table>
                                    <tr>
                                        <td>Nama</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>xxxxxxxx</td>
                                    </tr>
                                    <tr>
                                        <td>Pangkat</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>xxxxxxxx</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <td>&nbsp;:&nbsp;</td>
                                        <td>xxxxxxxx</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table> -->
    </div>

</body>
</html>