<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img height="60px" src="<?= base_url('assets/home/') ?>images/logo2.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li <?= $this->uri->segment(2) == 'home' || $this->uri->segment(2) == '' ? 'class="nav-item active"' : "" ?> class="nav-item"><a class=" nav-link" href="<?= base_url('home') ?>">Home</a></li>
                    <li <?= $this->uri->segment(2) == 'profile' ? 'class="nav-item active"' : "" ?> class="nav-item"><a class="nav-link" href="<?= base_url('home/profile') ?>">Profil</a></li>
                    <li <?= $this->uri->segment(2) == 'blog' ? 'class="nav-item active"' : "" ?>class="nav-item"><a class="nav-link" href="<?= base_url('home/blog') ?>">Blog</a></li>
                    <li <?= $this->uri->segment(2) == 'prestasi' ? 'class="nav-item active"' : "" ?> class="nav-item"><a class="nav-link" href="<?= base_url('home/prestasi') ?>">Prestasi</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li> -->
                    <li <?= $this->uri->segment(2) == 'dokumentasi' ? 'class="nav-item active"' : "" ?> class="nav-item"><a class="nav-link" href="<?= base_url('home/dokumentasi') ?>">Dokumentasi</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-btn-new log orange btn-sm" href="<?= base_url('home/login') ?>" role="button"><span>LOGIN</span></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>