
        <!--**********************************
            Content body start
        ***********************************-->
        
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="col-lg-12 page-titles mr-1">
                    <div class="col-sm-12 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item-active"><a href="javascript:void(0)">Manajemen Akun</a></li>
                    </div>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Manajemen Akun</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="form-inline justify-content-between mb-2">
                                        <div class="col-lg-6 mb-3 bg-">
                                        </div>
                                        <div class="col-lg-6 justify-content-end d-flex">
                                            <form action="<?php base_url("user_management"); ?>" method="post" class="form-inline ">
                                                <input type="text" class="form-control mx-sm-2" name="keyword" id="text" placeholder="Cari data" autocomplete="off" autofocus>
                                                <input type="submit" name="submit" class="btn btn-success" value="Cari">
                                            </form>
                                        </div>
                                        <a href="<?= base_url() ?>user_management/add_data" class="btn btn-primary">Tambah Akun</a>
                                    </div>
                                    
                                    <table class="table table-bordered table-hover table-responsive-sm display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIPP</th>
                                                <th>Nama</th>
                                                <th>Role</th>
                                                <th>Daerah Operasi</th>
                                                <th width="160px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php if(empty($akun)) : ?>
                                            <tr>
                                                <td colspan="10">
                                                <div class="alert alert-danger text-center">Data tidak ditemukan!!</div>
                                                </td>
                                            </tr>
                                            <?php endif; ?> -->
                                            <?php foreach($akun as $row) : ?>
                                            <tr>
                                                <th><?= ++$start; ?></th>
                                                <td><?= $row['nipp']; ?></td>
                                                <td><?= $row['nama']; ?></td>
                                                <td><?= $row['role']; ?></td>
                                                <td><?= $row['daerah_operasi']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $row['id_user']; ?>">Ubah</a>
                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $row['id_user']; ?>">Hapus</a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <?= $this->pagination->create_links(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <!-- Modal Delete-->
        <?php foreach($akun as $row) : ?>
        <div class="modal fade" id="deleteModal<?= $row['id_user']; ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Konfirmasi!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-danger">Anda ingin menghapus data ini?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <a href="<?= base_url() ?>user_management/delete_data/<?= $row['id_user']; ?>" class="btn btn-success">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- Modal Edit-->
        <?php foreach($akun as $row) : ?>
        <div class="modal fade" id="editModal<?= $row['id_user']; ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Akun | Edit Data Akun</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url() ?>user_management/edit_data/<?= $row['id_user']; ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" id="id_user" name="id_user" class="form-control input-default" value="<?= $row['id_user'] ?>">
                            <div class="form-group">
                                <label for="nipp">NIPP</label>
                                <input type="text" id="nipp" name="nipp" class="form-control input-default" value="<?= $row['nipp'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control input-default" value="<?= $row['nama'] ?>" required>
                            </div>
                            <input type="hidden" class="form-control" id="id_daop" name="id_daop" value="<?= $row['id_daop'] ?>">
                            <div class="form-group">
                                <label for="jenis_gangguan">Role</label>
                                <select class="form-control" id="id_role" name="id_role" required>
                                <option selected>Pilih Role</option>
                                    <?php foreach($role as $roles) : ?>
                                    <option value="<?= $roles['id_role']; ?>" <?php if ($roles['id_role']==$row['id_role']) : ?>selected <?php endif; ?>><?= $roles['role']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jenis_gangguan">Daerah Operasi</label>
                                <select class="form-control" id="id_daop" name="id_daop" required>
                                <option selected>Pilih Daerah Operasi</option>
                                    <?php foreach($daerah as $drh) : ?>
                                    <option value="<?= $drh['id_daop']; ?>" <?php if ($drh['id_daop']==$row['id_daop']) : ?>selected <?php endif; ?>><?= $drh['daerah_operasi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
