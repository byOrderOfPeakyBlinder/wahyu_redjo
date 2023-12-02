<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="col-md-16 col-md-offset-2 col-xs-12">
        <div class="center">

            <div class="row post-top-meta">
                <div class="container">
                    <b>
                        <h1 style="font-family:arial;" class="posttitle">Berita Terbaru</h1>
                    </b>
                    <br>
                    <br>
                    <br>
                    <div class="container " style="background:#f7e872; border-radius:20px">
                        <div class="row">
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

                                <center><img class=" rounded" width="840px"
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
                <br>
            </div>
        </div>
    </div>

</section>
<section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="col-md-16 col-md-offset-2 col-xs-12">
        <div class="container">
            <h2>Share</h2>
            <div class="row">
                <a href="">
                    <i class="fab fa-facebook-square"></i>
                </a>
            </div>
        </div>
    </div>
</section>