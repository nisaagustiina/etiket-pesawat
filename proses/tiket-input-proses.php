<?php
include '../koneksi.php';

$id_maskapai = $_POST['id_maskapai'];
$id_tujuan = $_POST['id_tujuan'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "INSERT INTO tiket (id_maskapai,id_tujuan,harga,stok) VALUES ('$id_maskapai','$id_tujuan','$harga','$stok')");
    echo "<script>alert('Tambah Data Berhasil!');
        window.location='../index_admin.php?p=tiket';</script>";
}

?>