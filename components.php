<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/components.php";
     
	 switch($_GET[act]){

// Tampil konten
      default:     
?>


 <!--main content start-->
	  <?php
	  $tgl = date("m/d/Y");
	  
	  ?>
	  <form action="<?php echo"$aksi?r=components&act=baru"; ?>" role="form" method="post" enctype="multipart/form-data" 
	  class="cmxform tasi-form" id="commentForm" >
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Pengaturan Pimpinan Rupbasan
                          </header>
						  <?php
								  $action = $_GET['action'];
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Berhasil Di Proses.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								 
						?>
						  <?php 
							$qpihak1 = mysql_query("SELECT * FROM pimpinan where id='1'");
							$rpihak1 = mysql_fetch_array($qpihak1);
							
							if ($rpihak1['atas_nama']== "1" )
							{$chek = "checked=checked"; }else{$chek = " ";}
						  ?>
                          <div class="panel-body">
                              <div class="form-horizontal">
							   <div class="form-group">
										  <div class="col-lg-10">
											  <div class="checkbox">
												  <label>
													  <input type="checkbox" name="checkatasnama" value="default" <?php echo"$chek";?>>
													  Atas Nama ( Klik Disini Untuk Atas Nama Pimpinan )
												  </label>
											  </div>
										</div>
									  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nama Pimpinan</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama_pegawai"
											  value="<?php echo"$rpihak1[nama]"; ?>">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label" for="nip">Nip</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-barcode"></i>
                                              <input type="text" class="form-control" placeholder="Nip" name="nip" 
											  value="<?php echo"$rpihak1[nip]"; ?>">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Pangkat (Gol)</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bookmark"></i>
                                              <input type="text" class="form-control" placeholder="Pangkat (Golongan)" name="pangkat_pegawai"
											  value="<?php echo"$rpihak1[pangkat]"; ?>">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jabatan</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-css3"></i>
                                              <input type="text" class="form-control" placeholder="Jabatan" name="jabatan_pegawai"
											  value="<?php echo"$rpihak1[jabatan]"; ?>">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>                        
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="btn btn-success">Update Pengaturan</button>
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