<?php include"template/header.php"?>
	<div class="h3" align="center">Tambah Data Mahasiswa</div>
	<div class="form-check" style=" width: 500px; margin:auto;">
		<form action="progtm.php" method="post">
			<div class="form-text">Nama :</div>
			<input type="text" name="nama" value="" class="form-control">
			<div class="form-text">NIM :</div>
			<input type="text" name="nim" value="" class="form-control">
			<div class="form-text">ALAMAT :</div>
			<input type="text" name="alamat" value="" class="form-control">
			<div class="form-text">USERNAME :</div>
			<input type="text" name="username" value="" class="form-control">
			<div class="form-text">PASSWORD :</div>
			<input type="text" name="password" value="" class="form-control">
			
			<input type="submit" name="save" value="Tambah Mahasiswa" class="btn btn-dark" style="margin-top: 20px;">
			
		</form>
		
	</div>
<?php include"template/footer.php"?>