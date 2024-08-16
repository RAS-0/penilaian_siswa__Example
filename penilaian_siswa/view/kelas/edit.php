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
	<h3>EDIT DATA KELAS</h3>
 
	<?php
		include '../../config/koneksi.php';
		$kd_kelas = $_GET['kd_kelas'];
		$data = mysqli_query($koneksi,"SELECT * FROM kelas WHERE kd_kelas='$kd_kelas'");
		while($d = mysqli_fetch_array($data))
		{
	?>
		<form method="post" action="edit_aksi.php" enctype="multipart/form-data">
			<table>
				<tr>			
					<td>KODE KELAS</td>
					<td>
						<input type="hidden" name="kd_kelas" value="<?php echo $d['kd_kelas']; ?>">
						<input type="number" disabled value="<?php echo $d['kd_kelas']; ?>">
					</td>
				</tr>
				<tr>
					<td>NAMA KELAS</td>
					<td><input type="text" name="nm_kelas" value="<?php echo $d['nm_kelas']; ?>"></td>
				</tr>
				<tr>
					<td>JUMLAH SISWA</td>
					<td><input type="number" name="jml_siswa" value="<?php echo $d['jml_siswa']; ?>"></td>
				</tr>
				<tr>
					<td>TAHUN AJARAN</td>
					<td><input type="text" name="thn_ajaran" value="<?php echo $d['thn_ajaran']; ?>"></td>
				</tr>
				<tr>
					<td>NIP</td>
					<td>
						<select name="nip">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM guru");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['nip']; ?>" <?= $r['nip'] == $d['nip'] ? "selected" : "" ?>>
									<?php echo $r['nip']; ?> (<?php echo $r['nm_guru']; ?>)
								</option>
							<?php endforeach; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>NAMA GURU</td>
					<td>
						<select name="nm_guru">
							<?php
								$sqlKat = mysqli_query($koneksi,"SELECT * FROM guru");
								$dataKat = mysqli_fetch_all($sqlKat, MYSQLI_ASSOC);
								foreach($dataKat as $r):
							?>
								<option value="<?php echo $r['nm_guru']; ?>" <?= $r['nm_guru'] == $d['nm_guru'] ? "selected" : "" ?>>
									<?php echo $r['nm_guru']; ?> (<?php echo $r['nip']; ?>)
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