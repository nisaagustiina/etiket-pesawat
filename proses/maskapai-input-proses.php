<?php
include '../koneksi.php';

$kd_maskapai = $_POST['kd_maskapai'];
$nama_maskapai = $_POST['nama_maskapai'];
$kelas_maskapai = $_POST['kelas_maskapai'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "INSERT INTO maskapai (kd_maskapai,nama_maskapai,kelas_maskapai) VALUES ('$kd_maskapai','$nama_maskapai','$kelas_maskapai')");
    echo "<script>alert('Tambah Data Berhasil!');
        window.location='../index_admin.php?p=maskapai';</script>";
}

?>