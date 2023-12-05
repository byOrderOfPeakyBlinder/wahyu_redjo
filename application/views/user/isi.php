<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="col-md-16 col-md-offset-2 col-xs-12">
        <div class="center">

            <div class="row post-top-meta">
                <div class="container">
                    <br>
                    <br>
                    <br>

                    <b>
                        <h1 style="font-family:arial;" class="posttitle">Berita Terbaru</h1>
                    </b>
                    <br>
                    <br>
                    <div class="container " style="background:#FDDC66; border-radius:20px">
                        <div class="row ">
                            <div class="col-md-10 mx-auto pt-5 mb-5">
                                <b>
                                    <h1 style="font-family:arial;" class="posttitle"><?=$isi_blog['judul']?></h1>
                                </b>
                                Ditulis Pada <span style="color:grey"><?=date('d-F-Y',$isi_blog['time'])?></span>
                                <div class="text-right mb-1">

                                    <a class="right" span style="color:black" href="<?= base_url('user/'); ?>"">Home  ></a>
                                    <a class=" right" span style="color:black" href="<?= base_url('user/blog'); ?>"">Blog  ></a>
                                    <span style=" color:black"><?=$isi_blog['judul']?></span>
                                </div>

                                <center><img class=" rounded" width="920px"
                                        src="<?= base_url('assets/images/blog/').$isi_blog['foto']?>" alt="">
                                </center>
                                <br>
                                <div class="article-post">
                                    <p align="justify"><?= $isi_blog['isi']?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_section layout_padding4-top layout_padding-bottom">
    <div class="col-md-16 col-md-offset-2 col-xs-12">
        <div class="container">
            <h3>Share this post</h3>
            <div class="row">
                &nbsp;
                &nbsp;
                <a href="https://www.facebook.com/sharer/sharer.php?u=#url" target="_blank">
                    <img src="<?= base_url()?>assets/images/facebook.png">
                </a>
                <a href="https://www.instagram.com/sharer/sharer.php?u=#url" target="_blank">
                    <img src="<?= base_url()?>assets/images/instagram.png">
                </a>
            </div>
        </div>
    </div>
</section>