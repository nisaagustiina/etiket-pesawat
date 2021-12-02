<?php
include '../koneksi.php';

$id = $_POST['id'];

$nama_tujuan = $_POST['nama_tujuan'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "UPDATE tujuan SET nama_tujuan='$nama_tujuan' WHERE id_tujuan='$id'");
    echo "<script>alert('Edit Data Berhasil!');
        window.location='../index_admin.php?p=tujuan';</script>";
}
?>