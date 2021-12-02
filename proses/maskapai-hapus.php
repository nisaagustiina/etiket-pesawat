<?php
include'../koneksi.php';
$id	= $_GET['id'];

mysqli_query($con,"DELETE FROM maskapai WHERE id_maskapai='$id'"
);
header("location:../index_admin.php?p=maskapai");
?>