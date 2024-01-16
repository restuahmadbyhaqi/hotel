<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
<div class="content-wrapper">
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1 class="m-0 text-dark">Create fakultas</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">Create fakultas</li>
</ol>
</div>
</div>
</div>
</div>
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<form action="<?php echo base_url('fakultas/store'); ?>"
method="post">
<div class="card">
<div class="card-body">
<?php

$inputs = session()->getFlashdata('inputs');
$errors = session()->getFlashdata('errors');
if(!empty($errors)){ ?>
<div class="alert alert-danger" role="alert">
Whoops! Ada kesalahan saat input data, yaitu:

<ul>
<?php foreach ($errors as $error) : ?>
<li><?= esc($error) ?></li>
<?php endforeach ?>
</ul>
</div>
<?php } ?>

<div class="form-group">
<label for="">Nama Fakultas</label>
<input type="text" class="form-control" name="fak_nama" placeholder="Enter fakultas name" value="<?php echo isset($inputs['fak_nama']) ? $inputs['fak_nama'] : ''; ?>">
</div>

<div class="form-group">

<label for="">Jumlah Prodi</label>
<input type="text" class="form-control" name="fak_jmlprodi" placeholder="Enter fakultas number of prodi" value="<?php echo isset($inputs['fak_jmlprodi']) ? $inputs['fak_jmlprodi'] : ''; ?>">

</div>

<div class="form-group">
<label for="">Lokasi</label>
<select name="fak_lokasi" id="" class="form-control">
    <option value="">Pilih Lokasi</option>
    <option <?php echo (isset($inputs['fak_lokasi']) && $inputs['fak_lokasi'] == "Kampus 1") ? "selected" : ""; ?> value="Kampus 1">Kampus 1</option>
    <option <?php echo (isset($inputs['fak_lokasi']) && $inputs['fak_lokasi'] == "Kampus 2") ? "selected" : ""; ?> value="Kampus 2">Kampus 2</option>
</select>
</div>
</div>
<div class="card-footer">
<a href="<?php echo base_url('fakultas'); ?>" class="btn
btn-outline-info">Back</a>

<button type="submit" class="btn btn-primary float-
right">Simpan</button>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
<?php echo view('_partials/footer'); ?>