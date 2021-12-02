<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Transaction</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Data Penjualan Tiket Pesawat</h3><br><br>
                </div>
                <div class="box-body">
                <table id="pay" class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Tujuan</th>
                    <th>Kode Maskapai</th>
                    <th>Tanggal Keberangkatan</th>
                    <th><i class="fa fa-gear"></i></th>
                </tr>
                <?php
                $no=1;
                $sql = mysqli_query($con, "SELECT * FROM pembelian INNER JOIN login ON login.id=pembelian.id_login INNER JOIN tiket ON tiket.id_tiket=pembelian.id_tiket INNER JOIN maskapai ON maskapai.id_maskapai=tiket.id_maskapai INNER JOIN tujuan ON tujuan.id_tujuan=tiket.id_tujuan");  
                while($data=mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><?= $no;?></td>
                    <td><?= $data['username'];?></td>
                    <td><?= $data['nama_tujuan'];?></td>
                    <td><?= $data['kd_maskapai'];?></td>
                    <td><?= $data['tanggal'];?></td>
                    <td><button class="btn btn-sm btn-grey"><a href="index_admin.php?p=transaksi-detail&id=<?=$data['id_pembelian'];?>">Detail</s></button> </td>
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