<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?= base_url('materialize/') ?>css/materialize.min.css"
        media="screen,projection" />
    <!-- Fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?= $title ?></title>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="grey darken-3">
            <div class="container">
                <div class="nav-wrapper ">

                    <a href="#" class="brand-logo">Gemirlap Hotel</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="<?= base_url('C_bagusHome') ?>">HOME</a></li>
                        <li><a href="badges.html">OFFER</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>

    <!-- Main -->
    <div class="container">
        <div class="row">

            <?php foreach ($tipeKamar as $tk) :  ?>

            <div class="col s6">
                <div class="card">

                    <div class="card-image">
                        <img src="<?= base_url('assets/img/' . $tk['img']) ?>">
                        <span class="card-title"  style="text-shadow: 1px 1px 3px rgb(0, 0, 0,0.7 )"><?= $tk['nama_kamar'] ?></span>
                    </div>
                    <div class="card-content">
                        <p><?= $tk['fasilitas_kamar'] ?></p>
                    </div>
                    <div class="card-action">
                        <a href="<?= base_url('C_bagusUser/booking') ?>">
                            <button class="waves-effect waves-light btn">Rp<?= $tk['tipe_harga'] ?></button>
                        </a>
                    </div>
                </div>
            </div>

            <?php endforeach ?>

        </div>
    </div>


</body>

</html>