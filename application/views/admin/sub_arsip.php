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
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
                            <i class="fa fa-plus"></i> &nbsp TAMBAH SUB STANDAR
                        </button>
                    </div>
                    <!-- Modal -->
                    <form action="<?php echo base_url('admin/tambah_sub_arsip/') ?>" method="post">
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"><strong>TAMBAH DATA SUB STANDAR</strong></h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Nama SUB STANDAR<strong></strong></label>
                                            <textarea name="nama" class="form-control"></textarea>
                                            <!-- <input type="text" name="nama" required="required" class="form-control" placeholder="Masukan Nama Naskah Surat .."> -->
                                        </div>

                                        <div class="form-group">
                                            <label>Arsip</label>
                                            <select class="form-control" name="kategori" required="required">
                                                <option value=""> - Pilih Arsip - </option>
                                                <?php
                                                $query = $this->db->query('SELECT * FROM kategori where kategori_id != 101 AND kategori_id != 102 ')->result();
                                                foreach ($query as $q) {
                                                ?>
                                                    <option value="<?= $q->kategori_id ?>"> <?= $q->kategori_nama ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-warning">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                    <h5 class="card-title">Data <?= $title1 ?></h5>

                    <!-- Table with stripped rows -->
                    <table id="example">
                        <thead>
                            <tr>
                                <th width="1%" style="text-align:center">NO</th>
                                <th style="text-align:center">SUB STANDAR</th>
                                <th style="text-align:center">STANDAR</th>
                                <th width="14%" style="text-align:center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($sub_arsip as $p) {
                            ?>
                                <tr>
                                    <td style="text-align:center"><?php echo $no++; ?></td>
                                    <td><?php echo $p->sub_arsip_nama ?></td>
                                    <td><?php echo $p->kategori_nama ?></td>
                                    <td>
                                        <!-- modal hapus -->
                                        <div id="hapus_kategori_<?php echo $p->sub_arsip_id; ?>" class="modal fade">
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
                                                        <a href="<?php echo base_url() . 'admin/hapus_standar/' . $p->sub_arsip_id ?>" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_naskah_<?php echo $p->sub_arsip_id ?>">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_naskah_<?php echo $p->sub_arsip_id ?>">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <form action="<?php echo base_url() . 'admin/edit_sub_arsip/' . $p->sub_arsip_id ?>" method="post">

                                                <div class="modal fade" id="edit_naskah_<?php echo $p->sub_arsip_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"><strong>EDIT SUB STANDAR</strong></h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group" style="width:100%">
                                                                    <label>Nama Sub Standar</label>
                                                                    <input type="hidden" name="id" required="required" class="form-control" value="<?php echo $p->sub_arsip_id; ?>">
                                                                    <textarea name="nama" class="form-control" style="width:100%"><?php echo $p->sub_arsip_nama; ?></textarea>
                                                                    <!-- <input type="text" name="nama" required="required" class="form-control" value="" style="width:100%"> -->
                                                                </div>
                                                                <br /><br />
                                                                <div class="form-group" style="width:100%">
                                                                    <label>Arsip</label>
                                                                    <select class="form-control" name="kategori" required="required" style="width:100%">
                                                                        <option value=""> - Pilih Arsip - </option>
                                                                        <?php
                                                                        $query = $this->db->query('SELECT * FROM kategori')->result();
                                                                        foreach ($query as $q) {
                                                                        ?>
                                                                            <option value="<?= $q->kategori_id ?>" <?php if ($p->kategori_id == $q->kategori_id) : echo "selected";
                                                                                                                    endif ?>> <?= $q->kategori_nama ?> </option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- modal hapus -->
                                            <div class="modal fade" id="hapus_naskah_<?php echo $p->sub_arsip_id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel"><strong>HAPUS DATA SUB STANDAR</strong></h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Anda Yakin Akan Menghapus Data Ini ?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                                                            <a href="<?php echo base_url() . 'admin/hapus_sub_arsip/' . $p->sub_arsip_id ?>" class="btn btn-warning">Hapus</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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