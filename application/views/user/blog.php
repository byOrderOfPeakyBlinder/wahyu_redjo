<?php 
function get_time_ago( $time )
{
    date_default_timezone_set('Asia/Jakarta');

    $time_difference = time() - $time;

    if( $time_difference < 1 ) { return 'less than 1 second ago'; }
    $condition = array( 12 * 30 * 24 * 60 * 60 =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $time_difference / $secs;

        if( $d >= 1 )
        {
            $t = round( $d );
            return 'about ' . $t . ' ' . $str . ( $t > 1 ? 's' : '' ) . ' ago';
        }
    }
}
?>
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
                        <img src="<?= base_url('assets/images/blog/').$blg->foto?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blg->judul?></h5>
                            <p class="card-text"> Cuplikan Berita <?= $blg->judul?>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated
                                    <?= get_time_ago($blg->time)?></small>
                            </p>
                            <a href="<?= base_url('user/isi_blog//').$blg->id_blog; ?>" style="color:Coral">Read More
                                +</a>
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
                        <img src="<?= base_url('assets/images/blog/').$blog_lainnya[3]['foto']?>" class="card-img"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blog_lainnya[3]['judul']?></h5>
                            <p class="card-text"> Cuplikan Berita <?= $blog_lainnya[3]['judul']?>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated
                                    <?= get_time_ago($blog_lainnya[3]['time'])?></small>
                            </p>
                            <a href="<?= base_url('user/isi_blog//').$blog_lainnya[3]['id_blog']; ?>"
                                style="color:Coral">Read More +</a>
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
                        <img src="<?= base_url('assets/images/blog/').$blog_lainnya[4]['foto']?>" class="card-img"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $blog_lainnya[4]['judul']?></h5>
                            <p class="card-text"> Cuplikan Berita <?= $blog_lainnya[4]['judul']?>
                            </p>
                            <p class="card-text"><small class="text-muted">Last updated
                                    <?= get_time_ago($blog_lainnya[4]['time'])?></small>
                            </p>
                            <a href="<?= base_url('user/isi_blog//').$blog_lainnya[4]['id_blog']; ?>"
                                style="color:Coral">Read More
                                +</a>
                        </div>
                    </div>
                </div>
            </div>

</section>