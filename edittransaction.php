<?php
include "./config/koneksi.php";
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: ./auth/login.php");
	exit;
}

include "./config/function.php";
if (isset($_GET['id_transaction'])) {

    $id_transaction = ($_GET["id_transaction"]);


    $query = "SELECT * FROM tb_transaction WHERE id_transaction='$id_transaction'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Error: " . mysqli_errno($conn) .
            " - " . mysqli_error($conn));
    }

    $show = mysqli_fetch_assoc($result);

    if (!count($show)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='transaction.php';</script>";
    }
} else {

    echo "<script>alert('Masukkan data id.');window.location='transaction.php';</script>";
}
?>

<div id="header"></div>

<div class="ml-36 flex flex-row">
    <div>
        <img src="./img/Group 26.png" alt="">
    </div>

    <div class="ml-20 mt-[5%]">
        <p class="text-[24px] font-bold tracking-wider text-[#414141]">Edit Data Singgo Bali</p>


        <form action="transedit_proces.php" method="post">
            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Id</p>
            <input type="text" value="<?= $show['id_transaction'] ?>" name="id_transaction" readonly class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Tanggal</p>
            <input type="date" name="transaction_date" value="<?= $show['transaction_date'] ?>" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Nama Item</p>
            <input type="text" name="nama_item" value="<?= $show['nama_item'] ?>" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Jumlah Pembelian</p>
            <input type="text" name="jumlah_pembelian" value="<?= $show['jumlah_pembelian'] ?>" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Satuan Harga</p>
            <input type="text" name="harga_satuan" value="<?= $show['harga_satuan'] ?>" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Total</p>
            <input type="text" name="total_harga" value="<?= $show['total_harga'] ?>" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <div class="flex flex-row justify-end">
                
                  <a href="transaction.php" class="flex w-fit h-fit mt-8 bg-[#E61700] p-2 rounded-xl hover:bg-red-800"">
                    <img src="./img/material-symbols_download (1).png" alt="" class="ml-5 mt-0.5">
                    <p class="text-[18px] font-bold text-white ml-2 mr-5">back</p>
                  </a>
              
               <button type="submit" name="simpan" class="flex ml-4 w-fit h-fit mt-8 bg-[#08CB0F] p-2 rounded-xl hover:bg-green-800 ">
                    <img src="./img/material-symbols_download (2).png" alt="" class="ml-5">
                    <p class="text-[18px] font-bold text-white ml-2 mr-5">Save</p>
                </button>
            </div>


        </form>
    </div>
</div>
<div id="footer"></div>
<script src="./layout/layout.js"></script> 