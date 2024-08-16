
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
	<h3>TAMBAH DATA SISWA</h3>
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>NIS</td>
				<td><input type="number" name="nis"></td>
			</tr>
			<tr>
				<td>NAMA SISWA</td>
				<td><input type="text" name="nm_siswa"></td>
			</tr>
			<tr>
				<td>TEMPAT LAHIR</td>
				<td><input type="text" name="tmp_lahir"></td>
			</tr>
			<tr>
				<td>TANGGAL LAHIR</td>
				<td><input type="date" name="tgl_lahir"></td>
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
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>NO TELEPON</td>
				<td><input type="number" name="telp"></td>
			</tr>
			<tr>
				<td>NAMA WALI KELAS</td>
				<td>
					<select name="nm_wali">
						<option disabled selected>Pilih Wali Kelas</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM kelas");
							while($d = mysqli_fetch_array($data))
							{ ?>
								<option value="<?php echo $d['nm_guru']; ?>">
									<?= $d['nm_guru']; ?> (<?= $d['nip']; ?>)
								</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>KODE KELAS</td>
				<td>
					<select name="kd_kelas">
						<option disabled selected>Pilih Kelas</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM kelas");
							while($d = mysqli_fetch_array($data))
							{ ?>
								<option value="<?php echo $d['kd_kelas']; ?>">
									<?= $d['nm_kelas']; ?> (<?= $d['kd_kelas']; ?>)
								</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>USERNAME</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>