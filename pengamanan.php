<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/pengamanan.php";
     
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
						  <?php							
                                echo"Laporan Bulanan Pengamanan Basan Baran";
						  ?>
						  </header>
						  <div class="panel-body">					  
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  if($action == "sukses")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
																					
						  echo"<div class='clearfix'>
                              <div class='btn-group'><a href='?r=pengamanan&act=new'>
                                  <button id='editable-sample_new' class='btn green'>
                                      Add New <i class='fa fa-plus'></i>
                                  </button></a>						  
                              </div>                             
                          </div>"; ?>
						  
                          <div class="space15"></div>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Jumlah Regu</th>
                                          <th>Jumlah Anggota Regu</th>
                                          <th>Pembagian Tugas Regu Jaga</th>
                                          <th>Lokasi Pengamanan</th>
                                          <th>Situasi Dan Kondisi</th>
                                          <th>Tanggal Laporan</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qsurat = mysql_query("SELECT * FROM pengamanan ORDER BY id DESC");									
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;
									$tanggal = tgl_indo($rsurat['tanggal']);
									$tugas_regu = nl2br($rsurat['tugas_regu']);
									echo"
                                      <tr class='gradeX'>
                                          <td>$no</td>
                                          <td>$rsurat[jumlah_regu]</td>
                                          <td>$rsurat[jumlah_anggota_regu]</td>
                                          <td>$tugas_regu</td>
                                          <td>$rsurat[lokasi_pengamanan]</td>
                                          <td class='center'>$rsurat[situasi]</td>
                                          <td class='center hidden-phone'>$tanggal</td>
                                          <td class='center hidden-phone' width='7%'>
										  <a title='Edit' href='?r=pengamanan&act=update&id=$rsurat[id]'>
										  <button class='btn btn-success btn-xs'><i class='fa fa-edit'></i></button>
										  </a>"; ?>
										  
								<a title="Hapus" 
								href="<?php echo"$aksi?r=pengamanan&id=$rsurat[id]&act=hapus"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i></button></td></a>
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
									  
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>Jumlah Regu</th>
                                          <th>Jumlah Anggota Regu</th>
                                          <th>Pembagian Tugas Regu Jaga</th>
                                          <th>Lokasi Pengamanan</th>
                                          <th>Situasi Dan Kondisi</th>
                                          <th>Tanggal Laporan</th>
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

<?php case "new": ?>

<!--main content start-->
	  <?php
	  $tahun = date("Y");
	  $tgl = date("m/d/Y");
	  ?>
	  <form action="<?php echo"$aksi?r=pengamanan&act=new"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Laporan Bulanan Pengamanan Basan Baran
                          </header>
					      <div class="panel-body">
                              <div class="form-horizontal">
							  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Tanggal</label>
									  <div class="col-lg-4">
									  <div class="input-group input-large" data-date="2013/07/13" data-date-format="yyyy/mm/dd">
                                      <input type="text" class="form-control dpd1" name="tanggal" value="<?php echo"$tgl"; ?>">
									  </div>
                                      </div>                                  
								  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jumlah Regu</label>
                                      <div class="col-lg-4">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control" placeholder="Jumlah Regu" name="jumlah_regu"
											  value="">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jumlah Anggota Regu</label>
                                      <div class="col-lg-4">
                                          <div class="iconic-input">
                                              <i class="fa fa-group"></i>
                                              <input type="text" class="form-control" placeholder="Jumlah Anggota Regu" name="jumlah_anggota_regu"
											  value="">   
										   </div>                                    
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Pembagian Tugas Regu Jaga</label>
                                      <div class="col-lg-5">
                                           <textarea class="form-control" rows="4" name="tugas_regu" id="keterangan"></textarea>
                                      </div>
									  <p class="help-block col-lg-3 col-sm-3"><i>Example: <br>1. Tugas Pertama<br> 2. Tugas Kedua<br> 3. Tugas Ketiga</i></p>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Sarana Pengamanan</label>
                                      <div class="col-lg-5">
                                               <textarea class="form-control" rows="4" name="sarana_pengamanan" id="keterangan"></textarea>
                                      </div>									  
									  <p class="help-block col-lg-3 col-sm-3"><i>Example: <br>1. Sarana Pertama<br> 2. Sarana Kedua<br> 3. Sarana Ketiga</i></p>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Lokasi Pengamanan</label>
                                      <div class="col-lg-4">
                                          <?php 
										  $qkat = mysql_query("SELECT kategori FROM kategori ORDER BY kategori ASC");
										  echo"<select name='lokasi_pengamanan' class='form-control input-sm m-bot10'>";
										  while($rkat=mysql_fetch_array($qkat))
										  { 							                                      
											echo"<option value='Gudang $rkat[kategori]'>Gudang $rkat[kategori]</option>";
										  }  
										  echo"</select>";
									  ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Situasi Dan Kondisi</label>
                                      <div class="col-lg-4">
                                          <div class="iconic-input">
                                              <i class="fa fa-puzzle-piece"></i>
                                              <input type="text" class="form-control" placeholder="Exp : Aman" name="situasi"
											  value="" required>
                                          </div>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Keterangan</label>
                                      <div class="col-lg-7">
                                      <textarea class="form-control" rows="4" name="ket" id="keterangan"></textarea>
                                       </div>
                                  </div>
                          </div></div>
                      </section>
                  </div>
                 </div>  
				 <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next  btn btn-info"> Submit Pengamanan</button>&nbsp;
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

<?php case "update": ?>

<!--main content start-->
	  <?php
	  
	  $id = $_GET['id'];	
	  $qedit_pengamanan = mysql_query("SELECT * FROM pengamanan where id ='$id' ");
	  $redit_pengamanan = mysql_fetch_array($qedit_pengamanan);
	  
	  $tgl = tgl_mdy($redit_pengamanan['tanggal']);
	  $keterangan = ($redit_pengamanan['ket']);
	  $tugas_regu = ($redit_pengamanan['tugas_regu']);
	  $sarana_pengamanan = ($redit_pengamanan['sarana_pengamanan']);
	  ?>
	  <form action="<?php echo"$aksi?r=pengamanan&act=update"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Laporan Bulanan Pengamanan Basan Baran
                          </header>
					      <div class="panel-body">
                              <div class="form-horizontal">
							  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Tanggal</label>
									  <div class="col-lg-4">
									  <div class="input-group input-large" data-date="2013/07/13" data-date-format="yyyy/mm/dd">
                                      <input type="text" class="form-control dpd1" name="tanggal" value="<?php echo"$tgl"; ?>">
									  </div>
                                      </div>                                  
								  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jumlah Regu</label>
                                      <div class="col-lg-4">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control" placeholder="Jumlah Regu" name="jumlah_regu"
											  value="<?php echo"$redit_pengamanan[jumlah_regu]"; ?>">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jumlah Anggota Regu</label>
                                      <div class="col-lg-4">
                                          <div class="iconic-input">
                                              <i class="fa fa-group"></i>
                                              <input type="text" class="form-control" placeholder="Jumlah Anggota Regu" name="jumlah_anggota_regu"
											  value="<?php echo"$redit_pengamanan[jumlah_anggota_regu]"; ?>">   
										   </div>                                    
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Pembagian Tugas Regu Jaga</label>
                                      <div class="col-lg-5">
                                           <textarea class="form-control" rows="4" name="tugas_regu" id="keterangan"><?php echo"$tugas_regu"; ?></textarea>
                                      </div>
									  <p class="help-block col-lg-3 col-sm-3"><i>Example: <br>1. Tugas Pertama<br> 2. Tugas Kedua<br> 3. Tugas Ketiga</i></p>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Sarana Pengamanan</label>
                                      <div class="col-lg-5">
                                               <textarea class="form-control" rows="4" name="sarana_pengamanan" id="keterangan"><?php echo"$sarana_pengamanan"; ?></textarea>
                                      </div>									  
									  <p class="help-block col-lg-3 col-sm-3"><i>Example: <br>1. Sarana Pertama<br> 2. Sarana Kedua<br> 3. Sarana Ketiga</i></p>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Lokasi Pengamanan</label>
                                      <div class="col-lg-4">
                                          <?php 
										  $qkat = mysql_query("SELECT kategori FROM kategori ORDER BY kategori ASC");
										  echo"<select name='lokasi_pengamanan' class='form-control input-sm m-bot10'>";
										  echo"<option value='$redit_pengamanan[lokasi_pengamanan]'>$redit_pengamanan[lokasi_pengamanan]</option>";
										  while($rkat=mysql_fetch_array($qkat))
										  { 							                                      
											echo"<option value='Gudang $rkat[kategori]'>Gudang $rkat[kategori]</option>";
										  }  
										  echo"</select>";
									  ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Situasi Dan Kondisi</label>
                                      <div class="col-lg-4">
                                          <div class="iconic-input">
                                              <i class="fa fa-puzzle-piece"></i>
                                              <input type="text" class="form-control" placeholder="Jabatan" name="situasi"
											  value="<?php echo"$situasi"; ?>">
                                          </div>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Keterangan</label>
                                      <div class="col-lg-7">
                                      <textarea class="form-control" rows="4" name="ket" id="keterangan"><?php echo"$keterangan"; ?></textarea>
                                       </div>
                                  </div>
                          </div></div>
                      </section>
                  </div>
                 </div>  
				 <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next  btn btn-info"> Update Pengamanan</button>&nbsp;
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