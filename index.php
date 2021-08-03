<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<?php
include('myLib/myDB.php');

?>

<body>

    <?php 

        $Db = new myDb();
        $data_warga = $Db->show();

        if (isset($_GET['hapus'])) {
            echo "Data dengan ID :".$_GET['hapus']." akan dihapus"; 
            $idwarga = $_GET['hapus'];
            $queryhapus = $Db->delete($idwarga);
            if ($queryhapus) {
                echo "Data Berhasil Diapus";
            } else {
                echo "Data Gagal Dihapus";
            }
            
        }
        
    ?>

    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="card shadow-sm mt-4">
                    <div class="card-header">
                        <h2 class="bg-light text-center">DATA WARGA</h2>
                    </div>
                    <div class="card-body">
                        <a href="form-daftar.php" class="btn btn-success mb-3">+ Tambah Data Warga</a>

                        <table class="table table-hover">
                            <tr>
                                <td>No</td>
                                <td>No KTP</td>
                                <td>Nama Lengkap</td>
                                <td>Alamat Lengkap</td>
                                <td>No HP</td>
                                <td>Action</td>
                            </tr>

                            <?php 
                            $i=0;
                            foreach($data_warga as $data){ 
                            $i++;    
                            ?>

                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $data['no_ktp']; ?></td>
                                <td><?php echo $data['nama_lengkap']; ?></td>
                                <td><?php echo $data['alamat_lengkap']; ?></td>
                                <td><?php echo $data['no_hp']; ?></td>
                                <td>
                                    <a class="btn btn-success" href="detail-warga.php?id<?php echo $data['id']; ?>">Detail</a> 
                                    <a class="btn btn-danger" href="index.php?hapus=<?php echo $data['id']; ?>">Hapus</a>
                                </td>
                            </tr>

                            <?php } ?>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    

</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</html>