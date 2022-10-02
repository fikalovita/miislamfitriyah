<div class="auth-wrapper">
    <div class="auth-content text-center">
        <img src="assets/images/logo.png" alt="" class="img-fluid mb-4">
        <div class="card borderless">
            <div class="row align-items-center ">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5>LOGIN ADMIN</h5>
                        <img width="50%" src="https://iqra.id/wp-content/uploads/2020/10/Logo-NU-PNG-1.png" alt="">
                        <?= $this->session->flashdata('pesan'); ?>
                        <?php $this->session->set_flashdata('pesan', ''); ?>
                        <form action="<?= base_url('login/aksi_login_admin') ?>" method="post">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="Email" placeholder="Username" name="username">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="Password" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mb-4">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>