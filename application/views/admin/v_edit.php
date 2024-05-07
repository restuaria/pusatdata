<div class="pagetitle">
    <h1><?= $title1 ?> <?= $title2 ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item "><?= $title1 ?> <?= $title2 ?></li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit File</h5>
                    <form method="post" action="<?php echo base_url() . 'admin/proses_edit/' . $me->arsip_id  ?>" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Standar</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="kategori" aria-label="Default select example" required>
                                    <option value="<?php echo $me->arsip_kategori; ?>"><?php echo $me->kategori_nama ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Sub Standar</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="keterangan" aria-label="Default select example" required>
                                    <?php
                                    foreach ($skon as $kon) { ?>
                                        <option <?php if ($kon->sub_arsip_id == $me->arsip_sub_arsip) {
                                                    echo "selected='selected'";
                                                } ?> value="<?php echo $kon->sub_arsip_id; ?>"><?php echo $kon->sub_arsip_nama; ?></option>
                                    <?php } ?>

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama File</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" value="<?= $me->arsip_nama ?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="naskah" aria-label="Default select example" required>
                                    <option value="">Pilih Kategori</option>
                                    <?php
                                    $kategori = $this->db->query("SELECT * FROM naskah")->result();
                                    foreach ($kategori as $k) { ?>
                                        <option <?php if ($k->naskah_id == $me->arsip_naskah_id) {
                                                    echo "selected='selected'";
                                                } ?> value="<?php echo $k->naskah_id; ?>"><?php echo $k->naskah_nama; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <select name="user" class="form-control" required="required" hidden>
                            <option value=""> - Pilih User - </option>
                            <?php
                            $user = $this->db->query("SELECT * FROM user")->result();
                            foreach ($user as $w) {
                            ?>
                                <option <?php if ($w->user_id == $me->arsip_user) {
                                            echo "selected='selected'";
                                        } ?> value="<?php echo $w->user_id; ?>"><?php echo $w->user_username; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <small> File Yang Sudah Ada: <a target="_blank" href="<?php echo base_url() . 'file/arsip/' . $me->arsip_file ?>"><?= $me->arsip_file ?></a></small>
                                <input class="form-control" name="file" type="file" id="formFile">
                                <small>Pastikan file bentuk PDF/Docx dan Maximal 10MB</small>
                            </div>
                        </div>

                        <input type="hidden" class="form-control" id="tgl" value="<?php echo date("Y-m-d H-i-s"); ?>" name="tgl">

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-danger" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>