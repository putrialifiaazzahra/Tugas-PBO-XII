<?php
include('myLib/myDB.php');

$Db = new myDb();
$data_warga = $Db->show();
// print_r($data_warga);
if (isset($_GET['hapus'])) {
    echo "Data dengan ID :".$_GET['hapus']." akan dihapus"; 
    $idwarga = $_GET['hapus'];
    $queryhapus = $Db->delete($idwarga);
    if ($queryhapus==TRUE) {
        echo "<script>alert('Data Berhasil Dihapus!');
        document.location.href='index.php';</script>";
    }else {
        echo "<script>alert('Data Gagal Terhapus!');
        document.location.href='index.php';</script>";
    }
    
}

?>