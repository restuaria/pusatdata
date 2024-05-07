<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <div class="card">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "hapus") {
                    ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong> Delete BERHASIL </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <?php if ($this->session->userdata('user_akses') == 2) { ?>
                    <!-- A.Kondisi Eksternal -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">A. </h5>
                                <small>Kondisi Eksternal</small>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $aa ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End A.Kondisi Eksternal -->
                    <!-- c1 -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C1 </h5>
                                <small>Visi, Misi, Tujuan dan Strategi</small>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $a ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End c1 -->
                <?php } ?>
                <?php if ($this->session->userdata('user_akses') == 3) { ?>
                    <!-- c2 -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C2 </h5>
                                <small>Tata Pamong, Tata Kelola, dan Kerjasama</small>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $b ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End c2 -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C4 </h5>
                                <small>Sumber Daya Manusia</small>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $d ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End c4 -->
                <?php } ?>
                <?php if ($this->session->userdata('user_akses') == 4) { ?>
                    <!-- c3 -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C3 </h5>
                                <small>Mahasiswa</small>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $c ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End c3 -->
                <?php } ?>
                <?php if ($this->session->userdata('user_akses') == 5) { ?>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C5 </h5>
                                <small>Keuangan, Sarana dan Prasarana</small>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $e ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End c5 -->
                <?php } ?>
                <?php if ($this->session->userdata('user_akses') == 6) { ?>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C6 </h5><small>Pendidikan</small>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $f ?></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End c6 -->
                <?php } ?>
                <?php if ($this->session->userdata('user_akses') == 7) { ?>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C7</h5> <small>Peneliatian</small>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $g ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End c7 -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">C8</h5>
                                <small>Pengabdian Kepada Masyarakat</small>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-journal"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $h ?></h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End c8 -->
                <?php } ?>

                <!-- <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">B.</h5>
                            <small>Profil Instansi </small>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-journal"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $bb ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">C9</h5>
                            <small>Luaran dan Capaian Tridharma</small>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-journal"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $i ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">D. </h5>
                            <small>Analisa dan Penetapan Program Pengembangan</small>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-journal"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $a ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div><!-- End Left side columns -->
    </div>
</section>