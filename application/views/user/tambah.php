
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="row page-titles mr-1">
                <div class="col-sm-12 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Manajemen Akun</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Input</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Tambah Data Akun</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                            <form action="<?= base_url('user_management/add_data') ?>" method="post">
                                <div class="form-group <?= form_error('nama') ? 'has-error' : null ?>">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>">
                                    <?= form_error('nama'); ?>
                                </div>
                                <div class="form-group <?= form_error('nipp') ? 'has-error' : null ?>">
                                    <label>NIPP</label>
                                    <input type="text" class="form-control" id="nipp" name="nipp" value="<?= set_value('nipp'); ?>">
                                    <?= form_error('nipp'); ?>
                                </div>
                                <div class="form-group <?= form_error('password1') ? 'has-error' : null ?>">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password1" name="password1">
                                    <?= form_error('password1'); ?>
                                </div>
                                <div class="form-group <?= form_error('password2') ? 'has-error' : null ?>">
                                    <label>Repeat Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2">
                                    <?= form_error('password2'); ?>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6 <?= form_error('id_role') ? 'has-error' : null ?>">
                                        <label for="id_role">Role</label>
                                        <select class="form-control" id="id_role" name="id_role">
                                        <option selected>Pilih Jenis Role</option>
                                            <?php foreach($role as $role) : ?>
                                            <option value="<?= $role['id_role']; ?>" <?= set_value('id_role')==$role['id_role'] ? "selected" : null ?>><?= $role['role']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_role'); ?>
                                    </div>
                                    <div class="form-group col-md-6 <?= form_error('id_daop') ? 'has-error' : null ?>">
                                        <label for="id_daop">Daerah Operasi</label>
                                        <select class="form-control" id="id_daop" name="id_daop">
                                        <option selected value="">Pilih Daerah operasi</option>
                                            <?php foreach($daerah as $daerah) : ?>
                                            <option value="<?= $daerah['id_daop']; ?>" <?= set_value('id_daop')==$daerah['id_daop'] ? "selected" : null ?>><?= $daerah['daerah_operasi']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_daop'); ?>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="reset" class="btn btn-danger mr-2 justify-content-end">Reset</button>
                                    <button type="submit" class="btn btn-success justify-content-end">Tambah</button>
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
