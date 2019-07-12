<!DOCTYPE html>
<html>
<head>
	<title>belajar lagi</title>
</head>
<body>
<h4>Isikan Biodata Anda:</h4>
<?php 
if (isset($_GET['nama'])) {
if ($_GET['nama']=="kosong") {
	echo "<h4 style='color:red'> Nama belum dimasukkan!</h4>";
	# code...
}
	
}
 ?>
<form method="post" action="cek.php" >
	<table height="200px">
		<tr >
			<td>Nama:</td>
			<td><input type="text" name="nama" placeholder="isikan nama anda" required></td>
		</tr>
		<tr>
			<td>Alamat:</td>
			<td><input type="text" name="alamat" placeholder="isikan alamat anda" required></td>
		</tr>
		<tr>
			<td>Tempat:</td>
			<td><input type="text" name="tempat" placeholder="isikan tempat" required></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<select name="jk">
					<option value="L">L</option>
					<option value="P">P</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Usia:</td>
			<td><input type="text" name="usia" placeholder="isikan usia anda" required></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Simpan"></td>
			
		</tr>
	</table>
</form>

</body>
</html>