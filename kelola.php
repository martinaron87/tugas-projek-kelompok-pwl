<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap-icons/bootstrap-icons.min.css">
    <!-- akhir bootstrap -->

    <!-- css sendiri -->
    <link rel="stylesheet" href="styles.css">
    <!-- akhir css sendiri -->

    <title>Service Gadget</title>
</head>

<body class="pt-5">
    <!-- navbar -->
    <nav class="navbar fixed-top bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/menu_logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Service Gadget
            </a>
        </div>
    </nav>
    <!-- akhir navbar -->

    <div class="container">
        <!-- judul -->
        <h1 class="mt-3 text-center">Tambah Data Pelanggan</h1>
        <figure class="text-center">
            <blockquote class="blockquote">
                <p>Berisi data pelanggan yang akan dimasukkan ke database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD - <cite title="Source Title">Create, Read, Update, Delete</cite>
            </figcaption>
        </figure>
        <!-- akhir judul -->

        <!-- form -->
        <form action="proses.php" method="post">
            <div class="mb-3 row justify-content-center">
                <label for="idPelanggan" class="col-sm-2 col-form-label">ID Pelanggan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="idPelanggan">
                </div>
            </div>

            <div class="mb-3 row justify-content-center">
                <label for="namaPelanggan" class="col-sm-2 col-form-label">
                    Nama Pelanggan
                </label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="namaPelanggan">
                </div>
            </div>

            <div class="mb-3 row justify-content-center">
                <label class="col-sm-2 col-form-label">
                    Jenis Kelamin
                </label>
                <div class="col-sm-6 align-bottom">
                    <input class="form-check-input" type="radio" name="radioDefault" id="pria">
                    <label class="form-check-label me-4" for="pria">
                        Pria
                    </label>

                    <input class="form-check-input" type="radio" name="radioDefault" id="wanita">
                    <label class="form-check-label" for="wanita">
                        Wanita
                    </label>
                </div>
            </div>

            <div class="mb-3 row justify-content-center">
                <label for="nomorTelepon" class="col-sm-2 col-form-label">
                    Nomor Telepon
                </label>
                <div class="col-sm-6">
                    <input type="tel" class="form-control" id="nomorTelepon">
                </div>
            </div>

            <div class="mb-3 row justify-content-center">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Pelanggan</label>
                <div class="col-sm-6">
                    <textarea class="form-control" id="alamat" rows="3"></textarea>
                </div>
            </div>

            <div class="mb-3 row justify-content-center">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-6">
                    <input type="datetime-local" class="form-control" id="tanggal" name="tanggal">
                </div>
            </div>
            <!-- akhir form -->

            <!-- button simpan dan batal -->
            <div class="mb-3 row justify-content-center text-center">
                <div class="col-sm-6">
                    <?php if (isset($_GET['ubah'])): ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-success"><i
                                class="bi bi-floppy-fill me-2"></i>Simpan Perubahan</button>
                    <?php else: ?>
                        <button type="submit" name="aksi" value="tambah" class="btn btn-primary me-5"><i
                                class="bi bi-plus-square-fill me-2"></i>Tambah Data</button>
                    <?php endif; ?>
                    <a href="form_pelanggan.php" type="button" class="btn btn-danger ms-5"><i
                            class="bi bi-arrow-return-left me-2"></i>Batal</a>
                </div>
            </div>
            <!-- akhir button -->
        </form>
    </div>
</body>

</html>