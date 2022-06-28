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
    <link href="../../assets/img/logo.png" rel="icon" type="image/png">
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
        </head>

        <body id="page-top">

        <!-- Begin Page Content -->
        <div class="container">
                    <!-- Page Heading -->
         <div class="text-center mt-3">
             <h1 class="h4 mb-2 text-dark">SEKOLAH MENENGAH KEJURUAN HASAN KAFRAWI</h1>
            <h1 class="h3 mb-2 text-dark">Data Pelanggaran Kelas XI-RPL-III</h1>
            <p class="mb-4">Alamat : Jl. Raya Mayong-Jepara Km 08 Pancur Mayong Jepara 59465.</p>
            <hr class="bg-secondary">
        </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Nama Orangtua</th>
                            <th>Kelas</th>
                            <th>Tanggal</th>
                            <th>Pelanggaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../koneksi.php';
                        $no = 1;
                        $nis = $_GET['nis'];
                        $kelas = mysqli_query($koneksi, "SELECT * FROM pelanggaran WHERE nama_kelas = 'XI-RPL-III' AND nis= '$nis'");
                        while($d = mysqli_fetch_array($kelas)){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d['nis'];?></td>
                            <td><?= $d['nama_user'];?></td>
                            <td><?= $d['nama_wali'];?></td>
                            <td><?= $d['nama_kelas'];?></td>
                            <td><?= $d['tanggal'];?></td>
                            <td><?= $d['pelanggaran'];?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                    
            <script>
                    window.print();
            </script>
                </table>
            </div>
            <style>
                .smk {
                    margin-left: 400px;
                    text-align: center;
                    margin-top: 50px;
                }
                .wali {
                    text-align: center;
                    margin-top: 50px;
                }
                .kepsek {
                    margin-top: 80px;
                }
            </style>
            <div class="footer">
            <div class="row">
                <div class="col-sm wali">
                    <p>Mengetahui,</p>
                    <p>Wali Kelas XI-RPL-III</p>
                    <h6 class="kepsek">............................................</h6>
                </div>
                <div class="col-sm smk">
                    <p>Mengetahui,</p>
                    <p>Kepala Sekolah SMK Hasan Kafrawi</p>
                    <h6 class="kepsek">AGUS SULISTYONO, S.Pd.</h6>
                </div>
            </div>
            </div>
</div>
                
                
    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Core plugin JavaScript-->
    <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>

</body>
</html>