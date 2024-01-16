<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Pelanggan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Pelanggan</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="<?php echo base_url('user/pelanggan/edit_action'); ?>" method="post">
            <div class="card">
              <div class="card-body">
                <?php
                $inputs = session()->getFlashdata('inputs');
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) {
                ?>
                  <div class="alert alert-danger" role="alert">
                    Whoops! Ada kesalahan saat input data, yaitu:
                    <ul>
                      <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>
                <?php } ?>

                <input type="hidden" class="form-control" name="KontrakanPelanggan_id" placeholder="Masukkan nama pelanggan" value="<?= $kontrakan_pelanggan['KontrakanPelanggan_id']; ?>">

                <div class="form-group">
                  <label for="KontrakanPelanggan_nama">Nama Pelanggan</label>
                  <input type="text" class="form-control" name="KontrakanPelanggan_nama" placeholder="Masukkan nama pelanggan" value="<?= $kontrakan_pelanggan['KontrakanPelanggan_nama']; ?>">
                </div>

                <div class="form-group">
                  <label for="KontrakanPelanggan_alamat">Alamat Pelanggan</label>
                  <input type="text" class="form-control" name="KontrakanPelanggan_alamat" placeholder="Masukkan Alamat Pelanggan" value="<?= $kontrakan_pelanggan['KontrakanPelanggan_alamat'] ?>">
                </div>

                <div class="form-group">
                  <label for="KontrakanPelanggan_tgl">Tanggal Sewa Lapangan</label>
                  <input type="date" class="form-control" name="KontrakanPelanggan_tgl" placeholder="Masukkan Tanggal" value="<?= $kontrakan_pelanggan['KontrakanPelanggan_tgl'] ?>">
                </div>

              </div>
              <div class="card-footer">
                <a href="<?php echo base_url('user/pelanggan'); ?>" class="btn btn-outline-info">Back</a>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo view('_partials/footer'); ?>
