<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <!-- Fontawsome -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">
    <style type="text/css">
        body {
            font-size: small;
            line-height: 1.4;
        }

        p {
            margin: 0;
        }

        .performance-facts {
            border: 1px solid black;
            margin: 30px;
            float: left;
            width: 90%;
            padding: 0.5rem;

            table {
                border-collapse: collapse;
            }
        }

        .performance-facts__title {
            font-weight: bold;
            font-size: 2rem;
            margin: 0 0 0.25rem 0;
        }

        .performance-facts__header {
            border-bottom: 10px solid black;
            padding: 0 0 0.25rem 0;
            margin: 0 0 0.5rem 0;

            p {
                margin: 0;
            }
        }

        .performance-facts__table {
            width: 100%;

            thead tr {

                th,
                td {
                    border: 0;
                }
            }

            th,
            td {
                font-weight: normal;
                text-align: left;
                padding: 0.25rem 0;
                border-top: 1px solid black;
                white-space: nowrap;
            }

            td {
                &:last-child {
                    text-align: right;
                }
            }

            .blank-cell {
                width: 1rem;
                border-top: 0;
            }

            .thick-row {

                th,
                td {
                    border-top-width: 5px;
                }
            }
        }

        .small-info {
            font-size: 0.7rem;
        }

        .performance-facts__table--small {
            @extend .performance-facts__table;
            border-bottom: 1px solid #999;
            margin: 0 0 0.5rem 0;

            thead {
                tr {
                    border-bottom: 1px solid black;
                }
            }

            td {
                &:last-child {
                    text-align: left;
                }
            }

            th,
            td {
                border: 0;
                padding: 0;
            }
        }

        .performance-facts__table--grid {
            @extend .performance-facts__table;
            margin: 0 0 0.5rem 0;

            td {
                &:last-child {
                    text-align: left;

                    &::before {
                        content: "•";
                        font-weight: bold;
                        margin: 0 0.25rem 0 0;
                    }
                }
            }
        }

        .text-center {
            text-align: center;
        }

        .thick-end {
            border-bottom: 10px solid black;
        }

        .thin-end {
            border-bottom: 1px solid black;
        }
    </style>
</head>

<body>


    <section class="performance-facts">
        <header class="performance-facts__header">
            <h1 class="performance-facts__title">GEMIRLAP HOTEL</h1>
            <p><i class="fa-solid fa-map"></i> Yogyakarta Jl. P. Mangkubumi 72A Indonesia 55233 </p>
            <p>08212 1595 3726</p>
        </header>
        <table class="performance-facts__table">
            <tbody>
                
                
                
                <tr>
                    <th colspan="3">
                        <b>Nama</b>
                    </th>
                    <td>
                        <b>: <?= $detailbook['nama'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Adults</b>
                    </th>
                    <td>
                        <b>: <?= $detailbook['adults'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Kids</b>
                    </th>
                    <td>
                        <b>: <?= $detailbook['kids'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Tipe Kamar</b>
                    </th>
                    <td>
                        <b>: <?= $detailbook['nama_kamar'] ?></b>
                    </td>
                </tr>
                
                <tr>
                    <th colspan="3">
                        <b>Kode Booking</b>
                    </th>
                    <td>
                        <b>: <?= $detailbook['kode_booking'] ?></b>
                    </td>
                </tr>
                
                <tr>
                    <th colspan="3">
                        <b>Chek in</b>
                    </th>
                    <td>
                        <b>: <?= $detailbook['tanggal_mulai'] ?></b>
                    </td>
                </tr>

                <tr>
                    <th colspan="3">
                        <b>Chek out</b>
                    </th>
                    <td>
                        <b>: <?= $detailbook['tanggal_selesai'] ?></b>
                    </td>
                </tr>

                
            </tbody>
        </table>

        

       


    </section>
</body>

</html>