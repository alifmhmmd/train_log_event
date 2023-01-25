
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="row page-titles mr-1">
                <div class="col-sm-12 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="col-xl-12 col-xxl-12">
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 photo-content text-center">
                                    <img src="<?= base_url() ?>assets/images/profile/<?= $user['image']; ?>" class="rounded mb-2" alt="" width="130px" height="180px"> <br>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edifFoto">
                                    Edit Foto
                                    </button>
                                </div>
                                <div class="col-md-8">
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Nama <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-9"><span><?= $user['nama']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">NIPP <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-9"><span><?= $user['nipp']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Daerah Operasi <span class="pull-right">:</span></h5>
                                        </div>
                                        <div class="col-9"><span><?= $user['daerah_operasi']; ?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-3">
                                            <h5 class="f-w-500">Role <span class="pull-right">:</span>
                                            </h5>
                                        </div>
                                        <div class="col-9"><span><?= $user['role']; ?></span>
                                        </div>
                                    </div>
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

        <!-- Modal -->
        <div class="modal fade" id="edifFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="profile/edit_foto/<?= $user['id_user']; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                    <input type="file" class="custom-file" id="image" name="image">
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
