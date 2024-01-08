<?php
include 'koneksi.php';
include 'header.php';
?>
<title>TAMBAH PEMBAYARAN</title>
<div class="container">
	<div class="page-header">
<h2 >TAMBAH DATA PEMBAYARAN</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td>ISI DATA PEMBAYARAN</td>
		<td>
		<input class="form-control" type="text" name="id_pembayaran" placeholder="Masukan Id Pembayaran">
		<input class="form-control" type="date" name="tanggal" placeholder="Masukan Tanggal">
		<input class="form-control" type="text" name="nominal" placeholder="Masukan nominal">
		<input class="form-control" type="text" name="jumlah_bulan" placeholder="Masukan jumlah bulan bayar">
		<input class="form-control" type="text" name="denda" placeholder="masukan denda jika ada">
        <input class="form-control" type="text" name="siswa_nis" placeholder="masukan NIS Siswa">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
		</td>
		<td>
		<button class="btn btn-success" type="button" value="kembali" onclick="history.go(-1)">KEMBALI</button>
		</td>
	</tr>
</table>
</form>

<?php
 if( isset($_POST['tambah']) ) {
	$id_pembayaran = $_POST['id_pembayaran'];
	$tanggal = $_POST['tanggal'];
	$nominal = $_POST['nominal'];
	$jml_bulan = $_POST['jumlah_bulan'];
	$denda = $_POST['denda'];
    $nis = $_POST ['siswa_nis'];
	

 	$simpan = $konek-> query("INSERT INTO pembayaran VALUES('$id_pembayaran','$tanggal','$nominal','$jml_bulan','$denda','$nis')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data pembayaran berhasil ditambahkan');
 		document.location.href = 'datapembayaran.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data pembayaran gagal ditambahkan');
 		document.location.href = 'datapembayaran.php';
 		</script>
 		";
 	}
 }

?>
</div>
<?php  include 'footer.php';  ?>