<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/pegawai.php";
     
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
                          <li class="active">Data Pegawai</li>
                      </ul>
                      <!--breadcrumbs end -->
                      <section class="panel">
                          <header class="panel-heading">
                              Data Tabel Pegawai
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  if($action == "sukses")
								  { echo"
								    <div class='alert alert-success alert-block fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <h4>
										  <i class='fa fa-check'></i>
										  Success!
									  </h4>
									  <p>Data Berhasil Di Proses !!</p>
								  </div>
								  	"; }
								  if($action == "error")
								  { echo"
									  <div class='alert alert-block alert-danger fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <strong>Gagal Di Proses !</strong> Nip Pegawai Sudah Pernah Diinput.
									  </div>
								  "; }
								
								echo"<div class='clearfix'>
										  <div class='btn-group'><a href='?r=pegawai&act=baru'>
											  <button id='editable-sample_new' class='btn green'>
												  Add New <i class='fa fa-plus'></i>
											  </button></a>
										  </div>                             
									  </div>"; 
						  
						  ?>			  								
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th class="hidden-phone" width="3%">No</th>
                                          <th>Nip</th>
                                          <th>Nama Pegawai</th>
                                          <th class="hidden-phone">Golongan / Jabatan</th>
                                          <th class="hidden-phone">TMT</th>
                                          <th>Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qpeg = mysql_query("SELECT * FROM peg_datapribadi ORDER BY id DESC");
									while($rpeg=mysql_fetch_array($qpeg))
									{ 
								    $no++;
									$nama = $rpeg['nama'];
									$nip = $rpeg['nip'];
									$gol = $rpeg['gol'];
									$tmt = tgl_indo($rpeg['tmt']);
									$seo = seo_title($rpeg['nama']);
									echo"
                                      <tr class='gradeX'>
                                          <td class='hidden-phone'>$no</td>
                                          <td>$nip</td>
                                          <td>$nama</td>
                                          <td class='hidden-phone'>$gol</td>
                                          <td class='hidden-phone'>$tmt</td>
                                          <td class='hidden-phone'><a href='?r=pegawai&act=ubah&nip=$nip&nama=$nama'>
										  <button class='btn btn-warning btn-xs'><i class='fa fa-edit'> Ubah</i></button>
										  <a href='?r=pegawai&act=curiculumvitae&nip=$nip&nama=$nama'>
										  <button class='btn btn-primary btn-xs'><i class='fa fa-eye'> CV </i></button>"; ?>
										  <?php 
										   if(strtolower($_SESSION['leveluser'])=="sub bagian kepegawaian")
										   {?>
										  <a href="<?php echo"$aksi?r=pegawai&nip=$nip&nama=$nama&act=hapus"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '> Hapus</i></button></a>
										  <?php } ?>
										  </td>
										  
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th class="hidden-phone" width="3%">No</th>
                                          <th>Nip</th>
                                          <th>Nama Pegawai</th>
                                          <th class="hidden-phone">Golongan / Jabatan</th>
                                          <th class="hidden-phone">TMT</th>
                                          <th>Aksi</th>
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
	  
	  ?>
	  <form action="<?php echo"$aksi?r=pegawai&act=baru"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=pegawai">Data Pegawai</a></li>
                          <li class="active">Tambah Data Pegawai</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pegawai (Karyawan)
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">								  
							      <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nip</label>
                                      <div class="col-lg-4">
                                              <input type="text" class="form-control" placeholder="Nip" name="nip" 
											  value="" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nama</label>
                                      <div class="col-lg-6">
                                              <input type="text" class="form-control" placeholder="Nama" name="nama"
											  value="" required>
                                      </div>
                                  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nomor KTP</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="Nomor KTP" name="noktp"
											  value="" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Umur</label>
                                      <div class="col-lg-1">
                                              <input type="text" class="form-control" placeholder="Umur" name="umur"
											  value="" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Agama</label>
                                      <div class="col-lg-3">
                                           <select name='agama' class='form-control m-bot15'>
										   <option value='Islam'>Islam</option>
										   <option value='Kristen Katolik'>Kristen Katolik</option>
										   <option value='Kristen Protestan'>Kristen Protestan</option>
										   <option value='Hindu'>Hindu</option>
										   <option value='Budha'>Budha</option>
										   <option value='Konghuchu'>Konghuchu</option>
										   </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tempat lahir</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir"
											  value="" required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal lahir</label>
                                      <div class="col-lg-2">
                                          <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="" name="tanggal_lahir" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Bangsa</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="Bangsa" name="bangsa"
											  value="" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Alamat, Tempat Tinggal</label>
                                      <div class="col-lg-6">
                                        <textarea class="form-control" rows="2" name="tempat_tinggal" id="tempat_tinggal"  required></textarea>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">No Telp</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="No. Telp" name="notelp"
											  value="" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">eMail</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="email@example.com" name="email"
											  value="" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Unit Kerja</label>
                                      <div class="col-lg-4">
									  <input type="text" class="form-control"  name="unitkerja"
											  value="Dinas Pendidikan Provinsi Sulawesi Selatan" required>
                                        
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Terhitung Mulai Tanggal</label>
                                      <div class="col-lg-2">
                                           <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="" name="tmt" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Golongan</label>
                                      <div class="col-lg-2">
                                       <?php 
										  $no = 0;
										  $qasalsurat = mysql_query("SELECT golongan FROM master_golongan ORDER BY tingkatangolongan ASC");
										  echo"<select name='gol' class='form-control m-bot15'>";
										  while($rasalsurat=mysql_fetch_array($qasalsurat))
										  { 							                                      
											echo"<option value='$rasalsurat[golongan]'>$rasalsurat[golongan]</option>";
										  }  
										  echo"</select>";
									  ?> </div><div class="col-lg-1"><center>-</center></div>
									  <div class="col-lg-4">
									  <?php 
										 // $no = 0;
//										  $qasalsurat = mysql_query("SELECT jenis_surat FROM jenis_surat ORDER BY jenis_surat ASC");
//										  echo"<select name='asal_surat' class='form-control m-bot15'>";
//										  while($rasalsurat=mysql_fetch_array($qasalsurat))
//										  { 							                                      
//											echo"<option value='$rasalsurat[jenis_surat]'>$rasalsurat[jenis_surat]</option>";
//										  }  
//										  echo"</select>";
									  ?>
									  <input type="text" class="form-control" placeholder="Jabatan" name="jabatan"
											  value="" required>
                                      </div>
                                  </div>
								  <hr />
								  <div class="form-group last">
                                          <label class="control-label col-md-2">Image Upload</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="img/pegawai/noimage.png" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                   <input type="file" class="default" name="gambar" id="gambar" />
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                              <span class="label label-danger">NOTE!</span>
                                             <span>
                                             Lampiran Gambar Hanya Support di Firefox Terbaru, Chrome, Opera, Safari Dan Internet Explorer 10+ Saja.
                                             </span>
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
										  <button type="submit" class="button-next  btn btn-success"> Simpan</button>&nbsp;
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
	  ?>
	  <?php			  
		$qpeg=mysql_query("SELECT * FROM peg_datapribadi where nip='$nip' ORDER BY nip DESC ");
		$rpeg=mysql_fetch_array($qpeg);
		$alamat = nl2br($rpeg['tempat_tinggal']);
		$gambar = $rpeg['foto'];
	?>
					
	  
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=pegawai">Data Pegawai</a></li>
                          <li class="active">Ubah Data Pegawai</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div><form action="<?php echo"$aksi?r=pegawai&act=ubah"; ?>" role="form" method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pegawai (Karyawan)
                          </header>						  
                          <div class="panel-body">
                              <div class="form-horizontal">	
							  <?php
								  $action = $_GET['action'];
								  if($action == "sukses")
								  { echo"
								    <div class='alert alert-success alert-block fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <h4>
										  <i class='fa fa-check'></i>
										  Success!
									  </h4>
									  <p>Data Berhasil Di Proses !!</p>
								  </div>
								  	"; }
								  if($action == "error")
								  { echo"
									  <div class='alert alert-block alert-danger fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <strong>Gagal Di Proses !</strong> Nip Pegawai Sudah Ada.
									  </div>
								  "; }
								
						  
						  ?>								  
							      <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nip</label>
                                      <div class="col-lg-4">
                                              <input type="hidden" class="form-control" name="nip" 
											  value="<?php echo $rpeg['nip']; ?>" required>
											  <input type="text" class="form-control" name="niptampil" 
											  value="<?php echo $rpeg['nip']; ?>" readonly>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nama</label>
                                      <div class="col-lg-6">
                                              <input type="text" class="form-control" placeholder="Nama" name="nama"
											  value="<?php echo $rpeg['nama']; ?>" required>
                                      </div>
                                  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Nomor KTP</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="Nomor KTP" name="noktp"
											  value="<?php echo $rpeg['noktp']; ?>" required>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Umur</label>
                                      <div class="col-lg-1">
                                              <input type="text" class="form-control" placeholder="Umur" name="umur"
											  value="<?php echo $rpeg['umur']; ?>" required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Agama</label>
                                      <div class="col-lg-3">
                                           <select name='agama' class='form-control m-bot15'>
										   <option value='<?php echo $rpeg['agama']; ?>'><?php echo $rpeg['agama']; ?></option>
										   <option value='Islam'>Islam</option>
										   <option value='Kristen Katolik'>Kristen Katolik</option>
										   <option value='Kristen Protestan'>Kristen Protestan</option>
										   <option value='Hindu'>Hindu</option>
										   <option value='Budha'>Budha</option>
										   <option value='Konghuchu'>Konghuchu</option>
										   </select>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tempat lahir</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir"
											  value="<?php echo $rpeg['tempat_lahir']; ?>" required>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Tanggal lahir</label>
                                      <div class="col-lg-2">
                                          <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="<?php echo $rpeg['tanggal_lahir']; ?>" name="tanggal_lahir" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Bangsa</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="Bangsa" name="bangsa"
											  value="<?php echo $rpeg['bangsa']; ?>" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Alamat, Tempat Tinggal</label>
                                      <div class="col-lg-6">
                                        <textarea class="form-control" rows="2" name="tempat_tinggal" id="tempat_tinggal"  required><?php echo $alamat; ?></textarea>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">No Telp</label>
                                      <div class="col-lg-3">
                                              <input type="text" class="form-control" placeholder="No. Telp" name="notelp"
											  value="<?php echo $rpeg['notelp']; ?>" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">eMail</label>
                                      <div class="col-lg-3">
                                              <input type="email" class="form-control" placeholder="email@example.com" name="email"
											  value="<?php echo $rpeg['email']; ?>" required>
                                      </div>
                                  </div>
								     <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Unit Kerja</label>
                                      <div class="col-lg-4">
									  <input type="text" class="form-control"  name="unitkerja"
											  value="Dinas Pendidikan Provinsi Sulawesi Selatan" required>
                                        
                                      </div>
                                  </div>
								  <?php if(strtolower($username)!= "sub bagian kepegawaian")
								  { ?>
								  <input size="16" type="hidden" value="<?php echo $rpeg['tmtbaru']; ?>" name="tmt" >
								  <input size="16" type="hidden" value="<?php echo $rpeg['gol']; ?>" name="gol" >	
								  <input type="hidden" name="jabatan" value="<?php echo $rpeg['jabatan']; ?>">
								  <?php }else{ ?>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label">Terhitung Mulai Tanggal</label>
                                      <div class="col-lg-2">
                                           <input class="form-control form-control-inline input-medium default-date-picker" 
										size="16" type="text" value="<?php echo $rpeg['tmtbaru']; ?>" name="tmt" required>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-2 col-sm-2 control-label"> </label>
                                      <div class="col-lg-2">									   
                                       <?php 
										  $no = 0;
										  $qasalsurat = mysql_query("SELECT golongan FROM master_golongan ORDER BY tingkatangolongan ASC");
										  echo"<select name='gol' class='form-control m-bot15'>
										  <option value='$rpeg[gol]'>$rpeg[gol]</option>";
										  while($rasalsurat=mysql_fetch_array($qasalsurat))
										  { 							                                      
											echo"<option value='$rasalsurat[golongan]'>$rasalsurat[golongan]</option>";
										  }  
										  echo"</select>";
									  ?> </div><div class="col-lg-1"><center>-</center></div>
									  <div class="col-lg-4">
									
									  <input type="text" class="form-control" placeholder="Jabatan" name="jabatan"
											  value="<?php echo $rpeg['jabatan']; ?>" required>
                                      </div>
                                  </div>
								  <?php } ?>
								  <hr />
								  <div class="form-group last">
                                          <label class="control-label col-md-2">Image Upload</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
												  <?php
												  	  if($gambar != ""){
                                                     	echo "<img src='$rpeg[folder]$rpeg[foto]' alt='' />";
													  }else{
													  	echo "<img src='img/pegawai/noimage.png' alt='' />";
													  }
													  ?>
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                   <input type="file" class="default" name="gambar" id="gambar" />
                                                   </span>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                                                  </div>
                                              </div>
                                              <span class="label label-danger">NOTE!</span>
                                             <span>
                                             Lampiran Gambar Hanya Support di Firefox Terbaru, Chrome, Opera, Safari Dan Internet Explorer 10+ Saja.
                                             </span>
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
										  <button type="submit" class="button-next  btn btn-success"> Simpan Data</button>&nbsp;
									  </div>
                                  </div>                                                        
                          </div>
                      </section>
                  </div>
				</div>
				</form><?php
				
				  if($nip != "" or $nama="")
				  { ?>
			 <div class="row">
			  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pendidikan
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  if($action == "sukses")
								  { echo"
								    <div class='alert alert-success alert-block fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <h4>
										  <i class='fa fa-check'></i>
										  Success!
									  </h4>
									  <p>Data Berhasil Di Proses !!</p>
								  </div>
								  	"; }
								  if($action == "error")
								  { echo"
									  <div class='alert alert-block alert-danger fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <strong>Gagal !</strong> Data Gagal Di Proses.
									  </div>
								  "; }
								
								echo"<div class='clearfix'>
										  <div class='btn-group'><a href='?r=pendidikan&act=baru&nip=$nip'>
											  <button id='editable-sample_new' class='btn green'>
												  Add New <i class='fa fa-plus'></i>
											  </button></a>
										  </div>                             
									  </div><br>"; 
						  
						  ?>			  								
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th class="hidden-phone" width="3%">No</th>
                                          <th>Sekolah/Perguruan Tinggi</th>
                                          <th>Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qpendidikan = mysql_query("SELECT * FROM peg_pendidikan where nip='$nip' ORDER BY id DESC");
									while($rpendidikan=mysql_fetch_array($qpendidikan))
									{ 
								    $no++;
									$nama_sekolah = $rpendidikan['nama_sekolah'];
									$idpendidikan = $rpendidikan['id'];
									$tingkatan = $rpendidikan['tingkatan'];
									$idpendidikanmd5 = md5($idpendidikan);
									echo"
                                      <tr class='gradeX'>
                                          <td class='hidden-phone'>$no</td>
                                          <td>$nama_sekolah</td>
                                          <td class='hidden-phone'>
 											<a href='?r=pendidikan&act=ubah&id=$idpendidikanmd5&nip=$nip'>
										  <button class='btn btn-warning btn-xs'><i class='fa fa-edit'> Ubah</i></button>
										  </a>"; ?>										 
										  <a href="<?php echo"aksi/pendidikan.php?r=pendidikan&act=hapus&id=$idpendidikanmd5&nip=$nip"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '> Hapus</i></button></a>
										  </td>
										  
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
                                      </tbody>                                     
                          </table>
                                </div>
                          </div>
                      </section>                     
                  </div>
				  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Keluarga
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  if($action == "sukses")
								  { echo"
								    <div class='alert alert-success alert-block fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <h4>
										  <i class='fa fa-check'></i>
										  Success!
									  </h4>
									  <p>Data Berhasil Di Proses !!</p>
								  </div>
								  	"; }
								  if($action == "error")
								  { echo"
									  <div class='alert alert-block alert-danger fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <strong>Gagal !</strong> Data Gagal Di Proses.
									  </div>
								  "; }
								
								echo"<div class='clearfix'>
										  <div class='btn-group'><a href='?r=keluarga&act=baru&nip=$nip'>
											  <button id='editable-sample_new' class='btn green'>
												  Add New <i class='fa fa-plus'></i>
											  </button></a>
										  </div>                             
									  </div><br>"; 
						  
						  ?>			  								
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th class="hidden-phone" width="3%">No</th>
                                          <th>Hubungan</th>
										  <th>Nama</th>
                                          <th>Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qkeluarga = mysql_query("SELECT * FROM peg_keluarga where nip='$nip' ORDER BY id DESC");
									while($rkeluarga=mysql_fetch_array($qkeluarga))
									{ 
								    $no++;
									$hubungan = $rkeluarga['hubungan'];
									$nama = $rkeluarga['nama'];
									$idkeluarga = $rkeluarga['id'];
									$idkeluargamd5 = md5($idkeluarga);
									echo"
                                      <tr class='gradeX'>
                                          <td class='hidden-phone'>$no</td>
                                          <td>$hubungan</td>
                                          <td>$nama</td>
                                          <td class='hidden-phone'>
 											<a href='?r=keluarga&act=ubah&id=$idkeluargamd5&nip=$nip'>
										  <button class='btn btn-warning btn-xs'><i class='fa fa-edit'> Ubah</i></button>
										  </a>"; ?>										 
										  <a href="<?php echo"aksi/keluarga.php?r=keluarga&act=hapus&id=$idkeluargamd5&nip=$nip"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '> Hapus</i></button></a>
										  </td>
										  
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
                                      </tbody>                                     
                          </table>
                                </div>
                          </div>
                      </section>              
                  </div>
				  </div>
				  <div class="row">
				  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Kemampuan
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  if($action == "sukses")
								  { echo"
								    <div class='alert alert-success alert-block fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <h4>
										  <i class='fa fa-check'></i>
										  Success!
									  </h4>
									  <p>Data Berhasil Di Proses !!</p>
								  </div>
								  	"; }
								  if($action == "error")
								  { echo"
									  <div class='alert alert-block alert-danger fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <strong>Gagal !</strong> Data Gagal Di Proses.
									  </div>
								  "; }
								
								echo"<div class='clearfix'>
										  <div class='btn-group'><a href='?r=kemampuan&act=baru&nip=$nip'>
											  <button id='editable-sample_new' class='btn green'>
												  Add New <i class='fa fa-plus'></i>
											  </button></a>
										  </div>                             
									  </div><br>"; 
						  
						  ?>			  								
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th class="hidden-phone" width="3%">No</th>
                                          <th>Kemampuan</th>
                                          <th>Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qkemampuan = mysql_query("SELECT * FROM peg_kemampuan where nip='$nip' ORDER BY id DESC");
									while($rkemampuan=mysql_fetch_array($qkemampuan))
									{ 
								    $no++;
									$kemampuan = $rkemampuan['kemampuan'];
									$idkemampuan = $rkemampuan['id'];
									$idkemampuanmd5 = md5($idkemampuan);
									echo"
                                      <tr class='gradeX'>
                                          <td class='hidden-phone'>$no</td>
                                          <td>$kemampuan</td>
                                          <td class='hidden-phone'>
 											<a href='?r=kemampuan&act=ubah&id=$idkemampuanmd5&nip=$nip'>
										  <button class='btn btn-warning btn-xs'><i class='fa fa-edit'> Ubah</i></button>
										  </a>"; ?>										 
										  <a href="<?php echo"aksi/kemampuan.php?r=kemampuan&act=hapus&id=$idkemampuanmd5&nip=$nip"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '> Hapus</i></button></a>
										  </td>
										  
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
                                      </tbody>                                     
                          </table>
                                </div>
                          </div>
                      </section>              
                  </div>
				  
				  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pengalaman
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
								<?php
								  $action = $_GET['action'];
								  if($action == "sukses")
								  { echo"
								    <div class='alert alert-success alert-block fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <h4>
										  <i class='fa fa-check'></i>
										  Success!
									  </h4>
									  <p>Data Berhasil Di Proses !!</p>
								  </div>
								  	"; }
								  if($action == "error")
								  { echo"
									  <div class='alert alert-block alert-danger fade in'>
									  <button data-dismiss='alert' class='close close-sm' type='button'>
										  <i class='fa fa-power-off'></i>
									  </button>
									  <strong>Gagal !</strong> Data Gagal Di Proses.
									  </div>
								  "; }
								
								echo"<div class='clearfix'>
										  <div class='btn-group'><a href='?r=pengalaman&act=baru&nip=$nip'>
											  <button id='editable-sample_new' class='btn green'>
												  Add New <i class='fa fa-plus'></i>
											  </button></a>
										  </div>                             
									  </div><br>"; 
						  
						  ?>			  								
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th class="hidden-phone" width="3%">No</th>
                                          <th>Pengalaman</th>
                                          <th>Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qpengalaman = mysql_query("SELECT * FROM peg_pengalaman where nip='$nip' ORDER BY id DESC");
									while($rpengalaman=mysql_fetch_array($qpengalaman))
									{ 
								    $no++;
									$jabatanpengalaman = $rpengalaman['jabatan'];
									$idpengalaman = $rpengalaman['id'];
									$idpengalamanmd5 = md5(idpengalaman);
									echo"
                                      <tr class='gradeX'>
                                          <td class='hidden-phone'>$no</td>
                                          <td>$jabatanpengalaman</td>
                                          <td class='hidden-phone'>
 											<a href='?r=pengalaman&act=ubah&id=$idpengalaman&nip=$nip'>
										  <button class='btn btn-warning btn-xs'><i class='fa fa-edit'> Ubah</i></button>
										  </a>"; ?>										 
										  <a href="<?php echo"aksi/pengalaman.php?r=pengalaman&act=hapus&id=$idpengalaman&nip=$nip"; ?>" 
										  onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                                          <button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '> Hapus</i></button></a>
										  </td>
										  
                                      <?php 
									  echo"</tr>";									  
									  }
									  ?>
                                      </tbody>                                     
                          </table>
                                </div>
                          </div>
                      </section>              
                  </div>
			   </div>			                     
				<?php } ?>
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
<?php case "curiculumvitae": ?>

 <!--main content start-->
	  <?php
	  $tgl = date("m/d/Y");
	  $nip = $_GET['nip'];
	  $nama = $_GET['nama'];
	  ?>
	  <?php			  
		$qpeg=mysql_query("SELECT * FROM peg_datapribadi where nip='$nip' ORDER BY nip DESC ");
		$rpeg=mysql_fetch_array($qpeg);
		$alamat = nl2br($rpeg['tempat_tinggal']);
		$nipbaru = $rpeg['nip'];
		$gambar = $rpeg['foto'];
	?>
	 
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=pegawai">Data Pegawai</a></li>
                          <li class="active">Curiculum Vitae</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Curiculum Vitae (Daftar Riwayat Hidup) 
							  <div class="btn-group">
                                  <button class="btn btn-danger btn-xs" type="button">Export</button>
                                  <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle btn-xs" type="button">
								  <span class="caret"></span></button>
                                  <ul role="menu" class="dropdown-menu btn-xs">
                                      <li><a href="<?php echo"pdf/cv.php?nip=$nipbaru&nama=$nama"; ?>" target="_blank">To PDF</a></li>
                                  </ul>
                              </div>
                          </header>
						 
                          <div class="panel-body">
                              <div class="form-horizontal">								  
							     <table width="100%" border="0" cellpadding="4" cellspacing="4">
								  <tr>
									<td colspan="4"><h1 align="center"><strong>CURICULUM VITAE</strong></h1></td>
								  </tr>
								  <tr>
									<td colspan="4"><div align="center"><strong><u>(DAFTAR RIWAYAT HIDUP)</u></strong></div></td>
								  </tr>
								  <tr>
									<td width="4%">&nbsp;</td>
									<td width="23%">&nbsp;</td>
									<td width="47%">&nbsp;</td>
									<td width="26%">&nbsp;</td>
								  </tr>
								  <tr>
									<td bgcolor="#CCCCCC"><div align="center"><strong>A.</strong></div></td>
									<td colspan="3" bgcolor="#CCCCCC"><strong>DATA PRIBADI </strong></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Nama</td>
									<td>: <?php echo $rpeg['nama']; ?></td>
									<td rowspan="9">
									<div class="fileupload fileupload-new" data-provides="fileupload">
									  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
									  <?php
										  if($gambar != ""){
											echo "<img src='$rpeg[folder]$rpeg[foto]' alt='' />";
										  }else{
											echo "<img src='img/pegawai/noimage.png' alt='' />";
										  }
										  ?>
									  </div>
									  </div>
								</td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Umur</td>
									<td>: <?php echo $rpeg['umur']; ?></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Tempat, Tanggal lahir</td>
									<td>: <?php echo $rpeg['tempat_lahir'].", ". tgl_indo($rpeg['tanggal_lahir']); ?></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Bangsa</td>
									<td>: <?php echo $rpeg['bangsa']; ?></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Agama</td>
									<td>: <?php echo $rpeg['agama']; ?></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Tempat tinggal sekarang</td>
									<td>: <?php echo $rpeg['tempat_tinggal']; ?></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Telepon</td>
									<td>: <?php echo $rpeg['notelp']; ?></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>Email</td>
									<td>: <?php echo $rpeg['email']; ?></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
								  </tr>
								</table>
								  <table width="100%" border="0" cellpadding="4" cellspacing="4">
								  <tr>
									<td width="4%" bgcolor="#CCCCCC"><div align="center"><strong>B.</strong></div></td>
									<td colspan="3" bgcolor="#CCCCCC"><strong>PENDIDIKAN</strong></td>
								  </tr>
						<?php			  
							$qpendidikan=mysql_query("SELECT * FROM peg_pendidikan p, master_pendidikan m where p.nip='$nipbaru' 
										and  p.tingkatan=m.tingkatan ORDER BY m.id ASC ");
							while($rpendidikan=mysql_fetch_array($qpendidikan))
							{
							$tglselesai = tgl_indo($rpendidikan['tanggal_selesai']);
							$namasekolah = $rpendidikan['nama_sekolah'];								
								  echo"<tr>
									<td>&nbsp;</td>
									<td colspan='3'> - Lulusan Dari $namasekolah Pada Tanggal : $tglselesai</td>
								  </tr>";
								 }
						?>
								  
								  <tr>
									<td>&nbsp;</td>
									<td colspan="2">&nbsp;</td>
									<td>&nbsp;</td>
								  </tr>
								  </table>
								  <table width="100%" border="0" cellpadding="4" cellspacing="4">
									<tr>
									  <td width="4%" bgcolor="#CCCCCC"><div align="center"><strong>C.</strong></div></td>
									  <td colspan="2" bgcolor="#CCCCCC"><strong>RIWAYAT PENDIDIKAN TERAKHIR </strong></td>
									</tr>
						<?php			  
							$qpendidikan=mysql_query("SELECT * FROM peg_pendidikan p, master_pendidikan m where p.nip='$nipbaru' 
										and  p.tingkatan=m.tingkatan ORDER BY m.id DESC limit 0,1 ");
							$rpendidikan=mysql_fetch_array($qpendidikan);
							
							$tglselesai = tgl_indo($rpendidikan['tanggal_selesai']);
							$namasekolahterakhir = $rpendidikan['nama_sekolah'];	
							$ipk = $rpendidikan['ipk'];								
								  echo"<tr>
									  <td>&nbsp;</td>
									  <td width='23%'> - Jurusan / Jenjang Pendidikan </td>
									  <td width='73%'>: $rpendidikan[jurusan] / $namasekolahterakhir</td>
									</tr>
									<tr>
									  <td>&nbsp;</td>
									  <td> - Index Prestasi Kumulatif &nbsp;&nbsp; </td>
									  <td> : $ipk</td>
									</tr>";
								 
						?>
									<tr>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									  <td>&nbsp;</td>
									</tr>
								  </table>
								  <table width="100%" border="0" cellpadding="4" cellspacing="4">
								  <tr>
									<td width="4%" bgcolor="#CCCCCC"><div align="center"><strong>D.</strong></div></td>
									<td colspan="3" bgcolor="#CCCCCC"><strong>PENGALAMAN KERJA </strong></td>
								  </tr>
								  <tr>
									<td>&nbsp;</td>
									<td width="36%"><div align="center"><strong>Perusahaan</strong></div></td>
									<td width="27%"><div align="center"><strong>Jabatan</strong></div></td>
									<td width="33%"><div align="center"><strong>Masa Kerja </strong></div></td>
								  </tr>
						<?php			  
							$qpengalaman=mysql_query("SELECT * FROM peg_pengalaman where nip='$nipbaru' ORDER BY id DESC ");
							while($rpengalaman=mysql_fetch_array($qpengalaman))
							{							
							$tanggal_masuk = tgl_indo($rpengalaman['tanggal_masuk']);
							$tanggal_selesai = tgl_indo($rpengalaman['tanggal_selesai']);
							$namaperusahaan = $rpengalaman['namaperusahaan'];	
							$jabatan = $rpengalaman['jabatan'];									
								  echo"<tr>
									<td height='28'>&nbsp;</td>
									<td><div align='center'>$namaperusahaan</div></td>
									<td><div align='center'>$jabatan </div></td>
									<td><div align='center'>$tanggal_masuk s/d $tanggal_selesai</div></td>
								  	  </tr>";
								 }
						?>					  
								  <tr>
									<td colspan="4">&nbsp;</td>
									</tr>
								  </table>
								  
								  <table width="100%" border="0" cellpadding="4" cellspacing="4">
									<tr>
									  <td width="4%" bgcolor="#CCCCCC"><div align="center"><strong>E.</strong></div></td>
									  <td bgcolor="#CCCCCC"><strong>DATA KEMAMPUAN </strong></td>
									</tr>
						<?php			  
							$qkemampuan=mysql_query("SELECT * FROM peg_kemampuan where nip='$nipbaru' ORDER BY id DESC ");
							while($rkemampuan=mysql_fetch_array($qkemampuan))
							{							
							$kemampuan = $rkemampuan['kemampuan'];								
								  echo"<tr>
									  <td>&nbsp;</td>
									  <td> - kemampuan</td>
									</tr>";
								 }
						?>			
									
									<tr>
									  <td>&nbsp;</td>
									  <td> </td>
									</tr>
								  </table>
                              </div>
                          </div>
                      </section>
                  </div>
                  
              </div> 
			  				
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