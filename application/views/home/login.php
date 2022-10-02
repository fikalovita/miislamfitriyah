<div id="overviews" class="section lb">
    <div class="container">
        <div class="col-md-4 mx-auto ">
            <div class="card">
                <div class="card-header">
                    Login Guru
                </div>
                <div class="card-body">
                    <?= $this->session->flashdata('pesan'); ?>
                    <?php $this->session->set_flashdata('pesan', ''); ?>
                    <form action="<?= base_url('login/aksi_login_guru') ?>" method="POST" role="form" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input class="form-control" id="password" placeholder="Password" type="password" name="password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-sm btn-success btn-block">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>