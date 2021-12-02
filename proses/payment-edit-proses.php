<?php
include '../koneksi.php';

$id = $_POST['id'];

$tipe_bayar = $_POST['tipe_bayar'];
$nama_bank = $_POST['nama_bank'];

if(isset($_POST['simpan'])){
    mysqli_query($con, "UPDATE bayar SET tipe_bayar='$tipe_bayar', nama_bank='$nama_bank' WHERE id_bayar='$id'");
    echo "<script>alert('Edit Data Berhasil!');
        window.location='../index_admin.php?p=payment';</script>";
}
?>