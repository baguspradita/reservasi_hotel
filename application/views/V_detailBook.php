<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">BOOKING</h1>

            <div class="card">

                <div class="card-body">



                    <!-- <form method="get">

                        <center>
                            <div class="input-group mb-3 modal-lg">
                                <input type="text" class="form-control" id="search" name="search" aria-describedby="btnNavbarSearch" placeholder="Search Kode Book">
                                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                    </form> -->


                    <table id="datatablesSimple">

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Customer</th>
                                <th>Tipe Kamar</th>
                                <th>Kode Booking</th>
                                <th>Detail</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$no = 1;
							foreach ($detailBook as $db) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $db['username'] ?></td>
                                <td><?= $db['tipe_kamar'] ?></td>
                                <td><?= $db['kode_booking'] ?></td>
                                <td>
                                    <!-- Modal Detail -->

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                        data-bs-target="#detail<?= $db['booking_id'] ?>">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="detail<?= $db['booking_id'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="detail<?= $db['booking_id'] ?>">
                                                        Detail Booking</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- form detail  -->

                                                    <form>
                                                        <fieldset disabled>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput"
                                                                            class="form-label">Customer</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="Disabled input"
                                                                            value="<?= $db['username'] ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput"
                                                                            class="form-label">Nama Kamar</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="Disabled input"
                                                                            value="<?= $db['tipe_kamar'] ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput"
                                                                            class="form-label">Kode Booking</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="Disabled input"
                                                                            value="<?= $db['kode_booking'] ?>">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput"
                                                                            class="form-label">Chek in</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="Disabled input"
                                                                            value="<?= $db['tanggal_mulai'] ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput"
                                                                            class="form-label">Chek out</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="Disabled input"
                                                                            value="<?= $db['tanggal_selesai'] ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput"
                                                                            class="form-label">Adults</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="Disabled input"
                                                                            value="<?= $db['adults'] ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="disabledTextInput"
                                                                            class="form-label">Kids</label>
                                                                        <input type="text" id="disabledTextInput"
                                                                            class="form-control"
                                                                            placeholder="Disabled input"
                                                                            value="<?= $db['kids'] ?>">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </form>

                                                    <!-- tutup -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tutup -->
                                </td>
                                <td><a href="<?= base_url('C_bagusDAdmin/deleteBook/' . $db['booking_id']) ?>">
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus ?')"><i
                                                class="fa-solid fa-trash"></i></i></button>
                                    </a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div>
            </div>



        </div>
    </main>