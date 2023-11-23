<?php
$id = $_GET['id'];

include "koneksi.php";

$sql = "select * from customer_data where customer_id_number='$id'";
$hasil = mysqli_query($connect, $sql);
$data = mysqli_fetch_array($hasil);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesanan</title>
</head>

<body style="padding: 8px;">
    <h1>Hasil Pesanan</h1>
    <p>Nama Pemesan : <?= $data['customer_name']; ?></p>
    <p>Nomor Identitas : <?= $data['customer_id_number']; ?></p>
    <p>Jenis Kelamin : <?= $data['customer_gender']; ?></p>
    <p>Tipe Kamar : <?= $data['room_type']; ?></p>
    <p>Durasi Penginapan : <?= $data['duration']; ?> hari</p>
    <p>Total Discount : <?= $data['discount']; ?></p>
    <p>Total Bayar : <?= $data['total_payment']; ?></p>
</body>

</html>