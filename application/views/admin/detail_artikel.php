<div class="page-block">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="page-header-title">
                <h5 class="m-b-10">Artikel</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li><a href="<?= base_url('admin/artikel') ?>"><i class="fa-solid fa-arrow-left"></i> Kembali</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <?php foreach ($artikel as $value) : ?>
                <div class="card-header">
                    <h5><?= $value->judul_artikel ?></h5>
                </div>
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img width="60%" src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="" class="img-responsive">
                    </div>
                    <div class="artikel">
                        <?= $value->isi_artikel ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>