<?php
include 'koneksi.php';

// fungsi tambah dan edit
if (isset($_GET['tambah']) && $_GET['tambah'] == 'pelanggan') {
    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == 'tambah') {

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
        } else if ($_POST['aksi'] == 'edit') {
            echo "Data telah diperbarui. <a href='form_pelanggan.php'>{Kembali ke daftar}</a>";
        }
    }
} else if (isset($_GET['tambah']) && $_GET['tambah'] == 'servis') {
    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == 'tambah') {

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
        } else if ($_POST['aksi'] == 'edit') {
            echo "Data telah diperbarui. <a href='form_service.php'>{Kembali ke daftar}</a>";
        }
    }
} else if (isset($_GET['tambah']) && $_GET['tambah'] == 'sparepart') {
    if (isset($_POST['aksi'])) {
        if ($_POST['aksi'] == 'tambah') {

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
        } else if ($_POST['aksi'] == 'edit') {
            echo "Data telah diperbarui. <a href='form_sparepart.php'>{Kembali ke daftar}</a>";
        }
    }
}
// akhir fungsi tambah dan edit


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