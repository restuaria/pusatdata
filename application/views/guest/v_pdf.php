<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
        <a href="<?= base_url('guest') ?>" class="logo d-flex align-items-center">
            <img src="<?php echo base_url() ?>assets/img/logo-sikampus.png" alt="">
            <span class="d-none d-lg-block">Pusat Data</span>
        </a>
    </div><!-- End Logo -->
    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <li class="nav-item dropdown pe-3">
                <div class="search-bar">
                    <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url('guest/insearch') ?>">
                        <small>Pencarian Semua Data</small>
                        <input type="text" name="insearch" placeholder="Pencarian Semua Data" title="Enter search keyword">
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                </div>
            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('guest') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'guest/open/' . $kategori->kategori_id ?>"><?= $kategori->kategori_nama ?></a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url() . 'guest/open/' . $kategori->kategori_id . '/' . $naskah->naskah_id ?>"><?= $naskah->naskah_nama ?></a></li>
            <li class="breadcrumb-item active"><?= $arsip->arsip_nama ?></li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-10">
            <div class="card" style="padding:10px;">
                <h5 class="card-title">Nama File = <?= $arsip->arsip_nama ?></h5>
                <embed style="height: 900px;" src="<?php echo base_url() . 'file/arsip/' . $arsip->arsip_file ?>" type="application/pdf">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="card" style="padding:4px;">
                <h5 class="card-title">File Terbaru</h5>
                <?php
                foreach ($file as $k) { ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="<?php echo base_url("guest/viewpdf/$k->arsip_id") ?>">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <img src="<?php echo base_url("assets/img/file.png") ?>" alt="" style="height: 20px;">
                                            </div>
                                            <div class="ps-3">
                                                <p class="text-black"><?= $k->arsip_nama ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
        </div>
    </div>
</section>