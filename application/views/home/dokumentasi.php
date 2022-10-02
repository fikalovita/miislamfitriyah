    <div id="preloader" style="display: none;">
        <div class="loader-container done">
            <div class="progress-br float shadow done">
                <div class="progress__item"></div>
            </div>
        </div>
    </div>
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Dokumentasi</h1>
        </div>
    </div>
    <div id="overviews" class="section wb">
        <div class="container">
            <div class="col-sm-12">
                <div class="row">
                    <?php foreach ($dokumentasi as $key => $value) : ?>
                        <div class="col-md-3">
                            <div class="card">
                                <img class="lightboxed img-responsive" rel="group1" src="<?= base_url('assets/uploads/' . $value->foto) ?>" data-link="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="Image Alt" data-caption="<?= $value->nama_foto ?>" />
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>.