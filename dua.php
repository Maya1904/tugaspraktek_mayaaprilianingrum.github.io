<?php 
session_start();
$nama = $_SESSION['nama'];
$alamat = $_SESSION['alamat'];
?>
<html><body>
<table width="500" border="0" cellspacing="0" cellpadding="0">
<tr><td colspan="3"><strong><font face="Verdana">Tampilan Halaman 2</font></strong></td></tr>
<tr><td width="166"><fontface="Verdana">Nama</font></td>
<td width="14"><font face="Verdana">:</font></td>
<td width="320"><font face="Verdana">
<?php //menampilkan variabel session nama
echo $nama; ?>
</font></td>
</tr>
<tr><td><font face="Verdana">Alamat</font></td>
<td><font face="Verdana">:</font></td>
<td><font face="Verdana">
<?php //menampilkan variabel session alamat
echo    $alamat;?></font></td></tr>
<tr><td colspan="3"><a href="tiga.php">Buka hal 3</a></td></tr>
</table>
</body></html>