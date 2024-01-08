<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM siswa WHERE nis ='$_GET[id]'");
include 'header.php';
?>
<title>EDIT DATA SISWA</title>
<div class="container">
	<div class="page-header">
<h2 >EDIT DATA SISWA</h2>
</div>
<form action="" method="post">
<table class="table">
	<?php
	while ($dta =mysqli_fetch_assoc($data) ) :
	?>
	<tr>
		<td>
            <p>Nama Siswa</p>
            <p>Alamat</p>
            <p></p>
            <p>No Telp</p>
            <p></p>
            <p>Id pembayaran</p>
            <p></p>
            <p>Gender</p>
        </td>
		<td>
			<input class="form-control" type="hidden" name="nis" value="<?= $dta['nis'] ?>">
			<input class="form-control" type="text" name="nama" value="<?= $dta['nama'] ?>" size = "30">
			<input class="form-control" type="text" name="alamat" value="<?= $dta['alamat'] ?>" size = "30">
			<input class="form-control" type="text" name="no_telephone" value="<?= $dta['no_telephone'] ?>" size = "30">
            <input class="form-control" type="text" name="pembayaran_id_pembayaran" value="<?= $dta['pembayaran_id_pembayaran'] ?>" size = "30">
			<input class="form-control" type="text" name="gender_id_gender" value="<?= $dta['gender_id_gender'] ?>" size = "30">
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
 	$nis   = $_POST['nis']; 
 	$nama = $_POST['nama'];
	$alamat = $_POST ['alamat'];
	$telp = $_POST ['no_telephone'];
    $pembayaran = $_POST['pembayaran_id_pembayaran'];
	$gender = $_POST['gender_id_gender'];

 	$ubah = $konek->query("UPDATE siswa SET nama = '$nama', alamat = '$alamat', no_telephone = '$telp', pembayaran_id_pembayaran = '$pembayaran' ,gender_id_gender = '$gender' WHERE nis = $nis");
 	if( $ubah ){
 		echo "
 		<script>
 		alert('data siswa berhasil diedit');
 		document.location.href = 'datasiswa.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data siswa gagal diedit');
 		document.location.href = 'datasiswa.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>