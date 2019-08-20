<?php
include "config/koneksi.php";
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

function antiinjection($data){
  $filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter_sql;
}

$username = antiinjection($_POST[username]);
$pass     = antiinjection(md5($_POST[password]));

	
$login=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$pass' AND blokir='N'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login); 

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  
  //session_register("username");
//  session_register("nama_lengkap");
//  session_register("password");
//  session_register("level");
//  session_register("foto");
					
  $_SESSION[namauser]     = $r[username];
  $_SESSION[namalengkap]  = $r[nama_lengkap];
  $_SESSION[passuser]     = $r[password];
  $_SESSION[leveluser]    = $r[level];  
  $_SESSION[foto]         = $r[foto];
  
  $sid = session_id();
  mysql_query("UPDATE users SET id_session='$sid' WHERE username='$username'");
  header('location:index.php');
  //print("<html><head><meta http-equiv='refresh' content='0;url=index.php'></head><body></body></html>");
 
}
else{
	echo"<script>alert('Login Gagal !!! Username atau Password Anda tidak benar. Atau account Anda sedang diblokir.')</script>";
	print("<html><head><meta http-equiv='refresh' content='0;url=login.php?action=salah'></head><body></body></html>");
    exit;
}
?>
