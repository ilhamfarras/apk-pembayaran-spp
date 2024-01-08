<?php include 'header.php'; ?>
<title>DATA SISWA</title>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA SISWA SMA NEGERI 12 SLAWI</h2>
	</div>
<a class="btn btn-primary " href="tambahsiswa.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
        <th>NO</th>
 		<th>NIS</th>
 		<th>NAMA</th>
		<th>ALAMAT</th>
		<th>NO TELEPHONE</th>
        <th>ID PEMBAYARAN</th>
		<th>GENDER</th>
		<th>AKSI</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = $konek -> query("SELECT * FROM siswa ORDER BY nis DESC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['nis'] ?></td>
 	 	<td><?= $dta['nama'] ?></td>
		  <td><?= $dta['alamat'] ?></td>
		  <td><?= $dta['no_telephone'] ?></td>
          <td><?= $dta['pembayaran_id_pembayaran'] ?></td>
		  <td><?= $dta['gender_id_gender'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="ubahsiswa.php?id=<?= $dta['nis'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapussiswa.php?id=<?= $dta['nis'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data?')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>