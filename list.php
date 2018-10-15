<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>6701174057</title>
</head>
<body>
	<center>SEMUA POSTINGAN
		<br>
		<br>
	<table border="1" align="center">
		<tr>
			<td>Search</td>
			<td colspan="3">
				<form action="search.php" method="POST">
				<input type="text" name="search">
				<input type="submit" name="submit" value="Submit">
				</form>
			</td>
		</tr>
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jenis Kelamin</th>
			<th>Fakultas</th>
			<th>Program Studi</th>
			<th>Asal</th>
			<th>Moto Hidup</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$query = 
				"SELECT 
					`id`,
					`nama`, 
					`nim`, 
					`jenis_kelamin`, 
					`fakultas`, 
					`program_studi`, 
					`asal`, 
					`moto_hidup`  
				FROM `mahasiswa`" ;


		$result= mysqli_query($conn,$query);
		while($data=mysqli_fetch_array($result)){
		?>
		<tr>
			<td align="center">
				<?php
				echo $data['nama'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['nim'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['jenis_kelamin'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['fakultas'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['program_studi'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['asal'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['moto_hidup'];
				?>
			</td>
			
			<td>
				<a href="delete.php?id=<?php echo $data['id']; ?>">DELETE</a>
			</td>
		</tr>
		<?php 
		}
		?>
	</table>
	<a href="registrasi.php">Tambah Data</a>
</body>
</html>