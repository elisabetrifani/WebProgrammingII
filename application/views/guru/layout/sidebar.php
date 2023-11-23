<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('siswa') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dilemas SMAN 2</div>
    </a>


    <!-- Heading -->
    <div class="sidebar-heading">
        Beranda
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if (
                            $this->uri->segment(1) == 'guru' || $this->uri->segment(1) == 'dataguru'
                        ) {
                            echo 'active';
                        } ?>">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-home"></i>
            <span>BERANDA</span>
        </a>
        <div id="collapseTwo" class="collapse  <?php if ($this->uri->segment(1) == 'guru') {
                                                    echo 'show';
                                                }
                                                if ($this->uri->segment(1) == 'dataguru') {
                                                    echo 'show';
                                                } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Beranda & Data Guru</h6>
                <a class="collapse-item <?php if (
                                            $this->uri->segment(1) == 'guru'
                                        ) {
                                            echo 'active';
                                        } ?>" href="<?= base_url('guru'); ?>">Home</a>
                <a class="collapse-item <?php if (
                                            $this->uri->segment(1) == 'dataguru'
                                        ) {
                                            echo 'active';
                                        } ?>" href="<?= base_url('dataguru'); ?>">Data Guru</a>
            </div>
        </div>
    </li>


    <hr class="sidebar-divider d-none d-md-block">

    <div class="sidebar-heading">
        PENGUMUMAN
    </div>

    <li class="nav-item <?php if (
                            $this->uri->segment(1) ==  'viewpengumumandua'
                        ) {
                            echo 'active';
                        } ?>">
        <a class="nav-link" href="<?= base_url('viewpengumumandua') ?>">
            <i class="fas fa-bullhorn"></i>
            <span>PENGUMUMAN</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->