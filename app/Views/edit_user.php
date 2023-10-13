<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col-sm-6">
        <div class="row">
            <div class="card mt-3">
                <div class="card-header">
                    <h3>Form <?= $title; ?></h3>
                </div>
                <div class="card-body col-md-6">
                    <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label>NPM</label>
                            <input type="text" name="npm" class="form-control <?= session()->getFlashdata('error_npm') ? 'is-invalid' : '' ?>" value="<?= $user['npm']; ?>">
                            <?php if (session()->getFlashdata('error_npm')) : ?>
                                <div class="invalid-feedback">
                                    <?= session()->getFlashdata('error_npm') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control <?= session()->getFlashdata('error_nama') ? 'is-invalid' : '' ?>" value="<?= $user['nama']; ?>">
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
                                    <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?>>
                                        <?= $item['nama_kelas']; ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <img src="<?= isset($user['foto']) ? $user['foto'] : base_url('assets/img/panda.jpg') ?>" class="img-thumbnail" width="300px" alt="">
                            <label>Foto</label>
                            <input type="file" name="foto" class="form-control <?= session()->getFlashdata('error_foto') ? 'is-invalid' : '' ?>">
                            <?php if (session()->getFlashdata('error_foto')) : ?>
                                <div class="invalid-feedback">
                                    <?= session()->getFlashdata('error_foto') ?>
                                </div>
                            <?php endif; ?>
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