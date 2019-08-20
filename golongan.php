<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/golongan.php";
     
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
                              Management Golongan
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Berhasil Di Proses.</font></center></p>"; }
								  if($action == "hapus")
								  { echo"<p><center><font color='#009900'>Data Berhasil Di Hapus</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								 
								echo"<div class='clearfix'>
										  <div class='btn-group'><a href='?r=golongan&act=baru'>
											  <button id='editable-sample_new' class='btn green'>
												  Add New <i class='fa fa-plus'></i>
											  </button></a>
										  </div>                             
									  </div>"; 
						  
						  ?>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Golongan</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qsurat = mysql_query("SELECT * FROM golongan ORDER BY id DESC");
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;		
												  						  
									echo"
                                      <tr class='gradeX'>
                                          <td>$no</td>
                                          <td>$rsurat[gol]</td>
                                          <td class='center hidden-phone'>"; ?>
										  
										  <a href="<?php echo"$aksi?r=golongan&id=$rsurat[id]&act=hapus"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs tooltips' data-original-title='Delete'  data-placement='top' 
										  data-toggle='tooltip'><i class='fa fa-trash-o '> Delete</i></button></a></td>
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
									  
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>Golongan</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
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


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 0, "ASC" ]]
              } );
          } );
      </script>
  </body>
</html>

<?php break;  ?>
<?php case "baru": ?>

 <!--main content start-->
	  <?php
	  $tgl = date("m/d/Y");
	  
	  ?>
	  <form action="<?php echo"$aksi?r=golongan&act=baru"; ?>" role="form" method="post" enctype="multipart/form-data" 
	  class="cmxform tasi-form" id="commentForm" >
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Golongan
                          </header>
						  <?php
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Berhasil Di Proses.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								 
						?>						  
                          <div class="panel-body">
                              <div class="form-horizontal">
							     <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Golongan</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-book"></i>
                                              <input type="text" class="form-control" placeholder="Golongan" name="golongan">
                                          </div>
                                      </div>
                                  </div>                           
                              </div>
                          </div>                        
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="btn btn-success">Simpan Pengaturan</button>
									  </div>
                                  </div>                                                        
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section></form>
      <!--main content end-->
      <!--footer start-->
      <?php include"footer.php"; ?>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>
  
  <!--this page plugins-->

  <script type="text/javascript" src="assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

  <!--common script for all pages
    <script src="js/common-scripts.js"></script>-->
    <!--this page  script only-->
    <script src="js/advanced-form-components.js"></script>

  </body>
</html>
<?php break;  ?>

	 <?php } ?>