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
        <br>
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
    <!-- <div class="title">
        <p id="title">SURAT KETERANGAN DOMISILI</p>
        <p id="nomor_surat">Nomor  : 07/DBT/ XI /2021</p>
    </div> -->
    <div id="isi">
        <p id="title">SURAT PERINTAH TUGAS</p>
        <p><center>
            <?= $data[0]['no_surat_tugas_kepala_dinas'] ?>
        </center></p>
        <br>
        <hr style="border-width:1px ">
        <p>
            <?= $data[0]['dasar_surat_tugas'] ?>
        </p>
        <br>
        <br>
        <h4><center>MENUGASKAN</center></h4>
        <br>
        <p>Kepada :</p>
        <?php foreach($data as $no => $row): ?>
        <table style="margin-left: 60px" border="0">
            <tr>
                <td valign="top" rowspan="4"><?= $no+1 ?>.&nbsp;&nbsp;&nbsp; </td>
                <td>Nama</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><?= $row['nama'] ?></td>
            </tr>
            <tr>
                <td>NIP</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><?= $row['nip'] ?></td>
            </tr>
            <tr>
                <td>Pangkat</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><?= $row['pangkat'] ?></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><?= $row['jabatan'] ?></td>
            </tr>
        </table>
        <br>
        <?php endforeach ?>
        <p>Untuk :</p>
        <table style="margin-left: 60px" width="90%">
            <tr>
                <td valign="top">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><?= $data[0]['maksud_tujuan'] ?></td>
            </tr>
            <tr>
                <td valign="top">2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Lamanya Perjalanan Dinas &nbsp;&nbsp;:&nbsp;&nbsp;<?= $data[0]['lama_perjalanan'] ?> Hari
                    <br>
                    a. Berangkat Tanggal&nbsp; : <?= $data[0]['tgl_berangkat'] ?><br>
                    b. Pulang Tanggal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;<?= $data[0]['tgl_kembali'] ?>
                </td>
            </tr>
            
        </table>
        <br><br>

        <div style="padding: 0 20px;text-align: right; position: absolute;bottom: 20; right: 20">
            <div style="display:inline-block;">
                <table border="0">
                    <tr>
                        <td>Ditetapkan Di</td>
                        <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                        <td>Bulukumba</td>
                    </tr>
                    <tr>
                        <td>Pada Tanggal</td>
                        <td>&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                        <td><?= $data[0]['tgl_surat_tugas'] ?></td>
                    </tr>
                    <tr>
                        <td colspan="3"><br><b>Kepala Dinas</b></td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <br><br><br><b><u>Drs. Muhammad Daud Kahal,.M.Si</u></b><br>
                            Pangkat : Pembina Utama Muda
                            <br>
                            Nip : 19680105 199703 1 011
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div style="position: absolute;bottom: 20;left: 20">
            <p>Tebusan :</p>
            <br>
            <table style="box-sizing:border-box;padding-left:50px;">
                <tr>
                    <td>1</td>
                    <td>.</td>
                    <td>Pertinggal</td>
                </tr>
            </table>
            
        </div>
       
    </div>

</body>
</html>