<?php
include "koneksi.php";
// mengambil nilai pada form
$x1 = $_POST['nama'];
$x2 = $_POST['noid'];
$x3 = $_POST['jenis'];
$x4 = $_POST['tipe'];
$x5 = $_POST['durasi'];
$x6 = $_POST['diskon'];
$x7 = $_POST['total'];

// perintah insert
$sql = "insert into customer_data (customer_name, customer_id_number, customer_gender, room_type, duration, discount, total_payment)values('$x1','$x2','$x3','$x4','$x5','$x6','$x7')";

echo $sql;
mysqli_query($connect, $sql);
//echo $connect;
header("location:hasil_pesanan.php?id=$x2");
