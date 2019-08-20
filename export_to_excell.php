<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=tutorialweb-export.xls");
include 'laporan_gudang.php';
?>