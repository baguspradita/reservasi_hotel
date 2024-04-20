  <div id="layoutSidenav_content">
      <ma>
          <div class="container-fluid px-4">
              <h1 class="mt-4 mb-3">SELAMAT DATANG DI GEMIRLAP HOTEL</h1>

              <div class="row">
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-primary text-white mb-4">
                          <div class="card-body">Single</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <?= $card['single'] ?>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-warning text-white mb-4">
                          <div class="card-body">Deluxe</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <?= $card['deluxe'] ?>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-success text-white mb-4">
                          <div class="card-body">Standar</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <?= $card['standar'] ?>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                      <div class="card bg-danger text-white mb-4">
                          <div class="card-body">Double</div>
                          <div class="card-footer d-flex align-items-center justify-content-between">
                              <?= $card['double'] ?>
                          </div>
                      </div>
                  </div>
              </div>






              <div class="row mb-4">
                  <div class="col-md-7">
                      <div class="card ">
                          <h5 class="card-header">
                              <i class="fa-solid fa-hotel"></i>
                              Gemirlap Hotel
                          </h5>

                          <table class="table table-bordered">

                              <tr>
                                  <td>
                                      <h6>Nama</h6>
                                  </td>
                                  <td>
                                      <h6><?= $user_pengguna['nama'] ?></h6>
                                  </td>
                              </tr>

                              <tr>
                                  <td>
                                      <h6>Email</h6>
                                  </td>
                                  <td>
                                      <h6><?= $user_pengguna['email'] ?></h6>
                                  </td>
                              </tr>

                              <tr>
                                  <td>
                                      <h6>Role</h6>
                                  </td>


                                  <td>
                                      <h6> <?php
											if ($user_pengguna['level'] == 1) {
												echo "Admin";
											} elseif ($user_pengguna['level'] == 2) {
												echo "Resepsionis";
											} else {
												echo "Customer";
											}
											?>
                                      </h6>
                                  </td>
                              </tr>


                          </table>

                      </div>
                  </div>

                  <div class="col-md-5">
                      <div class="card">
                          <div class="card-header">
                              <i class="fas fa-info me-1"></i>
                              Info Aplikasi
                          </div>

                          <table class="table table-bordered">

                              <tr>
                                  <td>Nama Aplikasi </td>
                                  <td>Sistem Reservasi Hotel</td>
                              </tr>

                              <tr>
                                  <td>Pengembang </td>
                                  <td>Bagus Pradita</td>
                              </tr>

                              <tr>
                                  <td>Versi Aplikasi </td>
                                  <td>1.0 Beta</td>
                              </tr>

                          </table>

                      </div>
                  </div>
              </div>

              <div class="row">

                  <div class="col-md-6 mb-5">
                      <div class="card ">
                          <div class="card-header">
                              Tipe Kamar
                          </div>

                          <table class="table table-bordered">

                              <?php foreach ($tipeKamar as $tk) : ?>
                              <tr>
                                  <td><?= $tk['nama_kamar'] ?></td>
                              </tr>
                              <?php endforeach; ?>





                          </table>

                      </div>
                  </div>

                  <div class="col-md-6 mb-5">
                      <div class="card ">
                          <div class="card-header">
                              <i class="fas fa-user"></i>
                              Customer
                          </div>

                          <table class="table table-bordered">

                              <?php foreach ($customer as $cs) : ?>


                              <tr>
                                  <td><?= $cs['nama'] ?></td>
                              </tr>
                              <?php endforeach; ?>





                          </table>

                      </div>
                  </div>

              </div>


          </div>
      </ma 
in>