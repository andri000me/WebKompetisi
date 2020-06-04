<!--==========================
    Intro Section
  ============================-->
<section id="intro">
    <div class="intro-container wow fadeIn">
        <h1 class="mb-4 pb-0">Universitas Methodist Indonesia<br><span>Competition</span> </h1>
        <p class="mb-4 pb-0">17 April 2020 - 18 April 2020, Aula Universitas Methodist Indonesia Lt.3 , Medan</p>
        <a href="https://www.youtube.com/watch?v=XLeod7xrKUg" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
        <a href="#about" class="about-btn scrollto">About The Competition</a>
    </div>
</section>

<main id="main">



    <!--==========================
      About Section
    ============================-->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About The Competition</h2>
                    <p class="text-justify">IT COMPETITION FIKOM UMI Merupakan Salah satu Kegiatan yang di selenggarakan BEM FIKOM UMI kepada Mahasiswa, agar mahasiswa dapat mengembangkan minat dan bakatnya baik di bidang Akademik maupun E-sports. IT COMPETITION ini berusaha mengembangkan minat berkembang mahasiswa di bidang Teknologi</p>
                </div>
                <div class="col-lg-3">
                    <h3>Where</h3>
                    <p> TEMPAT DAN WAKTU PELAKSANAAN
                        Aula Universitas Methodist Indonesia Lt.3, Jl. Hang tuah no. 8 Medan</p>
                </div>
                <div class="col-lg-3">
                    <h3>When</h3>
                    <p>Monday to Wednesday<br>17 April 2020 - 18 April 2020</p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
        <div class="container">
            <div class="section-header">
                <h2>Competition </h2>
                <p>Here are some of our Competition</p>
            </div>

            <div class="row">

                <?php foreach ($kompetisi as $q) : ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="speaker">
                            <img src="<?= base_url('assets/images/') . $q['gambar']; ?>" alt="Speaker 6" height="400px">
                            <div class="details">
                                <h3><a href="<?= base_url(); ?>home/detail/<?= $q['id_kompetisi']; ?>"><?= $q['nama_kompetisi']; ?> </a></h3>
                                <p><?= substr($q['deskripsi'], 0, 20); ?> </p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>






    <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery" class="wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Gallery</h2>
                <p>Check our gallery from the recent Competitions</p>
            </div>
        </div>

        <div class="owl-carousel gallery-carousel">
            <a href="<?= base_url('assets/images/'); ?>a.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>a.jpg" alt=""></a>
            <a href="<?= base_url('assets/images/'); ?>b.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>b.jpg" alt=""></a>
            <a href="<?= base_url('assets/images/'); ?>c.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>c.jpg" alt=""></a>
            <a href="<?= base_url('assets/images/'); ?>d.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>d.jpg" alt=""></a>
            <a href="<?= base_url('assets/images/'); ?>e.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>e.jpg" alt=""></a>
            <a href="<?= base_url('assets/images/'); ?>f.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>f.jpg" alt=""></a>
            <a href="<?= base_url('assets/images/'); ?>g.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>g.jpg" alt=""></a>
            <a href="<?= base_url('assets/images/'); ?>h.jpg" class="venobox" data-gall="gallery-carousel"><img src="<?= base_url('assets/images/'); ?>h.jpg" alt=""></a>
        </div>

    </section>

    <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">

        <div class="container">
            <div class="section-header">
                <h2>Sponsors</h2>
            </div>

            <div class="row no-gutters supporters-wrap clearfix">

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/2.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/3.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/4.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/5.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/6.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/7.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="supporter-logo">
                        <img src="<?= base_url('assets/vendor/'); ?>img/supporters/8.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section>




    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

        <div class="container">

            <div class="section-header">
                <h2>Contact Us</h2>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>Jl. Hangtuah medan</address>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">0822-7646-5718</a></p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:bemfocsumi@gmail.com">bemfocsumi@gmail.com</a></p>
                    </div>
                </div>

            </div>

            <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>
    </section><!-- #contact -->

</main>