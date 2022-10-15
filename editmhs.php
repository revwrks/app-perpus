<?php include "template/header.php";
$qry_get_mhs=mysqli_query($con,"select * from mahasiswa where id_mhs = '".$_GET['id_mhs']."'");
$dt_mhs=mysqli_fetch_array($qry_get_mhs); 
?>
<div class="h3" align="center">Edit Data Mahasiswa</div>
	<div class="form-check" style=" width: 500px; margin:auto;">
		<form action="progem.php" method="post">
            <input type="hidden" name="id_mhs" value="<?=$dt_mhs['id_mhs']?>">
			<div class="form-text">Nama :</div>
			<input type="text" name="nama" value="<?=$dt_mhs['nama']?>" class="form-control">
			<div class="form-text">NIM :</div>
			<input type="text" name="nim" value="<?=$dt_mhs['nim']?>" class="form-control">
            <div class="form-text">Alamat :</div>
			<input type="text" name="alamat" value="<?=$dt_mhs['alamat']?>" class="form-control">
            <div class="form-text">Username :</div>
			<input type="text" name="username" value="<?=$dt_mhs['username']?>" class="form-control">
            <div class="form-text">password :</div>
			<input type="password" name="password" value="" class="form-control">
			<br>
			<br>
			<input type="submit" name="save" value="Submit !" class="btn btn-dark">
			
		</form>
		
	</div>
<?php include "template/footer.php";?>