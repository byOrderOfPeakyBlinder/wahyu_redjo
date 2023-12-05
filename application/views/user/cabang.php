<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
        <img src="<?= base_url()?>assets/images/design-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <b>
                <h1 style="font-family:arial;" class="posttitle"><?=$outlet['kota']?></h1>
            </b>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($cabang as $cbg) : ?>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h5>
                                <a href="cabang.php" style="color:black;" class="card-title"><?= $cbg->nama_toko?>
                            </h5>
                        </center>
                        <center>
                            <h5>
                                <a href="" style="color:black;" class="card-title"><?= $cbg->alamat?>
                            </h5>
                        </center>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>