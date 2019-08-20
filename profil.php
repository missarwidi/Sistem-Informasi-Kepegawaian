<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/profil.php";
     
	 switch($_GET[act]){

// Tampil konten
      default:     
?>

	<section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Tabel Users
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
										  <div class='btn-group'><a href='?r=user&act=tambah'>
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
                                          <th>Username</th>
                                          <th>Nama Lengkap</th>
                                          <th>Email</th>
                                          <th>No. Telp</th>
                                          <th>Level</th>
                                          <th class="hidden-phone">Aksi</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qsurat = mysql_query("SELECT * FROM users ORDER BY username ASC");
									while($rsurat=mysql_fetch_array($qsurat))
									{ 
								    $no++;		
									$level = strtoupper($rsurat['level'])	;	  						  
									echo"
                                      <tr class='gradeX'>
                                          <td>$no</td>
                                          <td>$rsurat[username]</td>
                                          <td>$rsurat[nama_lengkap]</td>
                                          <td>$rsurat[email]</td>
                                          <td>$rsurat[no_telp]</td>
                                          <td>$level</td>
                                          <td class='center hidden-phone'>
										  <a title='Edit' href='?r=user&act=ubah&id=$rsurat[username]'>
										  <button class='btn btn-success btn-xs'><i class='fa fa-edit'> Edit </i></button>
										  </a>"; ?>
										  
										  <a href="<?php echo"$aksi?r=user&id=$rsurat[username]&act=hapus"; ?>" 
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
                                          <th>Username</th>
                                          <th>Nama Lengkap</th>
                                          <th>Email</th>
                                          <th>No. Telp</th>
                                          <th>Level</th>
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
  </body>
</html>
	
<?php break;  ?>
<?php case "profil": ?>
<script type="text/javascript">
function validasi_input(form){
  if (form.username.value == ""){
    alert("Username Tidak Boleh Kosong !!");
    form.username.focus();
    return (false);
  }
   if (form.namalengkap.value == ""){
    alert("Nama Tidak Boleh Kosong!");
    form.nama.focus();
    return (false);
  }
   if (form.email.value == ""){
    alert("Email Tidak Boleh Kosong!");
    form.email.focus();
    return (false);
  }
  if(form.password.value != "" ){
	   if (form.password.value != form.confirm_password.value){
		alert("Password Dan Konfirmasi Password Tidak Sama !! Silahkan Coba Lagi !!");
		form.password.value="";
		form.confirm_password.value="";
		form.password.focus();
		return (false);
	  }
  }

return (true);
}
</script>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
               <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Profil Pengguna
                          </header>
						  <?php
							  $action = $_GET['action'];
							  if($action == "sukses")
							  { echo"<p><center><font color='#009900'>Berhasil Tersimpan.</font></center></p>"; }
							  if($action == "error")
							  { echo"<p><center><font color='#FF0000'>Gagal Di Proses. Silahkan Ulangi Kembali</font></center></p>"; }
						  ?>
                          <div class="panel-body">
                              <div class="form">
					<?php			  
						$qprofil=mysql_query("SELECT * FROM users where username='$username' ORDER BY username DESC ");
							while ($rprofil=mysql_fetch_array($qprofil))
							{
					?>
                                  <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="<?php echo"$aksi?r=user&act=ubah"; ?>" onsubmit="return validasi_input(this)">
								      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="usernamedis" name="usernamedis" type="text" 
											  value="<?php echo"$rprofil[username]"; ?>" disabled="disabled" />
											  <input type="hidden" value="<?php echo"$rprofil[username]"; ?>" id="username" name="username"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="namalengkap" name="namalengkap" type="text" 
											  value="<?php echo"$rprofil[nama_lengkap]"; ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">No Telp.</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="telp" name="telp" type="text" 
											  value="<?php echo"$rprofil[no_telp]"; ?>"/>
                                          </div>
                                      </div>                                      									  
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" 
											  value="<?php echo"$rprofil[email]"; ?>"/>
                                          </div>
                                      </div>
									  <p> Jika Password Tidak Berubah, Tidak Usah Diisi </p>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                          </div>
                                      </div>                               

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
								  <?php } ?>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
	  <?php include"function_footer.php"; ?>
<?php break; ?>
<?php case "ubah": ?>
<script type="text/javascript">
function validasi_input(form){
  if (form.username.value == ""){
    alert("Username Tidak Boleh Kosong !!");
    form.username.focus();
    return (false);
  }
   if (form.namalengkap.value == ""){
    alert("Nama Tidak Boleh Kosong!");
    form.nama.focus();
    return (false);
  }
   if (form.email.value == ""){
    alert("Email Tidak Boleh Kosong!");
    form.email.focus();
    return (false);
  }
  if(form.password.value != "" ){
	   if (form.password.value != form.confirm_password.value){
		alert("Password Dan Konfirmasi Password Tidak Sama !! Silahkan Coba Lagi !!");
		form.password.value="";
		form.confirm_password.value="";
		form.password.focus();
		return (false);
	  }
  }

return (true);
}
</script>
     <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
               <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Profil Pengguna
                          </header>
                          <div class="panel-body">
                              <div class="form">
					<?php			  
					    $id = $_GET['id'];
						$qprofil=mysql_query("SELECT * FROM users where username='$id' ORDER BY username DESC ");
							while ($rprofil=mysql_fetch_array($qprofil))
							{
					?>
                                  <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="<?php echo"$aksi?r=user&act=ubah"; ?>" onsubmit="return validasi_input(this)">
								      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="usernamedis" name="usernamedis" type="text" 
											  value="<?php echo"$rprofil[username]"; ?>" disabled="disabled" />
											  <input type="hidden" value="<?php echo"$rprofil[username]"; ?>" id="username" name="username"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="namalengkap" name="namalengkap" type="text" 
											  value="<?php echo"$rprofil[nama_lengkap]"; ?>"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">No Telp.</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="telp" name="telp" type="text" 
											  value="<?php echo"$rprofil[no_telp]"; ?>"/>
                                          </div>
                                      </div>                                      									  
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" 
											  value="<?php echo"$rprofil[email]"; ?>"/>
                                          </div>
                                      </div>                                      									  
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Level</label>
                                          <div class="col-lg-10">
                                          <select name="level" class="form-control input-sm m-bot15">
										  
										  <?php
										  echo"<option value='$rprofil[level]'>$rprofil[level]</option>										   
										       <option value='Kepala Sub Bagian'>Kepala Sub Bagian</option>
										       <option value='Kepala Bagian'>Kepala Bagian</option>		
										       <option value='Kepala Dinas'>Kepala Dinas</option>	
										       <option value='Sub Bagian Kepegawaian'>Sub Bagian Kepegawaian</option>	
										       <option value='Pegawai'>Pegawai</option>
										       <option value='BKD Pusat'>BKD Pusat</option>	
										       <option value='BKN'>BKN</option>								 
											   ";
											   ?>
										  </select>
                                          </div>
                                      </div>
									  <p> Jika Password Tidak Berubah, Tidak Usah Diisi </p>
                                      <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                          </div>
                                      </div>                               

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
								  <?php } ?>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
	  <?php include"function_footer.php"; ?>
<?php break; ?>
<?php case "tambah": ?>
<script type="text/javascript">
function validasi_input(form){
  if (form.username.value == ""){
    alert("Username Tidak Boleh Kosong !!");
    form.username.focus();
    return (false);
  }
   if (form.nama.value == ""){
    alert("Nama Tidak Boleh Kosong!");
    form.nama.focus();
    return (false);
  }
   if (form.email.value == ""){
    alert("Email Tidak Boleh Kosong!");
    form.email.focus();
    return (false);
  }
  if(form.password.value != "" ){
	   if (form.password.value != form.confirm_password.value){
		alert("Password Dan Ketik Lagi Password Tidak Sama !! Silahkan Coba Lagi !!");
		form.password.value="";
		form.confirm_password.value="";
		form.password.focus();
		return (false);
	  }
  }

return (true);
}
</script>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
               <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Tambah Pengguna
                          </header>
                          <div class="panel-body">
                              <div class="form">
				                  <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="<?php echo"$aksi?r=user&act=tambah"; ?>" onsubmit="return validasi_input(this)">
								      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Username</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="username" name="username" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="firstname" class="control-label col-lg-2">Nama Lengkap</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="namalengkap" name="namalengkap" type="text" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">No Telp.</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="telp" name="telp" type="text" />
                                          </div>
                                      </div>                                      									  
                                      <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" />
                                          </div>
                                      </div>
									  <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">Level</label>
                                          <div class="col-lg-10">
                                          <select name="level" class="form-control input-sm m-bot15">
										       <option value='sub bagian kepegawaian'>sub bagian kepegawaian</option>
										       <option value='User'>User</option>
										  </select>
                                          </div>
                                      </div>
									  <div class="form-group ">
                                          <label for="password" class="control-label col-lg-2">Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="password" name="password" type="password" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Confirm Password</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="confirm_password" name="confirm_password" type="password" />
                                          </div>
                                      </div>                               

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-danger" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>								  
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
	  <?php include"function_footer.php"; ?>
<?php break;  ?>

	 <?php } ?>

