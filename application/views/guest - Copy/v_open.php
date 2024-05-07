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
                <?php
                if ($kategori->kategori_id == 101) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 102) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 103) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 104) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 105) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 106) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 107) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 108) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 109) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 110) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 111) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } elseif ($kategori->kategori_id == 112) { ?>
                    <div class="search-bar">
                        <form class="search-form d-flex align-items-center" method="POST" action="<?php echo base_url() . 'guest/insearchkate/' . $kategori->kategori_id  ?>">
                            <small>Pencarian Data di <?= $kategori->kategori_nama ?></small>
                            <input type="text" name="insearch" placeholder="Pencarian Data di <?= $kategori->kategori_nama ?>" title="Enter search keyword">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                <?php } ?>

            </li><!-- End Profile Nav -->
        </ul>
    </nav><!-- End Icons Navigation -->
</header><!-- End Header -->
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url('guest') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url() . 'guest/open/' . $kategori->kategori_id ?>"><?= $kategori->kategori_nama ?></a></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <?php
                foreach ($naskah as $k) { ?>
                    <div class="col-xxl-3 col-md-3">
                        <a href="<?php echo base_url("guest/opentoopen/$kategori->kategori_id/$k->naskah_id") ?>">
                            <div class="card info-card" style="height:150px;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <img src="<?php echo base_url("assets/img/folder.png") ?>" alt="" style="height: 60px;">
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="card-title"><?= $k->naskah_nama ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>
                <?php }
                ?>
            </div>
        </div><!-- End Left side columns -->
    </div>
</section>