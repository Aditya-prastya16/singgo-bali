<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: ./auth/login.php");
	exit;
}

include "./config/function.php";
?>

<div id="header"></div>
<div class="mt-12 flex flex-row w-[100%]   ">
    <div class="flex basis-2/3"> 
        <p class="text-[24px] font-bold text-[#414141]  mx-11 ">Data Transaction Today</p>
    </div>
    <div class="ml-10 border-2 flex basis-48 rounded-lg border-[#787878] justify-center hover:bg-[#d2d2d2]">
        <img src="./img/material-symbols_download.png" alt="">
        <p class="text-[18px] font-bold mt-1 ml-2">Download Pdf</p>
    </div>
    <div class="border-2 flex ml-4  basis-48 rounded-lg border-[#787878] justify-center hover:bg-[#d2d2d2]">
        <img src="./img/material-symbols_download.png" alt="">
        <p class="text-[18px] font-bold mt-1 ml-2">Download Excel</p>
    </div>
</div>

<div>
    <table class="w-[90%] h-fit border-2  mt-8 rounded-lg" align="center">
        <tr class="border-y-2 h-[50px] ">
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama Item</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Satuan</th>
            <th>Total Harga</th>
            <th>Action</th>
        </tr>
        <?php
                $tgl=date("Y-m-d");
				$no = 1;
				$transaction_data = mysqli_query($conn, "SELECT * FROM tb_transaction WHERE transaction_date='$tgl'") or die(mysqli_error($conn));
				while($show = mysqli_fetch_array($transaction_data)){ ?>
        <tr class="border-x-2  h-[35px]">
            <th><?= $no++; ?></th>
            <th><?= $show['transaction_date']; ?></th>
            <th><?= $show['nama_item']; ?></th>
            <th><?= $show['jumlah_pembelian']; ?></th>
            <th><?=  "Rp." . number_format($show['harga_satuan'] ?? 0) ;?></th>
            <th><?=  "Rp." . number_format($show['total_harga'] ?? 0) ;?></th>
            <th class="justify-items-center">
                <a href="edittransaction.php?id_transaction=<?= $show['id_transaction']; ?>">
                <button class="bg-[#2685CA] p-3 rounded-md hover:bg-blue-800">
                        <img src="./img/pencil.png" alt="">
                </button>
            </a>

            <a href="">
                <button class="bg-[#E61700] p-3 rounded-md hover:bg-red-800">
                    <img src="./img/trash.png" alt="">
                </button>
            </a>
            
            </th>
        </tr>
        <?php
		}
		?>
        

    </table>
</div>

<div id="footer"></div>
<script src="./layout/layout.js"></script> 