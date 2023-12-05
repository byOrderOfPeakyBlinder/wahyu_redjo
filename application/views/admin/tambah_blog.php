<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                            Tambah Blog
                        </h4>
                    </div>
                    <div class="col-auto">
                        <a href="<?= base_url('admin/blog') ?>" class="btn btn-sm btn-secondary btn-icon-split">
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
                <?php echo form_open_multipart('Admin/tambah_blog'); ?>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="judul">Judul</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('judul'); ?>" name="judul" id="judul" type="text"
                            class="form-control" placeholder="Judul ...">
                        <?= form_error('judul', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="isi">Isi</label>
                    <div class="col-md-9">
                        <input value="<?= set_value('isi'); ?>" name="isi" id="isi" type="text" class="form-control"
                            placeholder="Isi...">
                        <?= form_error('isi', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="foto">Thumbnail</label>
                    <div class="col-md-9">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" name="foto" required>
                        <?= form_error('foto', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="kategori">Kategori</label>
                    <div class="col-md-9">
                        <select class="form-control form-control-user" name="kategori">
                            <option value="events">Events</option>
                            <option value="promo">Promo</option>
                            <option value="emas">Emas</option>
                            <option value="lifestyle">Lifestyle</option>
                            <option value="tips">Tips</option>
                        </select>
                        <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
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