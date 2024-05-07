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
            <li class="breadcrumb-item active">Cari</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <table id="example">
                    <thead>
                        <tr>
                            <th width="1%" style="text-align:center">NO</th>
                            <th style="text-align:center">Arsip Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($hasil as $k) {
                        ?>
                            <tr>
                                <td style="text-align:center"><?php echo $no++; ?></td>
                                <td style="color:black;">
                                    <p>
                                        <a target="_blank" class="text-black" href="<?php echo base_url("guest/viewpdf/$k->arsip_id") ?>">
                                            <img src="<?php echo base_url("assets/img/file.png") ?>" alt="" style="height: 40px;">
                                            <?= $k->arsip_nama ?>
                                        </a>
                                    </p>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div><!-- End Left side columns -->
    </div>
</section>