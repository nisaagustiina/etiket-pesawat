<!-- <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Ticket</li>
      </ol>
    </section> -->

    <?php
    include '../koneksi.php';
    
    ?>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Data Ticket Pesawat</h3>
                    <!-- <a href="index_admin.php?p=tiket-input"><i class="fa fa-plus-circle"></i> <span>Tambah data</span></a> -->
                </div>
                <div class="box-body">
                    <!-- <a href="pages/cetak-tiket.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a><br><br> -->
                <table border=1 cellspacing=0 cellpadding=10 id="pay" class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Kode Maskapai</th>
                    <th>Nama Maskapai</th>
                    <th>Kelas Maskapai</th>
                    <th>Tujuan</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
                <?php
                $no=1;
                $sql = mysqli_query($con, "SELECT * FROM tiket INNER JOIN maskapai ON maskapai.id_maskapai=tiket.id_maskapai INNER JOIN tujuan ON tujuan.id_tujuan=tiket.id_tujuan");
                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['kd_maskapai'];?></td>
                    <td><?= $data['nama_maskapai'];?></td>
                    <td><?= $data['kelas_maskapai'];?></td>
                    <td><?= $data['nama_tujuan'];?></td>
                    <td><?= $data['harga'];?></td>
                    <td><?= $data['stok'];?></td>
                    
                </tr>
                <?php
                $no++;
                } ?>

                </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    window.print();
</script>