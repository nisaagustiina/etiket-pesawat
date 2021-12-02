<?php
$id = $_SESSION['user'];
$sql = mysqli_query($con, "SELECT * FROM login WHERE username='$id'");
$data = mysqli_fetch_array($sql);
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Profile Edit</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Profile</h3>
                    </div>
                    <form class="form-horizontal" action="proses/pcust-edit-proses.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">User</label>
                                <div class="col-sm-9">
                                <input readonly=""  name="user" type="text" class="form-control"  id="" value="<?= $_SESSION['user']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Nama </label>
                                <div class="col-sm-9">
                                <input name="nama" type="text" class="form-control" id="" value="<?= $data['nama']?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Alamat </label>
                                <div class="col-sm-9">
                                <input name="alamat" type="text" class="form-control" id="" value="<?= $data['alamat']?>"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">No. Telp </label>
                                <div class="col-sm-9">
                                <input name="no_tlp" type="text" class="form-control" id="" value="<?= $data['no_tlp']?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10"><input type="submit" value="Simpan" name="simpan" class="btn btn-info pull-right" id="" onclick="return confirm ('Apakah yakin akan menyimpan data ini?')" ></div>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>