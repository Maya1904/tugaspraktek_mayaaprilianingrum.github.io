<?php session_start();
$nama = $_SESSION['nama'];
$alamat = $_SESSION['alamat'];
?>
<html><body>
<table width="500" border="0" cellspacing="0"cellpadding="0">
<tr><td colspan="3"><font face="Arial"><strong>Tampilan Halaman 3</strong></font></td></tr>
<tr><td width="131"><font face="Arial">Nama</font></td>
<td width="11"><font face="Arial">:</font></td>
<td width="358"> <font face="Arial">
<?php //menampilkan variabel session nama
echo $nama ?>
</font></td></tr>
<tr><td><font face="Arial">Alamat</font></td>
<td><font face="Arial">:</font></td>
<td><font face="Arial">
<?php //menampilkan variabel session alamat
echo $alamat ?>
</font></td></tr>
</table>
</body>
</html>