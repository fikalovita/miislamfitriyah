<div class="all-title-box">
    <div class="container text-center">
        <h1>E-Learning<span class="m_1"></span></h1>
    </div>
</div>
<div class="container">
    <div class="col-sm-10 mb-5 mx-auto">
        <div class="row">
            <div class="col-md-3 mt-3 ">
                <a href="<?= base_url('home/pengumuman') ?>">
                    <div class="card mb-3">
                        <div class="text-center pt-2">
                            <img width="80px" height="80px" src="https://cdn3.iconfinder.com/data/icons/webina-seo-development-and-marketing/128/seo_web_3-52-256.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3>Pengumuman</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 mr-5 mt-3">
                <a href="">
                    <div class="card mb-3">
                        <div class="text-center pt-2">
                            <img width="80px" height="80px" src="https://cdn3.iconfinder.com/data/icons/education-science-vol-1-1/512/z3-class_lesson_course_teacher-128.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3>Kelas Digital</h3>
                        </div>
                    </div>
                </a>
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