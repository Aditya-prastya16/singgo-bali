<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: ./auth/login.php");
	exit;
}

include "./config/function.php";
?>

<div id="header"></div>
<div class="flex flex-wrap mt-14 ml-20  w-[90%]">
  <?php
        $tgl=date("Y-m-d");

       //transaction query
       $transaction_today = mysqli_query($conn, "SELECT COUNT(*) AS jumlah_transaksi FROM tb_transaction WHERE transaction_date = '$tgl'");
       $row_today = mysqli_fetch_assoc($transaction_today);
       
      //income query
      $transaction_income = mysqli_query($conn, "SELECT *, SUM(total_harga) as jumlah_income  FROM tb_transaction where transaction_date = '$tgl'  ");
      $row_income = mysqli_fetch_assoc($transaction_income);

      //singgo query
      $transaction_jinggo_today = mysqli_query($conn, "SELECT *, SUM(jumlah_pembelian) as jumlah_singgo FROM tb_transaction WHERE transaction_date = '$tgl' and nama_item = 'nasi jinggo'");
      $row_singgo = mysqli_fetch_assoc($transaction_jinggo_today);

       //tuak query
       $transaction_tuak_today = mysqli_query($conn, "SELECT *, SUM(jumlah_pembelian) as jumlah_tuak FROM tb_transaction WHERE transaction_date = '$tgl' and nama_item = 'tuak'");
       $row_tuak = mysqli_fetch_assoc($transaction_tuak_today);

       //arak query
       $transaction_arak_today = mysqli_query($conn, "SELECT *, SUM(jumlah_pembelian) as jumlah_arak FROM tb_transaction WHERE transaction_date = '$tgl' and nama_item = 'arak'");
       $row_arak = mysqli_fetch_assoc($transaction_arak_today);    
       
      //kerupuk query
      $transaction_kerupuk_today = mysqli_query($conn, "SELECT *, SUM(jumlah_pembelian) as jumlah_kerupuk FROM tb_transaction WHERE transaction_date = '$tgl' and nama_item = 'kerupuk'");
      $row_kerupuk = mysqli_fetch_assoc($transaction_kerupuk_today);  

       //rempeyek query
       $transaction_rempeyek_today = mysqli_query($conn, "SELECT *, SUM(jumlah_pembelian) as jumlah_rempeyek FROM tb_transaction WHERE transaction_date = '$tgl' and nama_item = 'rempeyek'");
       $row_rempeyek = mysqli_fetch_assoc($transaction_rempeyek_today);       

      //kacang query
      $transaction_kacang_today = mysqli_query($conn, "SELECT *, SUM(jumlah_pembelian) as jumlah_kacang FROM tb_transaction WHERE transaction_date = '$tgl' and nama_item = 'kacang'");
      $row_kacang = mysqli_fetch_assoc($transaction_kacang_today);  
  ?>
      

  <div class="relative flex flex-col w-[22%] h-fit border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=($row_today['jumlah_transaksi'] ?? 0)  ?></p>
    <img src="./img/Vector1.png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Transaction Today</p>    
  </div>

  <div class="relative flex flex-col w-[22%] h-fit ml-10 border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=  "Rp." . number_format($row_income['jumlah_income'] ?? 0) ;?></p>
    <img src="./img/tdesign_money.png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Total Income Today</p>    
  </div>

  <div class="relative flex flex-col w-[22%] h-fit ml-10 border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=($row_singgo['jumlah_singgo'] ?? 0) ?></p>
    <img src="./img/mdi_rice.png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Nasi Jinggo Ordered</p>    
  </div>

  <div class="relative flex flex-col w-[22%] h-fit ml-10 border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=($row_tuak['jumlah_tuak'] ?? 0) ?></p>
    <img src="./img/fluent_drink-wine-16-filled.png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Tuak Ordered</p>    
  </div>
  
  <div class="relative flex flex-col w-[22%] h-fit mt-10 border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=($row_arak['jumlah_arak'] ?? 0) ?></p>
    <img src="./img/bx_drink.png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Arak Ordered</p>    
  </div>

  <div class="relative flex flex-col w-[22%] h-fit ml-10 mt-10 border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=($row_kerupuk['jumlah_kerupuk'] ?? 0) ?></p>
    <img src="./img/Vector (1).png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Krupuk Ordered</p>    
  </div>

  <div class="relative flex flex-col w-[22%] h-fit ml-10 mt-10 border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=($row_rempeyek['jumlah_rempeyek'] ?? 0) ?></p>
    <img src="./img/mdi_fried-potatoes.png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Rempeyek Ordered</p>    
  </div>

  <div class="relative flex flex-col w-[22%] h-fit ml-10 mt-10 border-2 rounded-lg drop-shadow-lg ">
    <p class="ml-3 mt-3 text-[#414141] text-[24px] font-bold"><?=($row_kacang['jumlah_kacang'] ?? 0) ?></p>
    <img src="./img/Group.png" alt="" class="absolute right-4 top-4">
    <p class="ml-3 mb-5 text-[18px] text-[#414141] font-normal">Peanut Ordered</p>    
  </div>
</div>

<br><br>
<div>
  <canvas id="myChart" style="height:40vh; width:80vw"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Nasi Jinggo', 'Tuak', 'Arak', 'Kerupuk', 'Kacang', 'Rempeyek'],
      datasets: [{
        label: 'Data Chart Today ',
        data: [<?=($row_singgo['jumlah_singgo'] ?? 0) ?>, 
               <?=($row_tuak['jumlah_tuak'] ?? 0) ?>, 
               <?=($row_arak['jumlah_arak'] ?? 0) ?>, 
               <?=($row_kerupuk['jumlah_kerupuk'] ?? 0) ?>, 
               <?=($row_kacang['jumlah_kacang'] ?? 0) ?>, 
               <?=($row_rempeyek['jumlah_rempeyek'] ?? 0) ?>],
        borderWidth: 4
      }]
    },
    options: {
      animations: {
      tension: {
        duration: 1000,
        easing: 'linear',
        from: 1,
        to: 0,
        
      }
    },
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

<div id="footer"></div>
<script src="./layout/layout.js"></script> 