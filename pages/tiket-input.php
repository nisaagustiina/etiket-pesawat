<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Ticket Input</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Tiket</h3>
                        <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=tiket"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <form class="form-horizontal" action="proses/tiket-input-proses.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label"> Maskapai</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="id_maskapai" id="">
                                   <option value="">--Pilih--</option>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM maskapai");
                                    while($data=mysqli_fetch_array($sql)){
                                        echo '<option value="'.$data['id_maskapai'].'">'.$data['kd_maskapai'].' - '.$data['nama_maskapai'].' '.$data['kelas_maskapai'].'</option>';
                                    }
                                    ?>
                                </select>
                                </div>
                             </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Tujuan </label>
                                <div class="col-sm-9">
                                <select class="form-control" name="id_tujuan" id="">
                                   <option value="">--Pilih--</option>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM tujuan ");
                                    while($data=mysqli_fetch_array($sql)){
                                        echo '<option value="'.$data['id_tujuan'].'">'.$data['nama_tujuan'].'</option>';
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Harga </label>
                                <div class="col-sm-9">
                                <input name="harga" type="text" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Stok </label>
                                <div class="col-sm-9">
                                <input name="stok" type="text" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10"><input type="submit" value="Simpan" name="simpan" class="btn btn-info pull-right" id="" ></div>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>