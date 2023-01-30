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
            <a class="navbar-brand" href="#pablo">Surat Perintah Perjalanan Dinas</a>
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title text-right ">
                  <a href="#" class="btn btn-outline-primary p-2" data-toggle="modal" data-target="#exampleModal" style="font-size: 15px"><i class="now-ui-icons ui-1_simple-add"></i> Tambah</a>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <form action="<?= base_url('data_Kendaraan/tambah') ?>" method="POST">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              <?php foreach($field as $row): ?>
                                <?php if($row != 'id'): ?>
                                  <div class="form-group">
                                    <input type="text" name="<?= $row ?>" class="form-control" placeholder="<?= $row ?>" required>
                                  </div> 
                                <?php endif ?>
                              <?php endforeach ?>               
                          </div>
                          <div class="modal-footer">
                          <!--   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>

                      </div>
                    </div>
                  </div>



                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr>
                      <?php foreach($field as $row): ?>
                        <?php if($row != 'id'): ?>
                           <th class="font-weight-bold text-dark">
                             <?= $row ?>
                           </th>
                        <?php endif ?>
                      <?php endforeach ?>  
                        <th class="font-weight-bold text-dark">Aksi</th>
                      </tr> 
                    </thead>
                    <tbody>

                      <?php foreach($data_pegawai as $pegawai): ?>
                        <?php if($row != 'id'): ?>

                            <tr>
                             <?php foreach($field as $row_nm): ?>
                               <?php if($row_nm != 'id'): ?>
                                  <td><?= $pegawai[$row_nm] ?></td>
                               <?php endif ?>
                             <?php endforeach ?> 
                             <td>
                               <span class="badge badge-primary"><a href="" class="text-light p-2" data-toggle="modal" data-target="#m<?=$pegawai['id'] ?>">Edit</a></span>
                               <span class="badge badge-danger"><a onclick="" href="<?= base_url('data_Pegawai/hapus/').$pegawai['id'] ?>" class="text-light">Hapus</a></span>
                             </td>
                             
                            </tr>

                            <!-- Modal -->
                            <div class="modal fade" id="m<?=$pegawai['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <form action="<?= base_url('data_Pegawai/edit/'.$pegawai['id']) ?>" method="POST">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <?php foreach($field as $row_modal_edit): ?>
                                        <?php if($row_modal_edit != 'id'): ?>
                                          <div class="form-group">
                                            <input type="text" name="<?= $row_modal_edit ?>" class="form-control" value="<?= $pegawai[$row_modal_edit] ?>">
                                          </div> 
                                        <?php endif ?>
                                      <?php endforeach ?>    
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                  </div>
                                </form>
                              </div>
                            </div>


                        <?php endif ?>
                      <?php endforeach ?>   

                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
