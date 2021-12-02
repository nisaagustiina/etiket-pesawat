<?php
include'../koneksi.php';
$id	= $_GET['id'];

mysqli_query($con,"DELETE FROM tiket WHERE id_tiket='$id'"
);
header("location:../index_admin.php?p=tiket");
?>