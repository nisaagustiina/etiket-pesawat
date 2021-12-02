<?php
include '../koneksi.php';

$id = $_POST['id'];

$kd_maskapai = $_POST['kd_maskapai'];
$nama_maskapai = $_POST['nama_maskapai'];
$kelas_maskapai = $_POST['kelas_maskapai'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "UPDATE maskapai SET kd_maskapai='$kd_maskapai', nama_maskapai='$nama_maskapai', kelas_maskapai='$kelas_maskapai' WHERE id_maskapai='$id'");
    echo "<script>alert('Edit Data Berhasil!');
        window.location='../index_admin.php?p=maskapai';</script>";
}
?>