<div id="preloader">
    <div class="loader-container">
        <div class="progress-br float shadow">
            <div class="progress__item"></div>
        </div>
    </div>
</div>
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider  carousel-fade" data-ride="carousel" data-pause="hover" data-interval="true">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        $i = 0;
        foreach ($slider as $value) {
            $active = '';
            if ($i == 0) {
                $active = 'active';
            }
        ?>
            <li data-target="#carouselExampleCaptions" data-slide-to="<?= $i; ?>" class="<?= $active; ?>">
            <?php $i++;
        } ?>
            </li>

    </ol>
    <div class="carousel-inner" role="listbox">
        <?php
        $i = 0;
        foreach ($slider as $value) {
            $active = '';
            if ($i == 0) {
                $active = 'active';
            }
        ?>
            <div class="carousel-item <?= $active; ?>">
                <div id="home" class="first-section" style="background-image:url('<?= base_url('assets/uploads/' . $value->gambar_slider) ?>');">
                    <div class="dtab">
                        <!-- <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 text-left">
                                <div class="big-tagline">
                                    <h2 data-animation="animated zoomInRight">SmartEDU <strong>education school</strong></h2>
                                    <p class="lead" data-animation="animated fadeInLeft">With Landigoo responsive landing page template, you can promote your all hosting, domain and email services. </p>
                                    <a href="#" class="hover-btn-new"><span>Contact Us</span></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="hover-btn-new"><span>Read More</span></a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            </div>
        <?php $i++;
        } ?>
        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>About</h3>
                <?php foreach ($about as $key => $value) : ?>
                    <p class="lead"><?= $value->isi_about ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="row align-items-center">
            <?php foreach ($sambutan as $key => $value) : ?>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2>Sambutan Kepala Sekolah</h2>
                        <?= substr($value->isi_sambutan, 0, 500) ?>
                        <a href="<?= base_url('home/detail_sambutan') ?>" class="hover-btn-new orange"><span>Selengkapnya</span></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="<?= base_url('assets/uploads/' . $value->foto_sambutan) ?>" width="40%" height="40%" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach ($artikel as $key => $value) : ?>
                <div class="row align-items-center mt-5">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">

                        <div class="post-media wow fadeIn">
                            <img src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="" class="img-fluid img-rounded">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="message-box">

                            <h2><?= $value->judul_artikel ?></h2>
                            <?= substr($value->isi_artikel, 0, 500) ?>

                            <a href="<?= base_url('home/detail_artikel/' . $value->id_artikel) ?>" class="hover-btn-new orange"><span>Selengkapnya</span></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ekstrakurikuler</h3>
            </div>
            <hr class="invis">
            <div class="owl-carousel owl-theme">
                <?php foreach ($ekskul->result() as $key => $value) : ?>
                    <div>
                        <div class="card">
                            <img src="<?= base_url('assets/uploads/' . $value->gambar) ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title"><?= $value->nama_ekskul ?></h3>
                                <p class="card-text"><?= $value->deskripsi ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="section cl">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="fa-solid fa-chalkboard-user"></i></span>
                    <p class="stat_count"><?= $guru ?></p>
                    <h3>Guru</h3>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="fa-solid fa-trophy"></i></span>
                    <p class="stat_count"><?= $prestasi ?></p>
                    <h3>Prestasi</h3>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="fa-solid fa-basketball"></i></span>
                    <p class="stat_count"><?= $ekskul->num_rows() ?></p>
                    <h3>Ekstrakurikuler</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="hmv-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="<?= base_url('home/detail_misi') ?>">
                        <div class="inner-hmv">
                            <div class="icon-box-hmv"><i class="flaticon-achievement"></i></div>
                            <h3>Misi</h3>
                            <div class="tr-pa">M</div>
                            <?php foreach ($misi as $key => $value) : ?>
                                <?= substr($value->isi_misi, 0, 320) ?>
                            <?php endforeach; ?>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="<?= base_url('home/detail_visi') ?>">
                        <div class="inner-hmv">
                            <div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
                            <h3>Visi</h3>
                            <div class="tr-pa">V</div>
                            <?php foreach ($visi as $key => $value) : ?>
                                <?= substr($value->isi_visi, 0, 320) ?>
                            <?php endforeach; ?>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="<?= base_url('home/detail_sejarah') ?>">
                        <div class="inner-hmv">
                            <div class="icon-box-hmv"><i class="flaticon-history"></i></div>
                            <h3>Sejarah</h3>
                            <div class="tr-pa">S</div>
                            <?php foreach ($sejarah as $key => $value) : ?>
                                <?= substr($value->isi_profil, 0, 320) ?>
                            <?php endforeach; ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>