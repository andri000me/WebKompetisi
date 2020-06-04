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
    <header id="header" class="header-fixed">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- Uncomment below if you prefer to use a text logo -->
                <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
                <a href="<?= base_url('home/'); ?>#intro" class="scrollto"><img src="<?= base_url('assets/'); ?>images/logo.png" alt="" title=""></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">

                    <li class="menu-active"><a href="<?= base_url('home/'); ?>#intro">Home</a></li>
                    <li><a href="<?= base_url('home/'); ?>#about">About</a></li>
                    <li><a href="<?= base_url('home/'); ?>#speakers">Competition</a></li>
                    <li><a href="<?= base_url('home/'); ?>#schedule">Schedule</a></li>
                    <li><a href="<?= base_url('home/'); ?>#gallery">Gallery</a></li>
                    <li><a href="<?= base_url('home/'); ?>#supporters">Sponsors</a></li>
                    <li><a href="<?= base_url('home/'); ?>#contact">Contact</a></li>
                    <li class="buy-tickets"><a href="<?= base_url('authpeserta/registration'); ?>">Daftar</a></li>

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


    <main id="main" class="main-page">

        <section id="speakers-details" class="wow fadeIn">
            <div class="container">
                <div class="section-header">
                    <h2>Competition Details</h2>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= base_url('assets/images/') . $kompetisi['gambar']; ?>" alt="Speaker 1" class="img-fluid">
                    </div>

                    <div class="col-md-6">
                        <div class="details">
                            <h2><?= $kompetisi['nama_kompetisi']; ?></h2>

                            <p><?= $kompetisi['deskripsi']; ?></p>
                        </div><br>
                        <center>

                        </center>
                        <a href="<?= base_url('home/downloadfile'); ?>" class="btn btn-outline-danger"> Download Guide Book</a>
                    </div>

                </div>
            </div>

        </section>

    </main>