<div class="pagetitle">
    <h1>Ganti Passwod</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('operator') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= base_url('operator/kondisi_eksternal/') ?>">Ganti Password</a></li>
    </nav>
</div>
<section class="content">
    <div class="row">
        <section class="col-lg-6 col-lg-offset-3">
            <div class="box box-info">
                <div class="box-header">
                    <?php
                    if (isset($_GET['alert'])) {
                        if ($_GET['alert'] == "sukses") { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Password Telah Berhasil Diganti</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="box-body">
                    <form action="<?php echo base_url() . 'operator/update/' ?>" method="post">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Masukkan Password Baru ..." name="password" required="required" min="5">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-sm btn-warning" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</section>