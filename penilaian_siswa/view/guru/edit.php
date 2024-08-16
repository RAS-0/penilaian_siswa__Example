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
	<h3>EDIT DATA GURU</h3>
 
	<?php
		include '../../config/koneksi.php';
		$nip = $_GET['nip'];
		$data = mysqli_query($koneksi,"SELECT * FROM guru WHERE nip='$nip'");
		while($d = mysqli_fetch_array($data))
		{
	?>
		<form method="post" action="edit_aksi.php" enctype="multipart/form-data">
			<table>
				<tr>			
					<td>NIP</td>
					<td>
						<input type="hidden" name="nip" value="<?php echo $d['nip']; ?>">
						<input type="number" disabled value="<?php echo $d['nip']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA GURU</td>
					<td><input type="text" name="nm_guru" value="<?php echo $d['nm_guru']; ?>"></td>
				</tr>
				<tr>
					<td>TEMPAT LAHIR</td>
					<td><input type="text" name="tmp_lahir_guru" value="<?php echo $d['tmp_lahir_guru']; ?>"></td>
				</tr>
				<tr>
					<td>TANGGAL LAHIR</td>
					<td><input type="date" name="tgl_lahir_guru" value="<?php echo $d['tgl_lahir_guru']; ?>"></td>
				</tr>
				<tr>
					<td>JENIS KELAMIN</td>
					<td>
						<select name="jkel_guru">
							<option value="Laki - Laki">Laki - Laki</option>
							<option value="Perempuan">Perempuan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>NO TELEPON</td>
					<td><input type="text" name="telp" value="<?php echo $d['telp']; ?>"></td>
				</tr>
				<tr>
					<td>KODE MATPEL</td>
					<td>
						<select name="kd_matpel">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM matpel");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['kd_matpel']; ?>" <?= $r['kd_matpel'] == $d['kd_matpel'] ? "selected" : "" ?>>
									<?php echo $r['kd_matpel']; ?> (<?php echo $r['nm_matpel']; ?>)
								</option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>NAMA MATPEL</td>
					<td>
						<select name="nm_matpel">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM matpel");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['nm_matpel']; ?>" <?= $r['nm_matpel'] == $d['nm_matpel'] ? "selected" : "" ?>>
									<?php echo $r['nm_matpel']; ?> (<?php echo $r['kd_matpel']; ?>)
								</option>
							<?php endforeach; ?>
						</select>
					</td>
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