<div class="page-block">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="page-header-title">
                <h5 class="m-b-10">Tambah Artikel</h5>
            </div>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"></li>
                <li><a href="<?= base_url('admin/artikel') ?>"><i class="fa-solid fa-arrow-left"></i> Kembali</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">
        <h5>Form Tambah Artikel</h5>
    </div>
    <div class="card-body">
        <form action="<?= base_url('admin/tambah_artikel') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul Artikel</label>
                <input type="text" class="form-control" name="judul_artikel">
            </div>
            <div class="form-group">
                <label for="artikel_foto" class="col-form-label">Gambar</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input multi" id="file" accept=".jpg, .jpeg, .gif, .png" name="foto" onchange="return validasiFile()">
                    <label class="custom-file-label" for="inputGroupFile01">Pilih gambar...</label>
                </div>
            </div>
            <label for="artikel">Artikel</label>
            <textarea name="artikel" id="tambah_artikel"></textarea>
            <div class="text-right">
                <button class="btn btn-success btn-sm mt-3"><i class="fas fa-save"></i> Simpan</button>
            </div>

        </form>
    </div>
</div>