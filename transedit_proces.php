<?php
include "./config/koneksi.php";

extract($_POST);

$query = "UPDATE tb_transaction SET transaction_date = '$transaction_date', nama_item = '$nama_item', jumlah_pembelian = '$jumlah_pembelian', harga_satuan = '$harga_satuan',total_harga = '$total_harga'";
$query .= "WHERE id_transaction = '$id_transaction'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($conn) .
        " - " . mysqli_error($conn));
} else {
    echo "<script>alert('Data berhasil ditambah.');window.location='transaction.php';</script>";
}
?>