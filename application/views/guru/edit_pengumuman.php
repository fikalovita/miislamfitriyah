<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Edit Pengumuman</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            <?php foreach ($pengumuman as $key => $value) : ?>
                                <form action="<?= base_url('guru/ubah_pengumuman') ?>" method="POST">
                                    <input type="hidden" name="id_pengumuman" value="<?= $value->id_pengumuman ?>">
                                    <div class="form-group">
                                        <label for="judul_pengumuman">Judul Pengumuman</label>
                                        <input type="text" class="form-control form-control-sm" name="judul_pengumuman" value="<?= $value->judul_pengumuman ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Pengumuman</label>
                                        <textarea class="form-control" id="edit_pengumuman" name="pengumuman"><?= $value->isi_pengumuman ?></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-sm btn-primary float-right">Simpan</button>
                                    </div>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>