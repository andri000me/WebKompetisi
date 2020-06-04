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

                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->


    <main id="main" class="main-page">

        <section id="speakers-details section-with-bg" class="wow fadeIn">
            <div class="container  ">
                <div class="section-header">
                    <h2>Daftar Kompetisi</h2>
                </div>

                <?= $this->session->flashdata('message'); ?>

                <?= form_open_multipart('home/daftarkompetisi'); ?>
                <div class="form-group container col-6">

                    <input type="hidden" name="id_peserta" id="" value="<?php echo $this->session->userdata('id_peserta'); ?>">
                    <label class="text-dark font-weight-bold">Data Tim</label>
                    <div class="form-group">
                        <input class="form-control" name="nama_team" placeholder="Nama Tim" type="text" value>
                        <?= form_error('nama_team', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="institusi" placeholder="Asal Institusi/Sekolah/Universitas" type="text" value>
                        <?= form_error('institusi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <label class="text-dark font-weight-bold">Kategori Kompetisi</label>
                    <div class="form-group">

                        <select class="form-control" name="id_kompetisi" id="kodekompetisi">

                            <?php foreach ($kompetisi as $q) : ?>
                                <option value="<?= $q['id_kompetisi']; ?>"><?= $q['nama_kompetisi']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <label class="text-dark font-weight-bold">Data Ketua</label>

                    <div class="form-group">
                        <input class="form-control" name="nama_leader" placeholder="Nama Lengkap" type="text" value>
                        <?= form_error('nama_leader', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email" placeholder="Email" type="text" value>
                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="prodi" placeholder="Program Studi" type="text" value>
                        <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="nim" placeholder="Nomor Mahasiswa" type="text" value>
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="no_wa" placeholder="No. WA" type="text" value>
                        <?= form_error('no_wa', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="pilihanGenderKetua" name="jenkel">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <label class="text-dark font-weight-bold">Data Anggota 1</label>

                    <div class="form-group">
                        <input class="form-control" name="namaanggota1" placeholder="Nama Lengkap" type="text" value>
                        <?= form_error('namaanggota1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email1" placeholder="Email" type="text" value>
                        <?= form_error('email1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="prodi1" placeholder="Program Studi" type="text" value>
                        <?= form_error('prodi1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="nim1" placeholder="Nomor Mahasiswa" type="text" value>
                        <?= form_error('nim1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="no_wa1" placeholder="No. WA" type="text" value>
                        <?= form_error('no_wa1', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="pilihanGenderAnggota1" name="jenkel1">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <label class="text-dark font-weight-bold">Data Anggota 2</label>

                    <div class="form-group">
                        <input class="form-control" name="namaanggota2" placeholder="Nama Lengkap" type="text" value>
                        <?= form_error('namaanggota2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email2" placeholder="Email" type="text" value>
                        <?= form_error('email2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="prodi2" placeholder="Program Studi" type="text" value>
                        <?= form_error('prodi2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="nim2" placeholder="Nomor Mahasiswa" type="text" value>
                        <?= form_error('nim2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="no_wa2" placeholder="No. WA" type="text" value>
                        <?= form_error('no_wa2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="jenkel2">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <label class="text-dark font-weight-bold">Data Anggota 3</label>
                    <div class="form-group">
                        <input class="form-control" name="namaanggota3" placeholder="Nama Lengkap" type="text" value>
                        <?= form_error('namaanggota3', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email3" placeholder="Email" type="text" value>
                        <?= form_error('email3', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="prodi3" placeholder="Program Studi" type="text" value>
                        <?= form_error('prodi3', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="nim3" placeholder="Nomor Mahasiswa" type="text" value>
                        <?= form_error('nim3', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="no_wa3" placeholder="No. WA" type="text" value>
                        <?= form_error('no_wa3', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="pilihanGenderAnggota3" name="jenkel3">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>

                    <label class="text-dark font-weight-bold">Data Anggota 4</label>

                    <div class="form-group">
                        <input class="form-control" name="namaanggota4" placeholder="Nama Lengkap" type="text" value>
                        <?= form_error('namaanggota4', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email4" placeholder="Email" type="text" value>
                        <?= form_error('email4', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="prodi4" placeholder="Program Studi" type="text" value>
                        <?= form_error('prodi4', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="nim4" placeholder="Nomor Mahasiswa" type="text" value>
                        <?= form_error('nim4', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="no_wa4" placeholder="No. WA" type="text" value>
                        <?= form_error('no_wa4', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="jenkel4">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <label class="text-dark font-weight-bold">Data Anggota 5</label>

                    <div class="form-group">
                        <input class="form-control" name="namaanggota5" placeholder="Nama Lengkap" type="text" value>
                        <?= form_error('namaanggota5', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="email5" placeholder="Email" type="text" value>
                        <?= form_error('email5', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="prodi5" placeholder="Program Studi" type="text" value>
                        <?= form_error('prodi5', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="nim5" placeholder="Nomor Mahasiswa" type="text" value>
                        <?= form_error('nim5', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="no_wa5" placeholder="No. WA" type="text" value>
                        <?= form_error('no_wa5', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="jenkel5">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <input type="hidden" name="status" required id="">
                    <div class="form-group">
                        <input name="berkas" type="file">
                    </div>
                    <h6 class="keteranganUpload fa fa-star text-danger"> Pas foto dan Kartu Mahasiswa disatukan dalam bentuk .zip atau .rar</h6>
                    <button type="submit" class="btn btn-dark btn-block">Submit</button>
                    <br>
                </div>
                </form>





            </div>

        </section>

    </main>