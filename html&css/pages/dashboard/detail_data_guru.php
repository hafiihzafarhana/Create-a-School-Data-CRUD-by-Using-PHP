<?php
// Create database connection using config file
include_once("conn.php");
include_once("backend.php");

$id = $_GET['id'];
// Fetch all users data from database
$dataDetailGuru = ambil_data("SELECT * FROM tb_guru WHERE IDGuru='$id'")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Primary Meta Tags -->
    <title>Dashboard Guru | <?php echo $dataDetailGuru["NamaGuru"] ?></title>
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
    <style>
        
    </style>

</head>

<body>
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="../../index.html">
            <img class="navbar-brand-dark" src="https://w7.pngwing.com/pngs/551/211/png-transparent-education-logo-pre-school-others-text-logo-business-thumbnail.png" alt="Volt logo" /> <img class="navbar-brand-light" alt="Volt logo" />
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
                <li class="nav-item  active ">
                    <a href="../../pages/dashboard/dashboard_guru.php" class="nav-link">
                        <span class="sidebar-text">Guru</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../pages/dashboard/dashboard_murid.php" class="nav-link">
                        <span class="sidebar-text">Murid</span>
                    </a>
                </li>
                <li class="nav-item">
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
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                    </div>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ms-lg-3">
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                                    </svg>
                                    My Profile
                                </a>
                                <div role="separator" class="dropdown-divider my-1"></div>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center">Detail Data Guru</h3>
                    <h4 class="text-center">"<?php echo $dataDetailGuru["NamaGuru"]; ?>"</h4>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-4 col-sm-4">
                    <!-- Form -->
                    <div class="mb-4">
                        <label for="NamaGuru">Nama Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["NamaGuru"]; ?>" name="NamaGuru" id="NamaGuru" placeholder="Masukan Nama Guru" disabled>
                    </div>
                    <!-- End of Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label for="GelarDepan">Gelar Depan Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["GelarDepan"]; ?>" name="GelarDepan" id="GelarDepan" placeholder="Masukan Gelar Depan Guru" disabled>
                    </div>
                    <!-- End of Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label for="GelarBelakang">Gelar Belakang Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["GelarBelakang"]; ?>" name="GelarBelakang" id="GelarBelakang" placeholder="Masukan Gelar Belakang Guru" disabled>
                    </div>
                    <!-- End of Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label for="JKGuru">Gender Guru</label>
                        <select class="form-select" id="JKGuru" name="JKGuru" disabled>
                            <?php if ($dataDetailGuru["JKGuru"] == "p") : ?>
                                <option>---Pilih---</option>
                                <option value="p" selected>Pria</option>
                                <option value="w">Wanita</option>
                            <?php endif; ?>
                            <?php if ($dataDetailGuru["JKGuru"] == "w") : ?>
                                <option>---Pilih---</option>
                                <option value="p">Pria</option>
                                <option value="w" selected>Wanita</option>
                            <?php endif; ?>
                            <?php if ($dataDetailGuru["JKGuru"] == "-") : ?>
                                <option selected>---Pilih---</option>
                                <option value="p">Pria</option>
                                <option value="w">Wanita</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <!-- End of Form -->

                    <!-- Form -->
                    <div class="mb-4">
                        <label for="AgamaGuru">Agama Guru</label>
                        <input type="text" value="<?php echo ucwords ($dataDetailGuru["AgamaGuru"]); ?>" class="form-control" name="AgamaGuru" id="AgamaGuru" placeholder="Masukan Agama Guru" disabled>
                    </div>
                    <!-- End of Form -->

                    <!-- Form -->
                    <div class="my-4">
                        <label for="AlamatGuru">Alamat Guru</label>
                        <textarea class="form-control" disabled placeholder="Masukan Alamat Guru" name="AlamatGuru" id="AlamatGuru" rows="4"><?php echo $dataDetailGuru["AlamatGuru"]; ?></textarea>
                    </div>
                    <!-- End of Form -->

                </div>
                <div class="col-lg-4 col-sm-4">
                    <!-- Form -->
                    <div class="mb-4">
                        <label for="Kota_Lahir">Tempat Lahir Guru</label>
                        <input type="text" class="form-control" name="Kota_Lahir" value="<?php echo $dataDetailGuru["Kota_Lahir"]; ?>" id="Kota_Lahir" placeholder="Masukan Tempat Lahir Guru" disabled>
                    </div>
                    <!-- End of Form -->

                    <div class="mb-4">
                        <label for="TglLahirGuru">Tanggal Lahir Guru</label>
                        <input type="date" class="form-control" value="<?php echo $dataDetailGuru["TglLahirGuru"]; ?>" name="TglLahirGuru" id="TglLahirGuru" placeholder="Masukan Tanggal Lahir Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="NoHPGuru">No HP Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["NoHPGuru"]; ?>" name="NoHPGuru" id="NoHPGuru" placeholder="Masukan No HP Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="NoWAGuru">No WA Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["NoWAGuru"]; ?>" name="NoWAGuru" id="NoWAGuru" placeholder="Masukan No WA Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="IDTelegramGuru">ID Telegram Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["IDTelegramGuru"]; ?>" name="IDTelegramGuru" id="IDTelegramGuru" placeholder="Masukan ID Telegram Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="IDLineGuru">ID Line Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["IDLineGuru"]; ?>" name="IDLineGuru" id="IDLineGuru" placeholder="Masukan ID Line Guru" disabled>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4">
                    <div class="mb-4">
                        <label for="IDFacebookGuru">ID Facebook Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["IDFacebookGuru"]; ?>" name="IDFacebookGuru" id="IDFacebookGuru" placeholder="Masukan ID Facebook Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="IDInstagramGuru">ID Instagram Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["IDInstagramGuru"]; ?>" name="IDInstagramGuru" id="IDInstagramGuru" placeholder="Masukan ID Instagram Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="IDTwitterGuru">ID Twitter Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["IDTwitterGuru"]; ?>" name="IDTwitterGuru" id="IDTwitterGuru" placeholder="Masukan ID Twitter Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="IDYoutubeGuru">ID Youtube Guru</label>
                        <input type="text" class="form-control" value="<?php echo $dataDetailGuru["IDYoutubeGuru"]; ?>" name="IDYoutubeGuru" id="IDYoutubeGuru" placeholder="Masukan ID Youtube Guru" disabled>
                    </div>

                    <div class="mb-4">
                        <label for="EmailGuru">Email Guru</label>
                        <input type="email" class="form-control" value="<?php echo $dataDetailGuru["EmailGuru"]; ?>" name="EmailGuru" id="EmailGuru" placeholder="Masukan Email Guru" disabled>
                    </div>

                </div>
            </div>
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