<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/print.php";
     
	 switch($_GET[act]){

// Tampil konten
      default:     
?>

<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              No Content
                          </header>                          
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>

  </body>
</html>

<?php break;  ?>
<?php case "ba_serah_terima": ?>

<?php
  $nomor_surat = $_GET['surat'];
  $id = $_GET['id'];
?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-md-12">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Berita Acara Serah Terima Benda Sitaan / Barang Rampasan Negara
                          </header>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>                                          
                                          <div class="task-title">
                                              <span class="task-title-sp">Berita Acara Serah Terima</span>
                                              <span class="badge badge-sm label-success">Model BA. 1</span>
                                              <div class="pull-right hidden-phone">
                                            <a href="<?php echo"berita_acara_serah_terima.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
											<button class="btn btn-success btn-xs fa fa-print"> Print</button></a>
											<a href="<?php echo"pdf/berita_acara_serah_terima.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                            <button class="btn btn-danger btn-xs fa fa-angle-double-down"> Download PDF</button></a>
											
                                              </div>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Berita Acara Penelitian </span>
                                              <span class="badge badge-sm label-danger">Model BA. 2</span>
                                              <div class="pull-right hidden-phone">
                                              <a href="<?php echo"berita_acara_penelitian.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
											  <button class="btn btn-success btn-xs fa fa-print"> Print</button></a>
											  <a href="<?php echo"pdf/berita_acara_penelitian.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-danger btn-xs fa fa-angle-double-down"> Download PDF</button></a>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Lampiran Berita Acara Penelitian </span>
                                              <div class="pull-right hidden-phone">
											   <a href="<?php echo"lampiran_berita_acara.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-success btn-xs fa fa-print"> Print</button></a>
											   <a href="<?php echo"pdf/lampiran_berita_acara.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-danger btn-xs fa fa-angle-double-down"> Download PDF</button></a>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Daftar Barang Bukti </span>
                                              <span class="badge badge-sm label-primary">Lampiran BA.1 - BA.2</span>
                                              <div class="pull-right hidden-phone">
											  <a href="<?php echo"daftar_barang_bukti.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-success btn-xs fa fa-print"> Print</button></a>
											  <a href="<?php echo"pdf/daftar_barang_bukti.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-danger btn-xs fa fa-angle-double-down"> Download PDF</button></a>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Lampiran Barang Bukti</span>
                                              <span class="badge badge-sm label-info">Dokumentasi / Foto</span>
                                              <div class="pull-right hidden-phone">
											  <a href="<?php echo"laporan_dokumentasi.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-success btn-xs fa fa-print"> Print</button></a>
											  <a href="<?php echo"pdf/laporan_dokumentasi.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-danger btn-xs fa fa-angle-double-down"> Download PDF</button></a>
                                              </div>
                                          </div>
                                      </li>
								</ul>
                              </div>
                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="?r=ba_penerimaan&act=baru"><< Tambah baru Berita Serah Terima</a>
                                  <a class="btn btn-default btn-sm pull-right" href="?r=ba_penerimaan">Lihat Semua Berita Acara >></a>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
	  <section id="main-content">
          <section class="wrapper">
		  </br>
		  </section>
	  </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/tasks.js" type="text/javascript"></script>




    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>

  </body>
</html>
<?php break;  ?>

<?php case "ba_penyerahan": ?>

<?php
  $nomor_surat = $_GET['surat'];
  $id = $_GET['id'];
?>
 <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-md-12">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Berita Penyerahan / Pengembalian Benda Sitaan / Barang Rampasan Negara
                          </header>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>                                          
                                          <div class="task-title">
                                              <span class="task-title-sp">Berita Acara Penyerahan / Pengembalian</span>
                                              <span class="badge badge-sm label-success"></span>
                                              <div class="pull-right hidden-phone">
                                            <a href="<?php echo"berita_acara_penyerahan_pengembalian.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
											<button class="btn btn-success btn-xs fa fa-print"> Print</button></a>
											<a href="<?php echo"pdf/ba_penyerahan_pengembalian.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                            <button class="btn btn-danger btn-xs fa fa-angle-double-down"> Download PDF</button></a>
                                              </div>
                                          </div>
                                      </li>
									  <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Lampiran Barang Bukti</span>
                                              <span class="badge badge-sm label-info">Dokumentasi / Foto</span>
                                              <div class="pull-right hidden-phone">
											  <a href="<?php echo"laporan_dokumentasi.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-success btn-xs fa fa-print"> Print</button></a>
											  <a href="<?php echo"pdf/laporan_dokumentasi.php?surat=$nomor_surat&id=$id"; ?>" target="_blank">
                                                  <button class="btn btn-danger btn-xs fa fa-angle-double-down"> Download PDF</button></a>
                                              </div>
                                          </div>
                                      </li>                                 
								</ul>
                              </div>
                              <div class=" add-task-row">
                                  <a class="btn btn-success btn-sm pull-left" href="?r=ba_penyerahan&act=baru"><< Tambah baru Berita Penyerahan / Pengembalian</a>
                                  <a class="btn btn-default btn-sm pull-right" href="?r=ba_penyerahan">Lihat Semua Berita Acara >></a>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
	  <section id="main-content">
          <section class="wrapper">
		  </br>
		  </section>
	  </section>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="js/respond.min.js" ></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>


    <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/tasks.js" type="text/javascript"></script>




    <script>
      jQuery(document).ready(function() {
          TaskList.initTaskWidget();
      });

      $(function() {
          $( "#sortable" ).sortable();
          $( "#sortable" ).disableSelection();
      });

    </script>

  </body>
</html>
<?php break;  ?>

	 <?php } ?>