<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM tujuan WHERE id_tujuan='$id'");
$data=mysqli_fetch_array($sql);
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Destination Edit</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Destinasi</h3>
                        <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=tujuan"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <form class="form-horizontal" action="proses/tujuan-edit-proses.php" method="post">
                        <div class="box-body">
                        <div class="form-group">
                                <label for="" class="col-sm-3 control-label"> </label>
                                <div class="col-sm-9">
                                <input readonly name="id" type="hidden" class="form-control" id="" value="<?=$data['id_tujuan'];?>">
                                </div>
                        </div>
                        <div class="form-group">
                                <label for="" class="col-sm-3 control-label"> Nama </label>
                                <div class="col-sm-9">
                                <input name="nama_tujuan" type="text" class="form-control" id="" value="<?=$data['nama_tujuan'];?>">
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