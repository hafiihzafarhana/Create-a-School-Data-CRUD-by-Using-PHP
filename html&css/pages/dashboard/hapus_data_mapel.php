<?php
    include_once("backend.php");
    // mengambil id untuk diarahkan sesuai dengan database
    $Kode_MaPel = $_GET['id'];
    // nah 
    if(hapus_mapel($Kode_MaPel)>0){
        echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='dashboard_mapel.php';
        </script>
        ";
    }

    else{
        echo "
        <script>
        alert('data gagal dihapus');
        document.location.href='dashboard_mapel.php';
        </script>
        ";
    }

?>