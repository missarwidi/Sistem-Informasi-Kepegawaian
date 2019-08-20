<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/mutasi.php";
     
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
                              Laporan Bulanan Mutasi Basan Tingkat Penyidik, Penuntutan Dan Pengadilan
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
										  <div class='btn-group'><a href='?r=mutasi&act=baru'>
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
                                          <th>Status Basan Baran</th>
                                          <th class="hidden-phone">Mutasi</th>
                                          <th class="hidden-phone">Nomor Buku Mutasi</th>
                                          <th class="hidden-phone">Tanggal Buku Mutasi</th>
                                          <th class="hidden-phone">Keterangan</th>
                                          <?php 
										   if(strtolower($_SESSION['leveluser'])=="sub bagian kepegawaian") { 
										   echo"<th class='hidden-phone'>Aksi</th>"; } ?>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qsurat = mysql_query("SELECT * FROM mutasi ORDER BY id DESC");
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;
									$tanggal = tgl_indo($rsurat['tanggal_mutasi']);			
												  						  
									echo"
                                      <tr class='gradeX'>
                                          <td>$no</td>
                                          <td>$rsurat[status]</td>
                                          <td>$rsurat[mutasi]</td>
                                          <td>$rsurat[nomor_mutasi]</td>
                                          <td>$tanggal</td>
                                          <td>$rsurat[keterangan]</td>";
									  echo"<td class='center hidden-phone'>"; ?>
										  <?php 
										   if(strtolower($_SESSION['leveluser'])=="sub bagian kepegawaian")
										   {?>
										  <a href="<?php echo"$aksi?r=mutasi&id=$rsurat[id]&mutasi=$rsurat[nomor_mutasi]&act=hapus"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs tooltips' data-original-title='Delete'  data-placement='top' 
										  data-toggle='tooltip'><i class='fa fa-trash-o '></i></button></a>
										  <?php } ?>
										  </td>
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
									  
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>Status Basan Baran</th>
                                          <th class="hidden-phone">Mutasi</th>
                                          <th class="hidden-phone">Nomor Buku Mutasi</th>
                                          <th class="hidden-phone">Tanggal Buku Mutasi</th>
                                          <th class="hidden-phone">Keterangan</th>
                                          <?php 
										   if(strtolower($_SESSION['leveluser'])=="sub bagian kepegawaian") { 
										   echo"<th class='hidden-phone'>Aksi</th>"; } ?>
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
	  <form action="<?php echo"$aksi?r=mutasi&act=baru"; ?>" role="form" method="post" enctype="multipart/form-data" 
	  class="cmxform tasi-form" id="commentForm" >
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Laporan Bulanan Mutasi Basan Tingkat Penyidik, Penuntutan Dan Pengadilan
                          </header>
					      <div class="panel-body">
                              <div class="form-horizontal">
							  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Statu Basan Baran</label>
                                      <div class="col-lg-4">
                                          <select name='status' class='form-control input-sm m-bot10'>
										  <option value='Penyidik (RBS1)'>Penyidik (RBS1)</option>
										  <option value='Penuntutan (RBS2)'>Penuntutan (RBS2)</option>
										  <option value='Pengadilan (RBS3)'>Pengadilan (RBS3)</option>
										  </select>									 
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Mutasi</label>
                                      <div class="col-lg-4">
                                              <input type="text" class="form-control" placeholder="Mutasi" name="mutasi"
											  value="" required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nomor Buku Mutasi</label>
                                      <div class="col-lg-4">
                                              <input type="text" class="form-control" placeholder="Nomor Buku Mutasi" name="nomor_mutasi"
											  value="" required>
                                      </div>
                                  </div>
							  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Tanggal Buku Mutasi</label>
									  <div class="col-lg-4">
									  <div class="input-group input-large" data-date="2013/07/13" data-date-format="yyyy/mm/dd">
                                      <input type="text" class="form-control dpd1" name="tanggal" value="<?php echo"$tgl"; ?>">
									  </div>
                                      </div>                                  
								  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Keterangan</label>
                                      <div class="col-lg-7">
                                      <textarea class="form-control" rows="4" name="keterangan" id="keterangan"></textarea>
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
										  <button type="submit" class="button-next  btn btn-info"> Submit & Lanjutkan >> </button>&nbsp;
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
<?php case"benda_sitaan"; 
	  $action = $_GET['action'];
	  $nomutasi = $_GET['mutasi']; 
?>

<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Pilih Barang Bukti - Basan Baran ( <?php echo"Nomor Buku Mutasi : $nomutasi"; ?> )
                          </header>
                          <div class="panel-body">					  
                                <div class="adv-table">
								<?php
								  if($action == "simpan")
								  { echo"<p><center><font color='#009900'>Proses Berhasil.</font></center></p>"; }
								  if($action == "error")
								  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
								
								 ?>
                          <div class="space15"></div>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Berita Acara Penelitian</th>
                                          <th>No Register</th>
                                          <th>Nama Basan/Baran</th>
                                          <th>Jumlah</th>
                                          <th>Pilih</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qsurat = mysql_query("SELECT * FROM trans_gudang where nomor_surat_keluar='' and keluar = '0' and hapus ='0' ORDER BY id DESC");
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;
									echo"
                                      <tr class='gradeX'>
                                          <td class='center'>$no</td>
                                          <td>$rsurat[no_ba_penelitian]</td>
                                          <td>$rsurat[no_registrasi]</td>
                                          <td>$rsurat[nama_basan]</td>
                                          <td class='center'>$rsurat[jumlah]</td>
                                          <td class='center'>
										  <a href='$aksi?r=mutasi&act=pilih&mutasi=$nomutasi&id=$rsurat[id]'>
										  <button class='btn btn-success btn-xs tooltips' data-original-title='Pilih Basan / Baran'  
										  data-placement='top' data-toggle='tooltip'><i class='fa fa-check'></i></button>
										  </a>"; 
									  echo"</tr>";									  
									  }
									  ?>
									  
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>No</th>
                                          <th>Berita Acara Penelitian</th>
                                          <th>No Register</th>
                                          <th>Nama Basan/Baran</th>
                                          <th>Jumlah</th>
                                          <th>Pilih</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
						  </section>
						  </div></div>
					   <?php
						  $not = 0;
						  $qsuratpilih = mysql_query("SELECT * FROM trans_gudang where nomor_surat_keluar='$nomutasi' and keluar = '1' 
						  and hapus ='0' ORDER BY id DESC");
						  $fsuratpilih = mysql_num_rows($qsuratpilih);
							  
						  if($fsuratpilih > 0)
						  {
						  ?>
						  
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  <header class="panel-heading">
                              Daftar Pilihan Basan / Baran
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th class="hidden-phone">No</th>
                                  <th> Berita Acara Penelitian</th>
                                  <th> No Register</th>
                                  <th> Nama Basan/Baran</th>
                                  <th> Jumlah</th>
                                  <th> Cancel</th>
                              </tr>
                              </thead>
                              <tbody>
							  
							  <?php
							  $qsuratpilih = mysql_query("SELECT * FROM trans_gudang where nomor_surat_keluar='$nomutasi' and keluar = '1' 
							                              and hapus ='0' ORDER BY id DESC");
							  while($rsuratpilih=mysql_fetch_array($qsuratpilih))
							  { 
							  $not++;
							  
							  echo"
                              <tr>
							      <td>$not</td>
                                  <td>$rsuratpilih[no_ba_penelitian]</td>
                                  <td>$rsuratpilih[no_registrasi]</td>
								  <td>$rsuratpilih[nama_basan]</td>
								  <td class='center'>$rsuratpilih[jumlah]</td>
                                  <td>";
							  ?>
								  <a href="<?php echo"$aksi?r=mutasi&id=$rsuratpilih[id]&surat=$nomor_surat&act=cancel&jenis=$jenis"; ?>" 
								  onclick="return confirm('Apakah anda yakin Cancel data ini?')">
								  <button class='label label-info label-minis' data-original-title='Cancel'  data-placement='top' 
								  data-toggle='tooltip'><i class='fa fa-trash-o '> Cancel</i></button></a>
                               <?php
								  echo"
								  </td>
                              </tr>";
							  }
							  ?>
                              
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
			  </div>
			  <?php } ?>
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">   
										  <button type="submit" class="button-next  btn btn-info" 
										  onclick="window.location.href='<?php echo"index.php?r=mutasi"; ?>';"> Selesai</button>&nbsp;
									  </div>
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

	 <?php } ?>