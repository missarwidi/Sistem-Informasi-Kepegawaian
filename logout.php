<?php
  session_start();
  session_destroy();
  session_start();
  session_regenerate_id() ;
  
  echo "<meta http-equiv='refresh' content='0;url=login.php?action=sukses'>";

?>
