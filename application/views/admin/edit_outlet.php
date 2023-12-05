<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Edit Outlet
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin/outlet') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?php echo form_open_multipart('Admin/edit_outlet'); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kotaoutlet">Kota</label>
                    <div class="col-md-9">
                        <input type="text" value="<?= $edit['id_outlet'] ?>" name="id_outlet" hidden>
                        <input type="text" value="<?= $edit['foto'] ?>" name="foto_lama" hidden>
                        <input value="<?= $edit['kota'] ?>" name="kota_outlet" id="kota_outlet" type="text"
                            class="form-control" placeholder="Kota Outlet...">
                        <?= form_error('kota_outlet', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="logo">Foto Outlet</label>
                    <div class="col-md-9">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="foto">
                        <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-9 offset-md-3">
                        <button type="submit" class="btn btn-primary">Edit Data</button>

                    </div>
                </div>

                <?php form_close(); ?>
            </div>
        </div>
    </div>
</div>