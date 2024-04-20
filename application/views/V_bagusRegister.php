<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link href="<?= base_url('assets/css/styles.css')  ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.png') ?>">
</head>

<body class="bg-white">
    <div id="layoutAuthentication">
        <div id="l
        ayoutAuthentication_content">
            <main>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account Customer</h3>
                                </div>
                                <div class="card-body">

                                    <form method="post" action="<?= base_url('C_bagusAuth/register'); ?>">
                                        <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>

                                        <div class="row">

                                            <div class="col-md-6">

                                                <div class="col-md-12 mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="username" name="username"
                                                            type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Username</label>
                                                        <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="nama" name="nama" type="text"
                                                            placeholder="Enter your last name" />
                                                        <label for="inputLastName">Nama</label>
                                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="email" name="email" type="email"
                                                        placeholder="name@example.com" />
                                                    <label for="inputEmail">Email address</label>
                                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="telepon" name="telepon"
                                                        type="number" placeholder="name@example.com" />
                                                    <label for="inputEmail">Telepon</label>
                                                    <?= form_error('telepon', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                                                        type="date" placeholder="name@example.com" />
                                                    <label for="inputEmail">Tanggal Lahir</label>
                                                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="alamat" name="alamat" type="text"
                                                        placeholder="name@example.com" />
                                                    <label for="inputEmail">Alamat</label>
                                                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>

                                                <div class="form-floating mb-3">

                                                    <select type="text" name='gender' class="form-select" id="gender">
                                                        <option selected>--Pilih Jeis Kelamin Anda--</option>
                                                        <option value="L">Laki Laki</option>
                                                        <option value="P">Perempuan</option>
                                                    </select>
                                                    <?= form_error('gender', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>

                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="status" name="status" type="text"
                                                        placeholder="name@example.com" />
                                                    <label for="inputEmail">Status</label>
                                                    <?= form_error('status', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>

                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="tempat_lahir" name="tempat_lahir"
                                                        type="text" placeholder="name@example.com" />
                                                    <label for="inputEmail">Tempat Lahir</label>
                                                    <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">


                                            <div class="col-md-6">
                                                <div class=" mb-3">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="password1" name="password1"
                                                            type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="password2" name="password2"
                                                        type="password" placeholder="Confirm password" />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
                                                </div>
                                            </div>

                                        </div>




                                        <div class="mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block mb-1">Register
                                                Account</button>
                                            <div class="small"><a href="<?= base_url('C_bagusAuth') ?>">sudah punya
                                                    akun</a>
                                            </div>
                                        </div>
                                </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
</body>

</html>