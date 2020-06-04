<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Kategori Kompetisi </h3>


        <?= $this->session->flashdata('message'); ?>

        <a href="" class="btn btn-primary mb-4" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Kompetisi</a>
        <table class="table display nowrap  " id="table_id" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama Kompetisi</th>
                    <th scope="col">Deskripsi Kompetisi</th>
                    <th scope="col">Gambar </th>
                    <th scope="col">Aksi</th>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime nobis pariatur nostrum itaque eum deleniti perspiciatis nesciunt recusandae et temporibus, possimus cupiditate quisquam consequuntur fugit quaerat odio quas libero debitis?
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kompetisi as $q) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td class=""><?= $q['nama_kompetisi']; ?> </td>
                        <td class=""><?= substr($q['deskripsi'], 0, 50); ?></td>
                        <td class=""><img src="<?= base_url('assets/images/') . $q['gambar']; ?>" alt="" width="50px" height="50px"> </td>
                        <td class="">

                            <a href="<?= base_url(); ?>admin/hapuskompetisi/<?= $q['id_kompetisi']; ?>" class="btn btn-danger px-2 py-2">Hapus </a>
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
                <h4 class="text-center">Tambah Kategori Kompetisi </h4>
                <form method="POST" action="<?= base_url('admin/kompetisi'); ?>" enctype="multipart/form-data">
                    <div class="form-horizontal style-form">

                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Nama Kompetisi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control round-form" name="nama_kompetisi">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Deskripsi </label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="control-label col-md-3">Image</label>
                            <div class="col-md-4">
                                <input type="file" class="default" name="berkas" />
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