<div id="layoutSidenav_content">
      <main>
          <div class="container-fluid px-4">
              <h1 class="mt-4">SELAMAT DATANG DI GEMIRLAP HOTEL</h1>

              <div class="card col-md-4 mt-4">
                  <h5 class="card-header">Gemirlap Hotel</h5>
                  <div class="card-body">

                      <table class="table ">


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



          </div>
      </main>