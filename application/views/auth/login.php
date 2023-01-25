
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <?= $this->session->flashdata('message'); ?>
                                <div class="auth-form">
                                    <div class="logo-login text-center">
                                        <img height="100px" width="300px" src="<?= base_url() ?>assets/images/logo_login.png" alt="">
                                    </div>
                                    <h4 class="text-center mb-4">Silahkan login ke akun anda</h4>
                                    <form action="<?= base_url('auth') ?>" method="post">
                                        <div class="form-group <?= form_error('nipp') ? 'has-error' : null ?>">
                                            <label><strong>NIPP</strong></label>
                                            <input type="text" class="form-control" id="nipp" name="nipp" value="<?= set_value('nipp'); ?>" autofocus>
                                            <?= form_error('nipp'); ?>
                                        </div>
                                        <div class="form-group <?= form_error('password') ? 'has-error' : null ?>">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" id="password" name="password">
                                            <?= form_error('password'); ?>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <!-- <div class="new-account mt-3 text-center">
                                        <a class="text-primary" href="./page-register.html">Forget Password</a>
                                        <p>Belum punya akun? <a class="text-primary" href="<?= base_url('auth/registration') ?>">Register</a></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

