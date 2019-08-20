<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/bimtek.php";
     
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
                                echo"Laporan Bulanan Bimtek Petugas";
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
                              <div class='btn-group'><a href='?r=bimtek&act=new'>
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
                                          <th>Nama Pegawai</th>
                                          <th>Jenis Pelatihan</th>
                                          <th>Lama/Waktu Pelatihan</th>
                                          <th>Instansi Yang Mengadakan</th>
                                          <th>Diklat Teknis Yang Telah Diikuti</th>
                                          <th>Tgl Pelaksanaan</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qsurat = mysql_query("SELECT * FROM bimtek ORDER BY id DESC");									
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;
									$tanggal = tgl_indo($rsurat['tanggal_pelaksanaan']);
									$seo = seo_title($rsurat['jenis_pelatihan']);
									echo"
                                      <tr class='gradeX'>
                                          <td>$no</td>
                                          <td>$rsurat[nama]</td>
                                          <td>$rsurat[jenis_pelatihan]</td>
                                          <td>$rsurat[lama_pelatihan]</td>
                                          <td class='center'>$rsurat[instansi_mengadakan]</td>
                                          <td class='center hidden-phone'>$rsurat[diklat_teknis]</td>
                                          <td class='center hidden-phone'>$tanggal</td>
                                          <td class='center hidden-phone' width='7%'>
										  <a title='Edit' href='?r=bimtek&act=update&id=$rsurat[id]'>
										  <button class='btn btn-success btn-xs'><i class='fa fa-edit'></i></button>
										  </a>"; ?>
										  
								<a title="Hapus" 
								href="<?php echo"$aksi?r=bimtek&id=$rsurat[id]&act=hapus"; ?>" 
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
                                          <th>Nama Pegawai</th>
                                          <th>Jenis Pelatihan</th>
                                          <th>Lama/Waktu Pelatihan</th>
                                          <th>Instansi Yang Mengadakan</th>
                                          <th>Diklat Teknis Yang Telah Diikuti</th>
                                          <th>Tgl Pelaksanaan</th>
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
	  <form action="<?php echo"$aksi?r=bimtek&act=new"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Tambah Laporan Bulanan Bimtek Petugas
                          </header>
					  </section>
					</div>
				</div>
                <div class="row">
			       <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Informasi Umum
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nama</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control" placeholder="Nama" name="nama"
											  value="" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nip</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-barcode"></i>
                                              <input type="text" class="form-control" placeholder="Nip" name="nip"
											  value="" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Pangkat (Gol)</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bookmark"></i>
                                              <input type="text" class="form-control" placeholder="Pangkat (Golongan)" name="pangkat"
											  value="" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jabatan</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-css3"></i>
                                              <input type="text" class="form-control" placeholder="Jabatan" name="jabatan"
											  value="" required>
                                          </div>
                                      </div>
                                  </div>
                          </div>
                      </section>
                  </div>
                 
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Pelatihan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
							    <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jenis Pelatihan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Jenis Pelatihan" name="jenis_pelatihan"
											  value="" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Waktu Pelatihan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Lama / Waktu Pelatihan" name="lama_pelatihan"
											  value="" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nama Instansi</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Instansi Yang Mengadakan" name="instansi"
											  value="" required>
                                      </div>
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
								  Diklat
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
                                      <label  class="col-lg-3 col-sm-3 control-label">Diklat Teknis</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Diklat Teknis Yang Telah Diikuti" 
											  name= "diklat_teknis" value="" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Waktu Diklat</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Lama / Waktu Diklat" name="lama_diklat"
											  value="" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Diklat yang Diperlukan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Diklat Teknis/Pelatihan Yang Diperlukan" 
											  name="diklat_yang_diperlukan" value="" required>
                                      </div>
                                  </div>
							  </div>
							  </div>
						  </section>
					  </div>
                  <div class="col-lg-6"> 
					  <section class="panel">
						  <header class="panel-heading">
							  Keterangan :
						  </header>
						  <div class="panel-body">                                     
							  <div class="form-group">                                                  
								  <div class="col-sm-12">
									  <textarea class="form-control" rows="4" name="keterangan" id="keterangan"></textarea>
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
										  <button type="submit" class="button-next  btn btn-info"> Submit Bimtek</button>&nbsp;
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
	  $qedit_bimtek = mysql_query("SELECT * FROM bimtek where id ='$id' ");
	  $redit_bimtek = mysql_fetch_array($qedit_bimtek);
	  
	  $tgl = tgl_mdy($redit_bimtek['tanggal_pelaksanaan']);
	  $keterangan = nl2br($redit_bimtek['keterangan']);
	  ?>
	  <form action="<?php echo"$aksi?r=bimtek&act=update"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Ubah Laporan Bulanan Bimtek Petugas
                          </header>
					  </section>
					</div>
				</div>
                <div class="row">
			       <div class="col-lg-6">                      
                      <section class="panel">
                          <header class="panel-heading">
                             Informasi Umum
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nama</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-user"></i>
                                              <input type="text" class="form-control" placeholder="Nama" name="nama"
											  value="<?php echo"$redit_bimtek[nama]"; ?>" required>
											  <input type="hidden" name="id" value="<?php echo"$redit_bimtek[id]"; ?>" >
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nip</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-barcode"></i>
                                              <input type="text" class="form-control" placeholder="Nip" name="nip"
											  value="<?php echo"$redit_bimtek[nip]"; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Pangkat (Gol)</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bookmark"></i>
                                              <input type="text" class="form-control" placeholder="Pangkat (Golongan)" name="pangkat"
											  value="<?php echo"$redit_bimtek[pangkat]"; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jabatan</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-css3"></i>
                                              <input type="text" class="form-control" placeholder="Jabatan" name="jabatan"
											  value="<?php echo"$redit_bimtek[jabatan]"; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                          </div>
                      </section>
                  </div>
                 
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Pelatihan
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">
							    <div class="panel-body">
                              <div class="form-horizontal">
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Jenis Pelatihan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Jenis Pelatihan" name="jenis_pelatihan"
											  value="<?php echo"$redit_bimtek[jenis_pelatihan]"; ?>" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Waktu Pelatihan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Lama / Waktu Pelatihan" name="lama_pelatihan"
											  value="<?php echo"$redit_bimtek[lama_pelatihan]"; ?>" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nama Instansi</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Instansi Yang Mengadakan" name="instansi"
											  value="<?php echo"$redit_bimtek[instansi_mengadakan]"; ?>" required>
                                      </div>
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
								  Diklat
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
                                      <label  class="col-lg-3 col-sm-3 control-label">Diklat Teknis</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Diklat Teknis Yang Telah Diikuti" 
											  name= "diklat_teknis" value="<?php echo"$redit_bimtek[diklat_teknis]"; ?>" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Waktu Diklat</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Lama / Waktu Diklat" name="lama_diklat"
											  value="<?php echo"$redit_bimtek[lama_diklat]"; ?>" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Diklat yang Diperlukan</label>
                                      <div class="col-lg-9">
                                              <input type="text" class="form-control" placeholder="Diklat Teknis/Pelatihan Yang Diperlukan" 
											  name="diklat_yang_diperlukan" value="<?php echo"$redit_bimtek[diklat_diperlukan]"; ?>" required>
                                      </div>
                                  </div>
							  </div>
							  </div>
						  </section>
					  </div>
                  <div class="col-lg-6"> 
					  <section class="panel">
						  <header class="panel-heading">
							  Keterangan :
						  </header>
						  <div class="panel-body">                                     
							  <div class="form-group">                                                  
								  <div class="col-sm-12">
									  <textarea class="form-control" rows="4" name="keterangan" id="keterangan"><?php echo"$keterangan"; ?></textarea>
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
										  <button type="submit" class="button-next  btn btn-info"> Submit Bimtek</button>&nbsp;
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