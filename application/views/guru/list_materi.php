<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Materi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item judul"><a href="#!">Kumpulan Materi</a></li>
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
                        <h5>List Materi</h5>
                        <div class="card-header-right">
                            <a href="#" class="btn btn-sm btn-primary" role="button" data-toggle="modal" data-target="#tambah-materi"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="materi" class="table table-striped table-bordered table-hover table-responsive-lg">
                            <thead>
                                <tr>
                                    <th>Materi</th>
                                    <th>File</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($materi as $value) : ?>
                                    <tr>
                                        <td class=""><?= $value->nama_materi  ?></td>
                                        <td class="text-center"><?= $value->file ?></td>
                                        <td class="col-md-2 text-center">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                                    Aksi
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit-materi<?= $value->id_materi ?>"><i class="fas fa-pen fa-2xs"></i> Ubah</a>
                                                    <a class="dropdown-item hapus" href="<?= base_url('guru/hapus_materi/' . $value->id_materi) ?>"><i class="fas fa-trash fa-2xs"></i> Hapus</a>
                                                    <a class="dropdown-item" href="<?= base_url('guru/download_materi/' . $value->id_materi) ?>"><i class="fa-solid fa-download fa-2xs"></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="edit-materi<?= $value->id_materi ?>" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="edit-materi<?= $value->id_materi ?>">Form Edit Materi</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url('guru/ubah_materi/' . $value->id_materi) ?>" method="POST" enctype="multipart/form-data">
                                                        <input type="hidden" name="id_materi" value="<?= $value->id_materi ?>">
                                                        <input type="hidden" name="materi_lama" value="<?= $value->file ?>">
                                                        <input type="hidden" name="id_mapel" value="<?= $value->id_mapel ?>">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Judul Materi</label>
                                                            <input type="text" class="form-control form-control-sm" name="judul_materi" value="<?= $value->nama_materi ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="file" class="col-form-label">File Materi</label>
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="file" accept=".jpg, .jpeg, .gif, .png, .pdf, .docx, .pptx, .xls, .xlsx, .txt, .zip, .rar" name="file">
                                                                <label class="custom-file-label" for="inputGroupFile01"><?= $value->file ?></label>
                                                            </div>
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
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tambah-materi" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambah-materi">Form Tambah Materi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('guru/tambah_materi') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_mapel" value="<?= $this->uri->segment(3) ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Materi</label>
                        <input type="text" class="form-control form-control-sm" name="judul_materi">
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-form-label">File Materi</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" accept=".jpg, .jpeg, .gif, .png, .pdf, .docx, .pptx, .xls, .xlsx, .txt" name="file">
                            <label class="custom-file-label" for="inputGroupFile01">Pilih File...</label>
                        </div>
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