
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="row page-titles mr-1">
                <div class="col-sm-12 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Ganti Password</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="col-xl-12 col-xxl-12">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ganti Password Akun</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            <form action="<?= base_url('profile/change_password') ?>" method="post">
                                <div class="form-group <?= form_error('password_lama') ? 'has-error' : null ?>">
                                    <label>Password Lama</label>
                                    <input type="password" class="form-control" id="password_lama" name="password_lama">
                                    <?= form_error('password_lama'); ?>
                                </div>
                                <div class="form-group <?= form_error('password_baru1') ? 'has-error' : null ?>">
                                    <label>Password Baru</label>
                                    <input type="password" class="form-control" id="password_baru1" name="password_baru1">
                                    <?= form_error('password_baru1'); ?>
                                </div>
                                <div class="form-group <?= form_error('password_baru2') ? 'has-error' : null ?>">
                                    <label>Ulangi Password</label>
                                    <input type="password" class="form-control" id="password_baru2" name="password_baru2">
                                    <?= form_error('password_baru2'); ?>
                                </div>
                                </div>
                                <div class="mt-4">
                                    <button type="reset" class="btn btn-danger mr-2">Reset</button>
                                    <button type="submit" class="btn btn-success">Ubah</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
