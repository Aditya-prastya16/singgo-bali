<?php
include "./config/koneksi.php";

$tgl = date("Y-m-d");


$nama_item = isset($_POST['namaitem']) ? $_POST['namaitem'] : '';
$jumlah_pembelian = isset($_POST['jumlahpembelian']) ? $_POST['jumlahpembelian'] : '';
$harga_satuan = isset($_POST['hargasatuan']) ? $_POST['hargasatuan'] : '';
$total_harga = isset($_POST['totalharga']) ? $_POST['totalharga'] : '';

$query = "INSERT INTO tb_transaction (id_transaction,transaction_date,nama_item,jumlah_pembelian,harga_satuan,total_harga) VALUES (0,'$tgl', '$nama_item','$jumlah_pembelian','$harga_satuan','$total_harga')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    } else {

        echo "<script>alert('Data berhasil ditambah.');window.location='menu.php';</script>";
    }
?>