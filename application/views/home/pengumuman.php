    <div id="preloader" style="display: none;">
        <div class="loader-container done">
            <div class="progress-br float shadow done">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Pengumuman</h1>
        </div>
    </div>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="row">
                <?php foreach ($pengumuman as $key => $value) : ?>
                    <div class="col-sm-6">
                        <ul class="list-unstyled">
                            <li class="media">
                                <img width="64px" src="https://cdn3.iconfinder.com/data/icons/webina-seo-development-and-marketing/128/seo_web_3-52-256.png" class="mr-3" alt="...">
                                <div class="media-body">
                                    <h2 class="mt-2 mb-2"><?= $value->judul_pengumuman ?></h2>
                                    <?= substr($value->isi_pengumuman, 0, 200) ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>