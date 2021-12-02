<?php
include '../koneksi.php';

$id = $_POST['id'];

$harga = $_POST['harga'];
$stok = $_POST['stok'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "UPDATE tiket SET harga='$harga',stok='$stok' WHERE id_tiket='$id'") or mysqli_error($con);
    echo "<script>alert('Edit Data Berhasil!');
        window.location='../index_admin.php?p=tiket';</script>";
}
?>