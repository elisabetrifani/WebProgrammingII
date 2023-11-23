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
                            $this->uri->segment(1) ==  'admin'
                        ) {
                            echo 'active';
                        } ?>">
        <a class="nav-link" href="<?= base_url('admin') ?>">
            <i class="fas fa-home"></i>
            <span>HOME</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
            Data Siswa Dan Guru
        </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if (
                            $this->uri->segment(1) == 'crudsiswa' || $this->uri->segment(1) == 'crudguru'
                        ) {
                            echo 'active';
                        } ?>">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa fa-users"></i>
            <span>Siswa & Guru</span>
        </a>
        <div id="collapseTwo" class="collapse  <?php if ($this->uri->segment(1) == 'crudsiswa') {
                                                    echo 'show';
                                                }
                                                if ($this->uri->segment(1) == 'crudguru') {
                                                    echo 'show';
                                                } ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Siswa & Guru</h6>
                <a class="collapse-item <?php if (
                                            $this->uri->segment(1) == 'crudsiswa'
                                        ) {
                                            echo 'active';
                                        } ?>" href="<?= base_url('crudsiswa'); ?>">Data Siswa</a>
                <a class="collapse-item <?php if (
                                            $this->uri->segment(1) == 'crudguru'
                                        ) {
                                            echo 'active';
                                        } ?>" href="<?= base_url('crudguru'); ?>">Data Guru</a>
            </div>
        </div>
        
    <hr class="sidebar-divider d-none d-md-block">

        <div class="sidebar-heading">
            PENGUMUMAN
        </div>

    <li class="nav-item <?php if (
                            $this->uri->segment(1) ==  'addpengumuman'
                        ) {
                            echo 'active';
                        } ?>">
        <a class="nav-link" href="<?= base_url('addpengumuman') ?>">
            <i class="fas fa-bullhorn"></i>
            <span>PENGUMUMAN</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>



</ul>
<!-- End of Sidebar -->