<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Peserta Kompetisi</h3>

        <?= $this->session->flashdata('message'); ?>

        <table class="table display nowrap " id="table_id" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Team</th>
                    <th scope="col">Nama Leader</th>
                    <th scope="col">Institusi</th>
                    <th scope="col">Email leader</th>
                    <th scope="col">No WA leader</th>
                    <th scope="col">Image</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($team as $q) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td class=""><?= $q['nama_team']; ?></td>
                        <td class=""><?= $q['nama_leader']; ?></td>
                        <td class=""><?= $q['institusi']; ?></td>
                        <td class=""><?= $q['email']; ?></td>
                        <td class=""><?= $q['no_wa']; ?></td>
                        <td class=""><img src="<?= base_url('assets/images/qrcodeteam/' . $q['qr_code']); ?>" alt="" width="100" height="100"></td>
                    </tr>

                    <?php $i++; ?>

                <?php endforeach; ?>

            </tbody>
        </table>



    </section>
    <!-- /wrapper -->
</section>
<!-- /MAIN CONTENT -->
<!--main content end-->