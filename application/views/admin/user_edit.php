<div class="pagetitle">
    <h1>Edit User</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
            <li class="breadcrumb-item active">User</li>
        </ol>
    </nav>
</div>
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah File</h5>
                    <div class="box-body">
                        <form action="<?php echo base_url() . 'admin/p_edit_user/' . $us->user_id ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Nama Pengguna</label>
                                <input type="text" class="form-control" name="nama" value="<?= $us->user_nama; ?>" required="required" placeholder="Masukkan Nama Pengguna ...">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?= $us->user_username; ?>" required="required" placeholder="Masukkan Nama Username ...">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" min="5" placeholder="Masukkan Password ..">
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control" name="level" required="required">
                                    <option value=""> - Pilih Level - </option>
                                    <option value="operator" <?php if ($us->user_level == "operator") : echo "selected";
                                                                endif ?>> Operator </option>
                                    <option value="admin" <?php if ($us->user_level == "admin") : echo "selected";
                                                            endif ?>> admin </option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label>Foto</label>
                                <p>Format JPG, Max 2Mb.</p>
                                <input type="file" name="foto">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-sm btn-danger" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
</section>
</div>
</section>