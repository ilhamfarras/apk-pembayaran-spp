<?php
include 'koneksi.php';
include 'header.php';
?>
<title>TAMBAH KELAS</title>
<div class="container">
	<div class="page-header">
<h2 >TAMBAH DATA KELAS</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td>ISI DATA KELAS</td>
		<td>
		<input class="form-control" type="text" name="id_kelas" placeholder="Masukan id Kelas">
		<input class="form-control" type="text" name="nama_kelas" placeholder="Masukan Kelas">
		<input class="form-control" type="text" name="jurusan" placeholder="Masukan jurusan">
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
	$id_kelas = $_POST['id_kelas'];
	$kelas = $_POST['nama_kelas'];
	$jurusan = $_POST['jurusan'];
	

 	$simpan = $konek-> query("INSERT INTO kelas VALUES ('$id_kelas','$kelas','$jurusan')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data kelas berhasil ditambahkan');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data kelas gagal ditambahkan');
 		document.location.href = 'datakelas.php';
 		</script>
 		";
 	}
 }

?>
</div>
<?php  include 'footer.php';  ?>