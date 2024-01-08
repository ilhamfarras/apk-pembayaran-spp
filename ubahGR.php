<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM guru WHERE id_guru ='$_GET[id]'");
include 'header.php';
?>
<title>EDIT DATA GURU</title>
<div class="container">
	<div class="page-header">
<h2 >EDIT DATA GURU</h2>
</div>
<form action="" method="post">
<table class="table">
	<?php
	while ($dta =mysqli_fetch_assoc($data) ) :
	?>
	<tr>
		<td>Nama Guru</td>
		<td>
			<input class="form-control" type="hidden" name="id_guru" value="<?= $dta['id_guru'] ?>">
			<input class="form-control" type="text" name="guru" value="<?= $dta['nama_guru'] ?>" size = "30">
			<input class="form-control" type="text" name="alamat" value="<?= $dta['alamat'] ?>" size = "30">
			<input class="form-control" type="text" name="no_telephone" value="<?= $dta['no_telephone'] ?>" size = "30">
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
 	$id   = $_POST['id_guru']; 
 	$guru = $_POST['guru'];
	$alamat = $_POST ['alamat'];
	$telp = $_POST ['no_telephone'];
	$gender = $_POST['gender_id_gender'];

 	$ubah = $konek->query("UPDATE guru SET nama_guru = '$guru', alamat = '$alamat', no_telephone = '$telp', gender_id_gender = '$gender' WHERE id_guru = $id");
 	if( $ubah ){
 		echo "
 		<script>
 		alert('data guru berhasil diedit');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data guru gagal diedit');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>