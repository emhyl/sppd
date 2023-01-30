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
            <a class="navbar-brand" href="#pablo">Admin</a>
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
          
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="../assets/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="<?= base_url() ?>assets/admin/img/<?= $this->session->userdata('admin')['data']->foto ?>" alt="...">
                    <h5 class="title"><?= $this->session->userdata('admin')['data']->username ?></h5>
                  </a>
                  <p class="description">
                    <?= $this->session->userdata('admin')['data']->username ?> (Bidang)
                  </p>
                </div>
               
              </div>
             <!--  <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-g"></i>
                </button>
              </div> -->
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile Anda</h5>
              </div>
              <div class="card-body">
                <form action="<?= base_url('admin/edit') ?>" method="POST" enctype="multipart/form-data">

                  <div class="row pl-3 pt-2 pr-3">
                    <div class="col px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="">
                      </div>
                    </div>
                    <div class="col pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password (Lama)</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                      </div>
                    </div>
                    <div class="col pl-1">
                      <div class="form-group">
                        <label>Password (Baru)</label>
                        <input type="text" name="password-baru" class="form-control" placeholder="Password">
                      </div>
                    </div>
                  </div>

                  <div class="row pl-3 pt-2 pr-3">
                    <div class="col px-1">
                      <div class="form-group">
                        <label>Bidang</label>
                        <input type="text" name="bidang" class="form-control" placeholder="Bidang" value="">
                      </div>
                    </div>
                    <div class="col pl-1">
                        <label>Profil</label>
                        <input type="file" name="gambar" class="form-control" placeholder="Password">
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col">
                        <button type="submit" name="btn-simpan" class="btn btn-primary">Simpan</button>
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