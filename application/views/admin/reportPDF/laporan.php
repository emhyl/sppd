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
    <div id="isi"  style="padding: 20px">
        
        <table border="0" cellspacing="5" style="margin: 0 auto">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Perihal</th>
                <th>Tanggal</th>
            </tr>
            <?php  foreach($data as $no => $row){ ?>
            <tr>
                <td><?= $no+1 ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['maksud_tujuan'] ?></td>
                <td><?= $row['tgl_berangkat'] ?></td>
            </tr>
            <?php } ?>
        </table>
       
    </div>

</body>
</html>