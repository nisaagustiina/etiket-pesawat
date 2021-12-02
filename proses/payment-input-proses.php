<?php
include '../koneksi.php';

$nama_bank = $_POST['nama_bank'];
$tipe_bayar = $_POST['tipe_bayar'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "INSERT INTO bayar (tipe_bayar, nama_bank) VALUES ('$tipe_bayar','$nama_bank')");
    echo "<script>alert('Tambah Data Berhasil!');
        window.location='../index_admin.php?p=payment';</script>";
}

?>