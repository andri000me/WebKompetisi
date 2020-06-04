<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Administrator</h3>
        <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Panitia Kompetisi</a>

        <?= $this->session->flashdata('message'); ?>

        <table class="table display nowrap " id="table_id" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Panitia</th>
                    <th scope="col">Jabatan </th>
                    <th scope="col">Gambar </th>

                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($panitia as $q) : ?>
                    <tr>

                        <th scope="row"><?= $i; ?></th>
                        <td><?= $q['nama_panitia']; ?></td>
                        <td class=""><?= $q['jabatan']; ?></td>
                        <td class=""><img src="<?= base_url('assets/images/qrcodepanitia/') . $q['qr_code']; ?>" alt="" width="50px" height="50px"> </td>
                        <td class="">
                            <a href="<?= base_url(); ?>admin/hapuspanitia/<?= $q['id_panitia']; ?>" class="btn btn-danger px-2 py-2">Hapus </a>

                            <a href="<?= base_url(); ?>admin/cetakkartu/<?= $q['id_panitia']; ?>" class="btn btn-warning">Download Card</a>

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


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="container-fluid mt">
                <h4 class="text-center">Tambah Panitia Kompetisi </h4>
                <form method="POST" action="<?= base_url('admin/panitia'); ?>" enctype="multipart/form-data">
                    <div class="form-horizontal style-form">

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama Panitia</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control round-form" name="nama_panitia">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Jabatan Panitia</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control round-form" name="jabatan">
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-sm-12">

                                <button type="submit" class="btn btn-primary btn btn-block">Submit</button>

                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>