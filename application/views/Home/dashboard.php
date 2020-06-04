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


    <main id="main" class="">

        <section id="" class="">
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

                            <a class="nav-item text-white nav-link btn btn-danger" href="<?= base_url('authpeserta/logout'); ?>"><i class="fa fa-power-off"></i> Keluar</a>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container my-4">
                <h3>Nama Team : <?= $team['nama_team']; ?></h3>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Ketua Team</a>

                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Anggota 1</a>

                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Anggota 2</a>

                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contacttiga" role="tab" aria-controls="nav-contact" aria-selected="false">Anggota 3</a>

                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contactempat" role="tab" aria-controls="nav-contactempat" aria-selected="false">Anggota 4</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                        <ul class="list-group list-group-flush col-4">
                            <li class="list-group-item">Nama : <?= $team['nama_leader']; ?> </li>
                            <li class="list-group-item">Prodi : <?= $team['prodi']; ?></li>
                            <li class="list-group-item">Email : <?= $team['email']; ?> </li>
                            <li class="list-group-item">Jenis Kelamin : <?= $team['jenkel']; ?></li>

                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <ul class="list-group list-group-flush col-4">
                            <li class="list-group-item">Nama : <?= $team['namaanggota1']; ?> </li>
                            <li class="list-group-item">Prodi :<?= $team['prodi1']; ?></li>
                            <li class="list-group-item">Email :<?= $team['email1']; ?> </li>
                            <li class="list-group-item">Jenis Kelamin :<?= $team['jenkel1']; ?></li>
                        </ul>

                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <ul class="list-group list-group-flush col-4">
                            <li class="list-group-item">Nama : <?= $team['namaanggota2']; ?> </li>
                            <li class="list-group-item">Prodi :<?= $team['prodi2']; ?></li>
                            <li class="list-group-item">Email :<?= $team['email2']; ?> </li>
                            <li class="list-group-item">Jenis Kelamin :<?= $team['jenkel2']; ?></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-contacttiga" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <ul class="list-group list-group-flush col-4">
                            <li class="list-group-item">Nama : <?= $team['namaanggota3']; ?> </li>
                            <li class="list-group-item">Prodi :<?= $team['prodi3']; ?></li>
                            <li class="list-group-item">Email :<?= $team['email3']; ?> </li>
                            <li class="list-group-item">Jenis Kelamin :<?= $team['jenkel3']; ?></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="nav-contactempat" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <ul class="list-group list-group-flush col-4">
                            <li class="list-group-item">Nama : <?= $team['namaanggota4']; ?> </li>
                            <li class="list-group-item">Prodi :<?= $team['prodi4']; ?></li>
                            <li class="list-group-item">Email :<?= $team['email4']; ?> </li>
                            <li class="list-group-item">Jenis Kelamin :<?= $team['jenkel4']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


    </main>