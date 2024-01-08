<?php
include 'koneksi.php';
include 'header.php';
?>
<title>TAMBAH SISWA</title>
<div class="container">
	<div class="page-header">
<h2 >TAMBAH DATA SISWA</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td>ISI DATA SISWA</td>
		<td>
		<input class="form-control" type="text" name="nis" placeholder="Masukan nis">
		<input class="form-control" type="text" name="nama_siswa" placeholder="Masukan Nama siswa">
		<input class="form-control" type="text" name="alamat" placeholder="Masukan Alamat">
		<input class="form-control" type="text" name="no_telephone" placeholder="Masukan Nomer Telephone">
		<input class="form-control" type="text" name="pembayaran_id_pembayaran" placeholder="Masukan id pembayaran">
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
	$nis = $_POST['nis'];
	$siswa = $_POST['nama_siswa'];
	$alamat = $_POST['alamat'];
	$no_telephone = $_POST['no_telephone'];
    $pembayaran = $_POST['pembayaran_id_pembayaran'];
	$gender = $_POST['gender_id_gender'];
	

 	$simpan = $konek-> query("INSERT INTO siswa VALUES('$nis','$siswa','$alamat','$no_telephone','$pembayaran','$gender')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data siswa berhasil ditambahkan');
 		document.location.href = 'datasiswa.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data siswa gagal ditambahkan');
 		document.location.href = 'datasiswa.php';
 		</script>
 		";
 	}
 }

?>
</div>
<?php  include 'footer.php';  ?>