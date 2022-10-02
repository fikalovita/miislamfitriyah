    <div class="all-title-box">
        <div class="container text-center">
            <h1>Blog<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
        </div>
    </div>
    <div id="overviews" class="section wb">
        <div class="container">
            <!-- end title -->
            <hr class="invis">
            <div class="row">
                <?php foreach ($blog as $key => $value) : ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-item">
                            <div class="image-blog">
                                <img src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="" class="img-fluid">
                            </div>
                            <div class="meta-info-blog">
                                <span><i class="fa fa-calendar"></i> <a href="#"><?= date('M-d-Y', strtotime($value->created)) ?></a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Artikel</a> </span>
                            </div>
                            <div class="blog-title">
                                <h2><a href="#" title=""><?= $value->judul_artikel ?></a></h2>
                            </div>
                            <div class="blog-desc">
                                <?= substr($value->isi_artikel, 0, 200) ?>...
                            </div>
                            <div class="blog-button">
                                <a class="hover-btn-new orange" href="<?= base_url('home/detail_artikel/' . $value->id_artikel) ?>"><span>Selengkapnya<span></span></span></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>