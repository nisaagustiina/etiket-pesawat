<?php
include '../koneksi.php';

$nama_tujuan = $_POST['nama_tujuan'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "INSERT INTO tujuan (nama_tujuan) VALUES ('$nama_tujuan')");
    echo "<script>alert('Tambah Data Berhasil!');
        window.location='../index_admin.php?p=tujuan';</script>";
}

?>