
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="row page-titles mr-1">
                <div class="col-sm-12 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">DAOP 4</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Gangguan</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Input</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="col-xl-12 col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">DAOP 4 | Input Gangguan</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="" method="post" class="row">
                                    <div class="form-group col-md-6 <?= form_error('tempat_kejadian') ? 'has-error' : null ?>">
                                        <label for="tempat_kejadian">Tempat Kejadian</label>
                                        <input type="text" id="tempat_kejadian" name="tempat_kejadian" class="form-control input-default" placeholder="tempat kejadian" value="<?= set_value('tempat_kejadian'); ?>">
                                        <?= form_error('tempat_kejadian'); ?>
                                    </div>
                                    <div class="form-group col-md-6 <?= form_error('tanggal') ? 'has-error' : null ?>">
                                        <label for="tanggal_gangguan">Tanggal Gangguan</label>
                                        <input type="date" id="tanggal" name="tanggal" class="form-control input-default " placeholder="input-default" value="<?= set_value('tanggal'); ?>">
                                        <?= form_error('tanggal'); ?>                                    
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="jenis_gangguan">Daerah Operasi</label>
                                        <input type="text" class="form-control" id="id_daop" name="id_daop" placeholder="DAOP 4" readonly>
                                    </div>
                                    <div class="form-group col-md-6 <?= form_error('id_jenis') ? 'has-error' : null ?>">
                                        <label for="jenis_gangguan">Jenis Gangguan</label>
                                        <select class="form-control" id="id_jenis" name="id_jenis">
                                        <option selected>Pilih Jenis Gangguan</option>
                                            <?php foreach($jenis as $jenis) : ?>
                                            <option value="<?= $jenis['id_jenis']; ?>"  <?= set_value('id_jenis')==$jenis['id_jenis'] ? "selected" : null ?>><?= $jenis['jenis_gangguan']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <?= form_error('id_jenis'); ?>
                                    </div>
                                    <div class="form-group col-md-6 <?= form_error('jam_mulai') ? 'has-error' : null ?>">
                                        <label for="start_time">Jam Mulai</label>
                                        <input type="time" id="jam_mulai" name="jam_mulai" class="form-control input-default " placeholder="input-default" value="<?= set_value('jam_mulai'); ?>">
                                        <p class="text-danger">Ket: AM (00:00 - 11:59) | PM (12:00 - 23:59)</p>
                                        <?= form_error('jam_mulai'); ?>        
                                    </div>
                                    <div class="form-group col-md-6 <?= form_error('jam_selesai') ? 'has-error' : null ?>">
                                        <label for="end_time">Jam Selesai</label>
                                        <input type="time" id="jam_selesai" name="jam_selesai" class="form-control input-default " placeholder="input-default" value="<?= set_value('jam_selesai'); ?>">
                                        <p class="text-danger">Ket: AM (00:00 - 11:59) | PM (12:00 - 23:59)</p>
                                        <?= form_error('jam_selesai'); ?>        
                                    </div>
                                    <div class="form-group col-md-6 <?= form_error('uraian') ? 'has-error' : null ?>">
                                        <label for="uraian">Uraian</label>
                                        <textarea class="form-control" rows="4" id="uraian" name="uraian" value="<?= set_value('uraian'); ?>"><?= set_value('uraian'); ?></textarea>
                                        <?= form_error('uraian'); ?>
                                    </div>
                                    <div class="form-group col-12">
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
