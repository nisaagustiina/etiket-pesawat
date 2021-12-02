<?php
include'../koneksi.php';
$id	= $_GET['id'];

mysqli_query($con,"DELETE FROM login WHERE id_login='$id'"
);
header("location:../index_admin.php?p=customer");
?>