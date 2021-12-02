<?php
include'../koneksi.php';
$id	= $_GET['id'];

mysqli_query($con,"DELETE FROM bayar WHERE id_bayar='$id'"
);
header("location:../index_admin.php?p=payment");
?>