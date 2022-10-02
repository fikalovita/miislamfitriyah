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
            <form action="<?= base_url('admin/tambah_guru_banyak') ?>" method="post">
              <table class="table table-striped">
                <thead class="text-center">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NUPTK/PegID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody class="text-center">
                  <?php for ($i = 1; $i <= $input; $i++) : ?>
                    <tr>
                      <th scope="row"><?= $i ?></th>
                      <input type="hidden" name="jumlah" value="$input">
                      <td><input type="text" name="nuptk<?= $i ?>" required></td>
                      <td><input type="text" name="nama<?= $i ?>" required></td>
                      <td><input type="text" name="username<?= $i ?>" required></td>
                      <td><input type="Password" name="password<?= $i ?>" required></td>
                    </tr>
                  <?php endfor; ?>
                </tbody>
              </table>
              <input type="hidden" name="jumlah" value="<?= $input ?> ">
              <button type="submit" class="btn btn-sm btn-primary float-right">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>