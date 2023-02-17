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
            <form action="<?= base_url('sppd/cari') ?>" method="POST">
              <div class="input-group no-border">
                <input type="date" value="<?= date('Y-m-d') ?>" name="key" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <button style="background-color: transparent;border: none;"><i class="now-ui-icons ui-1_zoom-bold"></i></button>
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
                <h4 class="card-title"> Detail Data SPPD</h4>
              </div>
              <div class="card-body">

                <?php if(count($sppd)>0){ ?>
                
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Pergi</th>
                        <th scope="col">Tangal Pulang</th>
                        <th scope="col">Report</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($sppd as $no => $row_sppd): ?>
                      <tr>
                        <th scope="row"><?= $no+1 ?></th>
                        <td><?= $row_sppd['nama'] ?></td>
                        <td><?= $row_sppd['tgl_berangkat'] ?></td>
                        <td><?= $row_sppd['tgl_kembali'] ?></td>
                        <td><a target="blank" href="<?= base_url('home/report/'.$row_sppd['id']) ?>"><span class="badge bg-warning p-2 text-dark">Report</span></a></td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                <?php }else{ ?>
                  <div class="alert alert-warning text-dark" role="alert">
                    Data Yang Anda Cari Kosong !
                  </div>
                <?php } ?>

              </div>
            </div>
          </div>
          
        </div>
      </div>
      
      <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
   