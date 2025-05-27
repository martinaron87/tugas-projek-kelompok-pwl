<?php if (isset($_POST['aksi'])) {
    if ($_POST['aksi'] == 'tambah') {
        echo "Data baru telah ditambahkan. <a href='form_pelanggan.php'>{Kembali ke daftar}</a>";
    } else if ($_POST['aksi'] == 'edit') {
        echo "Data telah diperbarui. <a href='form_pelanggan.php'>{Kembali ke daftar}</a>";
    }
}
if (isset($_GET['hapus'])) {
    echo "Data telah dihapus. <a href='form_pelanggan.php'>{Kembali ke daftar}</a>";
}
?>