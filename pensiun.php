<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/pensiun.php";
     
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
                          <li class="active">Data Pengajuan Pensiun</li>
                      </ul>
                      <!--breadcrumbs end -->
                      <section class="panel">
                          <header class="panel-heading">
                              Data Tabel Pengajuan Pensiun
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
									  <strong>Gagal Di Proses !</strong> Nip Pengajuan Pensiun Sudah Pernah Diinput.
									  </div>
								  "; }
								
								echo"<div class='clearfix'>
										  <div class='btn-group'><a href='?r=pensiun&act=baru'>
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
                                          <th class="hidden-phone">Tanggal Pengajuan</th>
                                          <th>Status</th>
                                          <th>Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;									
									if(strtolower($leveluser)=="pegawai"){
									$qpeg = mysql_query("SELECT * FROM datapensiun where nip='$session_username' ORDER BY id DESC");
									}else{
									$qpeg = mysql_query("SELECT * FROM datapensiun ORDER BY id DESC");
									}
									
									while($rpeg=mysql_fetch_array($qpeg))
									{ 
								    $no++;
									$idpensiun = $rpeg['idpensiun'];
									$nama = $rpeg['nama'];
									$nip = $rpeg['nip'];
									$gol = $rpeg['gol']."<br>".$rpeg['jabatan'];
									$tanggal_pengajuan = tgl_indo($rpeg['tanggal']);
									
									if($rpeg['status']=="0")
									{ $status = "Di Tolak"; }
									elseif($rpeg['status']=="1")
									{ $status = "<font color='#FFD000'> Menunggu Di Verifikasi</font>"; }									
									elseif($rpeg['status']=="2")
									{ $status = "<font color='#05B905'> Di Setujui</font>"; }
									
									echo"
                                      <tr class='gradeX'>
                                          <td class='hidden-phone'>$no</td>
                                          <td>$nip</td>
                                          <td>$nama</td>
                                          <td class='hidden-phone center'>$gol</td>
                                          <td class='hidden-phone'>$tanggal_pengajuan</td>
                                          <td class='hidden-phone center'>$status</td>
                                          <td><a href='?r=pensiun&act=ubah&nip=$nip&id=$idpensiun'>
										  <button class='btn btn-warning btn-xs'><i class='fa fa-edit'> Ubah</i></button></a>";
										  
										  if(strtolower($_SESSION['leveluser'])=="sub bagian kepegawaian")
										  {
										  echo"<a href='?r=pensiun&act=verifikasi&nip=$nip&id=$idpensiun'>
										  <button class='btn btn-success btn-xs'><i class='fa fa-check'> Verifikasi</i></button></a>"; ?>
										  
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
                                          <th class="hidden-phone">Tanggal Pengajuan</th>
                                          <th>Status</th>
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
	  $tgl = date("Y-m-d");
	  $idpesiun = "PEN - ".randomtiket(6);
	  ?>
	  <form action="<?php echo"$aksi?r=pensiun&act=baru"; ?>" role="form" method="post" enctype="multipart/form-data">
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=pensiun">Data Pengajuan Pensiun</a></li>
                          <li class="active">Tambah Data Pengajuan Pensiun</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pengajuan Pensiun
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">	
							  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">ID Pengajuan Pensiun</label>
                                      <div class="col-lg-6">
                                              <input type="hidden" class="form-control" name="idpensiun" 
											  value="<?php echo $idpesiun; ?>" required>
											  <input type="text" class="form-control" name="idhidden" 
											  value="<?php echo $idpesiun; ?>" readonly>
                                      </div>
                                  </div>							  
							      <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nip</label>
                                      <div class="col-lg-6">
                                              <input type="hidden" class="form-control" placeholder="Nip" name="nip" 
											  value="<?php echo $session_username; ?>" required>
                                      		 <input type="text" class="form-control" placeholder="Nip" name="niphidden" 
											  value="<?php echo $session_username; ?>" readonly>
										</div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggal Pengajuan</label>
                                      <div class="col-lg-4">
                                              <input type="hidden" class="form-control"  name="tanggal"
											  value="<?php echo $tgl; ?>" required>
                                              <input type="text" class="form-control"  name="tanggalhidden"
											  value="<?php echo $tgl; ?>" readonly>
                                      </div>
                                  </div>		  
								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Keterangan</label>
                                      <div class="col-lg-8">
                                        <textarea class="form-control" rows="6" name="keterangan" id="keterangan"  required></textarea>
                                      </div>
                                  </div>
							</div>
						</div>
                      </section>
                  </div>
                  
                  <div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Kelengkapan Data Pengajuan Pensiun
                          </header>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>                                          
                                          <div class="task-title">
                                              <span class="task-title-sp">Surat Keputusan Pangkat Terakhir</span>
                                              <span class="badge badge-sm label-success">File .pdf / Gambar</span>
                                              <div class="pull-right hidden-phone">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="surat_keputusan_pangkat_terakhir" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Surat Nikah </span>
                                              <span class="badge badge-sm label-danger">File .pdf / Gambar</span>
                                              <div class="pull-right hidden-phone">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="surat_nikah"/>
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Akta Kelahiran </span>
                                              <span class="badge badge-sm label-warning">File .pdf / Gambar</span>
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default"  name="akta_kelahiran"/>
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Surat Daftar Keluarga Diketahui Kelurahan </span>
                                              <span class="badge badge-sm label-primary">File .pdf / Gambar</span>
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="daftar_keluarga" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Foto Ukuran 3x4 Berwarna</span>
                                              <span class="badge badge-sm label-info">Foto</span>
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="foto" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                          </div>
                                              </div>
                                          </div>
                                      </li>
								</ul>
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
										  <button type="submit" class="button-next  btn btn-success"> Ajukan Pensiun</button>&nbsp;
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
	  $idpensiun = $_GET['id'];
	  ?>
	  <?php			  
		$qpeg=mysql_query("SELECT * FROM data_pensiun where idpensiun='$idpensiun' ORDER BY id DESC ");
		$rpeg=mysql_fetch_array($qpeg);
		
		$surat_keputusan_pangkat_terakhir = iif($rpeg['surat_keputusan_pangkat_terakhir']);
		$surat_nikah = iif($rpeg['surat_nikah']);
		$akta_kelahiran = iif($rpeg['akta_kelahiran']);
		$daftar_keluarga = iif($rpeg['daftar_keluarga']);
		$foto = iif($rpeg['foto']);
		$nip = $rpeg['nip'];
		
		$skpt = $rpeg['surat_keputusan_pangkat_terakhir'];
		$sn = $rpeg['surat_nikah'];
		$ak = $rpeg['akta_kelahiran'];
		$dk = $rpeg['daftar_keluarga'];
		$fo = $rpeg['foto']; 
		
			
		if($rpeg['status']=="0")
		{ $status = "<span class='btn btn-default btn-xs'> Di Tolak</span>"; }
		elseif($rpeg['status']=="1")
		{ $status = "<span class='btn btn-warning btn-xs'> Menunggu Di Verifikasi</span>"; }									
		elseif($rpeg['status']=="2")
		{ $status = "<span class='btn btn-success btn-xs'> Di Setujui</span>"; }
		
	?>
					
	  
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=pensiun">Data Pengajuan Pensiun</a></li>
                          <li class="active">Ubah Data Pengajuan Pensiun</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
				<?php if($rpeg['status']=='1'){ ?>
				<form action="<?php echo"$aksi?r=pensiun&act=ubah"; ?>" role="form" method="post" enctype="multipart/form-data">
				<?php } ?>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pengajuan Pensiun &nbsp; <?php echo $status; ?>
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">	
							  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">ID Pengajuan Pensiun</label>
                                      <div class="col-lg-6">
									  <input type="hidden" class="form-control" name="skpt" value="<?php echo $skpt; ?>" required>
									  <input type="hidden" class="form-control" name="sn" value="<?php echo $sn; ?>" required>
									  <input type="hidden" class="form-control" name="ak" value="<?php echo $ak; ?>" required>
									  <input type="hidden" class="form-control" name="dk" value="<?php echo $dk; ?>" required>
									  <input type="hidden" class="form-control" name="fo" value="<?php echo $fo; ?>" required>
									  
                                              <input type="hidden" class="form-control" name="idpensiun" 
											  value="<?php echo $idpensiun; ?>" required>
											  <input type="text" class="form-control" name="idhidden" 
											  value="<?php echo $idpensiun; ?>" readonly>
                                      </div>
                                  </div>							  
							      <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nip</label>
                                      <div class="col-lg-6">
                                              <input type="hidden" class="form-control" placeholder="Nip" name="nip" 
											  value="<?php echo $rpeg['nip']; ?>" required>
                                      		 <input type="text" class="form-control" placeholder="Nip" name="niphidden" 
											  value="<?php echo $rpeg['nip']; ?>" readonly>
										</div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggal Pengajuan</label>
                                      <div class="col-lg-4">
                                              <input type="hidden" class="form-control"  name="tanggal"
											  value="<?php echo $rpeg['tanggal']; ?>" required>
                                              <input type="text" class="form-control"  name="tanggalhidden"
											  value="<?php echo $rpeg['tanggal']; ?>" readonly>
                                      </div>
                                  </div>		  
								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Keterangan</label>
                                      <div class="col-lg-8">
                                        <textarea class="form-control" rows="6" name="keterangan" id="keterangan"  required><?php echo $rpeg['keterangan']; ?></textarea>
                                      </div>
                                  </div>
							</div>
						</div>
                      </section>
                  </div>
                  
                  <div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Kelengkapan Data Pengajuan Pensiun
                          </header>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>                                          
                                          <div class="task-title">
                                              <span class="task-title-sp">Surat Keputusan Pangkat Terakhir</span>
                                              <span class="badge badge-sm label-success"><?php echo $surat_keputusan_pangkat_terakhir; ?></span>
                                              <div class="pull-right hidden-phone">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="surat_keputusan_pangkat_terakhir" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Surat Nikah </span>
                                              <span class="badge badge-sm label-danger"><?php echo $surat_nikah; ?></span>
                                              <div class="pull-right hidden-phone">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="surat_nikah"/>
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Akta Kelahiran </span>
                                              <span class="badge badge-sm label-warning"><?php echo $akta_kelahiran; ?></span>
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default"  name="akta_kelahiran"/>
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Surat Daftar Keluarga Diketahui Kelurahan </span>
                                              <span class="badge badge-sm label-primary"><?php echo $daftar_keluarga; ?></span>
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="daftar_keluarga" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Foto Ukuran 3x4 Berwarna</span>
                                              <span class="badge badge-sm label-info"><?php echo $foto; ?></span>
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="foto" />
                                                </span>
                                                  <span class="fileupload-preview" style="margin-left:5px;"></span>
                                                  <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                                              </div>
                                          </div>
                                              </div>
                                          </div>
                                      </li>
								</ul>
                              </div>
                      </section>
                  </div>
              </div>  
			  <?php if($rpeg['status']=='1'){ ?>
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
				</form>
				<?php  } else if ($rpeg['status']=="2") { ?>
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12"> 
									<a class="btn btn-warning btn-sm pull-right" href="<?php echo"?r=pensiun&act=laporan&idpensiun=".$idpensiun; ?>">Cetak Surat Keputusan >></a>
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
<?php case "verifikasi": ?>

 <!--main content start-->
	  <?php
	  $tgl = date("m/d/Y");
	  $nip = $_GET['nip'];
	  $idpensiun = $_GET['id'];
	  ?>
	  <?php			  
		$qpeg=mysql_query("SELECT * FROM datapensiun where idpensiun='$idpensiun' ORDER BY id DESC ");
		$rpeg=mysql_fetch_array($qpeg);
		
		$tanggal = tgl_indo($rpeg['tanggal']);
		$tanggal_lahir = tgl_indo($rpeg['tanggal_lahir']);
		$tmt = tgl_indo($rpeg['tmt']);
		$keterangan = nl2br($rpeg['keterangan']);
		$nama = $rpeg['nama'];
		$unitkerja = $rpeg['unitkerja'];
		$golongan = $rpeg['gol'];
		$pangkat = $rpeg['jabatan'];
		
		$surat_keputusan_pangkat_terakhir = iif($rpeg['surat_keputusan_pangkat_terakhir']);
		$surat_nikah = iif($rpeg['surat_nikah']);
		$akta_kelahiran = iif($rpeg['akta_kelahiran']);
		$daftar_keluarga = iif($rpeg['daftar_keluarga']);
		$foto = iif($rpeg['foto']);
		
		if($rpeg['status']=="0")
		{ $status = "<span class='btn btn-default btn-xs'> Di Tolak</span>"; }
		elseif($rpeg['status']=="1")
		{ $status = "<span class='btn btn-warning btn-xs'> Menunggu Di Verifikasi</span>"; }									
		elseif($rpeg['status']=="2")
		{ $status = "<span class='btn btn-success btn-xs'> Di Setujui</span>"; }
		
									
	?>
					
	  
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=pensiun">Data Pengajuan Pensiun</a></li>
                          <li class="active">Verifikasi Data Pengajuan Pensiun</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div><form action="<?php echo"$aksi?r=pensiun&act=status"; ?>" role="form" method="post" enctype="multipart/form-data">
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pengajuan Pensiun &nbsp; <?php echo $status; ?>
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">	
							  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">ID Pengajuan Pensiun</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $idpensiun; ?>
                                      </div>
                                  </div>							  
							      <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nip</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $nip; ?>
                                      </div>
                                  </div><div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nama Pegawai</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $nama; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggal Lahir</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $tanggal_lahir; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Umur</label>
                                      <div class="col-lg-6 control-label">
									  <?php		
																										
										  $tgl2 = $rpeg['tanggal_lahir'];
					  					  $tgl1 = date("Y-m-d");
					  							
										  $a = datediff($tgl1, $tgl2);
										  $umur = $a['years']." Tahun";
										?>
										
									  <?php echo $umur; ?>
                                      </div>
                                  </div>
								  <hr />
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Unit Kerja</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $unitkerja; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Terhitung Mulai Kerja</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $tmt; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Golongan</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $golongan; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Pangkat / Jabatan</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $pangkat; ?>
                                      </div>
                                  </div>
								  <hr />
                                  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggal Pengajuan</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $tanggal; ?>
                                      </div>
                                  </div>		  
								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Keterangan</label>
                                      <div class="col-lg-6 control-label">
									  <?php echo $keterangan; ?>
                                      </div>
                                  </div>
							</div>
						</div>
                      </section>
                  </div>
                  <div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Kelengkapan Data Pengajuan Pensiun
                          </header>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>                                          
                                          <div class="task-title">
                                              <span class="task-title-sp">Surat Keputusan Pangkat Terakhir</span>
                                              <span class="badge badge-sm label-success"><?php echo $surat_keputusan_pangkat_terakhir; ?></span>
                                          </div>
                                      </li>

                                      <li class="list-danger">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Surat Nikah </span>
                                              <span class="badge badge-sm label-danger"><?php echo $surat_nikah; ?></span>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Akta Kelahiran </span>
                                              <span class="badge badge-sm label-warning"><?php echo $akta_kelahiran; ?></span>
                                          </div>
                                      </li>
                                      <li class="list-warning">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Surat Daftar Keluarga Diketahui Kelurahan </span>
                                              <span class="badge badge-sm label-primary"><?php echo $daftar_keluarga; ?></span>
                                          </div>
                                      </li>
                                      <li class="list-info">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Foto Ukuran 3x4 Berwarna</span>
                                              <span class="badge badge-sm label-info"><?php echo $foto; ?></span>
                                          </div>
									</li>
								</ul>
                              </div>
						  </div>
                      </section>
                  </div>
				  <?php
				  if($rpeg['status']=="1")
					{ ?>
                  <div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Hasil Verifikasi Pengajuan Pensiun
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">	
							  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Status Verifikasi</label>
                                      <div class="col-lg-6">
									  <select name='status' class='form-control m-bot15'>
										   <option value='2'>Di Setujui</option>
										   <option value='0'>Di Tolak</option>
									  </select>
                                      </div>
                                  </div>							  
							      <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Keterangan</label>
                                      <div class="col-lg-8">
									  <input type="hidden" class="form-control" name="nip" value="<?php echo $nip; ?>">
									  <input type="hidden" class="form-control" name="idpensiun" value="<?php echo $idpensiun; ?>">
									  <textarea class="form-control" rows="5" name="keterangan" id="keterangan"  required> </textarea>
                                      </div>
                                  </div>
								  <div class="form-group">  
								  <div class="col-lg-12"> 
									  <button type="submit" class="button-next  btn btn-success"> Simpan Data</button>&nbsp;
									  </div>
								  </div>							 
							</div>
						  </div>
                      </section>
                  </div>
				  <?php } ?>
              </div>  
			  
				</form>
				<?php if ($rpeg['status']=="2") { ?>
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12"> 
									<a class="btn btn-success btn-sm pull-right" href="<?php echo"?r=pensiun&act=laporan&idpensiun=".$idpensiun; ?>">Cetak Surat Keputusan >></a>
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
<?php case "laporan": ?>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Surat Keputusan Pemberhentian Dengan Horman ( Pensiun ) Pegawai
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
			<?php 
				
				$tglskrg = date('dMy'); 
				$nomorsurat = "SULSEL/".date('m')."-".date('Y'); 
				$idpensiun = $_GET['idpensiun'];
				
				$kuery = "SELECT * FROM datapensiun where idpensiun='$idpensiun' and status='2' ORDER BY id DESC";
				$qsurat = mysql_query($kuery);
				$rsurat = mysql_fetch_array($qsurat);
					
				$tgl2 = $rsurat['tmt'];
				$tgl1 = $rsurat['tanggal'];
					
				$a = datediff($tgl1, $tgl2);
				$tahun = $a['years'];
				$tbulan = $a['months'];
				if($tahun==0){$tahun=1;}
				
				$nama = strtoupper($rsurat['nama']);
				$nip = $rsurat['nip'];
				$gol = $rsurat['gol'];
				$jabatan = strtoupper($rsurat['jabatan']);	
				$alamat = strtoupper($rsurat['tempat_tinggal']);	
				$tempat_lahir = strtoupper($rsurat['tempat_lahir']);
				$tanggal_lahir = tgl_indo($rsurat['tanggal_lahir']);
				$tanggal_pensiun = tgl_indo($rsurat['tanggal']);
				$gaji = "Rp. ".format_rupiah(masakerja($tahun,$gol));
				
				$u = datediff($rsurat['tanggal'], $rsurat['tanggal_lahir']);
				$umur = $u['years'];
				
				
			?>
			<table width="1000" align="center" cellpadding="0" cellspacing="0">
			  <col width="174" />
			  <col width="37" />
			  <col width="43" />
			  <col width="473" />
			  <tr height="25">
				<td colspan="4" height="25"><div align="center"><img src="img/surat/kop.png" width="88" height="105" /></div></td>
			  </tr>
			  <tr height="25">
				<td colspan="4" height="25"><div align="center"><strong>KEPUTUSAN DIREKSI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></div></td>
			  </tr>
			  <tr height="25">
				<td colspan="4" height="25"><div align="center"><strong>Nomor : KPP/PENSIUN/&nbsp;&nbsp;&nbsp;&nbsp; /<?php echo"$nomorsurat"; ?></strong></div></td>
			  </tr>
			  <tr height="21">
				<td colspan="4" height="21"><div align="center"><strong>Tentang</strong></div></td>
			  </tr>
			  <tr height="20">
				<td width="158" height="20"></td>
				<td width="67"></td>
				<td width="46"></td>
				<td width="819"></td>
			  </tr>
			  <tr height="73">
				<td colspan="4" height="73"><div align="center"><strong>PEMBERHENTIAN DENGAN HORMAT DENGAN HAK PENSIUN PEGAWAI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN ATAS NAMA <?php echo $nama; ?>&nbsp; (NIP. <?php echo $nip; ?> ) JABATAN TERAKHIR <?php echo $jabatan; ?></strong></div></td>
			  </tr>
			  <tr height="20">
				<td height="20"><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td><div align="center"></div></td>
				<td width="819"><div align="center"></div></td>
			  </tr>
			  <tr height="21">
				<td colspan="4" height="21"><div align="center"><strong>KEPALA DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></div></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"><strong>MENIMBANG</strong></td>
				<td><strong>:</strong></td>
				<td><strong>a.</strong></td>
				<td rowspan="4" width="819">Bahwa <?php echo "<b>$nama</b>"; ?> tersebut menurut KepMenDikNas.DPB.70/96/9, tanggal 31 Mei 1977,    tentang pengangkatannya sebagai pegawai Dinas Pendidikan Sulawesi Selatan, dilahirkan di <?php echo "<b>$tempat_lahir</b>"; ?> pada tanggal <?php echo "<b>$tanggal_lahir</b>"; ?> dan pada tanggal <?php echo "<b>$tanggal_pensiun</b>"; ?> telah berusia <?php echo "<b>$umur Tahun</b>"; ?> serta menurut bukti-bukti yang sah memiliki masa kerja pensiun sebanyak <?php echo "<b>$tahun Tahun $tbulan Bulan</b>"; ?> sehingga berdasarkan Pasal 29 ayat (1) Keputusan KEPALA Dinas Pendidikan Sulawesi Selatan 1156/2/35/PI.II-1997, berhak menerima pensiun</td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td><strong>b.</strong></td>
				<td rowspan="2" width="819">Bahwa gaji pokok terakhir yang bersangkutan adalah <?php echo "<b>$gaji</b>"; ?> sesuai Keputusan Kepala Dinas Pendidikan Provinsi Sulawesi Selatan Nomor KP.11/18/4/P.I-1997, tanggal 18 september 1997, tentang  Penyesuaian Gaji Pokok Karyawan atas nama Sdr. <?php echo "<b>$nama Nip. $nip</b>"; ?></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"><strong>MENGINGAT</strong></td>
				<td><strong>:</strong></td>
				<td><strong>1.</strong></td>
				<td width="819">Peraturan Pemerintah Nomor 56 Tahun 1991, tanggal 19 Oktober 1991, tentang Bentuk Perusahaan Dinas Pendidikan Provinsi Sulawesi Selatan</td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td><strong>2.</strong></td>
				<td width="819">Peraturan Pemerintah Nomor 70 Tahun 1996, tanggal 04 Desember 1996, tentang Pendidikan </td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"><strong>MEMPERHATIKAN</strong></td>
				<td><strong>:</strong></td>
				<td><strong>1.</strong></td>
				<td rowspan="2" width="819">Akte Pendirian/Anggaran Dasar Dinas Pendidikan Provinsi Sulawesi Selatan Nomor 1 sebagaimana dimuat dalam Tambahan Berita Negara RI tanggal 1 Nopember 1994 Nomor 872</td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td><strong>2.</strong></td>
				<td width="819">Surat Permohonan berhenti dengan hak pensiun tanggal <?php echo "<b>$tanggal_pensiun</b>"; ?> yang diajukan Sdr. <?php echo "<b>$nama</b>"; ?>    dengan alamat rumah sesudah pensiun : <?php echo "<b>$alamat</b>"; ?> </td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="21">
				<td colspan="4" height="21"><div align="center"><strong>MEMUTUSKAN</strong></div></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"><strong>MENETAPKAN</strong></td>
				<td><strong>:</strong></td>
				<td></td>
				<td rowspan="2" width="819">KEPUTUSAN KEPALA DINAS    PENDIDIKAN PROVINSI SULAWESI SELATAN TENTANG PEMBERHENTIAN DENGAN HORMAT    DENGAN HAK PENSIUN PEGAWAI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN ATAS    NAMA SDR. <?php echo "<b>$nama (NIP $nip)</b>"; ?> JABATAN TERAKHIR <?php echo "<b>$jabatan</b>"; ?></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"><strong>PERTAMA</strong></td>
				<td><strong>:</strong></td>
				<td></td>
				<td rowspan="2" width="819">Terhitung mulai tanggal <?php echo "<b>$tanggal_pensiun</b>"; ?> memberhentikan dengan hormat sebagai pegawai Dinas Pendidikan Kantor Pusat dengan hak pensiun atas nama Sdr. <?php echo "<b>$nama (NIP $nip)</b>"; ?> JABATAN terakhir <?php echo "<b>$jabatan</b>"; ?> karena telah mencapai batas  usia pensiun, dengan ucapan terima kasih atas jasa-jasanya selama bekerja sebagai pegawai perusahaan</td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"><strong>KEDUA</strong></td>
				<td><strong>:</strong></td>
				<td></td>
				<td width="819">Kepada Sdr. <?php echo "<b>$nama (NIP $nip)</b>"; ?> jabatan terakhir <?php echo "<b>$jabatan</b>"; ?> diberikan Pensiun Pokok sebesar <?php echo "<b>$gaji</b>"; ?> perbulan terhitung mulai <?php echo "<b>$tanggal_pensiun</b>"; ?>, dengan alamat <?php echo "<b>$alamat</b>"; ?></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"><strong>KETIGA</strong></td>
				<td><strong>:</strong></td>
				<td></td>
				<td width="819">Uang pensiun sebagaimana yang dimaksud dalam Diktum KEDUA Keputusan ini dibayarkan oleh Dana Pensiun (DP4) melalui alamat yang bersangkutan: <?php echo "<b>$alamat</b>"; ?></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td><div align="center"><strong>KEPALA DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></div></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"><div align="center"><strong>KEPALA DINAS</strong></div></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"><div align="center"><strong>_____________________________</strong></div></td>
			  </tr>
			  <tr height="20">
				<td height="20"></td>
				<td></td>
				<td></td>
				<td width="819"></td>
			  </tr>
			</table>				  
                                </div>
                          </div>
                      </section>
                  </div>
				</div>
				<div class=" add-task-row">
				  <a class="btn btn-danger btn-sm pull-left" href="?r=pensiun"><< Kembali</a>
				  <a class="btn btn-danger btn-sm pull-right" href="<?php echo"pdf/skpensiun.php?act=laporan&idpensiun=".$idpensiun; ?>" target="_blank">Save As PDF</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-success btn-sm pull-right" href="<?php echo"skpensiun.php?act=laporan&idpensiun=".$idpensiun; ?>" target="_blank">Cetak Laporan >></a>
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
	 <?php } ?>