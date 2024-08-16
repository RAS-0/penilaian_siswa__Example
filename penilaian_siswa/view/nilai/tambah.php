
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
	<h3>TAMBAH DATA NILAI</h3>
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>KODE NILAI</td>
				<td><input type="number" name="kd_nilai"></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>
					<select name="nis">
						<option disabled selected>Pilih NIS</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM siswa");
							while($d = mysqli_fetch_array($data))
							{ ?>
								<option value="<?php echo $d['nis']; ?>">
									<?= $d['nis']; ?> (<?= $d['nm_siswa']; ?>)
								</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>NAMA SISWA</td>
				<td>
					<select name="nm_siswa">
						<option disabled selected>Pilih NAMA SISWA</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM siswa");
							while($d = mysqli_fetch_array($data))
							{ ?>
								<option value="<?php echo $d['nm_siswa']; ?>">
									<?= $d['nm_siswa']; ?> (<?= $d['nis']; ?>)
								</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>KODE MATPEL</td>
				<td>
					<select name="kd_matpel">
						<option disabled selected>Pilih Kode Matpel</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM matpel");
							while($d = mysqli_fetch_array($data))
							{ ?>
								<option value="<?php echo $d['kd_matpel']; ?>">
									<?= $d['kd_matpel']; ?> (<?= $d['nm_matpel']; ?>)
								</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>NAMA MATPEL</td>
				<td>
					<select name="nm_matpel">
						<option disabled selected>Pilih Nama Matpel</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM matpel");
							while($d = mysqli_fetch_array($data))
							{ ?>
								<option value="<?php echo $d['nm_matpel']; ?>">
									<?= $d['nm_matpel']; ?> (<?= $d['kd_matpel']; ?>)
								</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>UTS SEMESTER GANJIL</td>
				<td><input type="number" name="uts_sem_ganjil"></td>
			</tr>
			<tr>
				<td>UAS SEMESTER GANJIL</td>
				<td><input type="number" name="uas_sem_ganjil"></td>
			</tr>
			<tr>
				<td>UTS SEMESTER GENAP</td>
				<td><input type="number" name="uts_sem_genap"></td>
			</tr>
			<tr>
				<td>UAS SEMESTER GENAP</td>
				<td><input type="number" name="uas_sem_genap"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>