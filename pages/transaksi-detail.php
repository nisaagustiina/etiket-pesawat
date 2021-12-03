<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Riwayat Pesanan</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Data Riwayat Pemesanan Tiket</h3>
                    <div align="right">
                     <a href="pages/cetak-transaksi.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a>
                     </div>
                </div>
                <div class="box-body">
                <table id="tabel" class="table table-responsive table-bordered table-striped">
                    <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>Tujuan</th>
                    <th>Kode Maskapai</th>
                    <th>Nama Maskapai</th>
                    <th>Kelas Maskapai</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                $sql = mysqli_query($con, "SELECT * FROM pembelian  INNER JOIN login ON login.id=pembelian.id_login INNER JOIN tiket ON tiket.id_tiket=pembelian.id_tiket INNER JOIN maskapai ON maskapai.id_maskapai=tiket.id_maskapai INNER JOIN tujuan ON tujuan.id_tujuan=tiket.id_tujuan");
                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['nama'];?></td>
                    <td><?= $data['alamat'];?></td>
                    <td><?= $data['no_tlp'];?></td>
                    <td><?= $data['nama_tujuan'];?></td>
                    <td><?= $data['kd_maskapai'];?></td>
                    <td><?= $data['nama_maskapai'];?></td>
                    <td><?= $data['kelas_maskapai'];?></td>
                    <td><?= $data['tanggal'];?></td>
                    <td><?= $data['jumlah'];?></td>
                    <td><?= $data['total'];?></td>
                    
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