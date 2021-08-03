<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Registrasi Warga</title>
    <?php
    include('myLib/myDB.php');

    ?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h3>Form Registrasi Warga</h3>
                    </div>

                    <div class="card-body">
                        <?php
                            $Db = new myDb();
                            // print_r($data_warga);
                    
                            if (isset($_POST['daftar'])) {
                                // echo "Tombol Daftar Telah Di Klik";
                                $noktp = $_POST['no_ktp'];
                                $nama = $_POST['nama_lengkap'];
                                $alamat = $_POST['alamat_lengkap'];
                                $nohp = $_POST['no_hp'];
                                $querysimpan = $Db->add_data($noktp,$nama,$alamat,$nohp);
                                // print_r($_POST);
                                if ($querysimpan==TRUE) {
                                    echo "<script>alert('Data Berhasil Tersimpan');
                                    document.location.href='index.php';</script>";
                                }else {
                                    echo "<script>alert('Data Gagal Tersimpan');
                                    document.location.href='index.php';</script>";
                                }
                            }
                        ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="no_ktp">Masukkan Nomor KTP</label>
                                <input type="number" name="no_ktp" class="form-control" id="no_ktp"
                                    placeholder="Nomor KTP">
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap">Masukkan Nama Lengkap</label>
                                <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label for="alamat_lengkap">Masukkan Alamat Lengkap</label>
                                <input type="text" name="alamat_lengkap" class="form-control" id="alamat_lengkap"
                                    placeholder="Alamat">
                            </div>
                            <div class="mb-3">
                                <label for="no_hp">Masukkan Nomor HandPhone</label>
                                <input type="number" name="no_hp" class="form-control" id="no_hp"
                                    placeholder="Nomor HP">
                            </div>
                            <div class="d-grid gap-2 mx-auto mt-3">
                                <button class="btn btn-outline-primary fw-bold" type="submit"
                                    name="daftar">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>