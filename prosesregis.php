<?php  
include_once 'koneksi.php';
if (isset($_POST['submit'])) {
	$nama 					= $_POST['nama'];
	$nim 					= $_POST['nim'];
	$jenis_kelamin 			= $_POST['jenis_kelamin'];
	$fakultas 				= $_POST['fakultas'];
	$program_studi 			= $_POST['program_studi'];
	$asal 					= $_POST['asal'];
	$moto_hidup				= $_POST['moto_hidup'];
	
			$query = "INSERT INTO `mahasiswa`(
					  						`nama`, 
					  						`nim`, 
					  						`jenis_kelamin`,
					  						`fakultas`,
					  						`program_studi`,
					  						`asal`, 
					  						`moto_hidup` 
					  						)
					  			VALUES (
					  				'$nama',
					  				'$nim',
					  				'$jenis_kelamin',
					  				'$fakultas',
					  				'$program_studi',
					  				'$asal',
					  				'$moto_hidup')";


			$query_success = mysqli_query($conn,$query);
			if ($query_success) {
				header('location: list.php');
			}else{
				echo "gagal registrasi : ".mysqli_error($conn);
			}
		}
	

?>