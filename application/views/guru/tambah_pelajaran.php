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
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Form Tambah Pelajaran</h5>
                    </div>
                    <div class="card-body">
                        <div class="col-sm-12">
                            <form action="<?= base_url('guru/tambah_pelajaran') ?>" method="POST">
                                <div class="form-group">
                                    <label for="matpel">Mata Pelajaran</label>
                                    <input type="text" class="form-control form-control-sm" name="matpel" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kelas</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="kelas">
                                        <option>--Piih Kelas--</option>
                                        <?php foreach ($kelas as $key => $value) : ?>
                                            <option value="<?= $value->id_kelas ?>"><?= $value->isi_kelas ?></option>
                                        <?php endforeach; ?>

                                    </select>
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