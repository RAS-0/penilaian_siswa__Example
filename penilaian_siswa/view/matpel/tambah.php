
<!DOCTYPE html>
<html>
<head>
	<title>Example</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MATPEL</h3>
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>KODE MATPEL</td>
				<td><input type="number" name="kd_matpel"></td>
			</tr>
			<tr>
				<td>NAMA MATPEL</td>
				<td><input type="text" name="nm_matpel"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>