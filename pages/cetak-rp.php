<?php 
$id=$_GET['id'];
include '../koneksi.php';

?>

    <!-- <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Cetak Kartu Pemesanan Tiket</h3>
                    </div>
                    <div class="card-body"> -->
                    <!-- <table border=1 cellpadding=5 cellspacing=0 id="example1" class="table table-bordered table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Lengkap</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Nama Ibu</th>
                            <th>Nama Ayah</th>
                            <th>Asal Sekolah</th>
                            <th>Nilai Ijazah</th>
                            <th>File Ijazah</th>
                        </tr> 
                        <table border=1 cellpadding=5 cellspacing=0 width="50%">
                           <tr>
                            <td align="center">Kartu PPDB Online<br>SMP Negeri 1 Pasirjambu<br>Tahun Ajaran 2022/2023</td>
                          </tr>
                          <tr>
                            <td> -->
                            <h3 class="card-title">Cetak Kartu Pemesanan Tiket</h3>
                        <?php
                        $sql = mysqli_query($con, "SELECT * FROM pembelian INNER JOIN login ON login.id=pembelian.id_login INNER JOIN tiket ON tiket.id_tiket=pembelian.id_tiket INNER JOIN maskapai ON maskapai.id_maskapai=tiket.id_maskapai INNER JOIN tujuan ON tujuan.id_tujuan=tiket.id_tujuan  WHERE id_pembelian='$id'");
                        while($data=mysqli_fetch_array($sql)){
                   
                        
                            echo '<p>No Pembelian : '. $data['id_pembelian'].'</p>
                            <p>Nama : '.$data['nama'].'</p>
                            <p>Alamat : '. $data['alamat'].'</p>
                            <p>No Telp : '. $data['no_tlp'].'</p>
                            <p>Tujuan : '. $data['nama_tujuan'].'</p>
                            <p>Kode Maskapai : '. $data['kd_maskapai'].'</p>
                            <p>Nama Maskapai : '. $data['nama_maskapai'].'</p>
                            <p>Kelas Maskapai : '. $data['kelas_maskapai'].'</p>
                            <p>Tanggal Keberangkatan : '. $data['tanggal'].'</p>
                            <p>Jumlah Penumpang : '. $data['jumlah'].'</p>
                            <p>Total Pembayaran : Rp.  '. $data['total'].'</p>';
                       
                        }
                        ?>
                        <!-- </td>
                      </tr>
                        </table> -->
<!--                        
        </div>
      </div>
    </section>
  </div> -->

<script>
 window.print();
</script>
