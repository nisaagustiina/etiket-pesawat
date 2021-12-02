<div class="content-wrapper">
    <!-- <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Customers</li>
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
                    <h3 class="box-title">Data Customers</h3>
                </div>
                <div class="box-body">
                <table  border=1 cellspacing=0 cellpadding=10 class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Nama customer</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                </tr>
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

                </table>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    window.print();
</script>