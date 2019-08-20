<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/pemeliharaan.php";
     
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
                                echo"Daftar Pemeliharaan Basan Baran";
						  ?>
						  </header>
						  <div class="panel-body">					  
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  $nomor_surat = $_GET['surat'];
								  if($action == "sukses")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }								
								?>
						  
                          <div class="space15"></div>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>No Register</th>
                                          <th>Tanggal</th>
                                          <th>Nama Basan/Baran</th>
                                          <th>Golongan</th>
                                          <th>Intensitas Pemeliharaan</th>
                                          <th>Jenis Kegiatan</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								$no = 0;
								$qsurat = mysql_query("SELECT * FROM trans_gudang where keluar = '0' and hapus ='0' ORDER BY no_registrasi DESC");
																
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;
									$tanggal = tgl_indo($rsurat['tanggal_masuk']);
									$seo = seo_title($rsurat['benda_sitaan']);
									echo"
                                      <tr class='gradeX'>
                                          <td>$no</td>
                                          <td>$rsurat[no_registrasi]</td>
                                          <td>$tanggal</td>
                                          <td>$rsurat[nama_basan]</td>
                                          <td class='center'>$rsurat[golongan]</td>
                                          <td class='center hidden-phone'>$rsurat[intensitas]</td>
                                          <td class='center hidden-phone'>$rsurat[kegiatan]</td>
                                          <td class='center hidden-phone' width='7%'>
										  <a title='Pemeliharaan' href='?r=pemeliharaan&act=update&id=$rsurat[id]&surat=$rsurat[no_registrasi]'>
										  <button class='btn btn-success btn-xs'><i class='fa fa-edit'> Pemeliharaan</i></button>
										  </a>"; 
									  echo"</tr>";									  
									  }
									  ?>
									  
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>No Register</th>
                                          <th>Tanggal</th>
                                          <th>Nama Basan/Baran</th>
                                          <th>Golongan</th>
                                          <th>Intensitas Pemeliharaan</th>
                                          <th>Jenis Kegiatan</th>
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
<?php case "update": ?>

<!--main content start-->
	  <?php
	  $tahun = date("Y");
	  $tgl = date("m/d/Y");
	  $id = $_GET['id'];	
	  $qedit_pemeliharaan = mysql_query("SELECT * FROM trans_gudang where id ='$id' ");
	  $redit_pemeliharaan = mysql_fetch_array($qedit_pemeliharaan);
	  
	  $nomor_surat = $redit_pemeliharaan['no_ba_penelitian'];
	  $nomor_reg = $redit_pemeliharaan['no_registrasi'];
	  $tgl_masuk = tgl_mdy($redit_pemeliharaan['tanggal_masuk']);
	  
	  ?>
	  <form action="<?php echo"$aksi?r=pemeliharaan&act=update"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Laporan Pemeliharaan Basan Baran
                          </header>
					  </section>
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              No. Berita Acara Penelitian
                          </header>
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
									  <?php  
									        echo"<h4>$nomor_surat</h4>";
											echo"<input type='hidden' value='$nomor_surat' name='nomor_surat'>";
											echo"<input type='hidden' value='$redit_pemeliharaan[id]' name='id'>";
									  ?>								      
									  </div>
                                  </div>                                                              
                          </div>
                      </section>
                  </div> 
				  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              No. Registrasi Basan / Baran
                          </header>
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
									  <?php  
									        echo"<h4>$nomor_reg</h4>";
											echo"<input type='hidden' value='$nomor_reg' name='nomor_registrasi'>";
									  ?>								      
									  </div>
                                  </div>                                                              
                          </div>
                      </section>
                  </div>  
				  </div>
              <div class="row">
			       <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Pemeliharaan Basan Baran
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Basan / Baran</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" value="<?php echo"$redit_pemeliharaan[nama_basan]"; ?>"
											  name="nama" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Intensitas Pemeliharaan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" value="<?php echo"$redit_pemeliharaan[intensitas]"; ?>"
											   name="intensitas" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jenis Kegiatan Pemeliharaan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" value="<?php echo"$redit_pemeliharaan[kegiatan]"; ?>"
											   name="kegiatan" required>
                                      </div>
									  </div>
									   
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Bahan Dan Alat Yang Digunakan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" value="<?php echo"$redit_pemeliharaan[alat]"; ?>"
											  name="alat" required>
                                      </div>
                                  </div>
								  <div class="form-group">
								  <label  class="col-lg-3 col-sm-3 control-label">Kondisi Saat Ini</label>
								  <div class="col-lg-9">
									 <select name="kondisi_saat_ini" class="form-control input-sm m-bot15">
								<?php echo"<option value='$redit_pemeliharaan[kondisi_saat_ini]'>$redit_pemeliharaan[kondisi_saat_ini]</option>"; ?>
									 <option value="Baik">Baik</option>
									 <option value="Rusak - Sedang">Rusak - Sedang</option>
									 <option value="Rusak - Berat">Rusak - Berat</option>
									 </select>
										 
								  </div>
								  </div>
                              </div>

                          </div>
                      </section>
                  </div>
                 
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Gudang
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
                                   <div class="form-group">
								   								   
								   <label  class="col-lg-3 col-sm-3 control-label">Tindak Pidana</label>
                                      <div class="col-lg-9">
									  <?php 
										  $qhukum = mysql_query("SELECT hukum FROM hukum ORDER BY hukum ASC");
										  echo"<select name='hukum' class='form-control input-sm m-bot15'>";
										  echo"<option value='$redit_pemeliharaan[tindak_pidana]'>$redit_pemeliharaan[tindak_pidana]</option>";
										  while($rhukum=mysql_fetch_array($qhukum))
										  { 							                                      
											echo"<option value='$rhukum[hukum]'>$rhukum[hukum]</option>";
										  }  
										  echo"</select>";
									  ?>
                                             
                                      </div>
								   								   
								      <label  class="col-lg-3 col-sm-3 control-label">Gudang</label>
                                      <div class="col-lg-9">
									  <?php 
										  $qgudang = mysql_query("SELECT gudang FROM gudang ORDER BY gudang ASC");
										  echo"<select name='gudang' class='form-control input-sm m-bot15'>";
										  echo"<option value='$redit_pemeliharaan[gudang]'>$redit_pemeliharaan[gudang]</option>";
										  while($rgudang=mysql_fetch_array($qgudang))
										  { 							                                      
											echo"<option value='$rgudang[gudang]'>$rgudang[gudang]</option>";
										  }  
										  echo"</select>";
									  ?>
                                             
                                      </div>
									  
                                      <label  class="col-lg-3 col-sm-3 control-label">Golongan</label>
                                      <div class="col-lg-9">
									 <?php 
										  $qgol = mysql_query("SELECT gol FROM golongan ORDER BY gol ASC");
										  echo"<select name='golongan' class='form-control input-sm m-bot15'>";
										  echo"<option value='$redit_pemeliharaan[golongan]'>$redit_pemeliharaan[golongan]</option>";
										  while($rgol=mysql_fetch_array($qgol))
										  { 							                                      
											echo"<option value='$rgol[gol]'>$rgol[gol]</option>";
										  }  
										  echo"</select>";
									  ?>
                                             
                                      </div>
                                  
                                      <label  class="col-lg-3 col-sm-3 control-label">Kategori</label>
                                      <div class="col-lg-9">
									  <?php 
										  $qkat = mysql_query("SELECT kategori FROM kategori ORDER BY kategori ASC");
										  echo"<select name='kategori' class='form-control input-sm m-bot15'>";
										  echo"<option value='$redit_pemeliharaan[kategori]'>$redit_pemeliharaan[kategori]</option>";
										  while($rkat=mysql_fetch_array($qkat))
										  { 							                                      
											echo"<option value='$rkat[kategori]'>$rkat[kategori]</option>";
										  }  
										  echo"</select>";
									  ?>
                                             
                                      </div>
									  
									  <label  class="col-lg-3 col-sm-3 control-label">Kondisi Awal</label>
                                      <div class="col-lg-9">
									<input type="text" class="form-control" value="<?php echo"$redit_pemeliharaan[status]"; ?>"								  name="status" readonly="readonly">
                                      </div>
                                  </div>                               
                              </div>
                          </div>
                      </section> 
				  </div></div>
              <div class="row">			  
			       <div class="col-lg-12">  
					  <section class="panel">
						  <header class="panel-heading">
							  Keterangan (Penyebab Kerusakan) :
						  </header>
						  <div class="panel-body">                                     
							  <div class="form-group">                                                  
								  <div class="col-sm-12">
									  <textarea class="form-control" rows="2"
									  name="penyebab" id="penyebab"><?php echo"$redit_pemeliharaan[penyebab]"; ?></textarea>
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
										  <button type="submit" class="button-next  btn btn-success"> Update Laporan Pemeliharaan</button>&nbsp;
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