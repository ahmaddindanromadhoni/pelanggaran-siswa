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
    <link href="assets/img/logo.png" rel="icon" type="image/png">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

        <div class="col-xl-5 col-lg-7 col-md-8" style="margin-top: 30px;">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-8 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-12">
                                <div class="px-5 pt-4 pb-2">
                                    <?php include 'alertuser.php';?>
                                    <div class="text-center">
                                    <img style="margin-bottom: 15px;" src="assets/img/logo.png" alt="smk hasan kafrawi" width="150px">
                                    </div>
                                    <div class="text-center">
                                    <h1 class="h4 text-gray-900">
                                       <h4 class="text-dark">Sistem Pelanggaran Siswa</h4>
                                        <h4 class="text-dark">SMK Hasan Kafrawi Mayong</h4>
                                        <h4 class="text-dark mb-5">Jepara</h4>
                                    </h1>
                                    </div>
                                    <form class="user" method="post" action="C_index.php">
                                        <div class="form-group">
                                            <input type="number" class="form-control"
                                                id="exampleInputNis" name="nis" aria-describedby="NisHelp"
                                                placeholder="Nis" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="exampleInputNamaUser" name="nama_user" placeholder="Nama Lengkap" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="exampleInputNamaWali" name="nama_wali" placeholder="Nama Orangtua/Wali" required>
                                        </div>
                                        <div class="form-group">
                                                <select name="nama_kelas" id="kelas" class="form-control" required>
                                                  <option value="">==Pilih Kelas==</option>
                                                  <?php
                                                  include 'koneksi.php';
                                                  $data = mysqli_query($koneksi, "SELECT * FROM kelas ORDER BY no_kelas DESC");
                                                  while($d = mysqli_fetch_array($data)){
                                                  ?>
                                                  <option value="<?= $d['nama_kelas'];?>"><?= $d['nama_kelas']?></option>
                                                   <?php } ?>
                                                </select>
                                               
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control"
                                                id="exampleInputtanggal" name="tanggal" placeholder="Tanggal" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control"
                                                id="exampleInputPelanggaran" name="pelanggaran" placeholder="Pelanggaran" required>
                                        </div>
                                        <hr>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="kirim" value="Kirim">
                                    </form>
                                    <p class="text-center pt-3"><a href="omahcoding.my.id" class="text-decoration-none"><span>Copyright &copy; Ahmad Dindan Romadhoni 2021</span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>