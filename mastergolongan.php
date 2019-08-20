<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/golongan.php";
     
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
                          <li class="active">Master Data Golongan</li>
                      </ul>
                      <!--breadcrumbs end -->
                      <section class="panel">
                          <header class="panel-heading">
						  Master Data Golongan 
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
								?>
						  
                          <div class="space15"></div>
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th class="hidden-phone">No</th>
                                          <th>Golongan</th>
                                          <th class="hidden-phone">Tingkatan Golongan</th>
                                      </tr>
                                      </thead>
                                      <tbody>
								<?php
								    $no = 0;
									$qgaji = mysql_query("SELECT * FROM master_golongan ORDER BY tingkatangolongan ASC");									
									while($rgaji=mysql_fetch_array($qgaji))
									{ 
								    $no++;
									echo"
                                      <tr class='gradeX'>
                                          <td>$no</td>
                                          <td>$rgaji[golongan]</td>
                                          <td class='center hidden-phone'>$rgaji[tingkatangolongan]</td>
                                     </tr>";									  
									  }
									  ?>
									  
                                      </tbody>
                                      <tfoot>
                                      <tr>
                                          <th class="hidden-phone">No</th>
                                          <th>Golongan</th>
                                          <th class="hidden-phone">Tingkatan Golongan</th>
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

	 <?php } ?>