<div class="content-wrapper">
    <!-- <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Maskapai</li>
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
                    <h3 class="box-title">Data Maskapai Penerbangan</h3>
                </div>
                <div class="box-body">
<!--                     
                <a href="pages/cetak-maskapai.php" target="_blank" class="btn btn-sm btn-info"><i class="fa fa-print"></i> Print</a><br><br> -->
                <table border=1 cellspacing=0 cellpadding=10 class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <td>Kode Maskapai</td>
                    <th>Nama maskapai</th>
                    <th>Kelas Maskapai</th>
                </tr>
                <?php
                $no=1;
                $sql = mysqli_query($con, "SELECT * FROM maskapai");
                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['kd_maskapai'];?></td>
                    <td><?= $data['nama_maskapai'];?></td>
                    <td><?= $data['kelas_maskapai'];?></td>
                    
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