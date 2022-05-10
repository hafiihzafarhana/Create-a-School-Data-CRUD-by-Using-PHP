<?php
    include_once("backend.php");
    // mengambil id untuk diarahkan sesuai dengan database
    $No_Induk = $_GET['id'];
    // nah 
    if(hapus_murid($No_Induk)>0){
        echo "
        <script>
        alert('data berhasil dihapus');
        document.location.href='dashboard_murid.php';
        </script>
        ";
    }

    else{
        echo "
        <script>
        alert('data gagal dihapus');
        document.location.href='dashboard_murid.php';
        </script>
        ";
    }

?>