<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <!-- Form Tambah Tipe Kamar -->
            <h1 class="mt-4">TAMBAH TIPE KAMAR</h1>

            <form class="mt-5" method="post" action="<?= base_url('C_bagusDAdmin/fungsi_tambahKamar') ?>" enctype="multipart/form-data">
                <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>
                <div class="mb-3">
                    <label for="tipekamar" class="form-label">
                        <h6>Tipe Kamar</h6>
                    </label>
                    <input type="text" class="form-control" id="tipekamar" name="tipekamar" aria-describedby="tipekamar">
                </div>

                <div class="mb-3">
                    <label for="fasilitas" class="form-label">
                        <h6>Fasilitas</h6>
                    </label>
                    <input type="text" class="form-control" id="fasilitas" name="fasilitas">
                </div>
                
                <div class="mb-3">
                    <label for="harga" class="form-label">
                        <h6>Harga</h6>
                    </label>
                    <input type="text" class="form-control" id="harga" name="harga">
                </div>


                <div class="mb-3">
                    <label for="tanggal" class="form-label">
                        <h6>Tanggal</h6>
                    </label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal">
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">
                        <h6>Image</h6>
                    </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>




                <button type="submit" class="btn btn-primary">
                    <h6>Tambah Tipe Kamar</h6>
                </button>
            </form>

        </div>
    </main>