<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Pusat Data UNIBI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url() ?>assets/img/logo-sikampus.png" rel="icon">
    <link href="<?php echo base_url() ?>assets/img/logo-sikampus.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/simple-datatables/style.css?ver=<?php echo rand(111, 999) ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>assets/css/style.css?ver=<?php echo rand(111, 999) ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url() ?>assets/vendor/datatables/datatables.min.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>assets/vendor/datatables/datatables.min.js"></script>
    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?= base_url('admin') ?>" class="logo d-flex align-items-center">
                <img src="<?php echo base_url() ?>assets/img/logo-sikampus.png" alt="">
                <span class="d-none d-lg-block">Pusat Data</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->


        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <?php
                        $id_user = $this->session->userdata('user_username');
                        $profil = $this->db->query("SELECT * FROM user where user_username='$id_user'")->result();
                        foreach ($profil as $cek) {
                            if ($cek->user_foto == "") {
                        ?>
                                <img src="<?php echo base_url() ?>file/sistem/user.png" alt="Profile" class="rounded-circle">
                            <?php } else { ?>
                                <img src="<?php echo base_url() . 'file/user/' . $cek->user_foto ?>" alt="Profile" class="rounded-circle" style="max-height:45px">
                        <?php }
                        } ?>

                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $this->session->userdata('user_nama'); ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $this->session->userdata('user_nama'); ?></h6>
                            <span><?php echo $this->session->userdata('level_nama'); ?></span>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('admin/pass') ?>">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('login/logout') ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <?php
    error_reporting(0);

    $url = explode("/", $_SERVER["REQUEST_URI"]);
    $segmen1   = $url[0];
    $segmen2   = $url[1];
    $segmen3   = $url[2];
    $segmen4   = $url[3];
    $segmen5   = $url[4];
    ?>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item ">
                <a class="nav-link <?php if ($segmen4 == '') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" href="<?php echo base_url('admin') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'kondisi_eksternal') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" href="<?php echo base_url('admin/kondisi_eksternal') ?>">
                    <i class="bi bi-folder"></i>
                    <span>A.Kondisi Eksternal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'instansi') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" href="<?php echo base_url('admin/instansi') ?>">
                    <i class="bi bi-folder"></i>
                    <span>B.Profil Institusi</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c1-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>C.1 <br>Visi, Misi, Tujuan dan Strategi</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c1-nav" class="nav-content <?php if ($segmen4 == 'standar') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?>" data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 103 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End c1 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar2') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c2-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>C.2 <br>Tata Pamong, Tata Kelola, dan Kerjasama</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c2-nav" class="nav-content <?php if ($segmen4 == 'standar2') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 104 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar2/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C2 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar3') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c3-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>C.3 <br>Mahasiswa</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c3-nav" class="nav-content <?php if ($segmen4 == 'standar3') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 105 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar3/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C3 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar4') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c4-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i><span>C.4<br>Sumber Daya Manusia</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c4-nav" class="nav-content <?php if ($segmen4 == 'standar4') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?>" data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 106 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar4/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C4 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar5') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c5-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i>C.5 <br>Keuangan, Sarana dan Prasarana
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c5-nav" class="nav-content <?php if ($segmen4 == 'standar5') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 107 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar5/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C5 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar6') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c6-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>C.6 <br>Pendidikan</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c6-nav" class="nav-content <?php if ($segmen4 == 'standar6') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 108 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar6/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C6 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar7') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c7-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>C.7 <br>Penelitian</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c7-nav" class="nav-content <?php if ($segmen4 == 'standar7') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 109 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar7/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C7 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar8') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c8-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>C.8 <br>Pengabdian Kepada Masyarakat</span>

                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c8-nav" class="nav-content <?php if ($segmen4 == 'standar8') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 110 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar8/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C8 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'standar9') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#c9-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>C.9 <br>Luaran dan Capaian Tridharma</span>

                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="c9-nav" class="nav-content <?php if ($segmen4 == 'standar9') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 111 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/standar9/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End C9 Nav -->

            <li class="nav-item">
                <a class="nav-link <?php if ($segmen4 == 'analisa') {
                                        echo '';
                                    } else {
                                        echo "collapsed";
                                    } ?>" data-bs-target="#d-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-folder"></i> <span>D. Analisa dan Penetapan Program Pengembangan</span>

                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="d-nav" class="nav-content <?php if ($segmen4 == 'analisa') {
                                                        echo 'collapse show';
                                                    } else {
                                                        echo "collapse";
                                                    } ?> " data-bs-parent="#sidebar-nav">
                    <?php
                    $query = $this->db->query("SELECT * FROM sub_arsip WHERE sub_arsip_kategori = 112 ORDER BY sub_arsip_id ASC")->result();
                    foreach ($query as $q) {
                    ?>
                        <li>
                            <a href="<?php echo base_url() . 'admin/analisa/' . $q->sub_arsip_id ?>">
                                <i class="bi bi-circle"></i><span><?= $q->sub_arsip_nama ?></span>
                            </a>

                        </li>
                    <?php } ?>
                </ul>
            </li><!-- End d Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/sub_arsip') ?>">
                    <i class="bi bi-menu-button-wide-fill"></i>
                    <span>Sub Standar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/kategori') ?>">
                    <i class="bi bi-menu-button-wide-fill"></i>
                    <span>Kategori </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/user') ?>">
                    <i class="bi bi-people"></i>
                    <span>Data User</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo base_url('admin/pass') ?>">
                    <i class="bi bi-gear"></i>
                    <span>Password</span>
                </a>
            </li>
        </ul>

    </aside><!-- End Sidebar-->
    <main id="main" class="main">
        <?php echo $conten ?>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            <strong><span>Sistem Informasi</span></strong>
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="#">RAR</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script>
        new DataTable('#example');
    </script>

</body>

</html>