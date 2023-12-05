<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Tambah Cabang
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin/cabang') ?>" class="btn btn-sm btn-secondary btn-icon-split">
                            <span class="icon">
                                <i class="fa fa-arrow-left"></i>
                            </span>
                            <span class="text">
                                Back
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="outlet">Wilayah</label>
                    <div class="col-md-9">
                        <select class="form-control form-control-user" name="kota">
                            <option Selected disabled> Pilih Kota</option>
                            <?php
                                foreach ($outlet as $otl) {
                                    echo '<option value="'.$otl->kota.'">'.$otl->kota.'</option>';
                                }
                                ?>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart('Admin/tambah_cabang'); ?>
                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nama_toko">Nama Toko</label>
                        <div class="col-md-9">
                            <input value="<?= set_value('nama_toko'); ?>" name="nama_toko" id="nama_toko" type="text"
                                class="form-control" placeholder="Nama Toko...">
                            <?= form_error('nama_toko', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="alamat">Alamat</label>
                        <div class="col-md-9">
                            <input value="<?= set_value('alamat'); ?>" name="alamat" id="alamat" type="text"
                                class="form-control" placeholder="Alamat..">
                            <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                    <?php form_close(); ?>
                </div>
            </div>
        </div>
    </div>