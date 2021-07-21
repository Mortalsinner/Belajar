<!-- Hapus data golongan -->
<?php

    require 'function.php';

    $gol = $_GET["gol"];

    if(hapus3($gol) > 0) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'golongan.php'
        </script>
            ";
    }


?>