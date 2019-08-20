<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/pendidikan.php";
     
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
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li class="active">File Not Found</li>
                      </ul>
                      
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
                  "aaSorting": [[ 0, "asc" ]]
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
	  $nip = $_GET['nip'];
	  ?>
	  <form action="<?php echo"$aksi?r=pendidikan&act=baru"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="#">Data Pendidikan</a></li>
                          <li class="active">Tambah Data Pendidikan</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pendidikan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">								  
							      <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nip</label>
                                      <div class="col-lg-3">
                                              <input type="hidden" class="form-control" placeholder="Nip" name="nip" 
											  value="<?php echo $nip; ?>" required>
											  <input type="text" class="form-control" placeholder="Niptanpahidden" name="nip" 
											  value="<?php echo $nip; ?>" readonly>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tingkatan Pendidikan</label>
                                      <div class="col-lg-2">
                                           <select name='tingkatan' class='form-control m-bot15'>
										   <option value='SD'>SD</option>
										   <option value='SMP'>SMP</option>
										   <option value='SMA'>SMA</option>
										   <option value='Diploma I'>Diploma I</option>
										   <option value='Diploma III'>Diploma III</option>
										   <option value='S1'>S1</option>
										   <option value='S2'>S2</option>
										   <option value='S3'>S3</option>
										   </select> 
                                      </div>
                                  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Sekolah / Perguruan Tinggi</label>
                                      <div class="col-lg-5">
                                              <input type="text" class="form-control" placeholder="Sekolah / Perguruan Tinggi" name="nama_sekolah"
											  value="" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Jurusan</label>
                                      <div class="col-lg-5">
                                              <input type="text" class="form-control" placeholder="jurusan" name="jurusan"
											  value="" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal Masuk</label>
                                      <div class="col-lg-2">
                                              <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="" name="tanggal_masuk" required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal Selesai</label>
                                      <div class="col-lg-2">
                                          <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="" name="tanggal_selesai" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">IPK / Nilai Kelulusan</label>
                                      <div class="col-lg-1">
                                              <input type="text" class="form-control" placeholder="IPK" name="ipk"
											  value="" required>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </section>
                  </div>
                  
              </div> 
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next  btn btn-success"> Simpan Data Pendidikan</button>&nbsp;
									  </div>
                                  </div>                                                        
                          </div>
                      </section>
                  </div>
				</div>
				
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

<?php case "ubah": ?>

 <!--main content start-->
	  <?php
	  $tgl = date("m/d/Y");
	  $nip = $_GET['nip'];
	  $nama = $_GET['nama'];
	  $id = $_GET['id'];
	  ?>
	  <?php			  
		$qpendidikan=mysql_query("SELECT * FROM peg_pendidikan where md5(id)='$id' ORDER BY id DESC ");
		$rpendidikan=mysql_fetch_array($qpendidikan);
		
	?>
					
	  <form action="<?php echo"$aksi?r=pendidikan&act=ubah"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="#">Data Pendidikan</a></li>
                          <li class="active">Ubah Data Pendidikan</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pendidikan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">								  
							      <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nip</label>
                                      <div class="col-lg-3">
                                              <input type="hidden" class="form-control" placeholder="Nip" name="nip" 
											  value="<?php echo $rpendidikan['nip']; ?>" required>
                                              <input type="hidden" class="form-control" placeholder="Nip" name="idpendidikan" 
											  value="<?php echo $rpendidikan['id']; ?>" required>
											  <input type="text" class="form-control" placeholder="Niptanpahidden" name="nip" 
											  value="<?php echo $rpendidikan['nip']; ?>" readonly>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tingkatan Pendidikan</label>
                                      <div class="col-lg-2">
                                           <select name='tingkatan' class='form-control m-bot15'>
										   <option value='<?php echo $rpendidikan['tingkatan']; ?>'><?php echo $rpendidikan['tingkatan']; ?></option>
										   <option value='SD'>SD</option>
										   <option value='SMP'>SMP</option>
										   <option value='SMA'>SMA</option>
										   <option value='Diploma I'>Diploma I</option>
										   <option value='Diploma III'>Diploma III</option>
										   <option value='S1'>S1</option>
										   <option value='S2'>S2</option>
										   <option value='S3'>S3</option>
										   </select> 
                                      </div>
                                  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Sekolah / Perguruan Tinggi</label>
                                      <div class="col-lg-5">
                                              <input type="text" class="form-control" placeholder="Sekolah / Perguruan Tinggi" name="nama_sekolah"
											  value="<?php echo $rpendidikan['nama_sekolah']; ?>" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Jurusan</label>
                                      <div class="col-lg-5">
                                              <input type="text" class="form-control" placeholder="jurusan" name="jurusan"
											  value="<?php echo $rpendidikan['jurusan']; ?>" >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal Masuk</label>
                                      <div class="col-lg-2">
                                              <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="<?php echo $rpendidikan['tanggal_masuk']; ?>" name="tanggal_masuk" required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal Selesai</label>
                                      <div class="col-lg-2">
                                          <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="<?php echo $rpendidikan['tanggal_selesai']; ?>" name="tanggal_selesai" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">IPK / Nilai Kelulusan</label>
                                      <div class="col-lg-1">
                                              <input type="text" class="form-control" placeholder="IPK" name="ipk"
											  value="<?php echo $rpendidikan['ipk']; ?>" required>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </section>
                  </div>
                  
              </div> 
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next  btn btn-success"> Simpan Data Pendidikan</button>&nbsp;
									  </div>
                                  </div>                                                        
                          </div>
                      </section>
                  </div>
				</div>
				
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