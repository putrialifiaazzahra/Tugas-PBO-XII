<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
include('lathoop/warga.php');

$warga1 = new warga();

$warga1->personAwal();
echo "<hr>";
$warga1->setPerson();
$warga1->person();
echo "<hr>";
$warga1->person3('Dini','Depok');
?>
</body>
</html>