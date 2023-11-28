<h1>
    <center>B3rita T3rbaru <3 </center>
</h1>
<p style="font-family:'Courier New'">
    <center>This is another paragraph.</center>
</p>

<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
        <img src="<?= base_url()?>assets/images/design-2.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <?php 
            $no=1;
            foreach ($blog as $blg) : 
            if($no>3){
                break;
            };
            ?>
            <div class="card mb-3" style="width: 180rem;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <!-- folder outlet menyesuaikan nama folder gambar berita -->
                        <img src="<?= base_url('assets/images/outlet/').$blg->foto?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blg->kota?></h5>
                            <p class="card-text"> Cuplikan Berita <?= $blg->kota?>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                            <a href="<?= base_url('user/isi_blog'); ?>" style="color:Coral">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        $no++;
         endforeach; ?>
        </div>
    </div>
</section>

<h1>
    <center>Baca Artikel Lainnya </center>
</h1>
<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="container">
        <div class="row">

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/images/outlet/').$blg->foto?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blg->kota?></h5>
                            <p class="card-text"> Cuplikan Berita <?= $blg->kota?>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                            <a href="<?= base_url('user/isi_blog'); ?>" style="color:Coral">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            &nbsp;
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/images/outlet/').$blg->foto?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blg->kota?></h5>
                            <p class="card-text"> Cuplikan Berita <?= $blg->kota?>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                            <a href="<?= base_url('user/isi_blog'); ?>" style="color:Coral">Read More +</a>
                        </div>
                    </div>
                </div>
            </div>

</section>