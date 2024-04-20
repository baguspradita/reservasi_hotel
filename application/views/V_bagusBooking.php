<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">



</head>

<body style="background-image: url('<?= base_url('assets/img/bg-hotel.jpg') ?>') ;background-position:center;background-size:cover;background-repeat:no-repeat;">




    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark mb-5" style="padding:15px 150px">
        <div class="container-fluid ">

            <h3><a class="navbar-brand text-light" href="#">Gemirlap Hotel</a></h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto  text-light">
                    <a class="nav-link text-light" href="<?= base_url('C_bagusHome') ?>">HOME</a>
                    <a class="nav-link text-light" href="#">OFFER</a>

                </div>
            </div>

        </div>
    </nav>

    <!-- Main -->
    <div class="container ">

        <div class="card">
            <div class="card-body">

            

                <h3 class="card-subtitle mb-2 text-muted mb-4">Booking Room</h3>
                <form method="post" action="<?= base_url('C_bagusUser/tambahBooking') ?>">
                    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>

                    <fieldset disabled>
                        <div class="row mb-5">
                            <div class="col-md-6">

                                <h6><label for="disabledTextInput" class="form-label">Nama</label></h6>
                                <input type="text" class="form-control mb-3" id="nama" name="nama" value="<?= $get_user['nama'] ?>" aria-describedby="nama" placeholder="Disabled input">

                            </div>

                            <div class="col-md-6">

                                <h6><label for="exampleInputEmail1" class="form-label">Email</label></h6>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $get_user['email'] ?>" aria-describedby="email">

                            </div>
                        </div>
                    </fieldset>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6><label for="exampleInputEmail1" class="form-label">Chek In</label></h6>
                                <input type="date" class="form-control" id="chekin" name="chekin" aria-describedby="chekin">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6><label for="exampleInputPassword1" class="form-label">Chek Out</label></h6>
                                <input type="date" class="form-control" id="chekout" name="chekout">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6><label for="exampleInputPassword1" class="form-label">Adults</label></h6>
                                <input type="number" class="form-control" id="adults" name="adults">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h6><label for="exampleInputPassword1" class="form-label">Kids</label></h6>
                                <input type="number" class="form-control" id="kids" name="kids">
                            </div>
                        </div>

                        <div class="mb-3">
                            <h6><label for="exampleInputPassword1" class="form-label">Tipe Kamar</label></h6>
                            <select type="text" name='tipe_kamar' class="form-select" id="tipe_kamar">
                                <option selected>--Pilih Tipe Kamar--</option>
                                <?php foreach ($tipeKamar as $tk) : ?>
                                    <option value="<?= $tk['nama_kamar'] ?>"><?= $tk['nama_kamar'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Book Now</button>
                </form>
            </div>

        </div>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>