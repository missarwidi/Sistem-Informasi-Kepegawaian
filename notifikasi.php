<?php 
     $username = "$_SESSION[namauser]";  
     $aksi="aksi/pangkat.php";
     
	 switch($_GET[act]){

// Tampil konten
      default:     
	  $id = $_GET['id'];
	  $querydetail = mysql_query("UPDATE notifikasi SET baca='1' where id = '$id'");
	  
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
                          <li><a href="#">Pesan Notifikasi</a></li>
                      </ul>
                      <!--breadcrumbs end -->
                      <!--timeline start-->
                      <section class="panel">	
					  <header class="panel-heading">
                              <i class="fa fa-bullhorn"></i> Pesan Notifikasi
                      </header>				  	  
                          <div class="panel-body progress-panel">						  
                              <div class="panel-body progress-panel">							  
							  <?php							  
							  $qberita = mysql_query("SELECT * FROM notifikasi where id='$id' ORDER BY id DESC");
							  while($rberita=mysql_fetch_array($qberita))
							  { 
							  $no++;
							  $notifikasi = nl2br($rberita['notifikasi']);
							  ?>
							  <div class="task-thumb-details">
                              <h1><a href="#">
							  <?php
							  echo"$rberita[judul]</a></h1><hr>
							  <p>$notifikasi</p><br>";
							  }
							  ?>
                              
                              </div>                              
                          </div>                          
                          </div>
                      </section>
                      <!--timeline end-->
                  </div>
                  
                      <!--features carousel end-->
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

  </body>
</html>

<?php break;  ?>
	 <?php } ?>