<!-- [ Pre-loader ] start -->

<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Sambutan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item judul"><a href="#!">Sambutan Kepala Sekolah</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sambutan Kepala Sekolah</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('admin/update_sambutan') ?>" method="POST" enctype="multipart/form-data">
                            <?php foreach ($sambutan as $key => $value) : ?>
                                <input type="hidden" value="<?= $value->id_sambutan ?>" name="id_sambutan">
                                <input type="hidden" value="<?= $value->foto_sambutan ?>" name="foto_lama">
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">Foto Kapala Sekolah</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" accept=".jpg, .jpeg, .gif, .png" name="foto" onchange="return validasiFile()">
                                        <label class="custom-file-label" for="inputGroupFile01"><?= $value->foto_sambutan ?></label>
                                    </div>
                                </div>
                                <label for="sambutan">Sambutan</label>
                                <textarea name="sambutan" id="update_sambutan"><?= $value->isi_sambutan ?></textarea>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success btn-sm mt-3"><i class="fas fa-save"></i> Simpan</button>
                                </div>
                            <?php endforeach; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>