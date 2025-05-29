<?php
include 'koneksi.php';

// fungsi tambah
if (isset($_GET['tambah']) && $_GET['tambah'] == 'pelanggan') {
    if (isset($_POST['aksi']) && $_POST['aksi'] == 'tambah') {

        $idPelanggan = $_POST['idPelanggan'];
        $nmPelanggan = $_POST['namaPelanggan'];
        $jenisKelamin = isset($_POST['jkpria']) ? 'Pria' : 'Wanita';
        $nomorTelepon = $_POST['nomorTelepon'];
        $alamat = $_POST['alamat'];
        $tanggal = $_POST['tanggal'];

        $query = "INSERT INTO pelanggan VALUES('$idPelanggan', '$nmPelanggan', '$jenisKelamin', '$nomorTelepon', '$alamat', '$tanggal')";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: form_pelanggan.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }
} else if (isset($_GET['tambah']) && $_GET['tambah'] == 'servis') {
    if (isset($_POST['aksi']) && $_POST['aksi'] == 'tambah') {

        $idServis = $_POST['idService'];
        $jenisServis = $_POST['jenisService'];
        $biaya = $_POST['biayaService'];

        $query = "INSERT INTO service VALUES('$idServis', '$jenisServis', '$biaya')";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: form_service.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }
} else if (isset($_GET['tambah']) && $_GET['tambah'] == 'sparepart') {
    if (isset($_POST['aksi']) && $_POST['aksi'] == 'edit') {

        $kdBrg = $_POST['kodeBarang'];
        $nmBrg = $_POST['namaBarang'];
        $harga = $_POST['hargaBarang'];
        $jenis = $_POST['jenisBarang'];
        $merk = $_POST['merkBarang'];
        $jumlah = $_POST['jumlahBarang'];


        $query = "INSERT INTO sparepart VALUES('$kdBrg', '$nmBrg', '$harga', '$jenis', '$merk', '$jumlah')";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: form_sparepart.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }
}
// akhir fungsi tambah


// fungsi edit
if (isset($_GET['formUbah']) && $_GET['formUbah'] == 'pelanggan') {
    if (isset($_POST['aksi']) && $_POST['aksi'] == 'edit') {

        $idPelanggan = $_POST['idPelanggan'];
        $nmPelanggan = $_POST['namaPelanggan'];
        $jenisKelamin = isset($_POST['jkpria']) ? 'Pria' : 'Wanita';
        $nomorTelepon = $_POST['nomorTelepon'];
        $alamat = $_POST['alamat'];
        $tanggal = $_POST['tanggal'];

        $query = "UPDATE pelanggan SET nama_pelanggan = '$nmPelanggan', jenis_kelamin = '$jenisKelamin', nomor_telepon = '$nomorTelepon', alamat = '$alamat', tanggal = '$tanggal' WHERE id_pelanggan = '$idPelanggan'";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: form_pelanggan.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }
} else if (isset($_GET['formUbah']) && $_GET['formUbah'] == 'servis') {
    if (isset($_POST['aksi']) && $_POST['aksi'] == 'edit') {

        $idServis = $_POST['idService'];
        $jenisServis = $_POST['jenisService'];
        $biaya = $_POST['biayaService'];

        $query = "UPDATE service SET jenis_service = '$jenisServis', biaya_service = '$biaya' WHERE id_service = '$idServis'";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: form_service.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }
} else if (isset($_GET['formUbah']) && $_GET['formUbah'] == 'sparepart') {
    if (isset($_POST['aksi']) && $_POST['aksi'] == 'edit') {

        $kdBrg = $_POST['kodeBarang'];
        $nmBrg = $_POST['namaBarang'];
        $harga = $_POST['hargaBarang'];
        $jenis = $_POST['jenisBarang'];
        $merk = $_POST['merkBarang'];
        $jumlah = $_POST['jumlahBarang'];


        $query = "UPDATE sparepart SET nama_barang = '$nmBrg', harga_barang = '$harga', jenis_barang = '$jenis', merk_barang = '$merk', jumlah_barang = '$jumlah' WHERE kd_barang = '$kdBrg'";

        $sql = mysqli_query($conn, $query);

        if ($sql) {
            header("Location: form_sparepart.php");
        } else {
            echo "Gagal menambahkan data: " . mysqli_error($conn);
        }
    }
}
// akhir fungsi edit


// fungsi hapus
if (isset($_GET['hapus'])) {
    $query = "DELETE FROM pelanggan WHERE id_pelanggan = '$_GET[hapus]'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: form_pelanggan.php");
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else if (isset($_GET['hapusService'])) {
    $query = "DELETE FROM service WHERE id_service = '$_GET[hapusService]'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: form_service.php");
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else if (isset($_GET['hapusSparepart'])) {
    $query = "DELETE FROM sparepart WHERE kd_barang = '$_GET[hapusSparepart]'";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("Location: form_sparepart.php");
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
}
// akhir fungsi hapus

?>