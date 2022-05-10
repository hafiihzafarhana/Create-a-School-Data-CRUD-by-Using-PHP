<?php
    include_once("backend.php");
    // mengambil id untuk diarahkan sesuai dengan database
    $IDRuang = $_GET['id'];
    // nah 
    if(hapus_data_jadwal($IDRuang)>0){
        echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='dashboard_jadwal.php';
        </script>
        ";
    }

    else{
        echo "
        <script>
        alert('data gagal dihapus');
        document.location.href='dashboard_jadwal.php';
        </script>
        ";
    }

?>