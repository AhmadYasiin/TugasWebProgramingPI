<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])) {
	echo "<center>Untuk mengakses modul, Anda harus login ! <br />
	<a href='../../index.php'><b>LOGIN</b></a></center>";
}
else {
	include "../../../config/koneksi.php";
	include "../../../config/fungsi_seo.php";
	
	$module=$_GET['module'];
	$act=$_GET['act'];
	
	// Hapus Buku Tamu
	if ($module=='hubungi' AND $act=='hapushubungi') {
		mysql_query("DELETE FROM hub_kami WHERE kode_id ='$_GET[id]'");
		header('location:../../media.php?module='.$module);
	}
}
?>