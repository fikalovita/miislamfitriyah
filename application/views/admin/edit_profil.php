<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">

                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            <form action="<?= base_url('admin/ubah_profile') ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id_admin" value="<?= $this->session->userdata('id_admin') ?>">
                                <input type="hidden" name="foto_lama" value="<?= $this->session->userdata('foto_admin') ?>">
                                <div class="form-group">
                                    <label for="Nama"></label>
                                    <input type="text" class="form-control form-control-sm" name="nama_admin" value="<?= $this->session->userdata('nama_admin') ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="artikel_foto" class="col-form-label">Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" accept=".jpg, .jpeg, .gif, .png" name="foto_admin" onchange="return validasiFile()">
                                        <label class="custom-file-label" for="inputGroupFile01"><?= $this->session->userdata('foto_admin') ?></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username"></label>
                                    <input type="text" class="form-control form-control-sm" name="username" value="<?= $this->session->userdata('username_admin') ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="password"></label>
                                    <input type="password" class="form-control form-control-sm" name="password" value="<?= $this->session->userdata('password_admin') ?>" required>
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>