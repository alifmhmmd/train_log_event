
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 form-group justify-content-between d-flex">
                                <a href="dashboard/tampil_allData" class="btn btn-primary">Tampil semua data</a>
                                <div class="card my-md-auto">
                                    <form action="<?php base_url("dashboard"); ?>" method="post" class="form-inline">
                                        
                                        <select class="form-control" name="key_bulan" id="key_bulan">
                                            <option selected>Pilih Bulan</option>    
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                        <select class="form-control mx-sm-2" name="key_tahun" id="key_tahun">
                                            <option selected>Pilih Tahun</option>
                                            <?php foreach($tahun as $row) : ?>
                                            <option value="<?= $row['tahun']; ?>"  <?= set_value('tahun')==$row['tahun'] ? "selected" : null ?>><?= $row['tahun']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <input type="submit" name="submit" class="btn btn-success" value="Filter">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php if($key_bulan && $key_tahun) : ?>
                        <div class="alert alert-outline-light alert-dismissible fade show">
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                            <p class="text-danger">
                                Filter diterapkan!! 
                                <?php if($key_bulan == 1) : ?>
                                Bulan = Januari,
                                <?php elseif($key_bulan == 2) : ?>
                                Bulan = Februari,
                                <?php elseif($key_bulan == 3) : ?>
                                Bulan = Maret,
                                <?php elseif($key_bulan == 4) : ?>
                                Bulan = April,
                                <?php elseif($key_bulan == 5) : ?>
                                Bulan = Mei,
                                <?php elseif($key_bulan == 6) : ?>
                                Bulan = Juni,
                                <?php elseif($key_bulan == 7) : ?>
                                Bulan = Juli,
                                <?php elseif($key_bulan == 8) : ?>
                                Bulan = Agustus,
                                <?php elseif($key_bulan == 9) : ?>
                                Bulan = September,
                                <?php elseif($key_bulan == 10) : ?>
                                Bulan = Oktober,
                                <?php elseif($key_bulan == 11) : ?>
                                Bulan = November,
                                <?php elseif($key_bulan == 12) : ?>
                                Bulan = Desember,
                                <?php endif; ?>
                                Tahun = <?= $key_tahun ?>
                            </p>
                        </div>
                        <?php endif; ?>
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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Gangguan</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover table-responsive-sm display">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Daerah Operasi</th>
                                                <th>Jumlah Gangguan Sintelis</th>
                                                <th>Jumlah Gangguan Jalan & Jembatan</th>
                                                <th>Jumlah Gangguan Eksternal</th>
                                                <th>Jumlah Gangguan Kamtib</th>
                                                <th>Total Gangguan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(empty($gangguan)) : ?>
                                            <tr>
                                                <td colspan="10">
                                                <div class="alert alert-danger text-center">Data tidak ditemukan!!</div>
                                                </td>
                                            </tr>
                                            <?php endif; ?>
                                            <?php foreach($gangguan as $row) : ?>
                                            <tr class="text-center">
                                                <td><?= $row['daerah_operasi']; ?></td>
                                                <td><?= $row['jumlah_sintelis']; ?></td>
                                                <td><?= $row['jumlah_jj']; ?></td>
                                                <td><?= $row['jumlah_eksternal']; ?></td>
                                                <td><?= $row['jumlah_kamtib']; ?></td>
                                                <td><?= $row['jumlah_gangguan']; ?></td>
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
        <!--**********************************
            Content body end
        ***********************************-->