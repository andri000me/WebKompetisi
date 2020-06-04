<!--==========================
    Footer
  ============================-->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 footer-info">
                    <img src="<?= base_url('assets/images/logo.png'); ?>" alt="TheEvenet">
                    <p>Selamat datang di Website IT COMPETITION FIKOM Universitas Methodist Indonesia. Sebuah Kompetisi yang bertujuan untuk mengembangkan minat dan bakat mahasiswa dibidang Teknologi.</p>
                </div>



                <div class="col-lg-6 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        Jl. Hangtuah <br>
                        Medan, <br>
                        <strong>Phone:</strong> 0822-7646-5718<br>
                        <strong>Email:</strong> bemfocsumi@gmail.com<br>
                    </p>

                    <div class="social-links">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <?= date('Y'); ?> <strong>UMIKOMPETISI</strong>. All Rights Reserved
        </div>
        <div class="credits">

            Created by <a href="https://www.instagram.com/gorbyno_sitepu/" class="text-primary">Gorbyno Sitepu</a>
        </div>
    </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JavaScript Libraries -->
<script src="<?= base_url('assets/vendor/'); ?>lib/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/jquery/jquery-migrate.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/easing/easing.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/superfish/hoverIntent.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/superfish/superfish.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/venobox/venobox.min.js"></script>
<script src="<?= base_url('assets/vendor/'); ?>lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="<?= base_url('assets/vendor/'); ?>contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="<?= base_url('assets/vendor/'); ?>js/main.js"></script>


<script>
    $(document).ready(function() {

        $("select[id=combo2]").on("change", function() {
            if ($(this).val() === "pilih") {
                $("div[id=kode]").hide();
            } else {
                $("div[id=kode]").show();
            }
        });
        $("select[id=combo2]").trigger("change");


    });
</script>

</body>

</html>