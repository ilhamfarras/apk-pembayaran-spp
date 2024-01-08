<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM pembayaran WHERE id_pembayaran ='$_GET[id]'");
include 'header.php';
?>
<title>EDIT DATA PEMBAYARAN</title>
<div class="container">
	<div class="page-header">
<h2 >EDIT DATA PEMBAYARAN</h2>
</div>
<form action="" method="post">
<table class="table">
	<?php
	while ($dta =mysqli_fetch_assoc($data) ) :
	?>
	<tr>
		<td>ISI DATA PEMBAYARAN</td>
		<td>
			<input class="form-control" type="hidden" name="id_pembayaran" value="<?= $dta['id_pembayaran'] ?>">
			<input class="form-control" type="date" name="tanggal" value="<?= $dta['tanggal'] ?>" size = "30">
			<input class="form-control" type="text" name="nominal" value="<?= $dta['nominal'] ?>" size = "30">
			<input class="form-control" type="text" name="jumlah_bulan" value="<?= $dta['jumlah_bulan'] ?>" size = "30">
			<input class="form-control" type="text" name="denda" value="<?= $dta['denda'] ?>" size = "30">
            <input class="form-control" type="text" name="siswa_nis" value="<?= $dta['siswa_nis'] ?>" size = "30">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="ubah">UPDATE</button>
		</td>
		<td>
			<button class="btn btn-success" type="button" value="kembali" onclick="history.go(-1)">KEMBALI</button>
		</td>
	</tr>
</table>
</form>
<?php endwhile; ?>
</body>
</html>
<?php
 if ( isset($_POST['ubah']) ) {
 	$id = $_POST['id_pembayaran']; 
 	$tanggal = $_POST['tangal'];
	$nominal = $_POST ['nominal'];
	$jml_bln = $_POST ['jumlah_bulan'];
	$denda = $_POST['denda'];
    $nis = $_POST ['siswa_nis'];

 	$ubah = $konek->query("UPDATE pembayaran SET tanggal = '$tanggal', nominal = '$nominal', jumlah_bulan = '$jml_bln', denda = '$denda', siswa_nis = '$nis' WHERE id_pembayaran = $id");
 	if( $ubah ){
 		echo "
 		<script>
 		alert('data pembayaran berhasil diedit');
 		document.location.href = 'datapembayaran.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data pembayaran gagal diedit');
 		document.location.href = 'datapembayaran.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>