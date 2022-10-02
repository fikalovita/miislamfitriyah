<div class="all-title-box">
    <div class="container text-center">
        <h1>Teachers<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
    </div>
</div>
<div id="teachers" class="section wb">
    <div class="container">
        <div class="row">
            <?php foreach ($prestasi as $key => $value) : ?>
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="our-team">
                        <div class="team-img">
                            <img src="<?= base_url('assets/uploads/' . $value->gambar) ?>">
                            <div class="social">
                                <ul>
                                    <li>

                                        <h3 class="title"><?= $value->nama_siswa ?></h3>

                                    </li>
                            </div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"><?= $value->nama_prestasi ?></h3>
                            <span class="post"><?= $value->juara ?></span>
                            <span class="post"><?= $value->tahun ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>