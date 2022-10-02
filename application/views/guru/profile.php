<div class="pcoded-main-container">
    <div class="pcoded-content" id="konten">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">

                </div>
            </div>
        </div>
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Profile</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3 my-5">
                                <img width="150px" src="<?= base_url('assets/uploads/' . $this->session->userdata('foto')) ?>" alt="">
                            </div>
                            <div class="col-md-8">
                                <table class="table table-borderless">
                                    <tbody>
                                        <?php foreach ($guru->result() as $key => $value) : ?>
                                            <tr>
                                                <th>NUPTK/PegID</th>
                                                <td>:</td>
                                                <td><?= $value->nuptk ?></td>
                                            </tr>
                                            <tr>
                                                <th>Nama</th>
                                                <th>:</th>
                                                <td><?= $value->nama_guru ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <th>:</th>
                                                <td><?= $value->jenis_kelamin ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <th>:</th>
                                                <td><?= $value->tempat_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <th>:</th>
                                                <td><?= $value->tgl_lahir ?></td>
                                            </tr>
                                            <tr>
                                                <th>Jabatan</th>
                                                <th>:</th>
                                                <td><?= $value->jabatan ?></td>
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
    </div>
</div>