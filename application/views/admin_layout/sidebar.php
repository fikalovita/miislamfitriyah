<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div ">
            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="<?= base_url('assets/uploads/' . $this->session->userdata('foto_admin')) ?>" alt="User-Profile-Image">
                    <div class="user-details">
                        <span><?= $this->session->userdata('nama_admin') ?></span>
                        <div id="more-details">Administrator<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="<?= base_url('admin/edit_profile') ?>"><i class="feather icon-user m-r-5"></i>Edit Profile</a></li>
                        <li class="list-group-item"><a href="<?= base_url('login/admin') ?>"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
                    </ul>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin') ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-gauge"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/profil_sekolah') ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-globe"></i></span><span class="pcoded-mtext">Web Sekolah</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/dokumentasi') ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-image"></i></span><span class="pcoded-mtext">Dokumentasi</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/guru') ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-chalkboard-user"></i></span><span class="pcoded-mtext">Guru</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/artikel') ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-calendar"></i></span><span class="pcoded-mtext">Artikel</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin/sambutan') ?>" class="nav-link "><span class="pcoded-micon"><i class="fa-solid fa-chalkboard-user"></i></span><span class="pcoded-mtext">Sambutan</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img width="70px" src="<?= base_url('assets/home/') ?>images/logo2.png" alt="" class="logo">
            <img src="<?= base_url() ?>/assets/images/logo-icon.png" alt="" class="logo-thumb">
        </a>
        <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
        </a>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                <div class="search-bar">
                    <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                    <button type="button" class="close" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="feather icon-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <img src="<?= base_url('assets/uploads/' . $this->session->userdata('foto_admin')) ?>" class="img-radius" alt="User-Profile-Image">
                            <span><?= $this->session->userdata('nama_admin') ?></span>
                            <a href="<?= base_url('login/admin_logout') ?>" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i>Edit Profile</a></li>
                            <li><a href="<?= base_url('login/admin_logout') ?>" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>