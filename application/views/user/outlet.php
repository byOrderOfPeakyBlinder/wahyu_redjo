<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
        <img src="<?= base_url()?>assets/images/design-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($outlet as $otl) : ?>
            <div class="col-md-4">
                <div class="card">
                    <img src="<?= base_url('assets/images/outlet/').$otl->foto?>" class="card-img-top">
                    <div class="card-body">
                        <center>
                            <h5>
                                <a href="<?= base_url('user/cabang'); ?>" style="color:black;"
                                    class="card-title"><?= $otl->kota?>
                            </h5>
                        </center>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>