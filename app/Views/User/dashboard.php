<?= $this->extend('layouts/siswa_template'); ?>

<?= $this->section('content'); ?>
<!-- Header -->
<div class="container">
<br><br><br>
<H1>Selamat Datang , <?php echo $user['nama_lengkap'];?></H1>
</div>

        <div class="w3-col l6 w3-padding-large">
            <img src="<?php echo base_url(); ?>/img/rak.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>

        
    </div>
    <!-- End page content -->
</div>
<?= $this->endSection(); ?>