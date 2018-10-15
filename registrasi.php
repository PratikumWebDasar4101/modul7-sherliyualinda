<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>
</head>
<body>
	<br>
	<br>
	<br>
	<center >
		<h3>APLIKASI PENDAFTARAN MAHASISWA BARU</h3>
		<table bgcolor="pink">
			<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
				<tr>
					<td>
						<label>Nama</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nama">
					</td>
				</tr>
				<tr>
					<td>
						<label>NIM</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nim">
					</td>
				</tr>
				<tr>
					<td></td>
				</tr>
				<tr>
					<td>
						<label>Jenis Kelamin</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki<br>
						<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
					</td>
				</tr>
				<tr>
					<td>
						<label>Fakultas</label>
					</td>
				</tr>
				<tr>
					<td>
						<select name="fakultas">
							<option value="fit">Fakultas Ilmu Terapan</option>
							<option value="fik">Fakultas Industri Kreatif</option>
							<option value="fkb">Fakultas Komunikasi Bisnis</option>
							<option value="feb">Fakultas Ekonomi Bisnis</option>
							<option value="fri">Fakultas Rekayasa Industri</option>
							<option value="fif">Fakultas Informatika</option>
							<option value="fte">Fakultas Teknik Elektro</option>

						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Program Studi</label>
					</td>
				</tr>
				<tr>
					<td>
						<select name="program_studi">
							<option value="fit">Manajemen Informatika</option>
							<option value="d3tk">Teknik Komputer</option>
							<option value="d3if">Informatika</option>
							<option value="d3tt">Teknik Telekomunikasi</option>
							<option value="d3ka">Komputerisasi Akuntansi</option><option value="d3ph">Perhotelan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label>Asal</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="asal">
					</td>
				</tr>
				<tr>
					<td>
						<label>Moto Hidup</label>
					</td>
				</tr>
				<tr>
					<td>
						<textarea name="moto_hidup"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="submit" value="submit">
					</td>
				</tr>
			</form>
	</table>


</body>
</html>