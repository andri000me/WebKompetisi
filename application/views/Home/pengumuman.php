<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="<?= base_url('assets/'); ?>images/logo.png" rel="icon">
    <link href="<?= base_url('assets/vendor/'); ?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?= base_url('assets/vendor/'); ?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?= base_url('assets/vendor/'); ?>lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/'); ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/'); ?>lib/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/'); ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?= base_url('assets/vendor/'); ?>css/style.css" rel="stylesheet">

    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
    Header
  ============================-->

    <main id="main" class="">

        <section id="" class="wow fadeIn">
            <div class="container">

                <?= $this->session->flashdata('message'); ?>

                <div class="section-header">
                    <h2>Dashboard Peserta</h2>
                </div>
                <nav class="navbar navbar-expand-lg navbar-light bg-dark rounded ">

                    <div class="text-white mx-auto  " id="navbarNavAltMarkup">
                        <div class="navbar-nav ">
                            <a class="nav-item text-white nav-link " href="<?= base_url('home/dashboard'); ?>">Data Tim </a>
                            <a class="nav-item text-white nav-link" href="<?= base_url('home/pengumuman'); ?>">Pengumuman </a>
                            <a class="nav-item text-white nav-link" href="<?= base_url('home/pembayaran'); ?>">Pembayaran</a>
                            <a class="nav-item text-white nav-link btn btn-danger" href="<?= base_url('authpeserta/logout'); ?>"> <i class="fa fa-power-off"></i> Keluar</a>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="container my-4">
                <h5>Belum Ada Pengumuman !</h5>
                <p>*NOTES</p>
                <p>Diharapkan untuk setiap peserta dapat mencetak kartu peserta pada setiap anggota kelompok </p>
                <p>Dikarenakan pada hari H kartu peserta tersebut digunakan untuk pendaftaran kehadiran</p>
                <p><a href="<?= base_url('home/cetakkartu'); ?>" class="btn btn-danger">Download Kartu Peserta</a></p>
            </div>
        </section>

    </main>