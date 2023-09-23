<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title?></title>
  <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
</head>

<body>
<div class="container">
    <a href="<?= base_url('/user/create') ?>" class="btn btn-primary">Create User</a>
    <table class="table table-striped">
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
                <td><a href="/user/detail/<?= $u['npm']; ?>" class="btn btn-success"> Detail</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="<?= base_url("assets/js/bootstrap.bundle.min.js") ?>"></script>
</body>

</html>
