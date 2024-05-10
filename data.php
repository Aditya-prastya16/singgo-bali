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
        <p class="text-[24px] font-bold text-[#414141]  mx-11">Data Transaction Summary</p>
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
            <th>Nasi Jinggo</th>
            <th>Tuak</th>
            <th>Arak</th>
            <th>Kerupuk</th>
            <th>Rempeyek</th>
            <th>Kacang</th>
            <th>Total Income</th>
            <th>Action</th>
        </tr>
             <?php
				$no = 1;
        
        //query singgo 
        $transaction_data_nasi_jinggo = mysqli_query($conn, "SELECT transaction_date, SUM(jumlah_pembelian) as jumlah_singgo FROM tb_transaction WHERE nama_item = 'nasi jinggo' GROUP BY transaction_date ORDER BY transaction_date ASC");
              
        // Query tuak
        $transaction_data_tuak = mysqli_query($conn, "SELECT transaction_date, SUM(jumlah_pembelian) as jumlah_tuak FROM tb_transaction WHERE nama_item = 'tuak' GROUP BY transaction_date ORDER BY transaction_date ASC");

        //query arak
        $transaction_data_arak = mysqli_query($conn, "SELECT transaction_date, SUM(jumlah_pembelian) as jumlah_arak FROM tb_transaction WHERE nama_item = 'arak' GROUP BY transaction_date ORDER BY transaction_date ASC");

        //query kerupuk
        $transaction_data_kerupuk = mysqli_query($conn, "SELECT transaction_date, SUM(jumlah_pembelian) as jumlah_kerupuk FROM tb_transaction WHERE nama_item = 'kerupuk' GROUP BY transaction_date ORDER BY transaction_date ASC");

        //rempeyek
        $transaction_data_rempeyek = mysqli_query($conn, "SELECT transaction_date, SUM(jumlah_pembelian) as jumlah_rempeyek FROM tb_transaction WHERE nama_item = 'rempeyek' GROUP BY transaction_date ORDER BY transaction_date ASC");

        //kacang
        $transaction_data_kacang = mysqli_query($conn, "SELECT transaction_date, SUM(jumlah_pembelian) as jumlah_kacang FROM tb_transaction WHERE nama_item = 'kacang' GROUP BY transaction_date ORDER BY transaction_date ASC");

        $transaction_income = mysqli_query($conn, "SELECT transaction_date, SUM(total_harga) as jumlah_income  FROM tb_transaction  GROUP BY transaction_date ORDER BY transaction_date ASC");

        // variabel buat nanti gabungin jadiin aray 
        $combined_results = array();

        // gabungin  hasilnya dari tanggal transaksi sama jumlah singgo jadiin 1 nilainya di variabel [sama nama panggilnya]
    while ($row_nasi_jinggo = mysqli_fetch_assoc($transaction_data_nasi_jinggo)) {
    $combined_results[$row_nasi_jinggo['transaction_date']]['jumlah_singgo'] = $row_nasi_jinggo['jumlah_singgo'];
    }      

    while ($row_tuak = mysqli_fetch_assoc($transaction_data_tuak)) {
    $combined_results[$row_tuak['transaction_date']]['jumlah_tuak'] = $row_tuak['jumlah_tuak'];
    }

    while ($row_arak = mysqli_fetch_assoc($transaction_data_arak)) {
        $combined_results[$row_arak['transaction_date']]['jumlah_arak'] = $row_arak['jumlah_arak'];
        }

    while ($row_kerupuk = mysqli_fetch_assoc($transaction_data_kerupuk)) {
        $combined_results[$row_kerupuk['transaction_date']]['jumlah_kerupuk'] = $row_kerupuk['jumlah_kerupuk'];
        }
    
    while ($row_rempeyek = mysqli_fetch_assoc($transaction_data_rempeyek)) {
        $combined_results[$row_rempeyek['transaction_date']]['jumlah_rempeyek'] = $row_rempeyek['jumlah_rempeyek'];
        }

    while ($row_kacang = mysqli_fetch_assoc($transaction_data_kacang)) {
        $combined_results[$row_kacang['transaction_date']]['jumlah_kacang'] = $row_kacang['jumlah_kacang'];
        }

    while ($row_income = mysqli_fetch_assoc($transaction_income)) {
        $combined_results[$row_income['transaction_date']]['jumlah_income'] = $row_income['jumlah_income'];
        }
    ?>

        <tr class="border-x-2  h-[35px]">
        <?php
           foreach ($combined_results as $date => $data) {
           ?>
            <th><?=$no++; ?></th>
            <th><?=$date . "<br>"; ?></th>
            <th><?=($data['jumlah_singgo'] ?? 0) ?></th>
            <th><?=($data['jumlah_tuak'] ?? 0) ?></th>
            <th><?=($data['jumlah_arak'] ?? 0) ?></th>
            <th><?=($data['jumlah_kerupuk'] ?? 0) ?></th>
            <th><?=($data['jumlah_rempeyek'] ?? 0) ?></th>
            <th><?=($data['jumlah_kacang'] ?? 0) ?></th>
            <th><?=  "Rp." . number_format($data['jumlah_income'] ?? 0) ;?></th>

            <th class="justify-items-center">

                <!-- <a href="editdata.html">
                <button class="bg-[#2685CA] p-3 rounded-md hover:bg-blue-800">
                        <img src="./img/pencil.png" alt="">
                </button>
                </a> -->

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