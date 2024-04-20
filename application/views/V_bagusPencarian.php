<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">



            <div class="card mt-5">
                <h5 class="card-header bg-secondary">
                    Pencarian
                </h5>


                <div class="card-body">

                    <!-- <form method="get">

                        <center>
                            <div class="input-group mb-3 modal-lg">
                                <input type="text" class="form-control" id="search" name="search"
                                    aria-describedby="btnNavbarSearch" placeholder="Search Kode Book">
                                <button type="submit" class="btn btn-primary"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                    </form> -->



                    <table id="datatablesSimple">
                        <thead>
                            <tr class="table-primary">
                                <th scope="col">No</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Tipe Kamar</th>
                                <th scope="col">Kode Booking</th>
                                <th scope="col">Chek In</th>
                                <th scope="col">Chek Out</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                            $no= 1;
                            foreach ($detailBook as $db) : ?>
                            <tr>
                                <td scope="col"><?= $no++ ?></td>
                                <td scope="col"><?= $db['username'] ?></td>
                                <td scope="col"><?= $db['tipe_kamar'] ?></td>
                                <td scope="col"><?= $db['kode_booking'] ?></td>
                                <td scope="col"><?= $db['tanggal_mulai'] ?></td>
                                <td scope="col"><?= $db['tanggal_selesai'] ?></td>
                            </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>







                </div>
            </div>







        </div>
    </main>