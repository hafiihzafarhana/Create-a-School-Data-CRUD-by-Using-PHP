<?php
    include_once("conn.php");

    function ambil_data($data){
        global $conn;

        $ambilData = mysqli_query($conn,$data);

        $rows = [];

        while($row = mysqli_fetch_array($ambilData)){
        // ini adalah bentuk masuknya databse ke dalam array $rows
        $rows[] = $row;
        }

        return $rows;
    }

    function tambah_data_guru($data){
        global $conn;

        $NamaGuru = htmlspecialchars($data['NamaGuru']);
        $GelarDepan = htmlspecialchars($data['GelarDepan']);
        $GelarBelakang = htmlspecialchars($data['GelarBelakang']);
        $JKGuru = htmlspecialchars($data['JKGuru']);
        $AgamaGuru = htmlspecialchars($data['AgamaGuru']);

        $AlamatGuru = htmlspecialchars($data['AlamatGuru']);
        $Kota_Lahir = htmlspecialchars($data['Kota_Lahir']);
        $TglLahirGuru = htmlspecialchars($data['TglLahirGuru']);
        $NoHPGuru = htmlspecialchars($data['NoHPGuru']);
        $NoWAGuru = htmlspecialchars($data['NoWAGuru']);

        $IDTelegramGuru = htmlspecialchars($data['IDTelegramGuru']);
        $IDLineGuru = htmlspecialchars($data['IDLineGuru']);
        $IDFacebookGuru = htmlspecialchars($data['IDFacebookGuru']);
        $IDInstagramGuru = htmlspecialchars($data['IDInstagramGuru']);
        $IDTwitterGuru = htmlspecialchars($data['IDTwitterGuru']);

        $IDYoutubeGuru = htmlspecialchars($data['IDYoutubeGuru']);
        $EmailGuru = htmlspecialchars($data['EmailGuru']);
        $IDGuru = uniqid();

        $iniTambahData = mysqli_query($conn,"INSERT INTO tb_guru VALUES ('$IDGuru','$NamaGuru','$GelarDepan','$GelarBelakang','$JKGuru','$AgamaGuru','$AlamatGuru','$Kota_Lahir','$TglLahirGuru','$NoHPGuru','$NoWAGuru','$IDTelegramGuru','$IDLineGuru','$IDFacebookGuru','$IDInstagramGuru','$IDTwitterGuru','$IDYoutubeGuru','$EmailGuru')");

        return mysqli_affected_rows($conn);
    }

    function hapus($data){
        global $conn;

        $inihapus = mysqli_query($conn,"DELETE FROM tb_guru WHERE IDGuru ='$data'");

        return mysqli_affected_rows($conn);
    }

    function update($data){
        global $conn;

        $IDGuru = $data['IDGuru'];
        
        $NamaGuru = $data['NamaGuru'];
        $GelarDepan = $data['GelarDepan'];
        $GelarBelakang = htmlspecialchars($data['GelarBelakang']);
        $JKGuru = htmlspecialchars($data['JKGuru']);
        $AgamaGuru = htmlspecialchars($data['AgamaGuru']);

        $AlamatGuru = htmlspecialchars($data['AlamatGuru']);
        $Kota_Lahir = htmlspecialchars($data['Kota_Lahir']);
        $TglLahirGuru = htmlspecialchars($data['TglLahirGuru']);
        $NoHPGuru = htmlspecialchars($data['NoHPGuru']);
        $NoWAGuru = htmlspecialchars($data['NoWAGuru']);

        $IDTelegramGuru = htmlspecialchars($data['IDTelegramGuru']);
        $IDLineGuru = htmlspecialchars($data['IDLineGuru']);
        $IDFacebookGuru = htmlspecialchars($data['IDFacebookGuru']);
        $IDInstagramGuru = htmlspecialchars($data['IDInstagramGuru']);
        $IDTwitterGuru = htmlspecialchars($data['IDTwitterGuru']);

        $IDYoutubeGuru = htmlspecialchars($data['IDYoutubeGuru']);
        $EmailGuru = htmlspecialchars($data['EmailGuru']);

        $update = mysqli_query($conn,"UPDATE tb_guru SET 
                                                    NamaGuru='$NamaGuru',
                                                    GelarDepan='$GelarDepan',
                                                    GelarBelakang='$GelarBelakang',
                                                    JKGuru='$JKGuru',
                                                    AgamaGuru='$AgamaGuru',
                                                    AlamatGuru='$AlamatGuru',
                                                    Kota_Lahir='$Kota_Lahir',
                                                    TglLahirGuru='$TglLahirGuru',
                                                    NoHPGuru='$NoHPGuru',
                                                    NoWAGuru='$NoWAGuru',
                                                    IDTelegramGuru='$IDTelegramGuru',
                                                    IDLineGuru='$IDLineGuru',
                                                    IDFacebookGuru='$IDFacebookGuru',
                                                    IDInstagramGuru='$IDInstagramGuru',
                                                    IDTwitterGuru='$IDTwitterGuru',
                                                    IDYoutubeGuru='$IDYoutubeGuru',
                                                    EmailGuru='$EmailGuru'
                                                    WHERE IDGuru='$IDGuru'
                                                    ");

    // cek apakah data diedit atau tidak
        // jika diedit maka nilai 1
        // jika salah maka nilai 0
        // kesalahan mungkin berasal dari codinganya
    return mysqli_affected_rows($conn);
    }

    function tambah_data_murid($data){
        global $conn;

        $Nama_Murid = htmlspecialchars($data['Nama_Murid']);
        $No_Induk  = $data["No_Induk"];
        $Jen_Kel = htmlspecialchars($data['Jen_Kel']);
        $Agama_Murid = htmlspecialchars($data['Agama_Murid']);

        $Alamat_Rumah = htmlspecialchars($data['Alamat_Rumah']);
        $TempatLahir = htmlspecialchars($data['TempatLahir']);
        $Tgl_Lahir = htmlspecialchars($data['Tgl_Lahir']);
        $NoHP = htmlspecialchars($data['NoHP']);
        $NoWA = htmlspecialchars($data['NoWA']);

        $IDTelegram = htmlspecialchars($data['IDTelegram']);
        $IDLine = htmlspecialchars($data['IDLine']);
        $IDFacebook = htmlspecialchars($data['IDFacebook']);
        $IDInstagram = htmlspecialchars($data['IDInstagram']);
        $IDTwitter = htmlspecialchars($data['IDTwitter']);

        $IDYoutube = htmlspecialchars($data['IDYoutube']);
        $Email = htmlspecialchars($data['Email']);

        $iniTambahData = mysqli_query($conn,"INSERT INTO tb_murid VALUES ('$No_Induk','$Nama_Murid','$Jen_Kel','$Agama_Murid','$Alamat_Rumah','$TempatLahir','$Tgl_Lahir','$NoHP','$NoWA','$IDTelegram','$IDLine','$IDFacebook','$IDInstagram','$IDTwitter','$IDYoutube','$Email')");

        return mysqli_affected_rows($conn);
    }

    function hapus_murid($data){
        global $conn;

        $inihapus = mysqli_query($conn,"DELETE FROM tb_murid WHERE No_Induk ='$data'");

        return mysqli_affected_rows($conn);
    }

    function update_murid($data){
        global $conn;

        $Nama_Murid = htmlspecialchars($data['Nama_Murid']);
        $No_Induk  = $data["No_Induk"];
        $Jen_Kel = htmlspecialchars($data['Jen_Kel']);
        $Agama_Murid = htmlspecialchars($data['Agama_Murid']);

        $Alamat_Rumah = htmlspecialchars($data['Alamat_Rumah']);
        $TempatLahir = htmlspecialchars($data['TempatLahir']);
        $Tgl_Lahir = htmlspecialchars($data['Tgl_Lahir']);
        $NoHP = htmlspecialchars($data['NoHP']);
        $NoWA = htmlspecialchars($data['NoWA']);

        $IDTelegram = htmlspecialchars($data['IDTelegram']);
        $IDLine = htmlspecialchars($data['IDLine']);
        $IDFacebook = htmlspecialchars($data['IDFacebook']);
        $IDInstagram = htmlspecialchars($data['IDInstagram']);
        $IDTwitter = htmlspecialchars($data['IDTwitter']);

        $IDYoutube = htmlspecialchars($data['IDYoutube']);
        $Email = htmlspecialchars($data['Email']);

        $update = mysqli_query($conn,"UPDATE tb_murid SET 
        Nama_Murid='$Nama_Murid',
        Jen_Kel='$Jen_Kel',
        Agama_Murid='$Agama_Murid',
        Alamat_Rumah='$Alamat_Rumah',
        TempatLahir='$TempatLahir',
        Tgl_Lahir='$Tgl_Lahir',
        NoHP='$NoHP',
        NoWA='$NoWA',
        IDTelegram='$IDTelegram',
        IDLine='$IDLine',
        IDFacebook='$IDFacebook',
        IDInstagram='$IDInstagram',
        IDTwitter='$IDTwitter',
        IDYoutube='$IDYoutube',
        Email='$Email'
        WHERE No_Induk='$No_Induk'
        ");

// cek apakah data diedit atau tidak
// jika diedit maka nilai 1
// jika salah maka nilai 0
// kesalahan mungkin berasal dari codinganya
return mysqli_affected_rows($conn);
    }

    function tambah_data_kelas($data){
        global $conn;

        $IDRuang  = htmlspecialchars($data['IDRuang']);
        $Nama_Ruang = htmlspecialchars($data['Nama_Ruang']);
        $Tipe_Ruang = htmlspecialchars($data['Tipe_Ruang']);
        $Keterangan_Ruang = htmlspecialchars($data['Keterangan_Ruang']);
        $Kelengkapan_Alat = htmlspecialchars($data['Kelengkapan_Alat']);
        $Renovasi_Terakhir = htmlspecialchars($data['Renovasi_Terakhir']);

        if($Tipe_Ruang == "a"){
            $Ukuran_Ruang = "100";
            $Kapasitas_Ruang = 36;
            $Jumlah_Meja = 36;
            $Jumlah_Kursi = 36;
        }

        else if($Tipe_Ruang == "b"){
            $Ukuran_Ruang = "150";
            $Kapasitas_Ruang = 50;
            $Jumlah_Meja = 50;
            $Jumlah_Kursi = 50;
        }

        else{
            $Ukuran_Ruang = "0";
            $Kapasitas_Ruang = 0;
            $Jumlah_Meja = 0;
            $Jumlah_Kursi = 0;
        }

        $iniTambahData = mysqli_query($conn,"INSERT INTO tb_ruang_kelas VALUES ('$IDRuang','$Nama_Ruang','$Tipe_Ruang','$Ukuran_Ruang','$Kapasitas_Ruang','$Jumlah_Meja','$Jumlah_Kursi','$Keterangan_Ruang','$Kelengkapan_Alat','$Renovasi_Terakhir')");

        return mysqli_affected_rows($conn);
    }

    function hapus_data_kelas($data){
        global $conn;

        $inihapus = mysqli_query($conn,"DELETE FROM tb_ruang_kelas WHERE IDRuang ='$data'");

        return mysqli_affected_rows($conn);
    }

    function update_kelas($data){
        global $conn;

        $IDRuang  = htmlspecialchars($data['IDRuang']);
        $Nama_Ruang = htmlspecialchars($data['Nama_Ruang']);
        $Tipe_Ruang = htmlspecialchars($data['Tipe_Ruang']);
        $Keterangan_Ruang = htmlspecialchars($data['Keterangan_Ruang']);
        $Kelengkapan_Alat = htmlspecialchars($data['Kelengkapan_Alat']);
        $Renovasi_Terakhir = htmlspecialchars($data['Renovasi_Terakhir']);

        if($Tipe_Ruang == "a"){
            $Ukuran_Ruang = "100";
            $Kapasitas_Ruang = 36;
            $Jumlah_Meja = 36;
            $Jumlah_Kursi = 36;
        }

        else if($Tipe_Ruang == "b"){
            $Ukuran_Ruang = "150";
            $Kapasitas_Ruang = 50;
            $Jumlah_Meja = 50;
            $Jumlah_Kursi = 50;
        }

        else{
            $Ukuran_Ruang = "0";
            $Kapasitas_Ruang = 0;
            $Jumlah_Meja = 0;
            $Jumlah_Kursi = 0;
        }

        $update = mysqli_query($conn,"UPDATE tb_ruang_kelas SET 
        Nama_Ruang='$Nama_Ruang',
        Tipe_Ruang='$Tipe_Ruang',
        Ukuran_Ruang='$Ukuran_Ruang',
        Kapasitas_Ruang='$Kapasitas_Ruang',
        Jumlah_Meja='$Jumlah_Meja',
        Jumlah_Kursi='$Jumlah_Kursi',
        Keterangan_Ruang='$Keterangan_Ruang',
        Kelengkapan_Alat='$Kelengkapan_Alat',
        Renovasi_Terakhir='$Renovasi_Terakhir'
        WHERE IDRuang='$IDRuang'
        ");

        return mysqli_affected_rows($conn);
    }

    function tambah_data_mapel($data){
        global $conn;

        $Kode_MaPel  = htmlspecialchars($data['Kode_MaPel']);
        $Nama_Mapel = htmlspecialchars($data['Nama_Mapel']);
        $Bidang_Mapel = htmlspecialchars($data['Bidang_Mapel']);
        $Jenis_Mapel = htmlspecialchars($data['Jenis_Mapel']);
        $Tipe_Mapel = htmlspecialchars($data['Tipe_Mapel']);
        $Jumlah_Pertemuan = htmlspecialchars($data['Jumlah_Pertemuan']);
        $Durasi_Mapel = htmlspecialchars($data['Durasi_Mapel']);

        $iniTambahData = mysqli_query($conn,"INSERT INTO tb_mata_pelajaran VALUES ('$Kode_MaPel','$Nama_Mapel','$Bidang_Mapel','$Jenis_Mapel','$Tipe_Mapel','$Jumlah_Pertemuan','$Durasi_Mapel')");

        return mysqli_affected_rows($conn);
    }

    function hapus_mapel($data){
        global $conn;

        $inihapus = mysqli_query($conn,"DELETE FROM tb_mata_pelajaran WHERE Kode_MaPel ='$data'");

        return mysqli_affected_rows($conn);
    }

    function update_mapel($data){
        global $conn;

        $Kode_MaPel  = htmlspecialchars($data['Kode_MaPel']);
        $Nama_Mapel = htmlspecialchars($data['Nama_Mapel']);
        $Bidang_Mapel = htmlspecialchars($data['Bidang_Mapel']);
        $Jenis_Mapel = htmlspecialchars($data['Jenis_Mapel']);
        $Tipe_Mapel = htmlspecialchars($data['Tipe_Mapel']);
        $Jumlah_Pertemuan = htmlspecialchars($data['Jumlah_Pertemuan']);
        $Durasi_Mapel = htmlspecialchars($data['Durasi_Mapel']);

        $update = mysqli_query($conn,"UPDATE tb_mata_pelajaran SET 
        Nama_Mapel='$Nama_Mapel',
        Bidang_Mapel='$Bidang_Mapel',
        Jenis_Mapel='$Jenis_Mapel',
        Tipe_Mapel='$Tipe_Mapel',
        Jumlah_Pertemuan='$Jumlah_Pertemuan',
        Durasi_Mapel='$Durasi_Mapel'
        WHERE Kode_MaPel='$Kode_MaPel'
        ");

        return mysqli_affected_rows($conn);
    }

    function formatMilliseconds($milliseconds) {
        $seconds = floor($milliseconds / 1000);
        $minutes = floor($seconds / 60);
        $hours = floor($minutes / 60);
        $milliseconds = $milliseconds % 1000;
        $seconds = $seconds % 60;
        $minutes = $minutes % 60;
    
        $format = '%u:%02u:%02u.%03u';
        $time = sprintf($format, $hours, $minutes, $seconds, $milliseconds);
        return rtrim($time, '0');
    }

    function tambah_data_jadwal($data){
        global $conn;

        $IDJadwal  = htmlspecialchars($data['IDJadwal']);
        $No_Induk = htmlspecialchars($data['No_Induk']);
        $Kode_MaPel = htmlspecialchars($data['Kode_MaPel']);
        $IDGuru = htmlspecialchars($data['IDGuru']);
        $IDRuang = htmlspecialchars($data['IDRuang']);
        $SesiJadwal = htmlspecialchars($data['SesiJadwal']);
        $Waktu_Mulai = $data['Waktu_Mulai'];

        $rMapel = ambil_data("SELECT Durasi_Mapel FROM tb_mata_pelajaran WHERE Kode_Mapel='$Kode_MaPel'")[0];
        $durasi = $rMapel["Durasi_Mapel"];

        // durasi change to mili
        $dateTimesDurasi   = DateTime::createFromFormat('H:i:s', $durasi);
        $miliDurasi = ($dateTimesDurasi->format("H") * 60 * 60 * 1000) +
        ($dateTimesDurasi->format("i") * 60 * 1000) +
        ($dateTimesDurasi->format("s") * 1000);

        // waktu mulai change to mili
        $dateTimeMulai   = DateTime::createFromFormat('H:i', $Waktu_Mulai);
        $miliWaktuMulai = ($dateTimeMulai->format("H") * 60 * 60 * 1000) +
        ($dateTimeMulai->format("i") * 60 * 1000);

        $totalWaktu =  $miliDurasi + $miliWaktuMulai;

        $Waktu_Selesai = formatMilliseconds($totalWaktu);

        $iniTambahData = mysqli_query($conn,"INSERT INTO tb_jadwal_pelajaran VALUES ('$IDJadwal','$No_Induk','$Kode_MaPel','$IDGuru','$IDRuang','$SesiJadwal','$Waktu_Mulai', '$Waktu_Selesai')");

        return mysqli_affected_rows($conn);
    }

    function hapus_data_jadwal($data){
        global $conn;

        $inihapus = mysqli_query($conn,"DELETE FROM tb_jadwal_pelajaran WHERE IDJadwal ='$data'");

        return mysqli_affected_rows($conn);
    }

    function update_jadwal($data){
        global $conn;

        $IDJadwal  = htmlspecialchars($data['IDJadwal']);
        $No_Induk = htmlspecialchars($data['No_Induk']);
        $Kode_MaPel = htmlspecialchars($data['Kode_MaPel']);
        $IDGuru = htmlspecialchars($data['IDGuru']);
        $IDRuang = htmlspecialchars($data['IDRuang']);
        $SesiJadwal = htmlspecialchars($data['SesiJadwal']);
        $Waktu_Mulai = $data['Waktu_Mulai'];

        $rMapel = ambil_data("SELECT Durasi_Mapel FROM tb_mata_pelajaran WHERE Kode_Mapel='$Kode_MaPel'")[0];
        $durasi = $rMapel["Durasi_Mapel"];

        // durasi change to mili
        $dateTimesDurasi   = DateTime::createFromFormat('H:i:s', $durasi);
        $miliDurasi = ($dateTimesDurasi->format("H") * 60 * 60 * 1000) +
        ($dateTimesDurasi->format("i") * 60 * 1000) +
        ($dateTimesDurasi->format("s") * 1000);

        // waktu mulai change to mili
        $dateTimeMulai   = DateTime::createFromFormat('H:i:s', $Waktu_Mulai);
        $miliWaktuMulai = ($dateTimeMulai->format("H") * 60 * 60 * 1000) +
        ($dateTimeMulai->format("i") * 60 * 1000) +
        ($dateTimeMulai->format("s") * 1000)
        ;

        $totalWaktu =  $miliDurasi + $miliWaktuMulai;

        $Waktu_Selesai = formatMilliseconds($totalWaktu);

        $update = mysqli_query($conn,"UPDATE tb_jadwal_pelajaran SET 
        No_Induk='$No_Induk',
        Kode_MaPel='$Kode_MaPel',
        IDGuru='$IDGuru',
        IDRuang='$IDRuang',
        SesiJadwal='$SesiJadwal',
        Waktu_Mulai='$Waktu_Mulai',
        Waktu_Selesai='$Waktu_Selesai'
        WHERE IDJadwal='$IDJadwal'
        ");

        return mysqli_affected_rows($conn);
    }