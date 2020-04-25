<?php 

include '../koneksi.php';

if(isset($_POST["simpan"])){

	$nama = $_POST['nama'];
		$kelamin = $_POST['kelamin'];
	$umur = $_POST['umur'];
	$telp = $_POST['telp'];
	$alamat = $_POST['alamat'];
	$keluhan = $_POST['keluhan'];
	$suhu = $_POST['suhu'];
	$id_level = 2;

	$sql = "INSERT INTO pasien (nama, kelamin,umur, telp, alamat, keluhan, suhu, id_level) VALUES ('$nama', '$kelamin','$umur', '$telp', '$alamat', '$keluhan', '$suhu', '$id_level')";

	$res = mysqli_query($kon, $sql);

	$count = mysqli_affected_rows($kon);

	if($count){
		echo "<script>alert('Data berhasil ditambahkan.');window.location='index.php';</script>";
	}
}else{
	header("location: tambah.php");
}
if(isset($_POST["kembali"])){
	header("location: index.php");
}
?>
