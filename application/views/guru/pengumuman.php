<div class="pcoded-main-container">
  <div class="pcoded-content" id="konten">
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Pengumuman</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
              <li class="breadcrumb-item judul"><a href="#!">List Pengumuman</a></li>
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
            <h5>List Pengumuman</h5>
            <div class="card-header-right">
              <a href="#" class="btn btn-sm btn-primary" role="button" data-toggle="modal" data-target="#tambah-pengumuman"><i class="fas fa-plus"></i></a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped" id="pengumuman">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Pengumuman</th>
                  <th scope="col">Judul Pengumuman</th>
                  <th scope="col" class="text-center">Pengumuman</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1 ?>
                <?php foreach ($pengumuman as $key => $value) : ?>
                  <tr>
                    <th scope="row"><?= $no++ ?></th>
                    <td><?= $value->tanggal_pengumuman ?></td>
                    <td><?= $value->judul_pengumuman ?></td>
                    <td><?= substr($value->isi_pengumuman, 0, 200) ?></td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                          Aksi
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="<?= base_url('guru/edit_pengumuman/' . $value->id_pengumuman) ?>"><i class="fas fa-pen fa-2xs"></i> Ubah</a>
                          <a class="dropdown-item hapus" href="<?= base_url('guru/hapus_pengumuman/' . $value->id_pengumuman) ?>"><i class="fas fa-trash fa-2xs"></i> Hapus</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
  <!-- Modal -->
  <div class="modal fade" id="tambah-pengumuman" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah-pengumuman">Form Tambah Penumuman</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?= base_url('guru/tambah_pengumuman') ?>" method="POST">
            <div class="form-group">
              <label for="judul_pengumuman">Judul Pengumuman</label>
              <input type="text" class="form-control form-control-sm" name="judul_pengumuman">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Pengumuman</label>
              <textarea class="form-control" id="isi_pengumuman" rows="3" name="pengumuman"></textarea>
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