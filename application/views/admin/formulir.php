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
            <a class="navbar-brand" href="#pablo">User Profile</a>
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
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
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
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title text-center p-3 ">
                  FORMULIR ISIAN LAPORAN PERJALANAN DINAS LUAR DAERAH DALAM PROVINSI
                </h5>
              </div>
              <div class="card-body">
                <form action="<?=base_url('formulir/save')?>" method="POST">

                  <div class="row">
                  
                    <?= $input_baris_1 ?>

                  </div>

                  <div class="border shadow-sm p-2 rounded">
                    <div class="row">
                    
                      <?= $input_baris_2 ?>
  
                    </div>
                    <div class="row">
                    
                      <?= $input_baris_2_1 ?>
  
                    </div>
                  </div>
                  
                  <div class="border shadow-sm p-2 rounded mt-3">
                     <?= $input_baris_3 ?>
                  </div>

                  <div  class="border shadow-sm p-2 rounded mt-3">
                    <div class="row">
                      <?= $input_baris_4 ?>
                    </div>
                    <?= $input_baris_4_1 ?>
                  </div>

                  <div class="row mt-3">
                    <div class="col">
                      <h6 class="title text-center p-2 bg-dark text-light">
                        KWITANSI
                      </h6>
                    </div>
                  </div>
                  
                  <div class="border shadow-sm p-2 rounded ">
                     <?= $input_baris_5 ?>
                  </div>

                  <div  class="border shadow-sm p-2 rounded mt-3">
                    <div class="row">
                      <div class="col">
                        <h6 class="title text-center p-2 bg-dark text-light">
                          PEGAWAI YANG DITUGASKAN
                        </h6>
                      </div>
                    </div>
                    <div class="row">
                      <?= $input_baris_6 ?>
                    </div>
                    <div class="row">
                      <?= $input_baris_6_1 ?>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <button type="submit" class="btn btn-warning  btn-block" onclick="nowuiDashboard.showNotification('top','left')">Save</button>
                    </div>
                    <div class="col-md-6">
                      <button type="submit" class="btn btn-primary btn-block" onclick="nowuiDashboard.showNotification('top','left')">Data SPPB</button>
                    </div>
                  </div>
                  
                </form>
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