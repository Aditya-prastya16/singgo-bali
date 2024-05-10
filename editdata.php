<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: ./auth/login.php");
	exit;
}

include "./config/function.php";
?>

<div id="header"></div>
<div class="ml-36 flex flex-row">
    <div>
        <img src="./img/Group 26.png" alt="">
    </div>

    <div class="ml-20 mt-[5%]">
        <p class="text-[24px] font-bold tracking-wider text-[#414141]">Edit Data Singgo Bali</p>

        <form action="">
            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Id</p>
            <input type="text" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Tanggal</p>
            <input type="date" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Nasi Jinggo</p>
            <input type="text" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Tuak</p>
            <input type="text" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Arak</p>
            <input type="text" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Rempeyek</p>
            <input type="text" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Kacang</p>
            <input type="text" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <p class="text-[18px] font-bold tracking-wider text-[#414141] mt-4 ml-1">Total Income</p>
            <input type="text" class="border-2 border-[#787878] rounded-lg w-96 h-8 mt-2" >

            <div class="flex flex-row justify-end">
                
                <a href="data.html" class="flex w-fit h-fit mt-8 bg-[#E61700] p-2 rounded-xl hover:bg-red-800"">
                  <img src="./img/material-symbols_download (1).png" alt="" class="ml-5 mt-0.5">
                  <p class="text-[18px] font-bold text-white ml-2 mr-5">back</p>
                </a>
            
             <button class="flex ml-4 w-fit h-fit mt-8 bg-[#08CB0F] p-2 rounded-xl hover:bg-green-800 ">
                  <img src="./img/material-symbols_download (2).png" alt="" class="ml-5">
                  <p class="text-[18px] font-bold text-white ml-2 mr-5">Save</p>
              </button>
          </div>


        </form>
    </div>
</div>

<div id="footer"></div>
<script src="./layout/layout.js"></script> 