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
        <?php if (isset($_GET['tambah']) && $_GET['tambah'] == 'pelanggan'): ?>
            <!-- judul -->
            <h1 class="mt-3 text-center">Tambah Data Pelanggan</h1>
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>Formulir untuk menginput data pelanggan</p>
                </blockquote>

            <?php elseif (isset($_GET['tambah']) && $_GET['tambah'] == 'servis'): ?>
                <!-- judul -->
                <h1 class="mt-3 text-center">Tambah Data Jasa Service</h1>
                <figure class="text-center">
                    <blockquote class="blockquote">
                        <p>Formulir untuk menginput jenis dan biaya jasa service yang tersedia di toko Service Gadget</p>
                    </blockquote>
                <?php elseif (isset($_GET['tambah']) && $_GET['tambah'] == 'sparepart'): ?>
                    <!-- judul -->
                    <h1 class="mt-3 text-center">Tambah Data Barang Sparepart</h1>
                    <figure class="text-center">
                        <blockquote class="blockquote">
                            <p>Formulir untuk menginput harga sparepart yang tersedia di toko Service Gadget</p>
                        </blockquote>
                    <?php endif; ?>

                    <?php if (isset($_GET['tombol']) && $_GET['tombol'] == 'ubahPelanggan'): ?>
                        <!-- judul -->
                        <h1 class="mt-3 text-center">Pengubahan Data Pelanggan</h1>
                        <figure class="text-center">
                            <blockquote class="blockquote">
                                <p>Formulir untuk mengubah data pelanggan</p>
                            </blockquote>

                        <?php elseif (isset($_GET['tombol']) && $_GET['tombol'] == 'ubahService'): ?>
                            <!-- judul -->
                            <h1 class="mt-3 text-center">Pengubahan Data Jenis Jasa Service</h1>
                            <figure class="text-center">
                                <blockquote class="blockquote">
                                    <p>Formulir untuk mengubah data jenis jasa service</p>
                                </blockquote>

                            <?php elseif (isset($_GET['tombol']) && $_GET['tombol'] == 'ubahSparepart'): ?>
                                <!-- judul -->
                                <h1 class="mt-3 text-center">Pengubahan Data Sparepart</h1>
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <p>Formulir untuk mengubah data sparepart</p>
                                    </blockquote>
                                <?php endif; ?>

                                <figcaption class="blockquote-footer">
                                    CRUD - <cite title="Source Title">Create, Read, Update, Delete</cite>
                                </figcaption>
                            </figure>
                            <!-- akhir judul -->

                            <!-- form input pelanggan, servis, sparepart -->
                            <?php if (isset($_GET['tambah']) && $_GET['tambah'] == 'pelanggan'): ?>
                                <!-- form input pelanggan -->
                                <form action="proses.php?tambah=pelanggan" method="post">
                                    <div class="mb-3 row justify-content-center">
                                        <label for="idPelanggan" class="col-sm-2 col-form-label">
                                            ID Pelanggan
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="idPelanggan" id="idPelanggan">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="namaPelanggan" class="col-sm-2 col-form-label">
                                            Nama Pelanggan
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="namaPelanggan" id="namaPelanggan">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label class="col-sm-2 col-form-label">
                                            Jenis Kelamin
                                        </label>
                                        <div class="col-sm-6 align-bottom">
                                            <input class="form-check-input" type="radio" name="jkpria" id="pria">
                                            <label class="form-check-label me-4" for="pria">
                                                Pria
                                            </label>

                                            <input class="form-check-input" type="radio" name="jkwanita" id="wanita">
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
                                            <input type="tel" class="form-control" name="nomorTelepon" id="nomorTelepon">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Pelanggan</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-6">
                                            <input type="datetime-local" class="form-control" id="tanggal" name="tanggal">
                                        </div>
                                    </div>

                                    <!-- button simpan dan batal -->
                                    <div class="mb-3 row justify-content-center text-center">
                                        <div class="col-sm-6">
                                            <button type="submit" name="aksi" value="tambah" class="btn btn-primary me-5"><i
                                                    class="bi bi-plus-square-fill me-2"></i>Tambah Data</button>

                                            <a href="form_sparepart.php" type="button" class="btn btn-danger ms-5"><i
                                                    class="bi bi-arrow-return-left me-2"></i>Batal</a>
                                        </div>
                                    </div>
                                    <!-- akhir button -->
                                </form>
                                <!-- akhir form input pelanggan-->

                            <?php elseif (isset($_GET['tambah']) && $_GET['tambah'] == 'servis'): ?>
                                <!-- form input jenis jasa service-->
                                <form action="proses.php?tambah=servis" method="post">
                                    <div class="mb-3 row justify-content-center">
                                        <label for="idService" class="col-sm-2 col-form-label">
                                            ID Service
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="idService" id="idService">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="jenisService" class="col-sm-2 col-form-label">
                                            Jenis Service
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="jenisService" id="jenisService">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="biayaService" class="col-sm-2 col-form-label">
                                            Biaya Service
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" name="biayaService" id="biayaService">
                                        </div>
                                    </div>

                                    <!-- button simpan dan batal -->
                                    <div class="mb-3 row justify-content-center text-center">
                                        <div class="col-sm-6">
                                            <button type="submit" name="aksi" value="tambah" class="btn btn-primary me-5"><i
                                                    class="bi bi-plus-square-fill me-2"></i>Tambah Data</button>

                                            <a href="form_sparepart.php" type="button" class="btn btn-danger ms-5"><i
                                                    class="bi bi-arrow-return-left me-2"></i>Batal</a>
                                        </div>
                                    </div>
                                    <!-- akhir button -->
                                </form>
                                <!-- akhir form input jenis jasa service-->

                            <?php elseif (isset($_GET['tambah']) && $_GET['tambah'] == 'sparepart'): ?>
                                <!-- form input sparepart-->
                                <form action="proses.php?tambah=sparepart" method="post">
                                    <div class="mb-3 row justify-content-center">
                                        <label for="kodeBarang" class="col-sm-2 col-form-label">
                                            Kode Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="kodeBarang" id="kodeBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="namaBarang" class="col-sm-2 col-form-label">
                                            Nama Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="namaBarang" id="namaBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="hargaBarang" class="col-sm-2 col-form-label">
                                            Harga Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" name="hargaBarang" id="hargaBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="jenisBarang" class="col-sm-2 col-form-label">
                                            Jenis Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="jenisBarang" id="jenisBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="merkBarang" class="col-sm-2 col-form-label">
                                            Merk Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="merkBarang" id="merkBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="jumlahBarang" class="col-sm-2 col-form-label">
                                            Jumlah Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="number" class="form-control" name="jumlahBarang" id="jumlahBarang">
                                        </div>
                                    </div>

                                    <!-- button simpan dan batal -->
                                    <div class="mb-3 row justify-content-center text-center">
                                        <div class="col-sm-6">
                                            <button type="submit" name="aksi" value="tambah" class="btn btn-primary me-5"><i
                                                    class="bi bi-plus-square-fill me-2"></i>Tambah Data</button>

                                            <a href="form_sparepart.php" type="button" class="btn btn-danger ms-5"><i
                                                    class="bi bi-arrow-return-left me-2"></i>Batal</a>
                                        </div>
                                    </div>
                                    <!-- akhir button -->
                                </form>
                                <!-- akhir form input sparepart-->
                            <?php endif; ?>
                            <!-- FORM INPUT -->


                            <!-- FORM EDIT / UBAH -->
                            <?php if (isset($_GET['tombol']) && $_GET['tombol'] == 'ubahPelanggan'): ?>
                                <?php
                                include 'koneksi.php';
                                    $id_pelanggan = $_GET['ubah'];

                                    $query = "SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'";
                                    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    $result = mysqli_fetch_assoc($sql);

                                    $nmPelanggan = $result['nama_pelanggan'];
                                    $jnsKelamin = $result['jenis_kelamin'];
                                    $nmrTelepon = $result['nomor_telepon'];
                                    $alamat = $result['alamat'];
                                    $tanggal = $result['tanggal'];

                                    // var_dump($result);

                                    // die();
                                ?>
                                <!-- form ubah pelanggan -->
                                <form action="proses.php?formUbah=pelanggan" method="post">
                                    <div class="mb-3 row justify-content-center">
                                        <label for="idPelanggan" class="col-sm-2 col-form-label">
                                            ID Pelanggan
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $id_pelanggan; ?>" class="form-control" name="idPelanggan" id="idPelanggan" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="namaPelanggan" class="col-sm-2 col-form-label">
                                            Nama Pelanggan
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $nmPelanggan; ?>" class="form-control" name="namaPelanggan" id="namaPelanggan">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label class="col-sm-2 col-form-label">
                                            Jenis Kelamin
                                        </label>
                                        <div class="col-sm-6 align-bottom">
                                            <input class="form-check-input" type="radio" name="jkpria" id="pria" <?php if( $jnsKelamin == 'Pria') echo 'checked'; ?> >
                                            <label class="form-check-label me-4" for="pria">
                                                Pria
                                            </label>

                                            <input class="form-check-input" type="radio" name="jkwanita" id="wanita" <?php if( $jnsKelamin == 'Wanita') echo 'checked'; ?>>
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
                                            <input type="tel" value="<?= $nmrTelepon; ?>" class="form-control" name="nomorTelepon" id="nomorTelepon">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Pelanggan</label>
                                        <div class="col-sm-6">
                                            <textarea class="form-control"  name="alamat" id="alamat" rows="3"><?= $alamat; ?></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
                                        <div class="col-sm-6">
                                            <input type="datetime-local" value="<?= $tanggal; ?>" class="form-control" id="tanggal" name="tanggal">
                                        </div>
                                    </div>

                                    <!-- button simpan dan batal -->
                                    <div class="mb-3 row justify-content-center text-center">
                                        <div class="col-sm-6">
                                            <button type="submit" name="aksi" value="edit" class="btn btn-success"><i
                                                        class="bi bi-floppy-fill me-2"></i>Simpan Perubahan</button>
                                            
                                            <a href="form_pelanggan.php" type="button" class="btn btn-danger ms-5"><i
                                                    class="bi bi-arrow-return-left me-2"></i>Batal</a>
                                        </div>
                                    </div>
                                    <!-- akhir button -->
                                </form>
                                <!-- akhir form ubah pelanggan-->

                            <?php elseif (isset($_GET['tombol']) && $_GET['tombol'] == 'ubahService'): ?>
                                <?php
                                include 'koneksi.php';
                                    $id_service = $_GET['ubah'];

                                    $query = "SELECT * FROM service WHERE id_service = '$id_service'";
                                    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    $result = mysqli_fetch_assoc($sql);

                                    $jnsService = $result['jenis_service'];
                                    $biaya = $result['biaya_service'];

                                    // var_dump($result);

                                    // die();
                                ?>
                                <!-- form ubah jenis jasa service-->
                                <form action="proses.php?formUbah=servis" method="post">
                                    <div class="mb-3 row justify-content-center">
                                        <label for="idService" class="col-sm-2 col-form-label">
                                            ID Service
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $id_service; ?>" class="form-control" name="idService" id="idService" readonly>
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="jenisService" class="col-sm-2 col-form-label">
                                            Jenis Service
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $jnsService; ?>" class="form-control" name="jenisService" id="jenisService">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="biayaService" class="col-sm-2 col-form-label">
                                            Biaya Service
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="number" value="<?= $biaya; ?>" class="form-control" name="biayaService" id="biayaService">
                                        </div>
                                    </div>

                                    <!-- button simpan dan batal -->
                                    <div class="mb-3 row justify-content-center text-center">
                                        <div class="col-sm-6">
                                            <button type="submit" name="aksi" value="edit" class="btn btn-success"><i
                                                        class="bi bi-floppy-fill me-2"></i>Simpan Perubahan</button>
                                            
                                            <a href="form_service.php" type="button" class="btn btn-danger ms-5"><i
                                                    class="bi bi-arrow-return-left me-2"></i>Batal</a>
                                        </div>
                                    </div>
                                    <!-- akhir button -->
                                </form>
                                <!-- akhir form ubah jenis jasa service-->

                            <?php elseif (isset($_GET['tombol']) && $_GET['tombol'] == 'ubahSparepart'): ?>
                                <?php
                                include 'koneksi.php';
                                    $kd_barang = $_GET['ubah'];

                                    $query = "SELECT * FROM sparepart WHERE kd_barang = '$kd_barang '";
                                    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                    $result = mysqli_fetch_assoc($sql);

                                    $nmBarang = $result['nama_barang'];
                                    $hrgBarang = $result['harga_barang'];
                                    $jnsBarang = $result['jenis_barang'];
                                    $merkBarang = $result['merk_barang'];
                                    $jmlh = $result['jumlah_barang'];

                                    // var_dump($result);

                                    // die();
                                ?>
                                <!-- form ubah sparepart-->
                                <form action="proses.php?formUbah=sparepart" method="post">
                                    <div class="mb-3 row justify-content-center">
                                        <label for="kodeBarang" class="col-sm-2 col-form-label">
                                            Kode Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $kd_barang; ?>" readonly class="form-control" name="kodeBarang" id="kodeBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="namaBarang" class="col-sm-2 col-form-label">
                                            Nama Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $nmBarang; ?>" class="form-control" name="namaBarang" id="namaBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="hargaBarang" class="col-sm-2 col-form-label">
                                            Harga Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="number" value="<?= $hrgBarang; ?>" class="form-control" name="hargaBarang" id="hargaBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="jenisBarang" class="col-sm-2 col-form-label">
                                            Jenis Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $jnsBarang; ?>" class="form-control" name="jenisBarang" id="jenisBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="merkBarang" class="col-sm-2 col-form-label">
                                            Merk Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="text" value="<?= $merkBarang; ?>" class="form-control" name="merkBarang" id="merkBarang">
                                        </div>
                                    </div>

                                    <div class="mb-3 row justify-content-center">
                                        <label for="jumlahBarang" class="col-sm-2 col-form-label">
                                            Jumlah Barang
                                        </label>
                                        <div class="col-sm-6">
                                            <input type="number" value="<?= $jmlh; ?>" class="form-control" name="jumlahBarang" id="jumlahBarang">
                                        </div>
                                    </div>

                                    <!-- button simpan dan batal -->
                                    <div class="mb-3 row justify-content-center text-center">
                                        <div class="col-sm-6">
                                            <button type="submit" name="aksi" value="edit" class="btn btn-success"><i
                                                        class="bi bi-floppy-fill me-2"></i>Simpan Perubahan</button>
                                            
                                            <a href="form_sparepart.php" type="button" class="btn btn-danger ms-5"><i
                                                    class="bi bi-arrow-return-left me-2"></i>Batal</a>
                                        </div>
                                    </div>
                                    <!-- akhir button -->
                                </form>
                                <!-- akhir form input sparepart-->
                            <?php endif; ?>
    </div>
</body>

</html>