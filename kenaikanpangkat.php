<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/kenaikanpangkat.php";
     
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
                          <li class="active">Data Pengajuan Kenaikan Pangkat</li>
                      </ul>
                      <!--breadcrumbs end -->
                      <section class="panel">
                          <header class="panel-heading">
                              Data Tabel Pengajuan Kenaikan Pangkat
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
										  <div class='btn-group'><a href='?r=kenaikanpangkat&act=baru'>
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
									$qpeg = mysql_query("SELECT * FROM data_kenaikanpangkat where nip='$session_username' ORDER BY id DESC");
									}else{
									$qpeg = mysql_query("SELECT * FROM data_kenaikanpangkat ORDER BY id DESC");
									}
									
									while($rpeg=mysql_fetch_array($qpeg))
									{ 
								    $no++;
									$idkenaikanpangkat = $rpeg['idpangkat'];
									$nama = $rpeg['user'];
									$nip = $rpeg['nip'];
									$gol = $rpeg['gollama']."<br>".$rpeg['pangkatlama'];
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
                                          <td class='hidden-phone'><center>$status</center></td>
                                          <td>";
										  echo"<a href='?r=kenaikanpangkat&act=ubah&nip=$nip&id=$idkenaikanpangkat'>
										  <button class='btn btn-warning btn-xs'><i class='fa fa-edit'> Ubah</i></button></a>";						 
										  if(strtolower($_SESSION['leveluser'])=="sub bagian kepegawaian")
										  {
										  echo"<a href='?r=kenaikanpangkat&act=verifikasi&nip=$nip&id=$idkenaikanpangkat'>
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
	  $idpangkat = "GOL - ".randomtiket(6);
	  
	  $qpeg=mysql_query("SELECT * FROM peg_datapribadi where nip='$session_username' ORDER BY id DESC ");
	  $rpeg=mysql_fetch_array($qpeg);
	  $tgl2 = $rpeg['tmtbaru'];
	  $golongan = $rpeg['golbaru'];
	  $pangkat = $rpeg['jabatanbaru'];
	  $tmtlama = $rpeg['tmt'];
	  
	  $tgl1 = date("Y-m-d");					  							
	  $a = datediff($tgl1, $tgl2);
	  $tahun = $a['years'];
	  ?>
	  <?php if($tahun >= '4'){ ?>
	  <form action="<?php echo"$aksi?r=kenaikanpangkat&act=baru"; ?>" role="form" method="post" enctype="multipart/form-data">
	  <?php } ?>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=kenaikanpangkat">Data Pengajuan Kenaikan Pangkat</a></li>
                          <li class="active">Tambah Data Pengajuan Kenaikan Pangkat</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pengajuan Kenaikan Pangkat
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">ID Pengajuan</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="idkenaikanpangkat" value="<?php echo $idpangkat; ?>" >
									  <?php echo $idpangkat; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nip Pegawai</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="nip" value="<?php echo $session_username; ?>" >
									  <?php echo $session_username; ?>
                                      </div>
                                  </div>
							  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nama Pegawai</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="nama" value="<?php echo $session_nama; ?>" >
									  <?php echo $session_nama; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Golongan Lama</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="golonganlama" value="<?php echo $golongan; ?>" >
									  <?php echo $golongan; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Pangkat Lama</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="pangkatlama" value="<?php echo $pangkat; ?>" >
									  <input type="hidden" class="form-control"  name="tmtlama" value="<?php echo $tmtlama; ?>" >
									  <?php echo $pangkat; ?>
                                      </div>
                                  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggal Pengajuan</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="tanggal" value="<?php echo $tgl; ?>" >
									  <?php echo $tgl; ?>
                                      </div>
                                  </div>
								  <hr />  
								  
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
                              Pengajuan Kenaikan Pangkat &amp; Golongan
                          </header>
                           <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Golongan Baru</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="golbaru" value="<?php echo golonganbaru($golongan); ?>" >
									  <?php echo "<b>".golonganbaru($golongan)."</b>"; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Pangkat Baru</label>
                                      <div class="col-lg-8 control-label">
									  <input type="text" class="form-control" name="pangkatbaru" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-12 col-sm-12 control-label center"><i><b>Anda Telah Menjalani Masa Kerja Dengan Gol. <?php echo"$golongan"; ?> Selama <?php echo"$tahun Tahun"; ?></b></i></label>
                                      
                                  </div>
                      </section>
                  </div><div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Kelengkapan Data Pengajuan Kenaikan Pangkat
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
                                              <span class="task-title-sp"> Minimal Telah Menjalani Selama 4 Tahun Pangkat Sebelumnya </span>
                                              <div class="pull-right hidden-phone">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Nilai SKP (Penilaian Terakhir) Diatas Rata - Rata </span>
                                              
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      
								</ul>
                              </div>
                      </section>
                  </div>
              </div> 
			  <?php if($tahun >= '4'){ ?>
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12">
									  <div class="form-group">  
									  
										  <button type="submit" class="button-next  btn btn-success"> Ajukan Kenaikan Pangkat</button>&nbsp;
									  
									  </div>
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
	  <?php if($tahun >= '4'){ ?>
	  </form>
	  <?php } ?>
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
	  $tgl = date("Y-m-d");
	  $idpangkat = $_GET['id'];
	  
	  $qpeg=mysql_query("SELECT * FROM data_kenaikanpangkat where idpangkat='$idpangkat' ORDER BY id DESC ");
	  $rpeg=mysql_fetch_array($qpeg);
	  
	  $tgl2 = $rpeg['tmtlama'];
	  $golongan = $rpeg['gollama'];
	  $pangkat = $rpeg['pangkatlama'];
	  
	  $user = $rpeg['user'];
	  $nip = $rpeg['nip'];
	  $golonganbaru = $rpeg['golbaru'];
	  $pangkatbaru = $rpeg['pangkatbaru'];
	  
	  $keterangan = $rpeg['keterangan'];
	  $surat_keputusan_pangkat_terakhir = iif($rpeg['sk_terakhir']);
	  
	  	$kesetiaan = $rpeg['kesetiaan'];
		$prestasi = $rpeg['prestasi'];
		$tanggungjawab = $rpeg['tanggungjawab'];
		$ketaatan = $rpeg['ketaatan'];
		$kejujuran = $rpeg['kejujuran'];
		$kerjasama = $rpeg['kerjasama'];
		$prakarsa = $rpeg['prakarsa'];
		$kepemimpinan = $rpeg['kepemimpinan'];
		
		$nilaikerja = ($kesetiaan + $prestasi + $tanggungjawab + $ketaatan + $kejujuran + $kerjasama + $prakarsa + $kepemimpinan)/8;
		if($nilaikerja >= 91)
		{ $penilaian = "h2><font color='#05B905'> Amat Baik - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-success fade in'>
						<strong>Data Dapat Proses !</strong> Penilaian Kinerja Telah Memenuhi Persyaratan.
						</div>" ; }
		else if($nilaikerja >= 76)
		{ $penilaian = "<h2><font color='#05B905'> Baik - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-success fade in'>
						<strong>Data Dapat Proses !</strong> Penilaian Kinerja Telah Memenuhi Persyaratan.
						</div>" ; }
		else if($nilaikerja >= 61)
		{ $penilaian = "<h2><font color='#FFD000'> Cukup - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-danger fade in'>
						<strong>Gagal Di Proses !</strong> Penilaian Kinerja Tidak Memenuhi Persyaratan.
						</div>" ; 
		}
		else if($nilaikerja >= 51)
		{ $penilaian = "<h2><font color='#FFD000'> Sedang - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-danger fade in'>
						<strong>Gagal Di Proses !</strong> Penilaian Kinerja Tidak Memenuhi Persyaratan.
						</div>" ; }
		else if($nilaikerja <= 50)
		{ $penilaian = "<h2><font color='#FF0000'> Kurang - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-danger fade in'>
						<strong>Gagal Di Proses !</strong> Penilaian Kinerja Tidak Memenuhi Persyaratan.
						</div>" ; }

		if($rpeg['status']=="0")
		{ $status = "<span class='btn btn-default btn-xs'> Di Tolak</span>"; }
		elseif($rpeg['status']=="1")
		{ $status = "<span class='btn btn-warning btn-xs'> Menunggu Di Verifikasi</span>"; }									
		elseif($rpeg['status']=="2")
		{ $status = "<span class='btn btn-success btn-xs'> Di Setujui</span>"; }
		
									
	  $tgl1 = date("Y-m-d");					  							
	  $a = datediff($tgl1, $tgl2);
	  $tahun = $a['years'];
	  ?>
	  <?php if($tahun >= '4'){
	  if($rpeg['status']=='1'){ ?>
	  <form action="<?php echo"$aksi?r=kenaikanpangkat&act=ubah"; ?>" role="form" method="post" enctype="multipart/form-data">
	  <?php }
	  } ?>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=kenaikanpangkat">Data Pengajuan Kenaikan Pangkat</a></li>
                          <li class="active">Ubah Data Pengajuan Kenaikan Pangkat</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pengajuan Kenaikan Pangkat &nbsp; <?php echo $status; ?>
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">ID Pengajuan</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="idkenaikanpangkat" value="<?php echo $idpangkat; ?>" >
									  <?php echo $idpangkat; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nip Pegawai</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="nip" value="<?php echo $nip; ?>" >
									  <?php echo $nip; ?>
                                      </div>
                                  </div>
							  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nama Pegawai</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="nama" value="<?php echo $user; ?>" >
									  <?php echo $user; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Golongan Lama</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="golonganlama" value="<?php echo $golongan; ?>" >
									  <?php echo $golongan; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Pangkat Lama</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="pangkatlama" value="<?php echo $pangkat; ?>" >
									  <input type="hidden" class="form-control"  name="tmtlama" value="<?php echo $tmtlama; ?>" >
									  <?php echo $pangkat.$tmtlama; ?>
                                      </div>
                                  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggal Pengajuan</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="tanggal" value="<?php echo $tgl; ?>" >
									  <?php echo $tgl; ?>
                                      </div>
                                  </div>
								  <hr />  
								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Keterangan</label>
                                      <div class="col-lg-8">
                                        <textarea class="form-control" rows="6" name="keterangan" id="keterangan"  required><?php echo $keterangan; ?></textarea>
                                      </div>
                                  </div>
							</div>
						</div>
                      </section>
                  </div>
                  
                  <div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Pengajuan Kenaikan Pangkat &amp; Golongan
                          </header>
                           <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Golongan Baru</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="golbaru" value="<?php echo $golonganbaru; ?>" >
									  <?php echo "<b>".$golonganbaru."</b>"; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Pangkat Baru</label>
                                      <div class="col-lg-8 control-label">
									  <input type="text" class="form-control" name="pangkatbaru" value="<?php echo $pangkatbaru; ?>">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-12 col-sm-12 control-label center"><i><b>Anda Telah Menjalani Masa Kerja Dengan Gol. <?php echo"$golongan"; ?> Selama <?php echo"$tahun Tahun"; ?></b></i></label>
                                      
                                  </div>
                      </section>
                  </div><div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Kelengkapan Data Pengajuan Kenaikan Pangkat
                          </header>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>                                          
                                          <div class="task-title">
                                              <span class="task-title-sp">Surat Keputusan Pangkat Terakhir</span>
                                              <span class="badge badge-sm label-success"><?php echo $surat_keputusan_pangkat_terakhir ; ?></span>
                                              <div class="pull-right hidden-phone">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="surat_keputusan_pangkat_terakhir" />												
									  			<input type="hidden" class="form-control" name="skpt" 
												value="<?php echo $rpeg['sk_terakhir']; ?>" required>
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
                                              <span class="task-title-sp"> Minimal Telah Menjalani Selama 4 Tahun Pangkat Sebelumnya </span>
                                              <div class="pull-right hidden-phone">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Nilai SKP (Penilaian Terakhir) Diatas Rata - Rata </span>
                                              
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      
								</ul>
                              </div>
                      </section>
                  </div>
              </div> 
			  
			  <div class="row"><?php if(strtolower($leveluser) != "pegawai"){ ?>
			  <div class="col-md-12">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Penilaian Kinerja Pegawai
                          </header>
					   </section>
			</div>
                  <div class="col-md-6">
                      <section class="panel tasks-widget">
                           <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kesetiaan (Loyalitas)</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="kesetiaan" maxlength="3" value="<?php echo $kesetiaan; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Prestasi Kerja</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="prestasi" maxlength="3" value="<?php echo $prestasi; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggung Jawab</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="tanggungjawab" maxlength="3" value="<?php echo $tanggungjawab; ?>"  >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Ketaatan</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="ketaatan" maxlength="3" value="<?php echo $ketaatan; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kejujuran</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="kejujuran" maxlength="3" value="<?php echo $kejujuran; ?>" >
                                      </div>
                                  </div>
                      </section>
                  </div>
				  <?php } ?>		
				  <div class="col-md-6">
                      <section class="panel tasks-widget">
                           <div class="panel-body">
                              <div class="form-horizontal">		
							  <?php if(strtolower($leveluser) != "pegawai"){ ?>					  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kerjasama</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="kerjasama" maxlength="3" value="<?php echo $kerjasama; ?>"  >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Prakarsa</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="prakarsa" maxlength="3" value="<?php echo $prakarsa; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kepemimpinan</label>
                                      <div class="col-lg-2">
									<input type="text" class="form-control" name="kepemimpinan" maxlength="3" value="<?php echo $kepemimpinan; ?>"  >
                                      </div>
                                  </div>	
								  <hr />	
								  <?php } ?>						  
								  <div class="form-group">
                                      <label  class="col-lg-12 col-sm-12 control-label"><i><b>Hasil Penilaian Pelaksanaan Pekerjaan Adalah : </b></i>
									  <br />
									  <h2><?php echo $penilaian ; ?></h2></label>
                                  </div>
                      </section>
                  </div>
				  </div>
			  <?php if($tahun >= '4'){ 
			  		if($rpeg['status']=="1"){ ?>
			  	
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
				<?php }
				} ?>
				<?php if ($rpeg['status']=="2") { ?>
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12"> 
									<a class="btn btn-success btn-sm pull-right" href="<?php echo"?r=kenaikanpangkat&act=laporan&idpangkat=".$idpangkat; ?>">Cetak Surat Keputusan >></a>
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
	  <?php if($tahun >= '4'){
	  if($rpeg['status']=='1'){ ?>
	  </form>
	  <?php }
	  } ?>
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
	  $tgl = date("Y-m-d");
	  $idpangkat = $_GET['id'];
	  
	  $qpeg=mysql_query("SELECT * FROM data_kenaikanpangkat where idpangkat='$idpangkat' ORDER BY id DESC ");
	  $rpeg=mysql_fetch_array($qpeg);
	  
	  $tgl2 = $rpeg['tmtlama'];
	  $golongan = $rpeg['gollama'];
	  $user = $rpeg['user'];
	  $tmtlama = $rpeg['tmtlama'];
	  $nip = $rpeg['nip'];
	  $pangkat = $rpeg['pangkatlama'];
	  
	  $golonganbaru = $rpeg['golbaru'];
	  $pangkatbaru = $rpeg['pangkatbaru'];
	  
	  $keterangan = $rpeg['keterangan'];
	  $surat_keputusan_pangkat_terakhir = iif($rpeg['sk_terakhir']);
	  
	  	$kesetiaan = $rpeg['kesetiaan'];
		$prestasi = $rpeg['prestasi'];
		$tanggungjawab = $rpeg['tanggungjawab'];
		$ketaatan = $rpeg['ketaatan'];
		$kejujuran = $rpeg['kejujuran'];
		$kerjasama = $rpeg['kerjasama'];
		$prakarsa = $rpeg['prakarsa'];
		$kepemimpinan = $rpeg['kepemimpinan'];
		
		$nilaikerja = ($kesetiaan + $prestasi + $tanggungjawab + $ketaatan + $kejujuran + $kerjasama + $prakarsa + $kepemimpinan)/8;
		if($nilaikerja >= 91)
		{ $penilaian = "h2><font color='#05B905'> Amat Baik - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-success fade in'>
						<strong>Data Dapat Proses !</strong> Penilaian Kinerja Telah Memenuhi Persyaratan.
						</div>" ; }
		else if($nilaikerja >= 76)
		{ $penilaian = "<h2><font color='#05B905'> Baik - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-success fade in'>
						<strong>Data Dapat Proses !</strong> Penilaian Kinerja Telah Memenuhi Persyaratan.
						</div>" ; }
		else if($nilaikerja >= 61)
		{ $penilaian = "<h2><font color='#FFD000'> Cukup - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-danger fade in'>
						<strong>Gagal Di Proses !</strong> Penilaian Kinerja Tidak Memenuhi Persyaratan.
						</div>" ; 
		}
		else if($nilaikerja >= 51)
		{ $penilaian = "<h2><font color='#FFD000'> Sedang - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-danger fade in'>
						<strong>Gagal Di Proses !</strong> Penilaian Kinerja Tidak Memenuhi Persyaratan.
						</div>" ; }
		else if($nilaikerja <= 50)
		{ $penilaian = "<h2><font color='#FF0000'> Kurang - ".$nilaikerja."</font></h2>
						<div class='alert alert-block alert-danger fade in'>
						<strong>Gagal Di Proses !</strong> Penilaian Kinerja Tidak Memenuhi Persyaratan.
						</div>" ; }

	  if($rpeg['status']=="0")
		{ $status = "<span class='btn btn-default btn-xs'> Di Tolak</span>"; }
		elseif($rpeg['status']=="1")
		{ $status = "<span class='btn btn-warning btn-xs'> Menunggu Di Verifikasi</span>"; }									
		elseif($rpeg['status']=="2")
		{ $status = "<span class='btn btn-success btn-xs'> Di Setujui</span>"; }
		
									
	  $tgl1 = date("Y-m-d");					  							
	  $a = datediff($tgl1, $tgl2);
	  $tahun = $a['years'];
	  ?>
	  <?php if($tahun >= '4'){ ?>
	  <form action="<?php echo"$aksi?r=kenaikanpangkat&act=verifikasi"; ?>" role="form" method="post" enctype="multipart/form-data">
	  <?php } ?>
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
			   <div class="row">
                  <div class="col-lg-12">
				  <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                          <li><a href="index.php?r=kenaikanpangkat">Data Pengajuan Kenaikan Pangkat</a></li>
                          <li class="active">Verifikasi Data Pengajuan Kenaikan Pangkat</li>
                      </ul>
                      <!--breadcrumbs end -->
                      
					</div>
				</div>
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Pribadi Pengajuan Kenaikan Pangkat &nbsp; <?php echo $status; ?>
                          </header>
                          <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">ID Pengajuan</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="idkenaikanpangkat" value="<?php echo $idpangkat; ?>" >
									  <?php echo $idpangkat; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nip Pegawai</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="nip" value="<?php echo $nip; ?>" >
									  <?php echo $nip; ?>
                                      </div>
                                  </div>
							  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Nama Pegawai</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="nama" value="<?php echo $user; ?>" >
									  <?php echo $user; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Golongan Lama</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="golonganlama" value="<?php echo $golongan; ?>" >
									  <?php echo $golongan; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Pangkat Lama</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="pangkatlama" value="<?php echo $pangkat; ?>" >
									  <input type="hidden" class="form-control"  name="tmtlama" value="<?php echo $tmtlama; ?>" >
									  <?php echo $pangkat; ?>
                                      </div>
                                  </div>								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggal Pengajuan</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control"  name="tanggal" value="<?php echo $tgl; ?>" >
									  <?php echo $tgl; ?>
                                      </div>
                                  </div>
								  <hr />  
								  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Keterangan</label>
                                      <div class="col-lg-8">
                                        <textarea class="form-control" rows="6" name="keterangan" id="keterangan"  required><?php echo $keterangan; ?></textarea>
                                      </div>
                                  </div>
							</div>
						</div>
                      </section>
                  </div>
                  
                  <div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Pengajuan Kenaikan Pangkat &amp; Golongan
                          </header>
                           <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Golongan Baru</label>
                                      <div class="col-lg-6 control-label">
									  <input type="hidden" class="form-control" name="golbaru" value="<?php echo $golonganbaru; ?>" >
									  <?php echo "<b>".$golonganbaru."</b>"; ?>
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Pangkat Baru</label>
                                      <div class="col-lg-8 control-label">
									  <input type="text" class="form-control" name="pangkatbaru" value="<?php echo $pangkatbaru; ?>">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-12 col-sm-12 control-label center"><i><b>Anda Telah Menjalani Masa Kerja Dengan Gol. <?php echo"$golongan"; ?> Selama <?php echo"$tahun Tahun"; ?></b></i></label>
                                      
                                  </div>
                      </section>
                  </div><div class="col-md-6">
                      <section class="panel tasks-widget">
                          <header class="panel-heading">
                              Kelengkapan Data Pengajuan Kenaikan Pangkat
                          </header>
                          <div class="panel-body">
                              <div class="task-content">
                                  <ul id="sortable" class="task-list">
                                      <li class="list-primary">
                                          <i class=" fa fa-ellipsis-v"></i>                                          
                                          <div class="task-title">
                                              <span class="task-title-sp">Surat Keputusan Pangkat Terakhir</span>
                                              <span class="badge badge-sm label-success"><?php echo $surat_keputusan_pangkat_terakhir ; ?></span>
                                              <div class="pull-right hidden-phone">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="icon-paper-clip"></i> Select file</span>
                                                <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                                <input type="file" class="default" name="surat_keputusan_pangkat_terakhir" />												
									  			<input type="hidden" class="form-control" name="skpt" 
												value="<?php echo $rpeg['sk_terakhir']; ?>" required>
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
                                              <span class="task-title-sp"> Minimal Telah Menjalani Selama 4 Tahun Pangkat Sebelumnya </span>
                                              <div class="pull-right hidden-phone">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      <li class="list-success">
                                          <i class=" fa fa-ellipsis-v"></i>
                                          <div class="task-title">
                                              <span class="task-title-sp"> Nilai SKP (Penilaian Terakhir) Diatas Rata - Rata </span>
                                              
                                              <div class="pull-right hidden-phone">
											  <div class="fileupload fileupload-new" data-provides="fileupload">
                                                
                                              </div>
                                              </div>
                                          </div>
                                      </li>
                                      
								</ul>
                              </div>
                      </section>
                  </div>
              </div> 
			  <?php if(strtolower($leveluser) != "pegawai"){ ?>
			  <div class="row">
			      <div class="col-md-6">
                      <section class="panel tasks-widget">
					  <header class="panel-heading">
                              Penilaian Kinerja Pegawai
                          </header>
                           <div class="panel-body">
                              <div class="form-horizontal">							  
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kesetiaan (Loyalitas)</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="kesetiaan" maxlength="3" value="<?php echo $kesetiaan; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Prestasi Kerja</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="prestasi" maxlength="3" value="<?php echo $prestasi; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Tanggung Jawab</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="tanggungjawab" maxlength="3" value="<?php echo $tanggungjawab; ?>"  >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Ketaatan</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="ketaatan" maxlength="3" value="<?php echo $ketaatan; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kejujuran</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="kejujuran" maxlength="3" value="<?php echo $kejujuran; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kerjasama</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="kerjasama" maxlength="3" value="<?php echo $kerjasama; ?>"  >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Prakarsa</label>
                                      <div class="col-lg-2">
									  <input type="text" class="form-control" name="prakarsa" maxlength="3" value="<?php echo $prakarsa; ?>" >
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label  class="col-lg-4 col-sm-4 control-label">Kepemimpinan</label>
                                      <div class="col-lg-2">
									<input type="text" class="form-control" name="kepemimpinan" maxlength="3" value="<?php echo $kepemimpinan; ?>"  >
                                      </div>
                                  </div>	
                      </section>
                  </div>
				  <div class="col-md-6">
                      <section class="panel tasks-widget">
					  	<header class="panel-heading">
                              Hasil Verifikasi Pengajuan Kenaikan Pangkat
                          </header>
                           <div class="panel-body">
                              <div class="form-horizontal">						  
								  <div class="form-group">
                                      <label  class="col-lg-12 col-sm-12 control-label"><i><b>Hasil Penilaian Pelaksanaan Pekerjaan Adalah : </b></i>
									  <br />
									  <?php echo $penilaian ; ?></label>
                                  </div>
								  <hr />
								  <?php if($nilaikerja > 75){ ?>
								  	<?php if($rpeg['status'] == "1"){ ?>
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
										  <textarea class="form-control" rows="5" name="keterangan" id="keterangan" required> </textarea>
										  </div>
									  </div>	
								  	<?php } ?>
								  <?php }else{ ?>
								  <input type="hidden" name="status" maxlength="3" value="1" >
								  <input type="hidden" name="keterangan" value="" >
								 <?php } ?>
                      </section>
                  </div>
				  </div>
			  <?php } if($tahun >= '4'){ ?>
			  <?php if ($rpeg['status']=="1") { ?>
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
				<?php }
				} ?>
				<?php if ($rpeg['status']=="2") { ?>
				<div class="row">
                  <div class="col-lg-12">
                      <section class="panel">                          
                          <div class="panel-body">                              
                                  <div class="col-lg-12"> 
									<a class="btn btn-success btn-sm pull-right" href="<?php echo"?r=kenaikanpangkat&act=laporan&idpangkat=".$idpangkat; ?>">Cetak Surat Keputusan >></a>
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
	  <?php if($tahun >= '4'){ ?>
	  </form>
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
                              Surat Keputusan Kenaikan Pangkat Pegawai
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
			<?php 
					
					$tglskrg = date('dMy'); 
					$nomorsurat = "SULSEL/".date('m')."-".date('Y'); 
					$idpangkat = $_GET['idpangkat'];
					
					$kuery = "SELECT k.*, p.tempat_lahir tempat_lahir, p.tanggal_lahir tanggal_lahir, p.tempat_tinggal tempat_tinggal 
							FROM data_kenaikanpangkat k, peg_datapribadi p where k.idpangkat='$idpangkat' and k.status='2' 
							and k.nip=p.nip ORDER BY k.id DESC";
					$qsurat = mysql_query($kuery);
					$rsurat = mysql_fetch_array($qsurat);
						
					$tgl2 = $rsurat['tmtlama'];
					$tgl1 = $rsurat['tanggal'];
						
					$a = datediff($tgl1, $tgl2);
					$tahun = $a['years'];
					$tbulan = $a['months'];
					if($tahun==0){$tahun=1;}
					
					$nama = strtoupper($rsurat['user']);
					$nip = $rsurat['nip'];
					$gollama = $rsurat['gollama'];
					$tmtlama = $rsurat['tmtlama'];
					$pangkatlama = strtoupper($rsurat['pangkatlama']);
					
					$golbaru = $rsurat['golbaru'];
					$pangkatbaru = strtoupper($rsurat['pangkatbaru']);
				
					$alamat = strtoupper($rsurat['tempat_tinggal']);	
					$tempat_lahir = strtoupper($rsurat['tempat_lahir']);
					$tanggal_lahir = tgl_indo($rsurat['tanggal_lahir']);
					$tanggal_pengajuan = tgl_indo($rsurat['tanggal']);
					$gaji = "Rp. ".format_rupiah(masakerja($tahun,$golbaru));
					
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
					<td colspan="4" height="25"><div align="center"><strong>Nomor :&nbsp;&nbsp;&nbsp;&nbsp;/SK-PJ/<?php echo"$nomorsurat"; ?></strong></div></td>
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
					<td colspan="4" height="26"><div align="center"><strong>KENAIKAN PANGKAT DAN JABATAN  PEGAWAI DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN </strong></div></td>
				  </tr>
				  <tr height="20">
					<td height="20"><div align="center"></div></td>
					<td><div align="center"></div></td>
					<td><div align="center"></div></td>
					<td width="819"><div align="center"></div></td>
				  </tr>
				  <tr height="21">
					<td colspan="4" height="21"><div align="center">
					  <p><strong>DENGAN RAHMAT TUHAN YANG MAHA ESA<br />
					  </strong><strong>KEPALA DINAS PENDIDIKAN PROVINSI SULAWESI SELATAN</strong></p>
					  </div></td>
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
					<td rowspan="2" width="819">bahwa Pegawai Negeri Sipil yang namanya tersebut dalam keputusan ini, memenuhi syarat dan dipandang cakap untuk diangkat dalam pangkat setingkat lebih tinggi</td>
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
					<td width="819">Pasal 4 Ayat (1) Undang &ndash; Undang Dasar Negara Republik Indonesia Tahun 1945</td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td><strong>2.</strong></td>
					<td width="819">Peraturan Pemerintah Nomor 99 Tahun 2000 tentang Kenaikan Pangkat Pegawai Negeri Sipil sebagaimana telah diubang dengan Peraturan Pemerintah Nomor 12 Tahun 2002</td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td><strong>3.</strong></td>
					<td rowspan="2">Keputusan Presiden Nomor 73 Tahun 2015 tentang pemberian kuasa kepada Kepala Dinas Pendidikan untuk atas nama Presiden menetapkan kenaikan pangkat, pemberhentian, dan pemberian pensiun bagi pegawai negeri sipil yang berpangkat Pembina Utama Muda Golongan Ruang IV/c ke Atas</td>
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
					<td height="20"><strong>MEMPERHATIKAN</strong></td>
					<td><strong>:</strong></td>
					<td>&nbsp;</td>
					<td width="819">Pertimbangan Teknis Kepala Dinas Pendidikan Provinsi Sulawesi Selatan Nomor 207 Tanggal 20 Mei 2013</td>
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
					<td width="819">&nbsp;</td>
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
					<td width="819">Pegawai Negeri Sipil / Pegawai Dinas Pendidikan Provinsi Sulawesi Selatan tersebut di bawah ini : </td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td> 1. Nama : <?php echo"<b>$nama</b>"; ?></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>2. Tempat, Tanggal Lahir : <?php echo"<b>$tempat_lahir, $tanggal_lahir</b>"; ?></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>3. Nip : <?php echo"<b>$nip</b>"; ?></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<?php
					 $qpendidikan=mysql_query("SELECT * FROM peg_pendidikan p, master_pendidikan m where p.nip ='$nip' and
											  p.tingkatan=m.tingkatan ORDER BY m.id DESC limit 0,1 ");
					 while($rpendidikan=mysql_fetch_array($qpendidikan))
					 { ?>
					<td>4. Pendidikan : <?php echo"<b>$rpendidikan[tingkatan] - $rpendidikan[nama_sekolah]</b>"; ?></td>
					 <?php } ?>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>5. Golongan Lama : <?php echo"<b>$gollama</b>"; ?></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>6. Jabatan Lama : <?php echo"<b>$pangkatlama</b>"; ?></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>terhitung mulai tanggal dinaikkan pangkatnya menjadi golongan <?php echo"<b>$golbaru</b>"; ?> dengan jabatan <?php echo"<b>$pangkatbaru</b>"; ?> dengan masa kerja golongan 4 Tahun, diberikan gaji pokok sebesar <?php echo"<b>$gaji</b>"; ?> dan penghasilan lain yang sah berdasarkan peraturan perundang-undangan</td>
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
					<td width="819">Keputusan Kepala Dinas ini mulai berlaku pada tanggal ditetapkan.<br />
					<strong>ASLI</strong>&nbsp;Keputusan ini diberikan kepada yang berkepentingan untuk diketahui dan dipergunakan sebagaimana mestinya</td>
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
					<td><div align="center"><strong>Ditetapkan di : Makassar <br />
					</strong></div></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td width="819"><div align="center"><strong>Pada tanggal&nbsp; : <?php echo"$tanggal_pengajuan"; ?></strong></div></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td width="819"> <div align="center"><strong>a.n. PRESIDEN REPUBLIK INDONESIA</strong></div></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td width="819"><div align="center"><strong>Kepala Dinas Pendidikan Provinsi Sulawesi Selatan,</strong></div></td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>&nbsp;</td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>&nbsp;</td>
				  </tr>
				  <tr height="20">
					<td height="20"></td>
					<td></td>
					<td></td>
					<td>&nbsp;</td>
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
				  <a class="btn btn-danger btn-sm pull-left" href="?r=kenaikanpangkat"><< Kembali</a>
				  <a class="btn btn-danger btn-sm pull-right" href="<?php echo"pdf/skkenaikanpangkat.php?act=laporan&idpangkat=".$idpangkat; ?>" target="_blank">Save As PDF</a>
				  <a class="btn-sm pull-right" href="#"> </a>
				  <a class="btn btn-success btn-sm pull-right" href="<?php echo"skkenaikanpangkat.php?act=laporan&idpangkat=".$idpangkat; ?>" target="_blank">Cetak Laporan >></a>
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