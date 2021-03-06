<?php
include 'sess_check.php';
$kelas = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY no_kelas DESC");
$k = mysqli_num_rows($kelas);
$data = mysqli_query($koneksi,"SELECT * FROM pelanggaran ORDER BY no_peringatan DESC");
$d = mysqli_num_rows($data);
$admin = mysqli_query($koneksi,"SELECT * FROM admin ORDER BY admin_id DESC");
$a = mysqli_fetch_array($admin);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SMK Hasan Kafrawi</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/img/logo.png" rel="icon" type="image/png">
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="../assets/img/logo.png" width="45px" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">SMK Hasan Kafrawi</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pelanggaran</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih Kelas</h6>
                        <a class="collapse-item" href="kelasx.php">Kelas X</a>
                        <a class="collapse-item" href="kelasxi.php">Kelas XI</a>
                        <a class="collapse-item" href="kelasxii.php">Kelas XII</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Kelas Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="data_kelas.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kelas</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $a['nama_adm']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/logo.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#profilModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-12" style="margin-bottom: 30px;">
                        <div class="card bg-success text-white shadow">
                            <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2 md-2">
                                <img src="../assets/img/logo.png" alt="smk hasan kafrawi" width="150px">
                                </div>
                                <div class="col" style="margin-top: 30px;">
                                <h1>SMK Hasan Kafrawi</h1>
                                <p>Jl. Raya Mayong-Jepara Km 08 Pancur Mayong Jepara 59465</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-6" style="margin-bottom: 20px;">
                        <div class="card bg-warning text-white shadow">
                            <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <h1>VISI</h1>
                                <p>Cerdas, Terampil, Berwawasan Iptek Berdasarkan Iman dan Taqwa</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Kelas</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $k; ?> Kelas</div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-users fa-4x text-gray-300"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Data Pelanggaran</div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $d; ?></div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-4x text-gray-300"></i>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 mb-6" style="margin-bottom: 50px;">
                        <div class="card bg-warning text-white shadow">
                            <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <h1>MISI</h1>
                                <ul>
                                    <li>
                                    Mewujudkan diversifikasi kurikulum SMK agar relevan dengan kebutuhan, yaitu kebutuhan peserta didik keluarga dan berbagai sektor pembangunan dan sub sektor lainnya.
                                    </li>
                                    <li>
                                    Mewujudkan perangkat kurikulum yang lengkap, mutakhir dan berwawasan ke depan.
                                    </li>
                                    <li>
                                    Mewujudkan system penilaian yang otentik. Mewujudkan penyelenggaraan belajar, kreatif, efektik, dan menenangkan.
                                    </li>
                                    <li>
                                    Mewujudkan pendidikan yang menghasilkan lulusan cerdas, terampil, beriman bertaqwa dan memiliki keunggulan kompetitif.
                                    </li>
                                    <li>
                                    Mewujudkan kemampuan olahraga yang tangguh dan kompetitif. Mewujudkan Sekolah Wiyata Mandala sehingga siswa belajar secara menyenangkan.
                                    </li>
                                    <li>
                                    Mewujudkan sekolah sehat.
                                    </li>
                                    <li>
                                    Mewujudkan kemampuan seni yang tangguh dan kompetitif.
                                    </li>
                                    <li>
                                    Mewujudkan ke Pramukaan yang menjadi Suri Tauladan dan kedisiplinan.
                                    </li>
                                    <li>
                                    Mewujudkan kemampuan KIR yang cerdas dan kompetitif.
                                    </li>
                                    <li>
                                    Mewujudkan Nilai- nilai agama bagi kenyamanan hidup peserta didik.
                                    </li>
                                    <li>
                                    Mewujudkan fasilitas sekolah yang relevan, mutaqhir dan berwawasan ke depan dan Mewujudkan media Pembelajaran Interaktif.
                                    </li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include'layouts/footer.php'; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- profil Modal-->
    <div class="modal fade" id="profilModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Selamat Datang Admin</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">
                        <?php 
                        $sql = mysqli_query($koneksi, "SELECT * FROM admin");
                        while($f = mysqli_fetch_array($sql)){
                        ?>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $f['nama_adm']; ?>" readonly>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $f['email_adm']; ?>" readonly>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $f['password']; ?>" readonly>
                        </div>
                        <?php } ?>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="profil.php">Edit Profil</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../assets/js/demo/chart-area-demo.js"></script>
    <script src="../assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>