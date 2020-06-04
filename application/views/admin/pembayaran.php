<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Laporan Pembayaran</h3>


        <?= $this->session->flashdata('message'); ?>

        <a href="<?= base_url('admin/cetakteam'); ?>" class="btn btn-success float-right mr-4"> <i class="fa fa-download"> </i>&nbsp; Download FILE</a><br><br> <br>

        <table class="table display nowrap " id="table_id" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Team</th>
                    <th scope="col">Nama Leader</th>
                    <th scope="col">Institusi</th>
                    <th scope="col">Email leader</th>
                    <th scope="col">No WA leader</th>
                    <th scope="col">gambar Struk Pembayaran</th>
                    <th scope="col">QR CODE TEAM</th>

                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pembayaran as $q) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td class=""><?= $q['nama_team']; ?></td>
                        <td class=""><?= $q['nama_leader']; ?></td>
                        <td class=""><?= $q['institusi']; ?></td>
                        <td class=""><?= $q['email']; ?></td>
                        <td class=""><?= $q['no_wa']; ?></td>
                        <td><img src="<?= base_url('assets/images/pembayaran/') . $q['gambar']; ?>" alt="" width="200px" height="200px"></a> </td>
                        <td><img src="<?= base_url('assets/images/qrcodeteam/') . $q['qr_code']; ?>" alt="" width="100" height="100"></a> </td>

                        <td class="">
                            <a href="<?= base_url('admin/pesertabayar/' . $q['id_team']); ?>" class="badge badge-success"><?= $q['validasi_pembayaran']; ?></a>
                        </td>
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