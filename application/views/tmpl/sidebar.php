 <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo text-center">
     
        <a href="#" class="simple-text logo-normal">
           SPPD Dinas Pariwisata <br> Pemuda & Olahraga
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?= base_url() ?>">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <?php if($this->session->userdata('admin')['data']->bidang == "staf"){ ?>
          <li>
            <a href="<?= base_url('admin') ?>">
              <i class="now-ui-icons education_atom"></i>
              <p> Admin</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('data_Pegawai') ?>">
              <i class="now-ui-icons education_atom"></i>
              <p>Data Pegawai</p>
            </a>
          </li>
          <li>
           <a href="<?= base_url('data_Kegiatan') ?>">
              <i class="now-ui-icons education_atom"></i>
              <p>Data Kegiatan</p>
            </a>
          </li>
          <li>
             <a href="<?= base_url('data_Kendaraan') ?>">
              <i class="now-ui-icons education_atom"></i>
              <p>Data Kendaraan</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('data_Sbu') ?>">
             <i class="now-ui-icons education_atom"></i>
              <p>Data SBU</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('formulir') ?>">
              <i class="now-ui-icons education_atom"></i>
              <p>Formulir Sppd</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('sppd') ?>">
              <i class="now-ui-icons education_atom"></i>
              <p>SPPD</p>
            </a>
          </li>
          <?php }else{?>
            <li>
            <a href="<?= base_url('sppd') ?>">
              <i class="now-ui-icons education_atom"></i>
              <p>SPPD</p>
            </a>
          </li>
          <?php }?>

        </ul>
      </div>
    </div>