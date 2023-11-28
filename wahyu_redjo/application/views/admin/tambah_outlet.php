<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Tambah Outlet
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
                <form method="post" action="">


                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="kotaoutlet">Kota Outlet</label>
                        <div class="col-md-9">
                            <input value="<?= set_value('kota_outlet'); ?>" name="kota_outlet" id="kota_outlet"
                                type="text" class="form-control" placeholder="Kota Outlet...">
                            <?= form_error('kota_outlet', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="alamat_outlet">Alamat Outlet</label>
                        <div class="col-md-9">
                            <input value="<?= set_value('alamat_outlet'); ?>" name="alamat_outlet" id="alamat_outlet"
                                type="text" class="form-control" placeholder="Alamat Outlet...">
                            <?= form_error('alamat_outlet', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 text-md-right" for="nohp_outlet">Nomor Telepon Outlet</label>
                        <div class="col-md-9">
                            <input value="<?= set_value('nohp_outlet'); ?>" name="nohp_outlet" id="nohp_outlet"
                                type="text" class="form-control" placeholder="Nomor Handphone Outlet...">
                            <?= form_error('nohp_outlet', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>





                    <div class="row form-group">
                        <div class="col-md-9 offset-md-3">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>