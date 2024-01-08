<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login']))  {
	$hapus = $konek -> query("DELETE FROM guru WHERE id_guru = '$_GET[id]'");

	if( $hapus) {
		echo "
		<script>
		alert('data guru berhasil dihapus');
		document.location.href = 'dataguru.php';
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