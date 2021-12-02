<?php
include'../koneksi.php';
$id	= $_GET['id'];

mysqli_query($con,"DELETE FROM tujuan WHERE id_tujuan='$id'"
);
header("location:../index_admin.php?p=tujuan");
?>