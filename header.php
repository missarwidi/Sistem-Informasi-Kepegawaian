<?php
     require_once("config/koneksi.php");
	 require_once("config/authentication_users.php");
	 include"config/fungsi_indotgl.php";
	 include"config/fungsi_ymd.php";
	 include"config/fungsi_seo.php";
	 include"config/fungsi_rupiah.php";
	 include"config/fungsi_datediff.php";
	 include"config/fungsi_acak.php";
	 include"config/fungsi_iif.php";
?>
<?php $session_username = $_SESSION['namauser'];
	  $session_nama = $_SESSION['namalengkap']; 
	  $leveluser = $_SESSION['leveluser']; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dinas Pendidikan Provinsi Sulawesi Selatan | Sistem Informasi Kepegawaian</title>
    <link rel="shortcut icon"  href="img/logo.png" />
    <!-- Bootstrap core CSS -->
	<?php
	$r = $_GET['r'];
	$ac = $_GET['act'];
	if($r == "")
    {
	echo"<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
    <link href='assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css' rel='stylesheet' type='text/css' media='screen'/>
    <link rel='stylesheet' href='css/owl.carousel.css' type='text/css'>

    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />";
	}
	if($r == "home")
    {
	echo"<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
    <link href='assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css' rel='stylesheet' type='text/css' media='screen'/>
    <link rel='stylesheet' href='css/owl.carousel.css' type='text/css'>

    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />";
	}
	if($r == "user")
    {
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
	
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css' rel='stylesheet' type='text/css' media='screen'/>
		<link rel='stylesheet' href='css/owl.carousel.css' type='text/css'>
	
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
		
	   <link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
	   <link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
	   <link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
	   ";
	}
	
	else if($r == "ba_peminjaman" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "ba_peminjaman")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	
	else if($r == "ba_penyerahan" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "ba_penyerahan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	
	else if($r == "ba_penerimaan" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "components" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "ba_penerimaan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	
	else if($r == "ba_penelitian" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	
	else if($r == "ba_penelitian" and $ac == "lampiran" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "ba_penelitian")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	
	else if($r == "gudang" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "gudang" and $ac == "lampiran")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "gudang")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "dokumentasi" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "dokumentasi" and $ac == "lampiran")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "dokumentasi")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "print")
	{
	 
	echo"
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
    <link rel='stylesheet' href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' />
    <link href='css/tasks.css' rel='stylesheet'>

    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />";
    }
	else if($r == "golongan" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "golongan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "tipe_gudang" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "tipe_gudang")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "jenis_surat" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "jenis_surat")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "kategori" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "kategori")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "rbb" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "rbb")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "laporan" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "laporan")
	{
	echo"	
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />

    <link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />


    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "tindak_pidana" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "tindak_pidana")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}else if($r == "satuan" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "satuan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "alasan" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "alasan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pemeliharaan" and $ac == "update" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pemeliharaan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "bimtek" and $ac == "new" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "bimtek")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}	
	else if($r == "pengawasan" and $ac == "new" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pengawasan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}		
	else if($r == "pengamanan" and $ac == "new" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pengamanan")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}		
	else if($r == "mutasi" and $ac == "baru" )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "mutasi")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pegawai" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "gaji" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}	
	else if($r == "gaji")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}else if($r == "pangkat" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}	
	else if($r == "pangkat")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "unitkerja" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}	
	else if($r == "unitkerja")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pendidikan" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "keluarga" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pengalaman" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "kemampuan" and ($ac == "baru" or $ac == "ubah") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pegawai")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />
	";
	}
	else if($r == "pensiun" and ($ac == "baru" or $ac == "ubah" or $ac == "verifikasi") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	<link rel='stylesheet' href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' />
    <link href='css/tasks.css' rel='stylesheet'>
	";
	}
	else if($r == "pensiun")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />";
	}
	else if($r == "kenaikanpangkat" and ($ac == "baru" or $ac == "ubah" or $ac == "verifikasi") )
	{
	echo"
	<link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>

    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker.css' />
	
	<link rel='stylesheet' type='text/css' href='assets/bootstrap-fileupload/bootstrap-fileupload.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datepicker/css/datepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-timepicker/compiled/timepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-colorpicker/css/colorpicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-daterangepicker/daterangepicker-bs3.css' />
    <link rel='stylesheet' type='text/css' href='assets/bootstrap-datetimepicker/css/datetimepicker.css' />
    <link rel='stylesheet' type='text/css' href='assets/jquery-multi-select/css/multi-select.css' />
	
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />
	<link rel='stylesheet' href='http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css' />
    <link href='css/tasks.css' rel='stylesheet'>
	";
	}
	else if($r == "kenaikanpangkat")
	{
	echo"
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/bootstrap-reset.css' rel='stylesheet'>
		
		<link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_page.css' rel='stylesheet' />
		<link href='assets/advanced-datatable/media/css/demo_table.css' rel='stylesheet' />
		<link rel='stylesheet' href='assets/data-tables/DT_bootstrap.css' />
		
		<link href='css/style.css' rel='stylesheet'>
		<link href='css/style-responsive.css' rel='stylesheet' />";
	}
	else
	{
	echo"  
    <link href='css/bootstrap.min.css' rel='stylesheet'>
    <link href='css/bootstrap-reset.css' rel='stylesheet'>
    <link href='assets/font-awesome/css/font-awesome.css' rel='stylesheet' />
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/style-responsive.css' rel='stylesheet' />   
    <script src='js/html5shiv.js'></script>
    <script src='js/respond.min.js'></script>";  
	}
	?>

  </head>

  <body>

  <section id="container" >
  
<header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"> <img src="img/logobkn.png" alt="" width="160" height="40"></a>
            <!--logo end-->
            
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<?php 
						$qp = mysql_query("SELECT * FROM peg_datapribadi where nip='$session_username' ORDER BY id DESC");
					    $rp=mysql_fetch_array($qp);
						?>
                            <img alt="" src="<?php echo $rp['folder'].$rp['foto']; ?>" height="30px" width="30px">
                            <span class="username"><?php echo"$_SESSION[namalengkap]"; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
							<?php 
							if(strtolower($_SESSION['leveluser'])=="sub bagian kepegawaian")
							   {
							   echo"
								<li><a href='?r=user&act=profil'><i class='fa fa-suitcase'></i>Profile</a></li>
								<li><a href='?r=user&act=tambah'><i class='fa fa-cog'></i> Tambah user</a></li>
								<li><a href='?r=user'><i class='fa fa-bell-o'></i> Data User</a></li>
							   ";
							   }
							?>
                            <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>