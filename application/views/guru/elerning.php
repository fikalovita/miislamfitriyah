<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Materi</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item judul"><a href="#!">Kumpulan Materi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Silahkan Tambahkan Mata pelajaran Terlebih Dahulu</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <div class="row">
            <?php foreach ($mapel as $key => $value) : ?>
                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="text-center pt-2">
                            <img width="80px" height="80px" src="https://cdn0.iconfinder.com/data/icons/library-9/64/Book-paper-education-school-library-read-notebook-256.png" alt="Card image cap">
                        </div>
                        <div class="card-body text-center">
                            <h3><?= $value->nama_mapel ?></h3>
                            <h5><?= $value->isi_kelas ?></h5>
                            <a href="<?= base_url('guru/list_materi/' . $value->id_mapel) ?>" class="btn btn-sm btn-primary mt-2">Lihat Materi </a>
                            <a href="<?= base_url('guru/hapus_mapel/' . $value->id_mapel) ?>" class="btn btn-sm btn-danger mt-2 hapus"><i class="fas fa-trash-alt"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>