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
	<h3>EDIT ABSEN</h3>
 
	<?php
		include '../../config/koneksi.php';
		$kd_absen = $_GET['kd_absen'];
		$data = mysqli_query($koneksi,"SELECT * FROM absen WHERE kd_absen='$kd_absen'");
		while($d = mysqli_fetch_array($data))
		{
	?>
		<form method="post" action="edit_aksi.php" enctype="multipart/form-data">
			<table>
				<tr>			
					<td>KODE ABSEN</td>
					<td>
						<input type="hidden" name="kd_absen" value="<?php echo $d['kd_absen']; ?>">
						<input type="number" disabled value="<?php echo $d['kd_absen']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA BULAN</td>
					<td><input type="text" name="nm_bulan" value="<?php echo $d['nm_bulan']; ?>"></td>
				</tr>
				<tr>
					<td>NIS</td>
					<td>
						<select name="nis">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM siswa");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['nis']; ?>" <?= $r['nis'] == $d['nis'] ? "selected" : "" ?>>
									<?php echo $r['nis']; ?> (<?php echo $r['nm_siswa']; ?>)
								</option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>NAMA SISWA</td>
					<td>
						<select name="nm_siswa">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM siswa");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['nm_siswa']; ?>" <?= $r['nm_siswa'] == $d['nm_siswa'] ? "selected" : "" ?>>
									<?php echo $r['nm_siswa']; ?> (<?php echo $r['nis']; ?>)
								</option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>JUMLAH HADIR</td>
					<td><input type="number" name="jml_hadir" value="<?php echo $d['jml_hadir']; ?>"></td>
				</tr>
				<tr>
					<td>ALFA</td>
					<td><input type="number" name="alfa" value="<?php echo $d['alfa']; ?>"></td>
				</tr>
				<tr>
					<td>IZIN</td>
					<td><input type="number" name="izin" value="<?php echo $d['izin']; ?>"></td>
				</tr>
				<tr>
					<td>SAKIT</td>
					<td><input type="number" name="sakit" value="<?php echo $d['sakit']; ?>"></td>
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