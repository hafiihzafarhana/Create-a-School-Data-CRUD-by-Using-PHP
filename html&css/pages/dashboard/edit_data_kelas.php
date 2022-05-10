<?php
// Create database connection using config file
include_once("conn.php");
include_once("backend.php");

$id = $_GET['id'];
// Fetch all users data from database
$detailKelas = ambil_data("SELECT * FROM tb_ruang_kelas WHERE IDRuang='$id'")[0];

// jika data berhasil di-submit
if (isset($_POST["submit"])) {
    //     // jika data berhasil diubah
    if (update_kelas($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil diedit');
            document.location.href='dashboard_kelas.php';
            </script>
            ";
    }

    //     // jika gaga diubah karena 
    else {
        echo "
            <script>
            alert('data gagal diedit');
            </script>
            ";
            // document.location.href='dashboard_kelas.php';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Dashboard Kelas | Edit Data | <?php echo $detailKelas["Nama_Ruang"] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
    <link rel="canonical" href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="og:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="og:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/volt-pro">
    <meta property="twitter:title" content="Volt - Free Bootstrap 5 Dashboard">
    <meta property="twitter:description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
    <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/volt-pro-bootstrap-5-dashboard/volt-pro-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://w7.pngwing.com/pngs/551/211/png-transparent-education-logo-pre-school-others-text-logo-business-thumbnail.png">
  <link rel="icon" type="image/png" sizes="16x16" href="https://w7.pngwing.com/pngs/551/211/png-transparent-education-logo-pre-school-others-text-logo-business-thumbnail.png">
    <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Sweet Alert -->
    <link type="text/css" href="../../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="../../css/volt.css" rel="stylesheet">

    <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="https://w7.pngwing.com/pngs/551/211/png-transparent-education-logo-pre-school-others-text-logo-business-thumbnail.png" alt="Volt logo" /> <img class="navbar-brand-light" src="../../assets/img/brand/dark.svg" alt="Volt logo" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="collapse-close d-md-none">
                    <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
                        <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="../../index.html" class="nav-link d-flex align-items-center">
                        <span class="sidebar-icon">
                            <img src="https://w7.pngwing.com/pngs/551/211/png-transparent-education-logo-pre-school-others-text-logo-business-thumbnail.png" height="50" width="50" alt="Volt Logo">
                        </span>
                        <span class="mt-1 ms-1 sidebar-text">Data Sekolah</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../pages/dashboard/dashboard_guru.php" class="nav-link">
                        <span class="sidebar-text">Guru</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../pages/dashboard/dashboard_murid.php" class="nav-link">
                        <span class="sidebar-text">Murid</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="../../pages/dashboard/dashboard_kelas.php" class="nav-link">
                        <span class="sidebar-text">Kelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../pages/dashboard/dashboard_mapel.php" class="nav-link">
                        <span class="sidebar-text">Mapel</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../pages/dashboard/dashboard_jadwal.php" class="nav-link">
                        <span class="sidebar-text">Jadwal Pelajaran</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="content">

        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Edit Data Kelas</h3>
                    <h4 class="text-center">"<?php echo $detailKelas["Nama_Ruang"] ?>"</h4>
                </div>
            </div>

            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="IDRuang" name="IDRuang" value="<?php echo $detailKelas["IDRuang"] ?>" >
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-4">

                        <!-- Form -->
                        <div class="mb-4">
                            <label for="Nama_Ruang">Nama kelas</label>
                            <input type="text" value="<?php echo $detailKelas["Nama_Ruang"] ?>" class="form-control" name="Nama_Ruang" id="Nama_Ruang" placeholder="Masukan Nama kelas">
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="mb-4">
                            <label for="Tipe_Ruang">Tipe Kelas</label>
                            <select class="form-select" id="Tipe_Ruang" name="Tipe_Ruang">
                                <?php if($detailKelas["Tipe_Ruang"] == "a") : ?>
                                <option>---Pilih---</option>
                                <option value="a" selected>Tipe A</option>
                                <option value="b">Tipe B</option>
                                <?php endif; ?>
                                <?php if($detailKelas["Tipe_Ruang"] == "b") : ?>
                                <option>---Pilih---</option>
                                <option value="a">Tipe A</option>
                                <option value="b" selected>Tipe B</option>
                                <?php endif; ?>
                                <?php if($detailKelas["Tipe_Ruang"] == "--Pilih--") : ?>
                                <option selected>---Pilih---</option>
                                <option value="a">Tipe A</option>
                                <option value="b">Tipe B</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success text-white" name="submit" id="submit">Update Data</button>

                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="Keterangan_Ruang">Keterangan Ruang</label>
                            <textarea class="form-control" name="Keterangan_Ruang" placeholder="Masukan Keterangan Untuk Ruangan" id="Keterangan_Ruang" cols="30" rows="5"><?php echo $detailKelas["Keterangan_Ruang"] ?></textarea>
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="mb-4">
                            <label for="Kelengkapan_Alat">Kelengkapan Alat</label>
                            <textarea class="form-control" name="Kelengkapan_Alat" placeholder="Masukan Kelengkapan Untuk Ruangan" id="Kelengkapan_Alat" cols="30" rows="5"><?php echo $detailKelas["Kelengkapan_Alat"] ?></textarea>
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="mb-4">
                            <label for="Renovasi_Terakhir">Renovasi Terakhir</label>
                            <input class="form-control" value="<?php echo $detailKelas["Renovasi_Terakhir"] ?>" type="date" name="Renovasi_Terakhir" id="Renovasi_Terakhir">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <footer class="bg-white rounded shadow p-5 mb-4 mt-4">
            <div class="row">
                <div class="col-12 col-md-4 col-xl-6 mb-4 mb-md-0">
                    <p class="mb-0 text-center text-lg-start">© <span class="current-year"></span> <a class="text-primary fw-normal" href="https://themesberg.com" target="_blank">Kelompok 1</a></p>
                </div>
            </div>
        </footer>
    </main>

    <!-- Core -->
    <script src="../../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Vendor JS -->
    <script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

    <!-- Slider -->
    <script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

    <!-- Smooth scroll -->
    <script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

    <!-- Charts -->
    <script src="../../vendor/chartist/dist/chartist.min.js"></script>
    <script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

    <!-- Datepicker -->
    <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="../../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Vanilla JS Datepicker -->
    <script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Notyf -->
    <script src="../../vendor/notyf/notyf.min.js"></script>

    <!-- Simplebar -->
    <script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

    <!-- Volt JS -->
    <script src="../../assets/js/volt.js"></script>


</body>

</html>