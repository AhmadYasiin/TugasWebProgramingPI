<?php
session_start();
if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
	echo "<center>Untuk mengakses Modul, Anda Harus Login!<br />
	<a href='../../index.php'>LOGIN</a></center>";
}
else {
	echo "<h2>Ganti Password</h2>
		<form method='POST' action='modul/mod_password/aksi_password.php'>
        <table class='list'>
        <tr><td>Masukkan Password Lama</td><td> : <input type='text' name='pass_lama' /></td></tr>
        
		<tr><td>Masukkan Password Baru</td><td> : <input type='text' name='pass_baru'  /></td></tr>
        
		<tr><td>Masukkan Lagi Password Baru</td><td> : <input type='text' name='pass_ulangi' /></td></tr>
        
		<tr><td colspan=2><input type='submit' value='Proses' />
        <input type='button' value='Batal' onclick=self.history.back() /></td></tr>
        </table></form>";
}
?>