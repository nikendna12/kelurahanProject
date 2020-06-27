<aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <?php include "../controller/koneksi.php";

          if(($_SESSION['level']) == 1){
      ?>
      
      <li><a href="datadiri.php"><i class="fa fa-files-o"></i> <span> Profil Diri</span></a></li>
      <li><a href="unggah.php"><i class="fa fa-files-o"></i> <span> Unggah Dokumen</span></a></li>
      <li><a href="status.php"><i class="fa fa-files-o"></i> <span> Lihat Status</span></a></li>
      <!-- <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Upload Dokumen</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> KTP</a></li>
          <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> KK</a></li>
          </ul>
      </li>
      <li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      
      <?php } ?>

      <li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>