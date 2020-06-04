<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><img src="<?= base_url('assets/'); ?>vendoradmin/img/ui-sam.jpg" class="img-circle" width="80"></p>
            <h5 class="centered"><?php echo $this->session->userdata('nama_user'); ?></h5>
            <li class="mt">
                <a class="" href="<?= base_url('admin'); ?>">
                    <i class=" fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>


            <li>
                <a href="<?= base_url('home/'); ?>" target="_blank">
                    <i class="fa fa-send"></i>
                    <span>Lihat Website </span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/pembayaran'); ?>">
                    <i class="fa fa-dollar"></i>
                    <span>Pembayaran </span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/peserta'); ?>">
                    <i class="fa fa-users"></i>
                    <span>Team </span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/kompetisi'); ?>">
                    <i class="fa fa-desktop"></i>
                    <span>kompetisi </span>
                </a>
            </li>

            <li>
                <a href="<?= base_url('admin/panitia'); ?>">
                    <i class="fa fa-users"></i>
                    <span>Panitia </span>
                </a>
            </li>


            <li>
                <a href="<?= base_url('admin/user'); ?>">
                    <i class="fa fa-user"></i>
                    <span>Admin </span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->