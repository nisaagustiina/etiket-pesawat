<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM tiket INNER JOIN maskapai ON maskapai.id_maskapai=tiket.id_maskapai INNER JOIN tujuan ON tujuan.id_tujuan=tiket.id_tujuan WHERE id_tiket='$id'");
$data=mysqli_fetch_array($sql);
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Ticket Edit</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Tiket</h3>
                        <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=tiket"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <form class="form-horizontal" action="proses/tiket-edit-proses.php" method="post">
                        <div class="box-body">
                        <div class="form-group">
                                <label for="" class="col-sm-3 control-label"> </label>
                                <div class="col-sm-9">
                                <input readonly name="id" type="hidden" class="form-control" id="" value="<?=$data['id_tiket'];?>">
                                </div>
                            </div>
                        <div class="form-group">
                                <label for="" class="col-sm-3 control-label">kode Maskapai </label>
                                <div class="col-sm-9">
                                <input readonly name="id_maskapai" type="text" class="form-control" id="" value="<?=$data['kd_maskapai']?> - <?=$data['nama_maskapai']?> <?=$data['kelas_maskapai']?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Tujuan </label>
                                <div class="col-sm-9">
                                <input readonly name="id_tujuan" type="text" class="form-control" id="" value="<?=$data['nama_tujuan'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Harga </label>
                                <div class="col-sm-9">
                                <input name="harga" type="text" class="form-control" id="" value="<?=$data['harga'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Stok </label>
                                <div class="col-sm-9">
                                <input name="stok" type="text" class="form-control" id="" value="<?=$data['stok'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10"><input type="submit" value="Simpan" name="simpan" class="btn btn-info pull-right" id="" onclick="return confirm ('Apakah yakin akan menyimpan data ini?')"  ></div>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>