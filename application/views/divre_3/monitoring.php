
        <!--**********************************
            Content body start
        ***********************************-->
        
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="col-lg-12 page-titles mr-1">
                    <div class="col-sm-12 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">DIVRE 3</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Gangguan</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Monitoring</a></li>
                        </ol>
                    </div>
                </div>
                <?= $this->session->flashdata('message'); ?>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text text-light">Gangguan Sintelis</div>
                                    <div class="stat-digit text-light"></i><?= $jumlah_sintelis; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text text-light">Gangguan Jalan & Jembatan</div>
                                    <div class="stat-digit text-light"><?= $jumlah_jj; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text text-light">Gangguan Eksternal</div>
                                    <div class="stat-digit text-light"><?= $jumlah_eksternal; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card bg-primary">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text text-light">Gangguan Kamtib</div>
                                    <div class="stat-digit text-light"><?= $jumlah_kamtib; ?></div>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">DIVRE 3 | Data Laporan Gangguan</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <div class="form-inline justify-content-between mb-2">
                                        <div class="col-lg-6">
                                            <a href="export_data_excel" class="btn btn-primary"><i class="icon-printer"></i> Cetak Data</a>
                                        </div>
                                        <div class="col-lg-6 justify-content-end d-flex">
                                            <form action="<?php base_url("divre_3/gangguan"); ?>" method="post" class="form-inline ">
                                                <input type="text" class="form-control mx-sm-2" name="keyword" id="text" placeholder="Cari data" autocomplete="off" autofocus>
                                                <input type="submit" name="submit" class="btn btn-success">
                                            </form>
                                    </div>
                                    </div>
                                    
                                    <table class="table table-bordered table-hover table-responsive-sm display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Tempat Kejadian</th>
                                                <th>Tanggal</th>
                                                <th>Daop / Divre</th>
                                                <th>Jenis Gangguan</th>
                                                <th>Jam Mulai</th>
                                                <th>Jam Selesai</th>
                                                <th>Lama Gangguan</th>
                                                <th>Uraian</th>
                                                <th width = "200px">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(empty($laporan)) : ?>
                                            <tr>
                                                <td colspan="10">
                                                <div class="alert alert-danger text-center">Data tidak ditemukan!!</div>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php foreach($laporan as $row) : ?>
                                            <tr>
                                                <th><?= ++$start; ?></th>
                                                <td><?= $row['tempat_kejadian']; ?></td>
                                                <td><?= $row['tanggal']; ?></td>
                                                <td><?= $row['daerah_operasi']; ?></td>
                                                <td><?= $row['jenis_gangguan']; ?></td>
                                                <td><?= $row['jam_mulai']; ?></td>
                                                <td><?= $row['jam_selesai']; ?></td>
                                                <td><?= $row['lama_gangguan']; ?></td>
                                                <td><?= $row['uraian']; ?></td>
                                                <td>
                                                    <a href="" class="btn btn-warning" data-toggle="modal" data-target="#editModal<?= $row['id_laporan']; ?>"><i class="icon-pencil"></i> Ubah</a>
                                                    <a href="" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal<?= $row['id_laporan']; ?>"><i class="icon-trash"></i> Hapus</a>
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
        <?php foreach($laporan as $row) : ?>
        <div class="modal fade" id="deleteModal<?= $row['id_laporan']; ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">konfirmasi!</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-danger">Anda ingin menghapus data ini?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <a href="delete_data/<?= $row['id_laporan']; ?>" class="btn btn-success">Hapus</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <!-- Modal Edit-->
        <?php foreach($laporan as $row) : ?>
        <div class="modal fade" id="editModal<?= $row['id_laporan']; ?>">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">DIVRE 3 | Edit Data Gangguan</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="edit_data/<?= $row['id_laporan']; ?>" method="post">
                            <input type="hidden" id="id_laporan" name="id_laporan" class="form-control input-default" value="<?= $row['id_laporan'] ?>">
                            <div class="form-group">
                                <label for="tempat_kejadian">Tempat Kejadian</label>
                                <input type="text" id="tempat_kejadian" name="tempat_kejadian" class="form-control input-default" value="<?= $row['tempat_kejadian'] ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal Gangguan</label>
                                <input type="date" id="tanggal" name="tanggal" class="form-control input-default" value="<?= $row['tanggal'] ?>" required>
                            </div>
                            <input type="hidden" class="form-control" id="id_daop" name="id_daop" value="<?= $row['id_daop'] ?>">
                            <div class="form-group">
                                <label for="jenis_gangguan">Jenis Gangguan</label>
                                <select class="form-control" id="id_jenis" name="id_jenis" required>
                                <option selected>Pilih Jenis Gangguan</option>
                                    <?php foreach($jenis as $jns) : ?>
                                    <option value="<?= $jns['id_jenis']; ?>"<?php if ($jns['id_jenis']==$row['id_jenis']) : ?>selected <?php endif; ?>><?= $jns['jenis_gangguan']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="start_time">Jam Mulai</label>
                                <input type="time" id="jam_mulai" name="jam_mulai" class="form-control input-default " value="<?= $row['jam_mulai'] ?>" required>
                                <p class="text-danger">Ket: AM (00:00 - 11:59) | PM (12:00 - 23:59)</p>
                            </div>
                            <div class="form-group">
                                <label for="end_time">Jam Selesai</label>
                                <input type="time" id="jam_selesai" name="jam_selesai" class="form-control input-default " value="<?= $row['jam_selesai'] ?>" required>
                                <p class="text-danger">Ket: AM (00:00 - 11:59) | PM (12:00 - 23:59)</p>
                            </div>
                            <div class="form-group">
                                <label for="uraian">Uraian</label>
                                <textarea class="form-control" rows="4" id="uraian" name="uraian" required><?= $row['uraian'] ?></textarea>
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
