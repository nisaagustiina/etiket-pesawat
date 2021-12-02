<?php
$id = $_SESSION['user'];
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <section class="content">
        <?php
        $sql = mysqli_query($con, "SELECT * FROM login WHERE username='$id'");
        $data = mysqli_fetch_array($sql);
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Profile</h3>
                        <a href="index_cust.php?p=pcust-edit"><i class="fa fa-pencil-square"></i> <span>Edit</span></a>
                    </div>
                    <div class="box-body">
                        <p>Username : <?= $_SESSION['user'];?></p>
                        <p>Nama : <?= $data['nama'];?></p>
                        <p>Alamat : <?= $data['alamat'];?></p>
                        <p>No. Telp : <?= $data['no_tlp'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>