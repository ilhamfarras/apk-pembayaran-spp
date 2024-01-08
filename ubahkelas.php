<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM kelas WHERE id_kelas ='$_GET[id]'");
include 'header.php';
?>
<title>EDIT DATA KELAS</title>
<div class="container">
	<div class="page-header">
<h2 >EDIT DATA KELAS</h2>
</div>
<form action="" method="post">
<table class="table">
	<?php
	while ($dta =mysqli_fetch_assoc($data) ) :
	?>
	<tr>
		<td>Id Kelas</td>
		<td>
			<input class="form-control" type="hidden" name="id_kelas" value="<?= $dta['id_kelas'] ?>">
			<input class="form-control" type="text" name="kelas" value="<?= $dta['nama_kelas'] ?>" size = "30">
			<input class="form-control" type="text" name="jurusan" value="<?= $dta['jurusan'] ?>" size = "30">
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
 	$id_kelas   = $_POST['id_kelas']; 
 	$kelas = $_POST['kelas'];
	$jjurusan = $_POST ['jurusan'];
	
 	$ubah = $konek->query("UPDATE kelas SET nama_kelas = '$kelas', jurusan = '$jurusan' WHERE id_kelas = $id");
 	if( $ubah ){
 		echo "
 		<script>
 		alert('data kelas berhasil diedit');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data kelas gagal diedit');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>