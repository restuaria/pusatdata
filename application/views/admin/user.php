<div class="pagetitle">
    <h1>Data SUB STANDAR</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item active">Data SUB STANDAR</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

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
                                <strong>Update BERHASIL </strong>
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
                                <strong> Tambah Gagal </strong>
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
                                <strong> Tambah BERHASIL </strong>
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
                                <strong> Delete BERHASIL </strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="card-body">

                    <h5 class="card-title">Data Pengguna</h5>

                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th width="1%" style="text-align:center">NO</th>
                                <th style="text-align:center">NAMA</th>
                                <th style="text-align:center">USERNAME</th>
                                <th style="text-align:center">LEVEL</th>
                                <th style="text-align:center" width="15%">FOTO</th>
                                <th style="text-align:center" width="13%">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = $this->db->query("SELECT * FROM user");
                            foreach ($data->result() as $d) {
                            ?>
                                <tr>
                                    <td style="text-align:center"><?php echo $no++; ?></td>
                                    <td><?php echo $d->user_nama ?></td>
                                    <td style="text-align:center"><?php echo $d->user_username ?></td>
                                    <td style="text-align:center"><?php echo $d->user_level ?></td>
                                    <td>
                                        <center>
                                            <?php if ($d->user_foto == "") { ?>
                                                <img src="<?php echo base_url() ?>file/sistem/user.png" style="width: 80px;height: auto">
                                            <?php } else { ?>
                                                <img src="<?php echo base_url() . 'file/user/' . $d->user_foto ?>" style="width: 80px;height: auto">
                                            <?php } ?>
                                        </center>
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="<?php echo base_url() . 'admin/user_edit/' . $d->user_id ?>"><i class="fa fa-edit"></i></a>
                                        <?php if ($d->user_id != 1) { ?>
                                            <!-- <a class='btn btn-danger btn-sm' data-toggle='modal' data-target='#konfirmasi_hapus' data-href="<?php echo base_url() . 'admin/user_hapus/' . $d->user_id ?>"><i class='fa fa-trash'></i></a> -->
                                            <?php echo "<a class='btn btn-danger btn-sm' data-toggle='modal' data-target='#konfirmasi_hapus' data-href='" . base_url() . 'admin/hapus_user/' . $d->user_id . "'><i class='fa fa-trash'></i></a>"; ?>
                                        <?php } ?>
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