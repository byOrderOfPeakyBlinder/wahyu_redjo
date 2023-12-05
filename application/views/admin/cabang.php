<?php error_reporting(0); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="card shadow-sm border-bottom-primary">
        <div class="card-header bg-white py-3">
            <div class="row">
                <div class="col">
                    <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                        DATA MASTER CABANG
                    </h4>
                </div>
                <div class="col-auto">
                    <a href="<?= base_url('admin/tambah_cabang') ?>" class="btn btn-sm btn-primary btn-icon-split">
                        <span class="icon">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">
                            Tambah Cabang
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
                            <th>Wilayah</th>
                            <th>Nama Toko</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                $no = 1;
                if ($cabang) :
                    foreach ($cabang as $cbg) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $cbg->id_outlet ?></td>
                            <td><?php echo $cbg->nama_toko ?></td>
                            <td><?php echo $cbg->alamat ?></td>
                            <td>
                                <a href="<?= base_url('admin/edit_cabang//').$cbg->id_cabang?>"
                                    class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a>

                                <a onclick="return confirm('Yakin ingin hapus?')"
                                    href="<?= base_url('admin/hapus_cabang//').$cbg->id_cabang ?>"
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