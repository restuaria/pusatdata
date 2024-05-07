<div class="pagetitle">
    <h1><?= $title1 ?></h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('operator') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('operator/kondisi_eksternal/') ?>">Kondisi Eksternal</a></li>
            <li class="breadcrumb-item active"><?= $title1 ?></li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah File</h5>
                    <form method="post" action="<?php echo base_url() . 'operator/proses_tambah_file_kondisi/' ?>" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Standar</label>
                            <div class="col-sm-10">
                                <select class="form-select" name="kategori" aria-label="Default select example" required>
                                    <option value="<?php echo $kon->kategori_id; ?>"><?php echo $kon->kategori_nama ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-2 col-form-label">Nama File</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" required>
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
                                        <option value="<?php echo $k->naskah_id; ?>"><?php echo $k->naskah_nama; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File Upload</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="file" type="file" id="formFile" required>
                                <small>Pastikan file bentuk PDF/Docx dan Maximal 10MB</small>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" id="tgl" value="<?php echo date("Y-m-d H-i-s"); ?>" name="tgl">

                        <div class="form-group">
                            <label></label>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>