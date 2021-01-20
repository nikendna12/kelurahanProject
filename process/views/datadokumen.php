<!DOCTYPE html>
<html>
<head>
  <?php 
    include "../controller/koneksi.php"; 
    include "../bagan/head.html" ;
    session_start(); 
  ?>
  <!-- <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style> -->
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
        <section class="col-lg-12 connectedSortable">
        <center>
          <div class="panel panel-navy ">
            <div class="color-palette-set">
              <div class="bg-maroon-active color-palette">
                <div class="panel-heading">
                  <h3 class="panel-title">Data Dokumen</h3>
                </div>
              </div>
            </div>
            <div class="panel-body">
              <div class="box"> 
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Nama Lengkap</th>                      
                      <!-- <th>Tanggal Upload</th>                       -->
                      <th>KTP</th>
                      <th>Kartu Keluarga</th>
                      <th>Lokasi Usaha</th>
                      <th>Surat Pengantar</th>
                      <th>Surat Pernyataan</th>
                      <th>Aksi</th>
                    </tr>
                    </thead>
                    <?php
                        $sql = mysql_query("SELECT * FROM user LEFT JOIN dokumen 
                        ON user.id_user=dokumen.id_user WHERE user.status_verifikasi != 0 AND dokumen.verifikasi = 0");
                        $no = 1;
                        while($r = mysql_fetch_array($sql)){
                    ?>
                    
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td style="display:none;"><?php echo $r['id_user']; ?></td>
                      <td><?php echo $r['username']; ?></td>
                      <td><?php echo $r['nama_lengkap']; ?></td>  
                      <td align="center"><button type="button" class="btn btn-primary" data-url="<?= $r['ktp']; ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td align="center"><button type="button" class="btn btn-primary" data-url="<?= $r['kk']; ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td align="center"><button type="button" class="btn btn-primary" data-url="<?= $r['lokusaha']; ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td align="center"><button type="button" class="btn btn-primary" data-url="<?= $r['supengantar']; ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td align="center"><button type="button" class="btn btn-primary" data-url="<?= $r['supernyataan']; ?>" data-toggle="modal" data-target="#modal-default"><i class="fa fa-search"></i></button></td>
                      <td>
                        <div class="modal fade" id="modal-default">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-body">
                                <img id="img-preview" class="img-responsive">
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>  
                        <div class="modal fade" id="modal-yes-<?php echo $r['id_dokumen'] ?>">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-body">
                                <b>Yakin Dokumen sudah sesuai semua ?</b>
                              </div>
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" name="submit" value="Ya, Konfirmasi" onclick="window.location='../controller/dokumenaccept.php?tid=<?php echo $r['id_dokumen'];?>' ">
                                <input type="submit" class="btn btn-default pull-left" value="Close" data-dismiss="modal">
                                
                              </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <div class="modal fade" id="modal-reject">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <form action="../controller/dokumenreject.php?tid=<?php echo $r['id_dokumen'];?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <div class="modal-body">
                                  <b>Silahkan tulis alasan reject</b>
                                  <div class="form-group">
                                    <select class="form-control" name="status_not">
                                      <option value="">-- Pilih alasan reject --</option>
                                      <option value="KTP belum sesuai">KTP belum sesuai</option>
                                      <option value="Kartu Keluarga belum sesuai">Kartu Keluarga belum sesuai</option>
                                      <option value="Foto Lokasi belum sesuai">Foto Lokasi belum sesuai</option>
                                      <option value="Surat Pengantar belum sesuai">Surat Pengantar belum sesuai</option>
                                      <option value="Surat Pernyataan belum sesuai">Surat Pernyataan belum sesuai</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-danger" name="submit">Reject</button>
                                </div>
                              </form>
                            </div>
                            
                            <!-- /.modal-content -->
                          </div>
                          <!-- /.modal-dialog -->
                        </div>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-yes-<?php echo $r['id_dokumen'] ?>"><i class="fa fa-check"></i></button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-reject"><i class="fa fa-close"></i></button>
                      </td>
                    </tr>               
                    <?php $no++; } ?>  
                  </table>
                </div>
                
                  <!-- /.box-body -->
              </div>
           </div>
          </div>
        </center>
        </section>
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
<script>
$('#modal-default').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var imgUrl = button.data('url') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  console.log(imgUrl)
  modal.find('#img-preview').attr('src', '../dist/img/abc/' + imgUrl)
})
</script>
</body>
</html>
