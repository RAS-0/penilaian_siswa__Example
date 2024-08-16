
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
	<h3>TAMBAH ABSEN</h3>
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>KODE ABSEN</td>
				<td><input type="number" name="kd_absen"></td>
			</tr>
			<tr>
				<td>NAMA BULAN</td>
				<td><input type="text" name="nm_bulan"></td>
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
				<td>JUMLAH HADIR</td>
				<td><input type="number" name="jml_hadir"></td>
			</tr>
			<tr>
				<td>ALFA</td>
				<td><input type="number" name="alfa"></td>
			</tr>
			<tr>
				<td>IZIN</td>
				<td><input type="number" name="izin"></td>
			</tr>
			<tr>
				<td>SAKIT</td>
				<td><input type="number" name="sakit"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>