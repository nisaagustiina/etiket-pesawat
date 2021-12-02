
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Customers</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Data Customers</h3>
                    <div align="right">
                    <a href="pages/cetak-cust.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a>
                    </div>
                </div>
                <div class="box-body">
                <table id="tabel" class="table table-responsive table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama customer</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                $sql = mysqli_query($con, "SELECT * FROM login INNER JOIN pembelian ON pembelian.id_login=login.id WHERE level='2'");
                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['username'];?></td>
                    <td><?= $data['nama'];?></td>
                    <td><?= $data['alamat'];?></td>
                    <td><?= $data['no_tlp'];?></td>
                </tr>
                <?php
                $no++;
                } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </section>
</div>


<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> -->
<link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#tabel').DataTable();
});
</script>