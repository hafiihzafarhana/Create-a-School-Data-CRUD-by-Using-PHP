<?php
    include_once("backend.php");
    // mengambil id untuk diarahkan sesuai dengan database
    $IDGuru = $_GET['id'];
    // nah 
    if(hapus($IDGuru)>0){
        echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='dashboard_guru.php';
        </script>
        ";
    }

    else{
        echo "
        <script>
        alert('data gagal dihapus');
        document.location.href='dashboard_guru.php';
        </script>
        ";
    }

?>