<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item judul"><a href="#!">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="text-center pt-2">
                        <img class="rounded-circle" width="200px" height="200px" src="<?= base_url('assets/uploads/' . $this->session->userdata('foto')) ?>" alt="">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="mb-0"><?= $this->session->userdata('nama_guru') ?></h5>
                        <small class="mt-0"><?= $this->session->userdata('nuptk') ?></small><br>
                        <button class="btn btn-sm btn-danger mt-3 mr-2" data-toggle="modal" data-target="#edit-profile-guru<?= $this->session->userdata('id_guru') ?>"><small>Edit Profile</small></button>
                        <a href="<?= base_url('guru/view_profile') ?>" class="btn btn-sm btn-success mt-3"><small>View Profile</small></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-responsive-lg table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Materi</th>
                                    <th scope="col">File</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no =1?>
                                <?php foreach($materi as $key=>$value):?>
                                
                                <tr>
                                    <th scope="row"><?= $no++ ?></th>
                                    <td><?=$value->nama_materi?></td>
                                    <td class="col-3"><?=$value->file?></td>
                                    <td class="col-2"><a class="btn btn-sm btn-success">Download</a></td>
                                </tr>
                                <?php endforeach;?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="modal-edit-profile">
    <div class="modal fade" id="edit-profile-guru<?= $this->session->userdata('id_guru') ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-profile-guru<?= $this->session->userdata('id_guru') ?>">Form Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('guru/ubah_profile') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_guru" value="<?= $this->session->userdata('id_guru') ?>">
                        <input type="hidden" name="foto_lama" value="<?= $this->session->userdata('foto') ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nuptk">NUPTK/PegID</label>
                                    <input type="number" class="form-control form-control-sm" name="nuptk" placeholder="NUPTK/PegID" value="<?= $this->session->userdata('nuptk') ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control form-control-sm" name="nama" placeholder="nama" value="<?= $this->session->userdata('nama_guru') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control form-control-sm" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $this->session->userdata('tempat_lahir') ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-sm" name="tgl_lahir" value="<?= $this->session->userdata('tgl_lahir') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control form-control-sm" name="jenis_kelamin" ?>">
                                        <option value="">--Pilih Jenis Kelamin--</option>
                                        <option value="Laki-laki" <?= ($this->session->userdata('jenis_kelamin') == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki </option>
                                        <option value="Perempuan" <?= ($this->session->userdata('jenis_kelamin') == 'Perempuan' ? 'selected' : ''); ?>>Perempuan </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control form-control-sm" name="jabatan" placeholder="Jabatan" value="<?= $this->session->userdata('jabatan') ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="artikel_foto">Foto</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input artikel_foto" id="dokumentasi_foto" accept=".jpg, .jpeg, .gif, .png" name="foto">
                                <label class="custom-file-label" for="inputGroupFile01"><?= $this->session->userdata('foto') ?></label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>