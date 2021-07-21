<!-- hapus karyawan -->
<?php 

	require 'function.php';

$nip = $_GET["nip"];

if ( hapus1 ($nip) > 0) {
	echo "
		<script>
			alert('data berhasil dihapuskan!');
			document.location.href ='karyawan.php';
		</script>
	";
}

 ?>