<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login']))  {
	$hapus = $konek -> query("DELETE FROM kelas WHERE id_kelas = '$_GET[id]'");

	if( $hapus) {
		echo "
		<script>
		alert('data kelas berhasil dihapus');
		document.location.href = 'datakelas.php';
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