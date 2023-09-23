<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile User</title>
    <link href="<?= base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
</head>
<body>
<section class="vh-100" style="background-color: #9de2ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-md-9 col-lg-7 col-xl-5">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="flex-shrink-0">
                                <img src="<?= base_url("assets/img/panda.jpg") ?>"
                                     alt="Generic placeholder image" class="img-fluid"
                                     style="width: 180px; border-radius: 20px;">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1"><?= $user['nama'] ?></h5>
                                <p class="mb-2 pb-1" style="color: #2b2a2a;"><?= $user['npm'] ?></p>
                                <div class="d-flex justify-content-start rounded-3 p-2 mb-2"
                                     style="background-color: #efefef;">
                                    <div>
                                        <p class="small text-muted mb-1">Kelas</p>
                                        <p class="mb-0"><?= $user['nama_kelas'] ?></p>
                                    </div>
                                </div>
                                <div class="d-flex pt-1">
                                    <a href="" class="btn btn-outline-primary me-1 flex-grow-1">Edit Data</a>
                                    <a href="/user" class="btn btn-primary flex-grow-1">Kembali</a><br><br>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= base_url("assets/js/bootstrap.bundle.min.js") ?>"></script>
</body>
</html>
