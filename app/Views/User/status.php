<?= $this->extend('layouts/siswa_template'); ?>
<?= $this->section('content'); ?>
<!-- Page Heading -->
<div class="container">
    <div class="row mt-5">
        <div class="col-xl-12 col-lg-6">
            <div class="card shadow mb-2">
                <div class="card-body">
                <h1 class="h3 mb-0 text-gray-800 text-center">Status Pendaftar</h1>
                <br>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <th scope="row">Nama Lengkap</th>
                                <td>:</td>
                                <td><?php echo $siswa['siswa_nama']; ?> </td>
                            </tr>
                            <tr>
                                <th scope="row">NISN</th>
                                <td>:</td>
                                <td><?php echo $siswa['siswa_nisn']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tempat Lahir</th>
                                <td>:</td>
                                <td><?php echo $siswa['siswa_tempat']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir</th>
                                <td>:</td>
                                <td><?php echo $siswa['tanggal_lahir']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin</th>
                                <td>:</td>
                                <td><?php echo $siswa['siswa_jk']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Agama</th>
                                <td>:</td>
                                <td><?php echo $siswa['siswa_agama']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Sekolah Asal</th>
                                <td>:</td>
                                <td><?php echo $siswa['siswa_sekolah']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Status</th>
                                <td>:</td>
                                <td class="font-weight-bold text-uppercase text-nowrap h4" style="display: inline-block"><?php echo $siswa['status']; ?></td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
                <a href="<?php echo base_url('/testpdf/'.$siswa['siswa_id']); ?>" class="btn btn-danger float-right"> <i class="fa fa-book"></i>PDF </a>
</div>
</div>
<?= $this->endSection(); ?>