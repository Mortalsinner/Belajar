<!-- hapus jabatan -->
<?php 

	require 'function.php';

$tunjangan = $_GET["tunjangan"];

if ( hapus2 ($tunjangan) > 0) {
	echo "
		<script>
			alert('data berhasil dihapuskan!');
			document.location.href ='jabatan.php';
		</script>
	";
}

 ?>