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
	<h3>EDIT DATA SISWA</h3>
 
	<?php
		include '../../config/koneksi.php';
		$nis = $_GET['nis'];
		$data = mysqli_query($koneksi,"SELECT * FROM siswa WHERE nis='$nis'");
		while($d = mysqli_fetch_array($data))
		{
	?>
		<form method="post" action="edit_aksi.php" enctype="multipart/form-data">
			<table>
				<tr>			
					<td>NIS</td>
					<td>
						<input type="hidden" name="nis" value="<?php echo $d['nis']; ?>">
						<input type="number" disabled value="<?php echo $d['nis']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA SISWA</td>
					<td><input type="text" name="nm_siswa" value="<?php echo $d['nm_siswa']; ?>"></td>
				</tr>
				<tr>
					<td>TEMPAT LAHIR</td>
					<td><input type="text" name="tmp_lahir" value="<?php echo $d['tmp_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>TANGGAL LAHIR</td>
					<td><input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>"></td>
				</tr>
				<tr>
					<td>JENIS KELAMIN</td>
					<td>
						<select name="jkel">
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
					<td>NAMA WALI KELAS</td>
					<td>
						<select name="nm_wali">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM kelas");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['nm_guru']; ?>" <?= $r['nm_guru'] == $d['nm_wali'] ? "selected" : "" ?>>
									<?php echo $r['nm_guru']; ?> (<?php echo $r['nip']; ?>)
								</option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>KODE KELAS</td>
					<td>
						<select name="kd_kelas">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM kelas");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['kd_kelas']; ?>" <?= $r['kd_kelas'] == $d['kd_kelas'] ? "selected" : "" ?>>
									<?php echo $r['kd_kelas']; ?> (<?php echo $r['nm_kelas']; ?>)
								</option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>USERNAME</td>
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="password"></td>
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