<?php
session_start();
include 'koneksi.php';
if($_SESSION['level']==""){
		header("location:index.php");
	}elseif($_SESSION['level']=="1"){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM INFORMASI E-TIKET PESAWAT</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="#" class="logo">
    <span class="logo-mini"><i class="fa fa-plane"></i></span>
      <span class="logo-lg"><b>E-tiket Pesawat</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li>
          <a href="index_admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index_admin.php?p=customer">
            <i class="fa fa-users"></i>
            <span>Customers</span>
          </a>
        <li>
          <a href="index_admin.php?p=maskapai">
            <i class="fa fa-plane"></i>
            <span>Maskapai</span>
          </a>
        </li>
        <li>
          <a href="index_admin.php?p=tujuan">
            <i class="fa fa-map-marker"></i>
            <span>Destination</span>
          </a>
        </li>
        <li>
          <a href="index_admin.php?p=tiket">
            <i class="fa fa-ticket"></i>
            <span>Ticket</span>
          </a>
        </li>
        <li>
          <a href="index_admin.php?p=payment">
            <i class="fa fa-credit-card"></i> <span>Payment</span>
          </a>
        </li>
        <li>
          <a href="index_admin.php?p=transaksi-detail">
            <i class="fa fa-shopping-cart"></i> <span>Transaction</span>
          </a>
        </li>
        <li>
          <a href="logout.php">
          <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
  </aside>

    <?php
      $pages_dir='pages';
      if(!empty($_GET['p'])){
        $pages=scandir($pages_dir,0);
        unset($pages[0],$pages[1]);
        $p=$_GET['p'];
        if(in_array($p.'.php',$pages)){
          include($pages_dir.'/'.$p.'.php');
        }else{
          echo 'Halaman tidak ditemukan';
        }
      }else{
        include($pages_dir.'/home.php');
      }
    ?>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.1.0
    </div>
    <strong>Copyright &copy; 2021 <a href="">Nisa Agustina</a>.</strong> All rights
    reserved.
  </footer>

  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- <script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="assets/bower_components/fastclick/lib/fastclick.js"></script> -->
  <script src="assets/dist/js/adminlte.min.js"></script>
 
</body>
</html>
<?php } else{
  header("location:index.php");
} ?>