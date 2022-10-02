<div class="pcoded-main-container">
  <div class="pcoded-content" id="konten">
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Guru</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
              <li class="breadcrumb-item judul"><a href="#!">List Guru</a></li>
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
            <h5>Guru</h5>
            <div class="card-header-right">
              <a href="#" class="btn btn-sm btn-primary" role="button" data-toggle="modal" data-target="#tambah-banyak">Tambah Banyak</a>
              <a href="#" class="btn btn-sm btn-primary" role="button" data-toggle="modal" data-target="#tambah-guru"><i class="fas fa-plus"></i></a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped table-responsive-lg" id="tabel_guru">
              <thead>
                <tr class="text-center">
                  <th scope="col">#</th>
                  <th scope="col">Foto</th>
                  <th scope="col">NUPTK/PegID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($guru->result() as $value) : ?>
                  <tr>
                    <th scope="row" class="text-center"><?= $no++ ?></th>
                    <td>
                      <div class="text-center">
                        <img width="40px" height="40px" class="rounded-circle" load="lazy" src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="">
                      </div>
                    </td>
                    <td><?= $value->nuptk ?></td>
                    <td><?= $value->nama_guru ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= $value->password ?></td>
                    <td class="text-center">
                      <a href="<?= base_url('admin/hapus_guru/' . $value->id_guru) ?>" role="button" class="btn btn-sm btn-danger hapus"><i class="fas fa-trash-alt"></i></a>
                      <a href="#" role="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#edit-guru<?= $value->id_guru ?>"><i class="fas fa-pen"></i></a>
                      <a href="#" role="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#detail-guru<?= $value->id_guru ?>"><i class="fas fa-eye"></i></a>
                    </td>
                  </tr>
                  <div class="modal-edit-guru">
                    <div class="modal fade" id="edit-guru<?= $value->id_guru ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="edit-guru<?= $value->id_guru ?>">Form Edit Guru</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?= base_url('admin/ubah_guru') ?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="id_guru" value="<?= $value->id_guru ?>">
                              <input type="hidden" name="foto_lama" value="<?= $value->foto ?>">
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="nuptk">NUPTK/PegID</label>
                                    <input type="number" class="form-control form-control-sm" name="nuptk" placeholder="NUPTK/PegID" value="<?= $value->nuptk ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control form-control-sm" name="nama" placeholder="nama" value="<?= $value->nama_guru ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control form-control-sm" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $value->tempat_lahir ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control form-control-sm" name="tgl_lahir" value="<?= $value->tgl_lahir ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control form-control-sm" name="jenis_kelamin" ?>">
                                      <option value="">--Pilih Jenis Kelamin--</option>
                                      <option value="Laki-laki" <?= ($value->jenis_kelamin == 'Laki-laki' ? 'selected' : ''); ?>>Laki-laki </option>
                                      <option value="Perempuan" <?= ($value->jenis_kelamin == 'Perempuan' ? 'selected' : ''); ?>>Perempuan </option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <input type="text" class="form-control form-control-sm" name="jabatan" placeholder="Jabatan" value="<?= $value->jabatan ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control form-control-sm" name="username" placeholder="Username" value="<?= $value->username ?>">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-sm" name="password" placeholder="Password" value="<?= $value->password ?>">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="artikel_foto">Foto</label>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input artikel_foto" id="file" accept=".jpg, .jpeg, .gif, .png" name="foto" onchange="return validasiFile()">
                                  <label class="custom-file-label" for="inputGroupFile01"><?= $value->foto ?></label>
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
          </div>
        <?php endforeach; ?>
        </tbody>
        </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-tambah-guru">
  <div class="modal fade" id="tambah-guru" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah-guru">Form Tambah Guru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('admin/tambah_guru') ?>" method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nuptk">NUPTK/PegID</label>
                  <input type="number" class="form-control form-control-sm" name="nuptk" placeholder="NUPTK/PegID" autofocus>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control form-control-sm" name="nama" placeholder="nama">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                  <input type="text" class="form-control form-control-sm" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control form-control-sm" name="tgl_lahir">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <select class="form-control form-control-sm" name="jenis_kelamin">
                    <option value="">Jenis Kelamin </option>
                    <option value="Laki-laki">Laki-laki </option>
                    <option value="Perempuan">Perempuan </option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jabatan">Jabatan</label>
                  <input type="text" class="form-control form-control-sm" name="jabatan" placeholder="Jabatan">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control form-control-sm" name="username_guru" placeholder="Username">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" class="form-control form-control-sm" name="password_guru" placeholder="Password">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="foto">Foto</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="foto_guru" accept=".jpg, .jpeg, .gif, .png" name="foto" onchange="return validasiGuru()">
                <label class="custom-file-label" for="inputGroupFile01">Pilih Foto...</label>
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
<?php foreach ($guru->result() as $value) : ?>
  <div class="modal-detail-guru">
    <div class="modal fade" id="detail-guru<?= $value->id_guru ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="detail-guru<?= $value->id_guru ?>"><?= mb_strtoupper($value->nama_guru) ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <div class="text-center">
              <img class="rounded-circle mb-4" width="200px" height="200px" src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt="">
            </div>
            <div>
              <table class="table table-bordered table-responsive-lg">
                <tbody>
                  <tr>
                    <td>NUPTK</td>
                    <td><?= $value->nuptk ?></td>
                  </tr>
                  <tr>
                    <td>TTL</td>
                    <td><?= $value->tempat_lahir . ', ' . $value->tgl_lahir ?></td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin</td>
                    <td><?= $value->jenis_kelamin ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<div class="modal-tambah-banyak">
  <div class="modal fade" id="tambah-banyak" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-content-sm">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah-banyak">Tambah Banyak</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?= base_url('admin/guru_banyak') ?>" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="number" class="form-control form-control-sm" placeholder="Masukkan Jumlah Input" id="tambah_banyak" name="tambah_banyak" autofocus min="1" max="10" required="tambah_banyak">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-sm btn-success">Lanjut</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>