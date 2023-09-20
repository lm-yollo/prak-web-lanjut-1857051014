<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create User</title>
    <link href="<?=base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet" >
  </head>
  <body>
    <div class="container">
    <form action="<?=base_url('/user/store')?>" method="POST">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
    <label for="npm">NPM</label>
    <input type="text" class="form-control" name="npm" placeholder="Masukan NPM">
  </div>
  <div class="form-group">
    <label for="kelas">Kelas</label>
    <select class="form-select" name="kelas" aria-label="Default select example">
    <?php
    foreach ($kelas as $item){
      ?>
  <option value="<?= $item['id']?>"><?=$item['nama_kelas']?></option>
  <?php
  }
  ?>
  </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="<?=base_url("assets/js/bootstrap.bundle.min.js")?>" ></script>
  </body>
</html>