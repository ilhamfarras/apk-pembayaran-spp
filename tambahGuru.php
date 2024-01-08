<?php
include 'koneksi.php';
include 'header.php';
?>
<title>TAMBAH GURU</title>
<div class="container">
	<div class="page-header">
<h2 >TAMBAH DATA GURU</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td>ISI DATA GURU</td>
		<td>
		<input class="form-control" type="text" name="id_guru" placeholder="Masukan id">
		<input class="form-control" type="text" name="nama_guru" placeholder="Masukan Nama Guru">
		<input class="form-control" type="text" name="alamat" placeholder="Masukan Alamat">
		<input class="form-control" type="text" name="no_telephone" placeholder="Masukan Nomer Telephone">
		<input class="form-control" type="text" name="gender_id_gender" placeholder="Masukan ID Gender">
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
	$id_guru = $_POST['id_guru'];
	$guru = $_POST['nama_guru'];
	$alamat = $_POST['alamat'];
	$no_telephone = $_POST['no_telephone'];
	$gender = $_POST['gender_id_gender'];
	

 	$simpan = $konek-> query("INSERT INTO guru VALUES('$id_guru','$guru','$alamat','$no_telephone','$gender')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data guru berhasil ditambahkan');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data guru gagal ditambahkan');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}
 }

?>
</div>
<?php  include 'footer.php';  ?>