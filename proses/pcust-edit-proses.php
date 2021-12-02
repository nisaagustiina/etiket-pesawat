<?php
session_start();
include '../koneksi.php';

$id = $_SESSION['user'];

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_tlp = $_POST['no_tlp'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "UPDATE login SET nama='$nama', alamat='$alamat',no_tlp='$no_tlp' WHERE username='$id'") or mysqli_error($con);
    echo "<script>alert('Edit Data Berhasil!');
        window.location='../index_cust.php?p=pcust';</script>";
}
?>