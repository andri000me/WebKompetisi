<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Administrator</h3>
        <a href="<?= base_url('auth/registration'); ?>" class="btn btn-primary mb-4">Tambah Data Admin</a>

        <?= $this->session->flashdata('message'); ?>
        <table class="table display nowrap " id="table_id" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Admin</th>
                    <th scope="col">Email </th>
                    <th scope="col">Gambar </th>

                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($user as $q) : ?>
                    <tr>

                        <th scope="row"><?= $i; ?></th>
                        <td><?= $q['nama_user']; ?></td>
                        <td class=""><?= $q['email']; ?></td>
                        <td class=""><img src="<?= base_url('assets/images/') . $q['image']; ?>" alt="" width="50px" height="50px"> </td>
                        <td class=""><a href="<?= base_url(); ?>admin/hapususer/<?= $q['id_user']; ?>" class="btn btn-danger px-2 py-2">Hapus </a></td>
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