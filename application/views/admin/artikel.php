<!-- [ Pre-loader ] start -->

<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <!-- [ breadcrumb ] start -->
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
                            <a href="#" onclick="tambahArtikel()" class="btn btn-sm btn-primary" role="button"><i class="fas fa-plus"></i></a>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="artikel" class="table table-striped table-bordered table-hover table-responsive-lg">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th class="text-center">Judul Artikel</th>
                                    <th>Dibuat</th>
                                    <th>Diperbarui</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($artikel as $value) : ?>
                                    <tr>
                                        <td class="text-center"><img width="40px" src="<?= base_url('assets/uploads/' . $value->foto) ?>" alt=""></td>
                                        <td class="col-md-3"><?= $value->judul_artikel  ?></td>
                                        <td><?= $value->created ?></td>
                                        <td><?= $value->update ?></td>
                                        <td class="row">
                                            <form action="#" data-placement="bottom" title="hapus" class="form-inline col-1">
                                                <a href="<?= base_url('admin/hapus_artikel/' . $value->id_artikel) ?>" role="button" class="btn btn-sm btn-danger hapus"><i class="fas fa-trash-alt"></i></a>
                                            </form>
                                            <form action="<?= base_url('admin/edit_artikel/' . $value->id_artikel) ?>" method="post" class="form-inline col-1 edit">
                                                <button class="btn btn-sm btn-warning" data-placement="bottom" title="edit"><i class="fas fa-pen"></i></button>
                                            </form>
                                            <form action="<?= base_url('admin/detail_artikel/' . $value->id_artikel) ?>" method="post" class="form-inline col-1 detail">
                                                <button class="btn btn-sm btn-success" data-placement="bottom" title="detail"><i class="fas fa-eye"></i></button>
                                            </form>
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