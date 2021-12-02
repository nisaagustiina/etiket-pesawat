<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
      <div class="col-xs-12">
          <div class="callout callout-info">
              <h3 class="text-center">Hi, <?=$_SESSION['user']?>!<br>Selamat Datang di Sistem Informasi Pemesanan Tiket Pesawat<br>
              <br><br></h3>
          </div>
      
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
            <h4>Customers</h4>
             <?php
                $q=mysqli_query($con, "SELECT * FROM login INNER JOIN pembelian ON pembelian.id_login=login.id WHERE level='2'");
                $data=mysqli_num_rows($q);
                echo $data; ?><br>
              <br><br>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="index_admin.php?p=customer" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h4>Maskapai</h4>
              <?php
                $q=mysqli_query($con, "SELECT * FROM maskapai");
                $data=mysqli_num_rows($q);
                echo $data; ?><br>
              <br><br>
            </div>
            <div class="icon">
              <i class="fa fa-plane"></i>
            </div>
            <a href="index_admin.php?p=maskapai" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-teal">
            <div class="inner">
              <h4>Ticket</h4>
              <?php
                $q=mysqli_query($con, "SELECT * FROM tiket");
                $data=mysqli_num_rows($q);
                echo $data; ?><br>
              <br><br>
            </div>
            <div class="icon">
              <i class="fa fa-ticket"></i>
            </div>
            <a href="index_admin.php?p=tiket" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-primary">
            <div class="inner">
              <h4>Transaction</h4>
              <?php
                $q=mysqli_query($con, "SELECT * FROM pembelian");
                $data=mysqli_num_rows($q);
                echo $data; ?><br>
              <br><br>
            </div>
            <div class="icon">
              <i class="fa fa-shopping-cart"><br></i><br><br><br><br><br><br><br>
            </div>
            <a href="index_admin.php?p=transaksi-detail" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    </div>
</section>
</div>