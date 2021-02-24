<script>
window.alert("Cara ini menggunakan php versi 7.3++");
</script>
<?php
	if(isset($_POST['submit'])) { 
		session_start();
		$_SESSION['nama'] = htmlentities($_POST['txtnama']);
		$_SESSION['alamat'] = htmlentities($_POST['txtalamat']);
		header('Location: dua.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label>Nama</label><br>
		<input type="text" name="txtnama" placeholder="Masukkan Nama"><br>
		<br>
		<label>Alamat</label><br>
		<input type="text" name="txtalamat" placeholder="Masukkan Alamat"><br>
		<br>
		<input type="submit" name="submit" value="Submit">		
	</form>
</body>
</html>