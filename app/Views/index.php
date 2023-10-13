<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="col">
        <div class="row">
            <div class="container">
                <?php if (session()->getFlashdata('pesan')) : ?>
                    <div class="alert alert-success" id="myAlert" role="alert">
                        <?= session()->getFlashdata('pesan'); ?>
                    </div>
                <?php endif ?>
                <table class="table table-striped">
                    <h1 class="mt-3">Data Mahasiswa/i</h1>
                    <a href="<?= base_url('/user/create') ?>" class="btn btn-primary">Create User</a>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($users as $u) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $u['nama']; ?></td>
                                <td><?= $u['npm']; ?></td>
                                <td><?= $u['nama_kelas']; ?></td>
                                <td>
                                    <a href="/user/detail/<?= $u['npm']; ?>" class="btn btn-success"> <i class="fas fa-eye"></i> Detail</a>
                                    <a href="<?= base_url('user/' . $u['id'] . '/edit') ?>" class="btn btn-warning"><i class="fas fa-pencil"></i> Edit</a>
                                    <a href="javascript:void(0);" class="btn btn-danger delete-button" data-url="<?= base_url('user/' . $u['id']) ?>"><i class="fas fa-trash"></i> Delete</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>