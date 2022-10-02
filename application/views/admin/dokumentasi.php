<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dokumentasi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item judul"><a href="#!">List Dokumentasi</a></li>
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
                        <h5>Dokumentasi</h5>
                        <div class="card-header-right">
                            <a href="#" class="btn btn-sm btn-primary" role="button" data-toggle="modal" data-target="#tambah-dokumentasi"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="artikel" class="table table-striped table-bordered table-hover table-responsive-lg">
                            <thead class="text-center">
                                <tr>
                                    <th>Gambar</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dokumentasi->result() as $value) : ?>
                                    <tr>
                                        <td class="text-center"><img width="40px" src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt=""></td>
                                        <td><?= $value->nama_foto ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('admin/hapus_dokumentasi/' . $value->id_dokumentasi) ?>" class="btn btn-sm btn-danger hapus"><i class="fas fa-trash-alt"></i></a>
                                            <a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-dokumentasi" role="button"><i class="fas fa-pen"></i></a>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="edit-dokumentasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit-dokumentasi">Edit Dokumentasi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('admin/ubah_dokumentasi') ?>" method="POST" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_dokumentasi" value="<?= $value->id_dokumentasi ?>">
                                                        <input type="hidden" name="foto_lama" value="<?= $value->foto ?>">
                                                        <div class="form-group">
                                                            <label for="foto" class="col-form-label">Gambar</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input artikel_foto" id="foto_dokumentasi" accept=".jpg, .jpeg, .gif, .png" name="foto" onchange="return validasiDokumentasi()">
                                                                <label class="custom-file-label" for="inputGroupFile01"><?= $value->foto ?></label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <label for="judul_dokumentasi" class="col-form-label">Keterangan</label>
                                                            <input type="text" class="form-control form-control-sm" id="judul_dokumentasi" name="judul_dokumentasi" value="<?= $value->nama_foto ?>">
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-tambah">
    <div class="modal fade" id="tambah-dokumentasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambah-dokumentasi">Form Tambah Dokumentasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('admin/tambah_dokumentasi') ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="artikel_foto" class="col-form-label">Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input artikel_foto" id="file" accept=".jpg, .jpeg, .gif, .png" name="foto" onchange="return validasiFile()">
                                <label class="custom-file-label" for="inputGroupFile01">Pilih gambar...</label>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="nama_prestasi" class="col-form-label">Keterangan</label>
                            <input type="text" class="form-control form-control-sm" id="keterangan" name="keterangan">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>