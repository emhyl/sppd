<div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">SPPD</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right text-center" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#"><?= $admin->username ?></a>
                  <a class="dropdown-item" href="#"><?= $admin->bidang ?></a>
                  <a class="dropdown-item text-danger" href="<?= base_url('login') ?>">Keluar</a>
                </div>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between px-4">
                <h4 class="card-title"> Data SPPD</h4>
                <?php if(count($sppd)>0){ ?>
                  <a href="<?= base_url('sppd/r_surat_tugas/'.$sppd[0]['tempat_tujuan']) ?>" class="btn btn-primary btn-sm pt-2">Surat Tugas</a>

                <?php }?>
              </div>
              <div class="card-body">
                <?php if(count($sppd)>=0){ ?>
                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <?php foreach($sppd as $data): ?>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                      <div class="card-header"><?= $data['pangkat'] ?></div>
                      <div class="card-body">
                        <h5 class="card-title"><?= $data['nm_pegawai'] ?></h5>
                        <p class="card-text"><?= $data['nama_kegiatan'] ?></p>
                        <p class="card-text">Tanggal (<?= $data['tgl_surat_tugas'] ?>)</p>
                        <?php if($this->session->userdata('admin')['data']->bidang == "staf"){?>
                          <span class="badge bg-primary p-2"><a class="text-white" href="<?= base_url('home/report/'.$data['id']) ?>">Report</a></span>
                        <!-- <span class="badge bg-success p-2"><a class="text-white" href="">Edit</a></span> -->
                        <span class="badge bg-warning p-2"><a class="text-white" onclick="return(confirm('Pindahkan Ke riwayat ?'))" href="<?= base_url('sppd/riwayatkan/'.$data['id'].'/'.$data['tempat_tujuan'].'/'.$data['tgl_berangkat']) ?>">Riwayatkan</a></span>
                        <?php }else{?>
                          <span class="badge bg-primary p-2"><a class="text-white" href="<?= base_url('home/report/'.$data['id']) ?>">Report</a></span>
                        <?php }?>
                        
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                <?php }?>
                </div>

              </div>
            </div>
          </div>
          
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Riwayat SPPD</h4>
              </div>
              <div class="card-body">
                
                <div class="row row-cols-1 row-cols-md-3 g-4">
                  <?php foreach($riwayat as $data_r): ?>
                  <div class="col">
                    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                      <!-- <div class="card-header">s</div> -->
                      <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">SPPD (<?= $data_r['tujuan'] ?>) </p>
                        <p class="card-text">Tanggal (<?= $data_r['tgl'] ?>) </p>
                        <span class="badge bg-success p-2"><a class="text-white" href="<?= base_url('sppd/r_surat_tugas/'.$data_r['tujuan']) ?>">Surat Tugas</a></span>
                        <span class="badge bg-danger p-2"><a class="text-white" onclick="return(confirm('Pindahkan Ke riwayat ?'))" href="<?= base_url('sppd/hapus/'.$data_r['tujuan']) ?>">Hapus</a></span>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                </div>

              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
      
      <script>
              
        $(document).ready(function(){

           $("select#nama_kegiatan").change(function(){
            let nilai = this.value;
            $("input#kode_kegiatan").val(nilai);
            //  console.log(nilai);
           })

        
           $("select#nama").change(function(){
              let nilai = this.value;
              //  alert(nilai);
              $.get('<?= base_url("formulir/get_data_pegawai/")?>'+nilai, function(respon){
                let data = JSON.parse(respon);
                $("input#nip").val(data.nip);
                $("input#pangkat").val(data.pangkat);
                $("input#jabatan").val(data.jabatan);
                // console.log();

              });
           })

           $("select#kecematan").change(function(){
              let nilai = this.value;
              $.get('<?= base_url("formulir/get_sbu/")?>'+nilai, function(respon){
                let data = JSON.parse(respon);
                let hari = $("input#lama_perjalanan").val();
                let biaya = (data.uang_harian * hari) + parseInt(data.transport);
                $("input#biaya").val('Rp '+biaya);
                // console.log(data.biaya * hari);

              });
           })
         
        });
      </script>