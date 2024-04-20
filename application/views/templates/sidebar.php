<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dashboard</div>
                    <a class="nav-link <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : '' ?>"
                        href="<?= base_url('C_bagusDAdmin') ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>


                    <div class="sb-sidenav-menu-heading">Interface</div>


                    <!-- Room -->
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                        aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-person-booth"></i></div>
                        Room
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>

                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <?php foreach ($tipeKamar as $tk) : ?>
                            <a class="nav-link"
                                href="<?= base_url('C_bagusDAdmin/room/') . $tk['nama_kamar'] ?>"><?= $tk['nama_kamar'] ?></a>
                            <?php endforeach ?>
                        </nav>
                    </div>

                    <!-- Booking -->
                    <a class="nav-link" href="<?= base_url('C_bagusDAdmin/detailBook') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-door-open"></i></div>
                        Booking
                    </a>

                    <!-- Pencarian -->
                    <a class="nav-link" href="<?= base_url('C_bagusDAdmin/pencarian') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                        Pencarian
                    </a>

                    <?php if ($user_pengguna['level'] == 1) { ?>
                    <!-- Master Data  -->
                    <a class="nav-link" href="<?= base_url('C_bagusDAdmin/masterData') ?>">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-gear"></i></div>
                        Master Data
                    </a>
                    <?php } ?>




                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                        data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">



                        </nav>
                    </div>

                </div>
            </div>

        </nav>
    </div>