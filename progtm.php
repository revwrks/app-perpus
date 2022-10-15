<?php 
if ($_POST) {
	// code...
	$var1=$_POST['nama'];
	$var2=$_POST['nim'];
	$var3=$_POST['alamat'];
	$var4=$_POST['username'];
	$var5=$_POST['password'];

	if (empty($var1)) {
		// code...
		echo "<script>alert('Nama Mahasiswa tidak boleh kosong !');location.href='tambahmhs.php';</script>";
	} elseif (empty($var2)) {
		// code...
		echo "<script>alert('NIM tidak boleh kosong !');location.href='tambahmhs.php';</script>";
	} elseif (empty($var3)) {
		// code...
		echo "<script>alert('Alamat tidak boleh kosong !');location.href='tambahmhs.php';</script>";
	} elseif (empty($var4)) {
		// code...
		echo "<script>alert('Username tidak boleh kosong !');location.href='tambahmhs.php';</script>";
	} elseif (empty($var5)) {
		// code...
		echo "<script>alert('Password tidak boleh kosong !');location.href='tambahmhs.php';</script>";
	} else {
		include "config.php";
		$insert=mysqli_query($con,"insert into mahasiswa (nama, nim, alamat, username, password) value ('".$var1."','".$var2."','".$var3."','".$var4."',md5('".$var5."'))") or die(mysqli_error($con));
		if ($insert) {
			// code...
			echo "<script>alert('Data telah ditambahkan !');location.href='datamhs.php';</script>";
		} else {
			echo "<script>alert('Maaf ! Data gagal ditambahkan !');location.href='tambahmhs.php';</script>";
		}
	}
}
?>