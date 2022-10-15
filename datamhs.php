<?php include"template/header.php"?>
	<div class="h3" align="center" style="margin-top: 20px; margin-bottom: 2px;">Data Mahasiswa</div>
	<div style=" width: 1200px; margin:auto;">
	<a href="tambahmhs.php" class="btn btn-outline-primary" style="margin-bottom: 20px;">Tambah Mahasiswa</a>

	<table class="table table-borderless table-hover table-striped" style="margin:auto;">
		<thead class="table table-dark">
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>NIM</th>
				<th>ALAMAT</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "config.php";
			$qry_mhs=mysqli_query($con,"select * from mahasiswa");
			$no=0;
			while($dt_mhs=mysqli_fetch_array($qry_mhs)){
				$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$dt_mhs['nama']?></td>
				<td><?=$dt_mhs['nim']?></td>
				<td><?=$dt_mhs['alamat']?></td>
				<td><?=$dt_mhs['username']?></td>
				<td><?=$dt_mhs['password']?></td>
				<td><a href="editmhs.php?id_mhs=<?=$dt_mhs['id_mhs']?>" class="btn btn-outline-primary">Edit</a> <a href="progdm.php?id_mhs=<?=$dt_mhs['id_mhs']?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" class="btn btn-outline-danger">Delete</a></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
	</div>
<?php include "template/footer.php"?>