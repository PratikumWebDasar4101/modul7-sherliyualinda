<?php
	include_once 'koneksi.php';
	echo "<h3>Hasil Pencarian</h3>";
	$search = isset($_POST['search']) ? $_POST['search'] : "";

	$perintah="SELECT * FROM mahasiswa WHERE nama like '%$search%'";
	$hasil = mysqli_query($conn, $perintah);
	$jumlah = mysqli_num_rows($hasil);
	if ($jumlah>0) {
		echo ("Data yang ditemukan : $jumlah<br><hr>");
	while ($data =mysqli_fetch_row($hasil)) {
		echo ("Nama: $data[0]<br>");
		echo ("nim: $data[1]<br>");
	}
	}else{
		echo "Maaf, data yang Anda cari tidak ada";
	}
?>
<a href="list.php">Back</a>
