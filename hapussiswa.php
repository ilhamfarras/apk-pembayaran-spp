<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login']))  {
	$hapus = $konek -> query("DELETE FROM siswa WHERE nis = '$_GET[id]'");

	if( $hapus) {
		echo "
		<script>
		alert('data siswa berhasil dihapus');
		document.location.href = 'datasiswa.php';
		</script>
		";
	}
	else {
	echo "
	<script>
	alert('anda tidak punya akses dihalaman ini');
	document.location.href = 'login.php';
	</script>
	";
}
}