
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Pesan Tiket</li>
      </ol>
    </section>


    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Pesan Tiket</h3>
                    </div>
                    <form class="form-horizontal" action="proses/ambil-data.php" method="post">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">User</label>
                                <div class="col-sm-9">
                                <input name="user" type="text" class="form-control" id="user" value="<?= $_SESSION['user'];?>" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <!-- <label for="" class="col-sm-3 control-label">ID Login</label> -->
                                <div class="col-sm-9">
                                <input name="id" type="hidden" class="form-control" id="id" value="<?= $_SESSION['id'];?>" readonly>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                <input name="nama" type="text" class="form-control" id="user" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Alamat</label>
                                <div class="col-sm-9">
                                <textarea class="form-control" name="alamat" id="" cols="4"> </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">No Telp</label>
                                <div class="col-sm-9">
                                <input name="no_tlp" type="text" class="form-control" id="user" >
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label for="sel1" class="col-sm-3 control-label">Tujuan</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="tujuan" id="tujuan">
                                   <option>--Pilih--</option>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM tujuan");
                                    while($data=mysqli_fetch_array($sql)){
                                        echo '<option value="'.$data['id_tujuan'].'">'.$data['nama_tujuan'].'</option>';
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sel1" class="col-sm-3 control-label">Maskapai</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="maskapai" id="maskapai"  >
                                
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sel1" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9"  >
                                  <input name="id_tiket" type="hidden" class="form-control" id="tiket" readonly>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Tanggal Keberangkatan</label>
                                <div class="col-sm-9">
                                <input name="tanggal" type="date" class="form-control" id="tanggal">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sel1" class="col-sm-3 control-label">Jumlah Penumpang</label>
                                <div class="col-sm-9">
                                <input name="jumlah" type="number" class="form-control" id="jumlah" oninput="calculate()" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sel1" class="col-sm-3 control-label">Harga</label>
                                <div class="col-sm-9"  >
                                  <input name="harga" type="text" class="form-control" id="harga" oninput="calculate()" readonly>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sel1" class="col-sm-3 control-label">Total Pembayaran</label>
                                <div class="col-sm-9">
                                <input name="total" type="text" class="form-control" id="total" oninput="calculate()" readonly>
                                
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Jenis Pembayaran</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="bayar" id="bayar">
                                   <option value="">Cash</option>
                                   <option value="">Credit Card</option>
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-3 control-label">Nama Bank</label>
                                <div class="col-sm-9">
                                <select class="form-control" name="id_bayar" id="nama_bank">
                                    <option value="">--Pilih--</option>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM bayar");
                                    while($data=mysqli_fetch_array($sql)){
                                        echo '<option value="'.$data['id_bayar'].'">'.$data['nama_bank'].'</option>';
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-sm-2 control-label"></label>
                                <div class="col-sm-10"><input type="submit" value="Pesan" name="simpan" class="btn btn-info pull-right" id="" onclick="return confirm('Yakin ingin memesan ini?')" ></div>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

    <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
    
    <script>
    $("#tujuan").change(function(){
        var id_tujuan = $("#tujuan").val();

        $.ajax({
            type: "POST",
            datatype: "html",
            url: "proses/ambil-data.php",
            data: "tujuan="+id_tujuan,
            success: function(response){
                $("#maskapai").html(response);
            }
        });
    });

    $("#maskapai").change(function(){
        var id_maskapai = $("#maskapai").val();
        var id_tujuan = $("#tujuan").val();
        
        $.ajax({
            type: "POST",
            datatype: "json",
            url: "proses/ambil-data.php",
            data: "maskapai="+id_maskapai+"&tujuan="+id_tujuan,
            success: function(response){
                // var json = console.log(response),
                 obj = JSON.parse(response);
                $("#tiket").val(obj.id_tiket);
                $("#harga").val(obj.harga);
            }
        });
    });

    function calculate(){
        var harga = document.getElementById('harga').value;
        var jumlah = document.getElementById('jumlah').value;
        var total = document.getElementById('total');
        var hasil = harga*jumlah;
        total.value = hasil;
    }
</script>