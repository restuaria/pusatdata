<div class="pagetitle">
    <h1><?= $title1 ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item "><?= $title1 ?></li>
            <li class="breadcrumb-item active"><?= $arsip->arsip_nama ?></li>
        </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card" style="padding:10px;">
                <h5 class="card-title">Nama File = <?= $arsip->arsip_nama ?></h5>
                <embed style="height: 900px;" src="<?php echo base_url() . 'file/arsip/' . $arsip->arsip_file ?>" type="application/pdf">
            </div>
        </div>
    </div>
</section>