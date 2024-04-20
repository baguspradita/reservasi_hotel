<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $title ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">
</head>

<body class="">

    <div class="container mt-5">
        <div class="card">
            <div class=" card-header">
                <a href="<?= base_url('C_bagusUser/pdf_booking/'.$detailbook['kode_booking']) ?>">
                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-download"></i> Download PDF
                    </button>
                </a>
            </div>
           

            <h2 style="text-align:center; " class="mt-3 mb-3 ">GEMIRLAP HOTEL</h2>
            <div class="container">

                <table class="table">


                    <tr>
                        <td>
                            <h6>Nama</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['nama'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Adults</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['adults'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Kids</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['kids'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Tipe Kamar</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['tipe_kamar'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Kode Booking</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['kode_booking'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Chek in</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['tanggal_mulai'] ?></h6>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h6>Chek out</h6>
                        </td>
                        <td>
                            <h6>: <?= $detailbook['tanggal_selesai'] ?></h6>
                        </td>
                    </tr>

                </table>


            </div>
        </div>
    </div>




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>













</html>