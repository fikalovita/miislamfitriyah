<div class="page-block">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="page-header-title">
                <h5 class="m-b-10">Edit Artikel</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li class=" judul"><a href="<?= base_url('admin/artikel') ?>"><i class="fa-solid fa-arrow-left"></i> Kembali</a></li>
            </ul>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Form Edit Artikel</h5>
            </div>
            <div class="card-body">
                <?php foreach ($artikel as $value) : ?>
                    <form action="<?= base_url('admin/ubah_artikel') ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" value="<?= $value->id_artikel ?>" name="id_artikel">
                        <input type="hidden" value="<?= $value->foto ?>" name="foto_lama">
                        <div class="form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" name="judul_artikel" value="<?= $value->judul_artikel ?>">
                        </div>
                        <div class="form-group">
                            <label for="myInput" class="col-form-label">Gambar</label>
                            <div class="mb-3">
                                <img width="100px" src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="">
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="myInput" accept=".jpg, .jpeg, .gif, .png" name="foto">
                                <label class="custom-file-label" for="inputGroupFile01"><?= $value->foto ?></label>
                            </div>
                        </div>
                        <label for="artikel">Artikel</label>
                        <textarea name="artikel" id="edit_artikel"><?= $value->isi_artikel ?></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success btn-sm mt-3"><i class="fas fa-save"></i> Simpan</button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>