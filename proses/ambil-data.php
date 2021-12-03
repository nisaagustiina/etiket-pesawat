<?php
include '../koneksi.php';

if(isset($_POST['tujuan']) && !isset($_POST['maskapai'])){
    $tujuan = $_POST['tujuan'];

    $sql = mysqli_query($con, "SELECT * FROM tiket INNER JOIN maskapai ON maskapai.id_maskapai=tiket.id_maskapai WHERE id_tujuan='$tujuan'");
    $q=mysqli_num_rows($sql);
    if($q>0){
        echo "<option>--Pilih Maskapai--</option>";
        while($data=mysqli_fetch_array($sql)){
        echo '
        <option value="'.$data['id_maskapai'].'">'.$data['kd_maskapai'].' - '.$data['nama_maskapai'].' '.$data['kelas_maskapai'].'</option>';
        }
    }else{

    }
}

if(isset($_POST['maskapai']) ){
    $maskapai = $_POST['maskapai'];
    $tujuan = $_POST['tujuan'];

    $sql = mysqli_query($con, "SELECT * FROM tiket WHERE id_maskapai='$maskapai' AND id_tujuan='$tujuan'");
    $data=mysqli_num_rows($sql);
    if($data>0){
    while($q=mysqli_fetch_array($sql)){
        $array = [
            'id_tiket' => $q['id_tiket'],
            'harga' => $q['harga']
        ];
        echo json_encode($array,true);
        }
    }else{

    }
}

if(isset($_POST['simpan'])){
    
    $id = $_POST['id'];
    $id_tiket = $_POST['id_tiket'];
    $id_bayar = $_POST['id_bayar'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $total = $_POST['total'];

    $sql = mysqli_query($con, "INSERT INTO pembelian (id_login,id_tiket,id_bayar,tanggal,jumlah,total) VALUES ('$id','$id_tiket','$id_bayar','$tanggal','$jumlah','$total')");
    // print_r($sql);
    echo "<script>alert('Pesan Tiket Berhasil!');
        window.location='../index_cust.php?p=rp';</script>";
}


?>