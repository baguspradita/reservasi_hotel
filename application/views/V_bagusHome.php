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
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">
</head>

<body>


    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="grey darken-3">
            <div class="container">
                <div class="nav-wrapper logo ">

                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="">
                    <a class="brand-logo"> Gemirlap Hotel</a>

                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="<?= base_url('C_bagusAuth') ?>">BOOK A ROOM</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- Slider -->
    <div class="slider" id="home">
        <ul class="slides">
            <li>
                <img src="<?= base_url('assets/img/view1.jpg') ?>"> <!-- random image -->
                <div class="caption center-align">
                    <h2>Gemirlap Hotel</h2>
                    <h5 class="light grey-text text-lighten-3">Siap melayani tamu 24 jam</h5>
                </div>
            </li>

            <li>
                <img src="<?= base_url('assets/img/view2.jpg') ?>"> <!-- random image -->
                <div class="caption center-align">
                    <h2>Gemirlap Hotel</h2>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>

            <li>
                <img src="<?= base_url('assets/img/view3.jpg') ?>"> <!-- random image -->
                <div class="caption center-align">
                    <h2>Gemirlap Hotel</h2>
                    <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                </div>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="container header">
        <h3>Gemirlap in Your Heart</h3>
        <p>Gemirlap Hotel Yogyakarta, salah satu hotel terbaik di kota Yogyakarta yang dekat dengan pusat kota dan
            tempat
            berbelanja. Didukung dengan tempat spa lengkap, kolam renang serta kamar super keren akan membuat liburan
            Anda semakin menyenangkan</p>
    </div>




    <div class="container layanan">


        <div class="row">

            <?php foreach ($tipeKamar as $tk) : ?>
            <div class="col s6 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="<?= base_url('assets/img/') . $tk['img']  ?>">
                        <span class="card-title"
                            style="text-shadow: 1px 1px 3px rgb(0, 0, 0,0.7 )"><?= $tk['nama_kamar'] ?></span>
                    </div>
                    <div class="card-content">
                        <p><?= $tk['fasilitas_kamar'] ?></p>
                    </div>

                </div>
            </div>
            <?php endforeach ?>
        </div>

        <!-- <div class="row  d-flex">

            <div class="col s6 content-des ">
                <h4>Deluxe</h4>
                <p>Tipe kamar Deluxe punya ukuran luas sekitar 40 meter persegi, dengan fasilitas yang mirip dengan
                    kamar tipe Standard, ditambah beberapa fasilitas pendukung seperti coffee/tea maker, lemari es,
                    kamar mandi plus shower, hingga view menarik di luar ruangan</p>
            </div>

            <div class="col s6 content-img2">
                <img src="<?= base_url('assets/img/hotel4.jpg') ?>" alt="">
            </div>


        </div>


        <div class="row  d-flex">

            <div class="col s6 content-img3">
                <img src="<?= base_url('assets/img/hotel3.jpg') ?>" alt="">
            </div>

            <div class="col s6 content-des">
                <h4>Standar</h4>
                <p>Tipe President Suite mempunyai fasilitas seperti :
                    Ruang penyimpanan laptop,
                    Telepon IDD dan voicemail,
                    Gratis internet berkecepatan tinggi,
                    Setrika dan papan setrika,
                    Soket internasional,
                    Meja kerja,
                    Mini bar gratis (minuman non-alkohol saja)</p>
            </div>

        </div>

        <div class="row  d-flex">

            <div class="col s6 content-des">
                <h4>Double</h4>
                <p>Tipe Double mempunyai fasilitas seperti :
                    Teras, Telepon, TV satelit, TV kabel, Brankas, AC, Kipas angin, Pemanas ruangan, Lantai
                    kayu/parket,
                    Lemari, Pengering rambut, Peralatan mandi, Toilet, Kamar mandi pribadi, Bathtub atau shower,
                    Minibar, Lemari es, Jam alarm/layanan bangun tidur</p>
            </div>

            <div class="col s6 content-img3">
                <img src="<?= base_url('assets/img/hotel2.jpeg') ?>" alt="">
            </div>

        </div> -->


    </div>

    <!-- Footer -->
    <div class="grey darken-3">
        <div class="container footer">
            <div class="row">
                <div class="col s5">
                    <p><i class="fa-solid fa-map"></i> Yogyakarta Jl. P. Mangkubumi 72A Indonesia 55233 </p>
                </div>

                <div class="col s3">
                    <p><i class="fas fa-phone"></i> +6212 1595 3726</p>
                </div>

                <div class="col s4">
                    <p><i class="fa-solid fa-envelope"></i> gemirlaphotel@gmail.com</p>
                </div>

            </div>

            <div class="text-muted">Copyright &copy; Bagus Pradita 2022</div>



        </div>

    </div>



    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="<?= base_url('materialize/') ?>js/materialize.min.js"></script>
    <script>
    const slider = document.querySelectorAll('.slider')
    M.Slider.init(slider, {
        indicators: false,
        height: 525,
        transition: 600,
        interval: 3000
    });
    </script>
</body>





































































































</html>