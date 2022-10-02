    <div class="all-title-box">
        <div class="container text-center">
            <h1>PROFIL<span class="m_1">MI ISLAM FITRIYAH BANJAWARU</span></h1>
        </div>
    </div>

    <div id="overviews" class="section lb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>About</h3>
                    <?php foreach ($about as $key => $value) : ?>
                        <p class="lead"><?= $value->isi_about ?></p>
                    <?php endforeach; ?>
                </div>
            </div>
            <!-- end title -->

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <?php foreach ($visi as $key => $value) : ?>
                            <h2>Visi</h2>
                            <?= $value->isi_visi ?>
                        <?php endforeach; ?><br>
                    </div>
                    <!-- end messagebox -->
                </div>
                <!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn" style="visibility: hidden; animation-name: none;">
                        <img src="https://cdn3.iconfinder.com/data/icons/education-934/1000/education___history_time_learn_study_landmark_book-256.png" alt="" class="img-fluid img-rounded">
                    </div>
                    <!-- end media -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end section -->

    <div class="hmv-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="inner-hmv">
                        <div class="icon-box-hmv"><i class="flaticon-achievement"></i></div>
                        <h3>Misi</h3>
                        <div class="tr-pa">M</div>
                        <?php foreach ($misi as $key => $value) : ?>
                            <?= substr($value->isi_misi, 0, 320) ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="inner-hmv">
                        <div class="icon-box-hmv"><i class="flaticon-eye"></i></div>
                        <h3>Visi</h3>
                        <div class="tr-pa">V</div>
                        <?php foreach ($visi as $key => $value) : ?>
                            <?= substr($value->isi_visi, 0, 320) ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="inner-hmv">
                        <div class="icon-box-hmv"><i class="flaticon-history"></i></div>
                        <h3>Sejarah</h3>
                        <div class="tr-pa">S</div>
                        <?php foreach ($sejarah as $key => $value) : ?>
                            <?= substr($value->isi_profil, 0, 320) ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- end section -->


    <!-- end section -->