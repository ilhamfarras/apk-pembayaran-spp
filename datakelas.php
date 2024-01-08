<?php include 'header.php'; ?>
<title>DATA GURU</title>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA KELAS SMA NEGERI 12 SLAWI</h2>
	</div>
<a class="btn btn-primary " href="tambahkelas.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID KELAS</th>
 		<th>KELAS</th>
		<th>JURUSAN</th>
        <th>AKSI</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = $konek -> query("SELECT * FROM kelas ORDER BY id_kelas DESC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['id_kelas'] ?></td>
 	 	<td><?= $dta['nama_kelas'] ?></td>
		  <td><?= $dta['jurusan'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="ubahkelas.php?id=<?= $dta['id_kelas'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapuskelas.php?id=<?= $dta['id_kelas'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data?')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>