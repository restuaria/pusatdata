<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Modal Sizes</h5>
                    <p>Modals have three optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports..</p>

                    <!-- Full Screen Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
                        Full Screen Modal
                    </button>

                    <div class="modal fade" id="fullscreenModal" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Full Screen Modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Full Screen Modal-->
                    <!-- Extra Large Modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                        Extra Large Modal
                    </button>

                    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Extra Large Modal</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Extra Large Modal-->
                </div>
            </div>


        </div>
    </div>
</section>
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
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color: #c2e3ff;">
                        <div class="card-body">
                            <h5 class="card-title">A. Kondisi Eksternal</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-4-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $aa ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- B.Profil Instansi -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card" style="background-color: #c3ffc2;">
                        <div class="card-body">
                            <h5 class="card-title">B.Profil Instansi</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-3-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $bb ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End B.Profil Instansi -->
                <!-- c1 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card" style="background-color: #ffdec2;">
                        <div class="card-body">
                            <h5 class="card-title">C1 Visi, Misi, Tujuan dan Strategi </h5>
                            <small></small>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-2-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $a ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End c1 -->
                <!-- c2 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card" style="background-color: #c3ffc2;">
                        <div class="card-body">
                            <h5 class="card-title">C2 Tata Pamong, Tata Kelola, dan Kerjasama </h5>
                            <small></small>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-3-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $b ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End c2 -->
                <!-- c3 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card" style="background-color: #ffdec2;">
                        <div class="card-body">
                            <h5 class="card-title">C3 Mahasiswa </h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-2-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $c ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End c3 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color: #c2e3ff;">
                        <div class="card-body">
                            <h5 class="card-title">C4 Sumber Daya Manusia</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-4-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $d ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End c4 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card" style="background-color: #ffdec2;">
                        <div class="card-body">
                            <h5 class="card-title">C5 Keuangan, Sarana dan Prasarana</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-2-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $e ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End c5 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color: #c2e3ff;">
                        <div class="card-body">
                            <h5 class="card-title">C6 Pendidikan</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-4-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $f ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End c6 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card" style="background-color: #c3ffc2;">
                        <div class="card-body">
                            <h5 class="card-title">C7 Peneliatian</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-3-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $g ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End c7 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card sales-card" style="background-color: #c2e3ff;">
                        <div class="card-body">
                            <h5 class="card-title">C8 Pengabdian Kepada Masyarakat</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-4-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $h ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End c8 -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card revenue-card" style="background-color: #c3ffc2;">
                        <div class="card-body">
                            <h5 class="card-title">C9 Luaran dan Capaian Tridharma</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-3-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $i ?></h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End c9 -->
                <!-- D -->
                <div class="col-xxl-4 col-md-4">
                    <div class="card info-card customers-card" style="background-color: #ffdec2;">
                        <div class="card-body">
                            <h5 class="card-title">D. Analisa dan Penetapan Program Pengembangan</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="ri-folder-2-fill"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?= $a ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End D. -->
            </div>
        </div><!-- End Left side columns -->
    </div>
</section>