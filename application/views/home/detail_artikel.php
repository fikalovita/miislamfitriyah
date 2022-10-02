<body class="host_version">
    <div id="preloader" style="display: none;">
        <div class="loader-container done">
            <div class="progress-br float shadow done">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <?php foreach ($artikel as $key => $value) : ?>
        <div class="all-title-box">
            <div class="container text-center">
                <h1><?= $value->judul_artikel ?></h1>
            </div>
        </div>
    <?php endforeach; ?>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 blog-post-single">
                    <?php foreach ($artikel as $key => $value) : ?>
                        <div class="blog-item">
                            <div class="image-blog">
                                <img src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="" class="img-fluid">
                            </div>
                            <div class="post-content">
                                <div class="post-date">
                                    <span class="day"> <?= date('d', strtotime($value->created)) ?></span>
                                    <span class="month"><?= date('M', strtotime($value->created)) ?></span>
                                </div>
                                <div class="meta-info-blog">
                                    <span><i class="fa fa-calendar"></i> <a href="#"><?= date('M-d-Y', strtotime($value->created)) ?></a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#">Artikel</a> </span>
                                </div>
                                <div class="blog-title">
                                    <h2><a href="#" title=""><?= $value->judul_artikel ?></a></h2>
                                </div>
                                <div class="blog-desc">
                                    <?= $value->isi_artikel ?>
                                </div>
                            </div>
                        </div>
                        <div class="blog-author">
                            <div class="author-bio">
                                <h3 class="author_name"><a href="#">Tom Jobs</a></h3>
                                <h5>CEO at <a href="#">SmartEDU</a></h5>
                                <p class="author_det">
                                    Lorem ipsum dolor sit amet, consectetur adip, sed do eiusmod tempor incididunt ut aut reiciendise voluptat maiores alias consequaturs aut perferendis doloribus omnis saperet docendi nec, eos ea alii molestiae aliquand.
                                </p>
                            </div>
                            <div class="author-desc">
                                <img src="images/author.jpg" alt="about author">
                                <ul class="author-social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-lg-3 col-12 right-single">
                    <div class="widget-categories">
                        <h3 class="widget-title">Artikel Lainnya</h3>
                        <ul>
                            <?php foreach ($artikel as $key => $value) : ?>
                                <li><a href="<?= base_url('home/detail_artikel/' . $value->id_artikel) ?>"><?= $value->judul_artikel ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>