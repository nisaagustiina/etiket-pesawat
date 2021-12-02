<?php
include 'koneksi.php';
session_start();

if(isset($_POST['login'])){
    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
    $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
    $sql_login = mysqli_query($con, "SELECT * FROM login WHERE username='$user' AND password='$pass'");
    $cek = mysqli_num_rows($sql_login);
    if($cek > 0){
        $data = mysqli_fetch_assoc($sql_login);
        if($data['level'] == 1){
            $_SESSION['user'] = $user;
            $_SESSION['level'] = 1;
            echo "<script>alert('Anda Berhasil Login!');
            window.location='index_admin.php';</script>";
        }elseif ($data['level'] == 2) {
            $_SESSION['user'] = $user;
            $_SESSION['level'] = 2;
            $_SESSION['id'] = $data['id'];
            echo "<script>alert('Anda Berhasil Login!');
            window.location='index_cust.php';</script>";
        }else{
            header("location:index.php?pesan=gagal");
        }
    }else{
        header("location:index.php?pesan=gagal");
    }
}


if(isset($_POST['simpan'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $level = 2;

    if(!empty(trim($user)) && !empty(trim($pass))){
        if(strlen($user) >=4 && strlen($pass) >=4){
            $sql = mysqli_query($con, "INSERT INTO login (username,password,level) VALUES ('$user','$pass','$level')");
            echo "<script>alert('Registrasi berhasil. Silahkan Login!');
            window.location='index.php';</script>";
        }else{
            echo "<script>alert(' Gagal! username dan password kurang dari 4 karakter');window.location='register.php';</script>";
        }
    }else{
        echo "<script>alert(' Form tidak boleh kosong atau hanya di isi spasi');window.location='register.php';</script>";
    }    
}
?>
