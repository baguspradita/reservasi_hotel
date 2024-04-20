<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <h1 class="mt-4"><?= $tipe ?> Room</h1>

            <div class="card">
                <h5 class="card-header bg-secondary">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahroom">
                        Tambah Room
                    </button>
                </h5>
                <!-- Modal -->
                <div class="modal fade" id="tambahroom" tabindex="-1" aria-labelledby="tambahroom" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="tambahroom">Tambah <?= $tipe ?> Room</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <!-- Form -->
                                <form method="post" action="<?= base_url('C_bagusDAdmin/fungsi_tambahRoom') ?>">
                                    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>
                                    <div class="mb-3">
                                        <label for="tipe_kamar" class="form-label">Tipe Kamar</label>
                                        <select name='tipekamar' class="form-select" id="tipekamar" name="tipekamar"
                                            aria-label="Default select exampel">
                                            <option selected>--Pilih Tipe Kamar--</option>

                                            <?php foreach ($tipeKamar as $tk) : ?>

                                            <option value="<?= $tk['id'] ?>"><?= $tk['nama_kamar'] ?></option>

                                            <?php endforeach ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="nomor_ruangan" class="form-label">Nomor Ruangan</label>
                                        <input type="number" class="form-control" id="nomor_ruangan"
                                            name="nomor_ruangan">
                                    </div>

                                    <div class="mb-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select class="form-select" id="status" name="status"
                                            aria-label="Default select exampel">
                                            <option selected>--Pilih Status Kamar--</option>

                                            <option value="Booked">Booked</option>
                                            <option value="Cheked in">Cheked in</option>
                                            <option value="Aviliable">Aviliable</option>
                                            <option value="Maintenence">Maintenence</option>

                                        </select>
                                    </div>


                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Tambah Room</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <!-- room -->
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">No</th>
                                <th scope="col">Tipe Kamar</th>
                                <th scope="col">Nomor Ruangan</th>
                                <th scope="col">Status</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Hapus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
							$no = 1;
							foreach ($list_kamar as $lk) : ?>
                            <tr>
                                <td><?= $no++ ?></td>

                                <td><?= $tipe ?></td>

                                <td><?= $lk['nomor_ruangan'] ?></td>

                                <td><?= $lk['status'] ?></td>

                                <td>

                                    <!-- Modal edit -->
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editroom<?= $lk['ruangan_id'] ?>">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="editroom<?= $lk['ruangan_id'] ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="editroom<?= $lk['ruangan_id'] ?>">
                                                        Edit Room <?= $tipe ?></h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- form edit -->

                                                    <form method="post"
                                                        action="<?= base_url('C_bagusDAdmin/fungsi_editRoom/' . $lk['ruangan_id']) ?>">
                                                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>
                                                        <div class="mb-3">
                                                            <label for="tipe_kamar" class="form-label">Tipe
                                                                Kamar</label>
                                                            <select name='tipekamar' class="form-select" id="tipekamar"
                                                                aria-label="Default select exampel">
                                                                <option selected>--Pilih Tipe Kamar--</option>


                                                                <option value="<?= $lk['id'] ?>">
                                                                    <?= $lk['nama_kamar'] ?></option>


                                                            </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="nomor_ruangan" class="form-label">Nomor
                                                                Ruangan</label>
                                                            <input type="number" class="form-control" id="nomor_ruangan"
                                                                name="nomor_ruangan"
                                                                value="<?= $lk['nomor_ruangan'] ?>">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="status" class="form-label">Status</label>
                                                            <select class="form-select" id="status" name="status"
                                                                aria-label="Default select exampel">
                                                                <option selected>--Pilih Status Kamar--</option>

                                                                <option value="Booked">Booked</option>
                                                                <option value="Cheked in">Cheked in</option>
                                                                <option value="Aviliable">Aviliable</option>
                                                                <option value="Maintenence">Maintenence</option>

                                                            </select>
                                                        </div>


                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-warning">Edit
                                                                Room</button>
                                                        </div>
                                                    </form>



                                                </div>

                                            </div>
                                        </div>
                                    </div>




                                </td>

                                <td>
                                    <a href="<?= base_url('C_bagusDAdmin/fungsi_deleteRoom/' . $lk['ruangan_id']) ?>">
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus ?')"><i
                                                class="fa-solid fa-trash"></i></i></button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach ?>


                        </tbody>
                    </table>


                </div>
            </div>


        </div>
    </main>