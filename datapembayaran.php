<?php include 'header.php'; ?>
<title>DATA GURU</title>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA PEMBAYARAN SMA NEGERI 12 SLAWI</h2>
	</div>
<a class="btn btn-primary " href="tambahpembayaran.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID</th>
 		<th>TANGGAL</th>
		<th>NOMINAL</th>
		<th>JUMLAH BULAN</th>
		<th>TUNGGAKAN</th>
		<th>NIS SISWA</th>
        <th>AKSI</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = $konek -> query("SELECT * FROM pembayaran ORDER BY id_pembayaran DESC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['id_pembayaran'] ?></td>
 	 	<td><?= $dta['tanggal'] ?></td>
		  <td><?= $dta['nominal'] ?></td>
		  <td><?= $dta['jumlah_bulan'] ?></td>
		  <td><?= $dta['denda'] ?></td>
          <td><?= $dta['siswa_nis'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="ubahpembayaran.php?id=<?= $dta['id_pembayaran'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapuspembayaran.php?id=<?= $dta['id_pembayaran'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data?')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>