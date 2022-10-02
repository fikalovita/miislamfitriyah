<div class="pcoded-main-container">
  <div class="pcoded-content" id="konten">
    <div class="page-header">
      <div class="page-block">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="page-header-title">
              <h5 class="m-b-10">Artikel</h5>
            </div>
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
              <li class="breadcrumb-item judul"><a href="#!">List Artikel</a></li>
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
            <h5>List Artikel</h5>
            <div class="card-header-right">
              <a href="#" class="btn btn-sm btn-primary" role="button" data-toggle="modal" data-target="#tambah-jadwal"><i class="fas fa-plus"></i></a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Jam</th>
                  <th scope="col">Hari</th>
                  <th scope="col">Mata Pelajaran</th>
                  <th scope="col">Semester</th>
                  <th scope="col">Guru</th>
                  <th scope="col">Kelas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal-tambah-jadwal">
  <div class="modal fade" id="tambah-jadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="tambah-jadwal">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Jam</label>
              <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Hari</label>
              <input type="password" class="form-control form-control-sm" id="exampleInputPassword1">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Mata Pelajaran</label>
              <input type="email" class="form-control form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Semester</label>
              <select class="form-control form-control-sm">
                <option>Semester</option>
                <option>Satu</option>
                <option>Dua </option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Guru</label>
              <select class="form-control form-control-sm">
                <option>Guru</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Kelas</label>
              <select class="form-control form-control-sm">
                <option>Kelas</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-sm btn-primary">Simpan</button>
        </div>
      </div>
    </div>
  </div>
</div>