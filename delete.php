<?php
include_once 'koneksi.php'; 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM `mahasiswa` WHERE id='$id'";
	$query_success = mysqli_query($conn, $query);
	if ($query_success) {
		header('location: list.php');
	} else {
		die(mysqli_error());
	}
}
?>