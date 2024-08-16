
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
	<h3>TAMBAH DATA KELAS</h3>
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>KODE KELAS</td>
				<td><input type="number" name="kd_kelas"></td>
			</tr>
			<tr>
				<td>NAMA KELAS</td>
				<td><input type="text" name="nm_kelas"></td>
			</tr>
			<tr>
				<td>JUMLAH SISWA</td>
				<td><input type="number" name="jml_siswa"></td>
			</tr>
			<tr>
				<td>TAHUN AJARAN</td>
				<td><input type="text" name="thn_ajaran"></td>
			</tr>
			<tr>
				<td>NIP</td>
				<td>
					<select name="nip">
						<option disabled selected>Pilih NIP</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM guru");
							while($d = mysqli_fetch_array($data))
							{ ?>
								<option value="<?php echo $d['nip']; ?>">
									<?= $d['nip']; ?> (<?= $d['nm_guru']; ?>)
								</option>
						<?php
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>NAMA GURU</td>
				<td>
					<select name="nm_guru">
						<option disabled selected>Pilih Nama Guru</option>
						<?php
							include '../../config/koneksi.php';
							$data = mysqli_query($koneksi,"SELECT * FROM guru");
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
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>