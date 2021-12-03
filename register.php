<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registrasi E-tiket Pesawat</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo"> E-tiket Pesawat</div>
  <div class="login-box-body">
    <p class="login-box-msg">Register a New Account</p>
    <?php if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagal"){
        echo "
        <div class=\"row\">
            <div class=\"col-lg-12 col-lg-offset-0\">
              <div class=\"alert alert-danger alert-dismissable\" role=\"alert\">
                <a href=\"\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                <strong>Login Gagal</strong> <br>Username/Password salah
              </div>
            </div>
        </div>";
      }
      }?>
    <form action="cek_login.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="user" class="form-control" placeholder="Username" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
      <div class="row">
      <div class="col-xs-8">
      <a href="index.php" >Kembali </a>
      </div>
        <div class="col-xs-4">
          <input type="submit" name="simpan" class="btn btn-primary btn-block btn-flat" value="Submit">
        </div>
      </div>
      <br/>
    </form>
  </div>
</div>
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
