<?php
include 'koneksi.php';

$query = "SELECT * FROM service;";
$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));
//var_dump($sql);
?>

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
        <h1 class="mt-3">Data Biaya Jasa Service</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi daftar biaya jasa service</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD - <cite title="Source Title">Create, Read, Update, Delete</cite>
            </figcaption>
        </figure>
        <!-- akhir judul -->

        <!-- button tambah data -->
        <a href="kelola.php?tambah=servis" type="button" class="btn btn-primary mb-3">
            <i class="bi bi-person-plus-fill me-2"></i>
            Tambah Data
        </a>
        <!-- akhir button tambah data -->

        <!-- tabel -->
        <div class="table-responsive">
            <table class="table table-light table-striped table-hover table-bordered align-middle">
                <thead class="text-center align-middle">
                    <tr>
                        <th>ID Service</th>
                        <th>Jenis Service</th>
                        <th>Biaya Service</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php while ($hasil = mysqli_fetch_assoc($sql)): ?>
                        <tr>
                            <td>
                                <?= $hasil['id_service']; ?>
                            </td>
                            <td>
                                <?= $hasil['jenis_service']; ?>
                            </td>
                            <td>
                                <?= $hasil['biaya_service']; ?>
                            </td>
                            <td>
                                <a href="kelola.php?tombol=ubahService&ubah=<?= $hasil['id_service']; ?>" type="button"
                                    class="btn btn-success btn-sm mb-2 mt-2">
                                    <i class="bi bi-pencil-square me-2"></i>
                                    Ubah
                                </a>

                                <a href="proses.php?hapusService=<?= $hasil['id_service']; ?>" type="button"
                                    class="btn btn-danger btn-sm mb-2 mt-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="bi bi-person-dash-fill me-2"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <!-- akhir tabel -->
    </div>
</body>

</html>