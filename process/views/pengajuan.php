<!DOCTYPE html>
<html>
<head>
  <?php 
    include "../controller/koneksi.php"; 
    include "../bagan/head.html" ;
    session_start(); 
  ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include "../bagan/header.html" ; ?>
  <?php include "../bagan/menukiri.php" ; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Welcome <?php echo $_SESSION['nama_lengkap'];?> 
        <small> <?php echo $_SESSION['username'];?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Input Data Diri</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        
        <div class="col-md-12">
          <!-- quick email widget -->
          <div class="box box-info">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title"><b>Keterangan : </b></h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <ol>
                <li>SKU biasanya digunakan sebagai salah satu persyaratan administrasi untuk mengajukan pinjaman ke bank atau lembaga keuangan lainnya misalnya untuk keperluan mengembangkan usaha</li>
                <li>Sebelum mengajukan SKU, pastikan Anda menyiapkan semua dokumen yang diperlukan untuk mengajukan SKU. Masa berlaku SKU adalah 3 bulan dan setelah masa berlaku habis, harus melakukan pengajuan ulang</li>
                <li>Sebelum mengajukan SKU, pastikan tempat usaha Anda berada di wilayah Kelurahan Karawaci Baru dan bukan berada di Tanah Fasilitas Sosial dan Fasilitas Umum Kota Tangerang serta tidak berada di atas saluran air</li>
              </ol>
            </div>
             
                      
            <div class="box-footer clearfix">
            <?php
                $sql1 = mysql_query("SELECT * FROM dokumen
                                      WHERE id_user = '" . $_SESSION['id_user'] . "' ")or die(mysql_error());

                $data = mysql_fetch_array($sql1);
                if($data['ktp'] != ""){
              ?>
                <div class="col-xs-2">
                
                  <input type="button" class="btn btn-block btn-primary" name="tambah" value="Ajukan Usaha Baru" onclick="window.location='pengajuan_tambah.php'">
                </div>
              <?php } else { ?>
                <div class="col-xs-5">
                  <input type="button" class="btn btn-block btn-warning" name="tambah" value="Harap Lengkapi Data Diri dan Dokumen">
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Usaha</th>
                    <th>Alamat</th>
                    <th>Masa Berlaku</th>
                    <th>Alasan Pengajuan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <?php //'
                    $sql = mysql_query("select * from pengajuan where username ='" . $_SESSION['username'] . "'");
                    $no = 1;
                    while($r = mysql_fetch_array($sql)){
                ?>
                <tbody>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $r['nama_usaha']; ?></td>
                    <td><?php echo $r['alamat_usaha'] ?></td>
                    <td><?php echo $r['masa_berlaku'] ?></td>
                    <td><?php echo $r['alasan'] ?></td>
                    <td >Belum Terkonfirmasi</td>
                    <td>
                        <div class="btn-group">
                            <input type="button" class="btn btn-default" name="submit" value="Ajukan lagi" onclick="window.location='datadiri_detail.php?username=<?=$r['username'];?>' ">
                        </div>
                        <div class="btn-group">
                            <input type="button" class="btn btn-danger" name="hapus" value="Hapus SKU" onclick="window.location='../controller/hapusSKU.php?tid=<?=$r['id_pengajuan'];?>' ">
                        </div>
                    </td>
                    <td></td>
                  </tr>
                  <?php $no++; } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col -->
        
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<?php include "../bagan/js.html" ; ?>
</body>
</html>
