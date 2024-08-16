
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
	<h3>TAMBAH DATA GURU</h3>
	<form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
		<table>
			<tr>			
				<td>NIP</td>
				<td><input type="number" name="nip"></td>
			</tr>
			<tr>
				<td>NAMA GURU</td>
				<td><input type="text" name="nm_guru"></td>
			</tr>
			<tr>
				<td>TEMPAT LAHIR</td>
				<td><input type="text" name="tmp_lahir_guru"></td>
			</tr>
			<tr>
				<td>TANGGAL LAHIR</td>
				<td><input type="date" name="tgl_lahir_guru"></td>
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
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>NO TELEPON</td>
				<td><input type="number" name="telp"></td>
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
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</html>