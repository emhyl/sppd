
    
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
            <a class="navbar-brand" href="#pablo">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
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
      <div class="panel-header panel-header-lg" style="background-image: url(<?=base_url('assets/admin/img/bg-head.jpg')?>);background-size: 100%">
        <!-- <canvas id="bigDashboardChart"></canvas> -->
      </div>
      <div class="content">
        <div class="row">
          <div class="col-12">
            <div class="card card-chart">
              <div class="card-header">
                <h4 class="card-title text-center" style="font-size: 35px;font-weight: bold"><marquee behavior="" direction="right">SURAT PERINTAH PERJALANAN DINAS</marquee></h4>
                <div class="text-center">
                  <h5 class="card-category text-center text-dark shadow-sm d-inline p-3 rounded" style="font-size: 30px; margin: 0 auto; text-shadow: 1px 1px 1px #989"> DINAS PARIWISATA KABUPATEN BULUKUMBA</h5>
                  <br><br><br>

                </div>

                <div class="w-75 m-auto">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.11015269597!2d120.18687371396265!3d-5.550684495975432!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbbff8e930a2d81%3A0x537d01364c8050a!2sJl.%20Lanto%20Dg.%20Pasewang%2C%20Caile%2C%20Kec.%20Ujung%20Bulu%2C%20Kabupaten%20Bulukumba%2C%20Sulawesi%20Selatan%2092517!5e0!3m2!1sid!2sid!4v1675033973935!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>
                
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <!-- <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated -->
                </div>
              </div>
            </div>
          </div>
          
        </div>
        
      </div>
      