<?php 
if ($_POST) {
	// code...
	$var1=$_POST['nama'];
	$var2=$_POST['nim'];
	$var3=$_POST['alamat'];
	$var4=$_POST['username'];
	$var5=$_POST['password'];
    $var6=$_POST['id_mhs'];

	if (empty($var1)) {
		// code...
		echo "<script>alert('Nama Mahasiswa tidak boleh kosong !');location.href='editmhs.php';</script>";
	} elseif (empty($var2)) {
		// code...
		echo "<script>alert('NIM tidak boleh kosong !');location.href='editmhs.php';</script>";
	} elseif (empty($var3)) {
		// code...
		echo "<script>alert('Alamat tidak boleh kosong !');location.href='editmhs.php';</script>";
	} elseif (empty($var4)) {
		// code...
		echo "<script>alert('Username tidak boleh kosong !');location.href='editmhs.php';</script>";
	} elseif (empty($var5)) {
		// code...
		echo "<script>alert('Password tidak boleh kosong !');location.href='editmhs.php';</script>";
	} else {
		include "config.php";
		$insert=mysqli_query($con,"UPDATE mahasiswa SET nama = '".$var1."',nim = '".$var2."',alamat = '".$var3."',username = '".$var4."',password = md5('".$var5."') WHERE id_mhs = '".$var6."'") or die(mysqli_error($con));
		if ($insert) {
			// code...
			echo "<script>alert('Data telah berhasil di edit !');location.href='datamhs.php';</script>";
		} else {
			echo "<script>alert('Maaf ! Terjadi kegagalan saat mengedit data !');location.href='editmhs.php';</script>";
		}
	}
}
?>