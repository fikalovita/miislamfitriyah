<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Navs &amp; tabs</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Navs &amp; tabs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Slider <span data-toggle="modal" data-target="#tambah_slider"><i class="fa-solid fa-circle-plus"></i></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  text-uppercase" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="visi" data-toggle="tab" href="#misi" role="tab" aria-controls="visi" aria-selected="false">Visi & Misi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" data-toggle="tab" href="#prestasi" role="tab" aria-controls="prestasi" aria-selected="false">Prestasi <span data-toggle="modal" data-target="#tambah_prestasi"><i class="fa-solid fa-circle-plus"></i></span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" data-toggle="tab" href="#ekskul" role="tab" aria-controls="ekskul" aria-selected="false">Ekstrakurikuler <span data-toggle="modal" data-target="#tambah_ekskul"><i class="fa-solid fa-circle-plus"></i></span></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-striped table-bordered table-responsive-lg" id="tabel_slider">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Gambar</th>
                                            <th>Judul Slider</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        <?php foreach ($slider as $key => $value) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><img width="40px" src="<?= base_url('assets/uploads/' . $value->gambar_slider) ?>" alt=""></td>
                                                <td><?= $value->judul_slider ?></td>
                                                <td>
                                                    <a href="<?= base_url('admin/hapus_slider/' . $value->id_slider) ?>" class="btn btn-sm btn-danger hapus" role="button"><i class="fas fa-trash-alt"></i></a>
                                                    <a href="#" class="btn btn-sm btn-warning" role="button" data-toggle="modal" data-target="#edit_slider<?= $value->id_slider ?>"><i class="fas fa-pen"></i></a>
                                                </td>
                                            </tr>
                                            <div class="modal-edit-slider">
                                                <div class="modal fade" id="edit_slider<?= $value->id_slider ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="edit_slider<?= $value->id_slider ?>">Tambah Slider</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('admin/ubah_slider') ?>" method="POST" enctype="multipart/form-data">
                                                                    <input type="hidden" name="id_slider" value="<?= $value->id_slider ?>">
                                                                    <input type="hidden" name="foto_lama" value="<?= $value->gambar_slider ?>">
                                                                    <div class="form-group">
                                                                        <label for="judul_slider">Judul Slider</label>
                                                                        <input type="text" class="form-control form-control-sm" name="judul_slider" value="<?= $value->judul_slider ?>">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input gambar-slide" id="file-upload" accept=".jpg, .jpeg, .gif, .png" name="gambar_slider" onchange="return validasiSlider()">
                                                                            <label class="custom-file-label" for="inputGroupFile01"><?= $value->gambar_slider ?></label>
                                                                        </div>
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
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <form action="<?= base_url('admin/about') ?>" method="POST">
                                    <?php foreach ($about as $key => $value) : ?>
                                        <input type="hidden" name="id_about" value="<?= $value->id_about ?>">
                                        <div class="form-group">
                                            <textarea class="form-control" id="about-text" name="isi_about" rows="3"><?= $value->isi_about ?></textarea>
                                        </div>
                                        <div class="float-right">
                                            <button type="submit" class="btn  btn-sm btn-primary">Simpan</button>
                                        </div>
                                    <?php endforeach; ?>
                                </form>

                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="<?= base_url('admin/profil') ?>" method="POST">
                                    <?php foreach ($profile as $key => $value) : ?>
                                        <input type="hidden" name="id_profile" value="<?= $value->id_profil ?>">
                                        <div class="form-group">
                                            <textarea class="form-control" id="profil" name="isi_profile" rows="3"><?= $value->isi_profil ?></textarea>
                                        </div>
                                        <div class="float-right">
                                            <button type="submit" class="btn  btn-sm btn-primary">Simpan</button>
                                        </div>
                                    <?php endforeach; ?>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="misi" role="tabpanel" aria-labelledby="visi">
                                <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                                <?php $this->session->set_flashdata('pesan', ''); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="<?= base_url('admin/ubah_visi') ?>" method="POST">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <h4>Visi</h4>
                                                </div>
                                                <?php foreach ($visi as $value) : ?>
                                                    <input type="hidden" value="<?= $value->id_visi ?>" name="id_visi">
                                                    <textarea class="form-control" id="visi_misi" name="isi_visi"><?= $value->isi_visi ?></textarea>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-6">
                                        <form action="<?= base_url('admin/ubah_misi') ?>" method="POST">
                                            <div class="form-group">
                                                <div class="text-center">
                                                    <h4>Misi</h4>
                                                </div>
                                                <?php foreach ($misi as $value) : ?>
                                                    <input type="hidden" value="<?= $value->id_misi ?>" name="id_misi">
                                                    <textarea class="form-control" id="visi_misi2" name="isi_misi"><?= $value->isi_misi ?></textarea>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="text-right">
                                                <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-save"></i> Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ekskul" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="table-responsive">
                                    <table id="tabel_ekskul" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Nama Ekstrakurikuler</th>
                                                <th>Gambar</th>
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ekskul as $value) : ?>
                                                <tr>
                                                    <td><?= $value->nama_ekskul ?></td>
                                                    <td class="text-center"><img width="40px" load="lazy" src="<?= base_url('assets/uploads/' . $value->gambar) ?>" alt=""></td>
                                                    <td class="col-md-5">
                                                        <p><?= $value->deskripsi ?></p>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('admin/hapus_ekskul/' . $value->id_ekskul) ?>" class="btn btn-sm btn-danger hapus" role="button"><i class="fas fa-trash-alt"></i></a>
                                                        <a href="#" class="btn btn-sm btn-warning" role="button" data-toggle="modal" data-target="#edit_ekskul<?= $value->id_ekskul ?>">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-success" role="button" data-toggle="modal" data-target="#detail_ekskul<?= $value->id_ekskul ?>"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <div class="modal-edit-ekskul">
                                                    <div class="modal fade" id="edit_ekskul<?= $value->id_ekskul ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="edit_ekskul">Form Edit Ekstrakurikuler</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="<?= base_url('admin/ubah_ekskul') ?>" method="POST" enctype="multipart/form-data">
                                                                        <input type="hidden" name="id_ekskul" value="<?= $value->id_ekskul ?>">
                                                                        <input type="hidden" name="foto_lama" value="<?= $value->gambar ?>">
                                                                        <div class="form-group ">
                                                                            <label for="nama_ekskul" class="col-form-label">Nama Ekstrakurikuler</label>
                                                                            <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul" value="<?= $value->nama_ekskul ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="myInput" class="col-form-label">Gambar</label>
                                                                            <div class="custom-file">
                                                                                <input type="file" class="custom-file-input ubah-ekskul" id="file-upload" accept=".jpg, .jpeg, .gif, .png" name="gambar" onchange="return validasiEditEkskul()">
                                                                                <label class=" custom-file-label ubah-ekskul" for="inputGroupFile01"><?= $value->gambar ?></label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                                                            <textarea class="form-control" id="deskripsi" placeholder="ceritakan ekstrakurikuler....." name="deskripsi"><?= $value->deskripsi ?></textarea>
                                                                        </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-sm  btn-primary">Simpan</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-detail-ekskul">
                                                    <div class="modal fade" id="detail_ekskul<?= $value->id_ekskul ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="detail_ekskul"><?= $value->nama_ekskul ?></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                </div>
                                                                <div class="modal-body ">
                                                                    <div class="img-responsive text-center mb-3">
                                                                        <img width="50%" src="<?= base_url('assets/uploads/' . $value->gambar) ?>" alt="">
                                                                    </div>
                                                                    <div class="">
                                                                        <p><?= $value->deskripsi ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="preatasi-tab">
                                <div class="table-responsive">
                                    <table id="tabel_prestasi" class="table table-striped table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Nama Siswa</th>
                                                <th>Gambar</th>
                                                <th>Tahun</th>
                                                <th>Nama Prestasi</th>
                                                <th>Juara</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($prestasi as $value) : ?>
                                                <tr>
                                                    <td><?= $value->nama_prestasi ?></td>
                                                    <td class="text-center"><img width="40px" load="lazy" src="<?= base_url('assets/uploads/' . $value->gambar) ?>" alt=""></td>
                                                    <td><?= $value->tahun ?></td>
                                                    <td><?= $value->nama_prestasi ?></td>
                                                    <td><?= $value->juara ?></td>
                                                    <td class="col-md-2">
                                                        <a href="<?= base_url('admin/hapus_prestasi/' . $value->id_prestasi) ?>" class="btn btn-sm btn-danger hapus" role="button"><i class="fas fa-trash-alt"></i></a>
                                                        <a href="#" class="btn btn-sm btn-warning" role="button" data-toggle="modal" data-target="#edit_prestasi<?= $value->id_prestasi ?>">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <a href="#" class="btn btn-sm btn-success" role="button" data-toggle="modal" data-target="#detail_prestasi<?= $value->id_prestasi ?>"><i class="fas fa-eye"></i></a>
                                                    </td>
                                                </tr>
                                                <div class="modal-edit-prestasi">
                                                    <div class="modal fade" id="edit_prestasi<?= $value->id_prestasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="edit_prestasi">Form Edit Prestasi</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form id="form_ubah_prestasi" action="<?= base_url('admin/ubah_prestasi') ?>" method="POST" enctype="multipart/form-data">
                                                                        <fieldset>
                                                                            <input type="hidden" name="foto_lama" value="<?= $value->gambar ?>">
                                                                            <input type="hidden" name="id_prestasi" value="<?= $value->id_prestasi ?>">
                                                                            <div class="form-group ">
                                                                                <label for="nama_prestasi" class="col-form-label">Nama Prestasi</label>
                                                                                <input type="text" class="form-control" id="nama_prestasi" name="nama_prestasi" value="<?= $value->nama_siswa ?>">
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label for="nama_kegiatan" class="col-form-label">Nama Kegiatan</label>
                                                                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan" value="<?= $value->nama_prestasi ?>">
                                                                            </div>
                                                                            <div class="form-group ">
                                                                                <label for="tahun" class="col-form-label">Tahun</label>
                                                                                <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $value->tahun ?>">
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="gambar_prestasi" class="col-form-label">Gambar</label>
                                                                                <div class="custom-file">
                                                                                    <input type="file" class="custom-file-input" id="file-upload" accept=".jpg, .jpeg, .gif, .png" name="gambar" onchange="formValidate()">
                                                                                    <label class=" custom-file-label" for="inputGroupFile01"><?= $value->gambar ?></label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label for="deskripsi" class="col-form-label">Juara</label>
                                                                                <input type="text" class="form-control" id="juara" name="juara" value="<?= $value->juara ?>">
                                                                            </div>
                                                                        </fieldset>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Tutup</button>
                                                                    <button type="submit" class="btn btn-sm  btn-primary">Simpan</button>
                                                                </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-detail-prestasi">
                                                    <div class="modal fade" id="detail_prestasi<?= $value->id_prestasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="detail_prestasi"><?= $value->nama_prestasi ?></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                                                </div>
                                                                <div class="modal-body ">
                                                                    <div class="img-responsive text-center mb-3">
                                                                        <img width="50%" src="<?= base_url('assets/uploads/' . $value->gambar) ?>" alt="">
                                                                    </div>
                                                                    <div class="">
                                                                        <p><?= $value->nama_siswa ?></p>
                                                                    </div>
                                                                    <div class="">
                                                                        <p><?= $value->juara ?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Tutup</button>
                                                                </div>
                                                            </div>
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
        </div>
        <div class="list-modal">
            <div class="modal-ekskul">
                <div class="modal fade" id="tambah_ekskul" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambah_ekskul">Form Tambah Ekstrakurikuler</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/tambah_ekskul') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label for="nama_ekskul" class="col-form-label">Nama Ekstrakurikuler</label>
                                        <input type="text" class="form-control" id="nama_ekskul" name="nama_ekskul">
                                    </div>
                                    <div class="form-group">
                                        <label for="myInput" class="col-form-label">Gambar</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input gambar-ekskul file" id="file-upload" accept=".jpg, .jpeg, .gif, .png" name="gambar" onchange="formValidate()">
                                            <label class=" custom-file-label" for="inputGroupFile01">Pilih gambar...</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                        <textarea class="form-control" id="deskripsi" placeholder="ceritakan ekstrakurikuler....." name="deskripsi"></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-sm  btn-primary">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-prestasi">
                <div class="modal fade" id="tambah_prestasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambah_prestasi">Form Tambah Prestasi</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/tambah_prestasi') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label for="nama_siswa" class="col-form-label">Nama Siswa</label>
                                                <input type="text" class="form-control form-control-sm" id="nama_prestasi" name="nama_siswa">
                                            </div>
                                        </div>
                                        <div class="col md-6">
                                            <div class="form-group ">
                                                <label for="nama_kegiatan" class="col-form-label">Nama prestasi</label>
                                                <input type="text" class="form-control form-control-sm" id="nama_kegiatan" name="nama_prestasi">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="tahun" class="col-form-label">Tahun</label>
                                        <input type="text" class="form-control form-control-sm" id="tahun" name="tahun">
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi" class="col-form-label">Juara</label>
                                        <input type="text" class="form-control form-control-sm" id="juara" name="juara">
                                    </div>
                                    <div class="form-group">
                                        <label for="gambar_prestasi" class="col-form-label">Gambar</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input gambar-prestasi" id="file-upload" accept=".jpg, .jpeg, .gif, .png" name="gambar" onchange="formValidate()">
                                            <label class="custom-file-label" for="inputGroupFile01">Pilih gambar...</label>
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm  btn-danger" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-sm  btn-primary">Simpan</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-tambah-slider">
                <div class="modal fade" id="tambah_slider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="tambah_slider">Tambah Slider</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('admin/tambah_slider') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="judul_slider">Judul Slider</label>
                                        <input type="text" class="form-control form-control-sm" name="judul_slider">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input gambar-slide" id="file-upload" accept=".jpg, .jpeg, .gif, .png" name="gambar_slider" onchange="return validasiSlider()">
                                            <label class="custom-file-label" for="inputGroupFile01">Pilih gambar...</label>
                                        </div>
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
        </div>
    </div>
</div>