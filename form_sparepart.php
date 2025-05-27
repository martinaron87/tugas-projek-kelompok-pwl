<?php
include 'koneksi.php';

$query = "SELECT * FROM sparepart;";
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
        <h1 class="mt-3">Data Sparepart</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Berisi data barang sparepart yang tersedia</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD - <cite title="Source Title">Create, Read, Update, Delete</cite>
            </figcaption>
        </figure>
        <!-- akhir judul -->

        <!-- button tambah data -->
        <a href="kelola.php" type="button" class="btn btn-primary mb-3"><i
                class="bi bi-person-plus-fill me-2"></i>Tambah Data</a>
        <!-- akhir button tambah data -->

        <!-- tabel -->
        <div class="table-responsive">
            <table class="table table-light table-striped table-hover table-bordered align-middle">
                <thead class="text-center">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Jenis Barang</th>
                        <th>Merk Barang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php while ($hasil = mysqli_fetch_assoc($sql)): ?>
                        <tr>
                            <td>
                                <?= $hasil['kd_barang']; ?>
                            </td>
                            <td>
                                <?= $hasil['nama_barang']; ?>
                            </td>
                            <td>
                                <?= $hasil['harga_barang']; ?>
                            </td>
                            <td>
                                <?= $hasil['jenis_barang']; ?>
                            </td>
                            <td>
                                <?= $hasil['merk_barang']; ?>
                            </td>
                            <td>
                                <a href="kelola.php?ubah=<?= $hasil['kd_barang']; ?>" type="button"
                                    class="btn btn-success btn-sm mb-2 mt-2"><i
                                        class="bi bi-pencil-square me-2"></i>Ubah</a>

                                <a href="proses.php?hapus=<?= $hasil['kd_barang']; ?>" type="button"
                                    class="btn btn-danger btn-sm mb-2 mt-2"><i
                                        class="bi bi-person-dash-fill me-2"></i>Hapus</a>
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