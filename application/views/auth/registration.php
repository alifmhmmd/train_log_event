
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="logo-login text-center">
                                        <img height="100px" width="300px" src="<?= base_url() ?>assets/images/logo_login.png" alt="">
                                    </div>
                                    <h4 class="text-center mb-4">Daftarkan akun anda</h4>
                                    <form action="<?= base_url('auth/registration') ?>" method="post">
                                        <div class="form-group <?= form_error('nama') ? 'has-error' : null ?>">
                                            <label><strong>Nama</strong></label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                                            <?= form_error('nama'); ?>
                                        </div>
                                        <div class="form-group <?= form_error('nipp') ? 'has-error' : null ?>">
                                            <label><strong>NIPP</strong></label>
                                            <input type="text" class="form-control" id="nipp" name="nipp" value="<?= set_value('nipp'); ?>">
                                            <?= form_error('nipp'); ?>
                                        </div>
                                        <div class="form-group <?= form_error('password1') ? 'has-error' : null ?>">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password1" name="password1">
                                            <?= form_error('password1'); ?>
                                        </div>
                                        <div class="form-group <?= form_error('password2') ? 'has-error' : null ?>">
                                            <label><strong>Repeat Password</strong></label>
                                            <input type="password" class="form-control" id="password2" name="password2">
                                            <?= form_error('password2'); ?>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3 text-center">
                                        <p>Sudah punya akun? <a class="text-primary" href="<?= base_url('auth') ?>">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
