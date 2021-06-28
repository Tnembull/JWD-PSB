<?= $this->extend('layouts/admin_template'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Informasi Users</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Tanggal Register</th>

                    </tr>
                </thead>
                <tbody>
                <?php $i = 1 ?>
                        <?php foreach ($akun as $du) : ?>
                            <tr>
                                <td> <?php echo $i++ ?></td>
                                <td><?= $du['nama_lengkap']; ?></td>
                                <td><?= $du['user_name']; ?></td>
                                <td><?= $du['user_created_at']; ?></td>
                            </tr>
                        <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>

<?= $this->endSection(); ?>