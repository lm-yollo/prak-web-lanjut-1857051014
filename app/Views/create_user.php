<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="col-sm-6">
    <div class="row">
      <div class="card mt-3">
        <div class="card-header">
          <h3>Form Tambah User</h3>

        </div>
        <div class="card-body col-md-6">
          <form action="<?= base_url('/user/store') ?>" method="POST" autocomplete="off">
            <?= csrf_field() ?>
            <div class="form-group">
              <label>NPM</label>
              <input type="text" name="npm" class="form-control <?php if (session()->getFlashdata('error_npm')) echo 'is-invalid'; ?>" value="<?= old('npm'); ?>">
              <?php if (session()->getFlashdata('error_npm')) : ?>
                <div class="invalid-feedback">
                  <?= session()->getFlashdata('error_npm') ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" class="form-control <?php if (session()->getFlashdata('error_nama')) echo 'is-invalid'; ?>" value="<?= old('nama'); ?>">
              <?php if (session()->getFlashdata('error_nama')) : ?>
                <div class="invalid-feedback">
                  <?= session()->getFlashdata('error_nama') ?>
                </div>
              <?php endif; ?>
            </div>
            <div class="form-group">
              <label>Kelas</label>
              <select class="form-select" name="kelas">
                <?php
                foreach ($kelas as $item) {
                ?>
                  <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                <?php
                }
                ?>
              </select>
            </div>

            <br><br>
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="/user" class="btn btn-primary">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>