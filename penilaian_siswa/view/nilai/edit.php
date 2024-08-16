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
	<h3>EDIT DATA NILAI</h3>
 
	<?php
		include '../../config/koneksi.php';
		$kd_nilai = $_GET['kd_nilai'];
		$data = mysqli_query($koneksi,"SELECT * FROM nilai WHERE kd_nilai='$kd_nilai'");
		while($d = mysqli_fetch_array($data))
		{
	?>
		<form method="post" action="edit_aksi.php" enctype="multipart/form-data">
			<table>
				<tr>			
					<td>KODE NILAI</td>
					<td>
						<input type="hidden" name="kd_nilai" value="<?php echo $d['kd_nilai']; ?>">
						<input type="number" disabled value="<?php echo $d['kd_nilai']; ?>">
					</td>
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
					<td>UTS SEMESTER GANJIL</td>
					<td><input type="number" name="uts_sem_ganjil" value="<?php echo $d['uts_sem_ganjil']; ?>"></td>
				</tr>
				<tr>
					<td>UAS SEMESTER GANJIL</td>
					<td><input type="number" name="uas_sem_ganjil" value="<?php echo $d['uas_sem_ganjil']; ?>"></td>
				</tr>
				<tr>
					<td>UTS SEMESTER GENAP</td>
					<td><input type="number" name="uts_sem_genap" value="<?php echo $d['uts_sem_genap']; ?>"></td>
				</tr>
				<tr>
					<td>UAS SEMESTER GENAP</td>
					<td><input type="number" name="uas_sem_genap" value="<?php echo $d['uas_sem_genap']; ?>"></td>
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