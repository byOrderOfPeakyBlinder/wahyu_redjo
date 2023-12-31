<?php error_reporting(0); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow-sm border-bottom-primary">
        <div class="card-header bg-white py-3">
            <div class="row">
                <div class="col">
                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                        DATA MASTER BLOG
                    </h4>
                </div>
                <div class="col-auto">
                    <a href="<?= base_url('admin/tambah_blog') ?>" class="btn btn-sm btn-primary btn-icon-split">
                        <span class="icon">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">
                            Tambah Blog
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped w-100 dt-responsive " id="paket" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No. </th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th>Thumbnail</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $no = 1;
                if ($blog) :
                    foreach ($blog as $blg) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $blg->judul ?></td>
                            <td><?php echo $blg->isi ?></td>
                            <td> <img height="100px" src="<?= base_url('assets/images/blog/').$blg->foto?>" alt="">
                            </td>
                            <td><?php echo $blg->kategori ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit_blog//').$blg->id_blog ?>"
                                    class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                                <a onclick="return confirm('Yakin ingin hapus?')"
                                    href="<?= base_url('admin/hapus_blog//').$blg->id_blog ?>"
                                    class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        <?php endforeach; ?>
                        <?php else : ?>
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong
                            </td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
<?php
        date_default_timezone_set('Asia/Jakarta');
        ?>
$(document).ready(function() {
    $('#paket').DataTable({

        columnDefs: [{
            targets: -1,
            className: 'dt-center'
        }],

        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    });
});
</script>