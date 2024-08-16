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
	<h3>EDIT DATA MATPEL</h3>
 
	<?php
		include '../../config/koneksi.php';
		$kd_matpel = $_GET['kd_matpel'];
		$data = mysqli_query($koneksi,"SELECT * FROM matpel WHERE kd_matpel='$kd_matpel'");
		while($d = mysqli_fetch_array($data))
		{
	?>
		<form method="post" action="edit_aksi.php" enctype="multipart/form-data">
			<table>
				<tr>			
					<td>KODE MATPEL</td>
					<td>
						<input type="hidden" name="kd_matpel" value="<?php echo $d['kd_matpel']; ?>">
						<input type="number" disabled value="<?php echo $d['kd_matpel']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA MATPEL</td>
					<td><input type="text" name="nm_matpel" value="<?php echo $d['nm_matpel']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="UPDATE"></td>
				</tr>		
			</table>
		</form>
	<?php } ?>
</body>
</html>