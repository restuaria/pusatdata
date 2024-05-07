<div class="pagetitle">
    <h1><?= $title1 ?> <?= $title2 ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('operator') ?>">Home</a></li>
            <li class="breadcrumb-item "><?= $title1 ?> <?= $title2 ?></li>
            <li class="breadcrumb-item active"><?= $title3->sub_arsip_nama ?></li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "update") {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Update <?= $title1 ?> BERHASIL </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "gagal") {
                    ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong> Tambah <?= $title1 ?> Gagal </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "berhasil") {
                    ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong> Tambah <?= $title1 ?> BERHASIL </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "hapus") {
                    ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong> Delete <?= $title1 ?> BERHASIL </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Data <?= $title1 ?> <?= $title2 ?></h5>
                    <div class="btn-group">
                        <a href="<?php echo base_url('operator/tambah_file4/') ?>" class="btn btn-primary btn-sm mb-3 float-right"><i class="bi bi-plus"></i> TAMBAH DATA</a>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th style="text-align:center" width="1%">No</th>
                                <th style="text-align:center">Tanggal</th>
                                <th style="text-align:center">Nama File</th>
                                <th style="text-align:center">Lokasi</th>
                                <th style="text-align:center">User Upload</th>
                                <th style="text-align:center">Kategori</th>
                                <th width="15%" style="text-align:center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($masuk as $p) {
                            ?>
                                <tr>
                                    <td style="text-align:center"><?= $no++; ?></td>
                                    <td style="text-align:center"><?= $p->arsip_waktu_upload ?></td>
                                    <td style="text-align:center"><?= $p->arsip_nama ?></td>
                                    <td style="text-align:center"><?= $p->sub_arsip_nama ?></td>
                                    <td style="text-align:center"><?= $p->user_nama ?></td>
                                    <td style="text-align:center"><?= $p->naskah_nama ?></td>
                                    <td>
                                        <!-- modal hapus -->
                                        <div id="hapus_kategori_<?php echo $p->arsip_id; ?>" class="modal fade">
                                            <div class="modal-dialog modal-confirm">
                                                <div class="modal-content">
                                                    <div class="modal-header flex-column">
                                                        <h4 class="modal-title w-100">Are you sure?</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <a href="<?php echo base_url() . 'operator/hapus_standar/' . $p->arsip_id ?>" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <?php
                                            $id_user = $this->session->userdata("user_id");
                                            if ($id_user == $p->arsip_user) { ?>
                                                <a target="_blank" title="view" class="btn btn-primary" href="<?php echo base_url() . 'operator/viewpdf/' . $p->arsip_id ?>"><i class="bi bi-search"></i></a>
                                                <!-- <a target="_blank" title="view" class="btn btn-primary" href="<?php echo base_url() . 'file/arsip/' . $p->arsip_file; ?>"><i class="bi bi-search"></i></a> -->
                                                <a href="<?php echo base_url() . 'operator/edit/' . $p->arsip_id ?>" title="edit" class="btn btn-warning"><i class="bi bi-pencil-square" style="color: white;"></i></a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_kategori_<?php echo $p->arsip_id; ?>">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            <?php } else { ?>
                                                <a target="_blank" title="view" class="btn btn-primary" href="<?php echo base_url() . 'operator/viewpdf/' . $p->arsip_id ?>"><i class="bi bi-search"></i></a>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                </div>
            </div>

        </div>
    </div>
</section>