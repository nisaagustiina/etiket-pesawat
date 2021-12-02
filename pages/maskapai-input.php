<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Maskapai Input</li>
      </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tambah Maskapai</h3>
                        <button class="btn btn-xs btn-grey"><a href="index_admin.php?p=maskapai"><i class=" fa fa-undo"></i></a></button>
                    </div>
                    <form class="form-horizontal" action="proses/maskapai-input-proses.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Kode Maskapai</label>
                                <div class="col-sm-9">
                                <input  name="kd_maskapai" type="text" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Nama Maskapai </label>
                                <div class="col-sm-9">
                                <input name="nama_maskapai" type="text" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Kelas Maskapai </label>
                                <div class="col-sm-9">
                                <input name="kelas_maskapai" type="text" class="form-control" id="" >
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