<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login']))  {
	$hapus = $konek -> query("DELETE FROM pembayaran WHERE id_pembayaran = '$_GET[id]'");

	if( $hapus) {
		echo "
		<script>
		alert('data pembayaran berhasil dihapus');
		document.location.href = 'datapembayaran.php';
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