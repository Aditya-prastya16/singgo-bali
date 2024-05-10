<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: ./auth/login.php");
	exit;
}

include "./config/function.php";
?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <nav class="bg-[#121212] w-[100%] ">
        <ul class="lg:flex lg:flex-row text-white  ">
            <li class="mx-2">
                <img src="./img/Group 26 1.png" alt="">
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8 ">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8">
                <a href="menu.php">Menu</a>
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8">
                <a href="transaction.php">Transaction</a>
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8">
                <a href="data.php">Data</a>
            </li>
            <li class="absolute right-32 my-6 text-[18px] font-normal hover:text-[#787878]">USer*****</li>
            <li class="absolute right-20 my-6 hover:border-2 hover:border-red-600">
                <a href="logout.php"><img src="./img/Vector.png" alt=""></a>
            </li>
        </ul>
    </nav>

<body class="bg-[#d2d2d2]">
    <div class="ml-8 mt-5 ">
        <p class="font-normal text-[20px]">Food</p>
            <div class="absolute w-[70%] bg-white rounded-lg">
                <div class="flex flex-row">
                    <div class="relative flex flex-col  border-2 my-7 mx-5  w-[30%] bg-[#d2d2d2] rounded-lg card-body product">
                        <img src="./img/singgo.png" alt="" class="absolute  ">
                        <p class="flex flex-col ml-40 mt-4 product-name" >Nasi Jinggo</p>
                        <p class="flex flex-col ml-40 mt-1 product-price"> 3000 </p>
                     <div class="flex flex-row ml-40 mt-2">
                        <button type="button" data-action="add-to-cart" class="bg-[#787878] rounded-lg text-[12px] text-white px-3 py-1 mb-2">Add to cart</button>
                    </div>
                   </div>
                   </div>
            </div>
    </div>

    <div class="ml-8 mt-52">
        <p class="font-normal text-[20px]">Drink</p>
        
            <div class="absolute w-[70%] bg-white rounded-lg">
                <div class="flex flex-row">
                    <div class="relative flex flex-col  border-2 my-7 mx-5  w-[30%] bg-[#d2d2d2] rounded-lg card-body product">
                        <img src="./img/tuak .png" alt="" class="absolute -bottom-4 -left-11">
                        <p class="flex flex-col ml-40 mt-4 product-name" >Tuak</p>
                        <p class="flex flex-col ml-40 mt-1 product-price">18000 </p>
                     <div class="flex flex-row ml-40 mt-2">
                        <button type="button" data-action="add-to-cart" class="bg-[#787878] rounded-lg text-[12px] text-white px-3 py-1 mb-2">Add to cart</button>
                    </div>
                    </div>
                    <div class="relative flex flex-col  border-2 my-7 mx-5  w-[30%] bg-[#d2d2d2] rounded-lg card-body product">
                        <img src="./img/arak.png" alt="" class="absolute -bottom-4 -left-11">
                        <p class="flex flex-col ml-40 mt-4 product-name" >Arak</p>
                        <p class="flex flex-col ml-40 mt-1 product-price">20000</p>
                     <div class="flex flex-row ml-40 mt-2">
                        <button type="button" data-action="add-to-cart" class="bg-[#787878] rounded-lg text-[12px] text-white px-3 py-1 mb-2">Add to cart</button>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        
    </div>  
    <div class="ml-8 mt-52">
        <p class="font-normal text-[20px]">Snack</p>
        
            <div class="absolute w-[70%] bg-white rounded-lg">
               <div class="flex flex-nowrap">
                <div class="relative flex flex-col  border-2 my-7 mx-5  w-[35%] bg-[#d2d2d2] rounded-lg">
                  <img src="./img/kerupuk.png" alt="" class="absolute -bottom-4 -left-11">
                  <p class="flex flex-col ml-40 mt-4 product-name" >Kerupuk</p>
                  <p class="flex flex-col ml-40 mt-1 product-price">1000 </p>
               <div class="flex flex-row ml-40 mt-2">
                  <button type="button" data-action="add-to-cart" class="bg-[#787878] rounded-lg text-[12px] text-white px-3 py-1 mb-2">Add to cart</button>
              </div>
                </div>
    
                <div class="relative flex flex-col  border-2 my-7 mx-5  w-[35%] bg-[#d2d2d2] rounded-lg">
                  <img src="./img/rempeyek.png" alt="" class="absolute -bottom-4 ">
                  <p class="flex flex-col ml-40 mt-4 product-name" >Rempeyek</p>
                  <p class="flex flex-col ml-40 mt-1 product-price">1000 </p>
               <div class="flex flex-row ml-40 mt-2">
                  <button type="button" data-action="add-to-cart" class="bg-[#787878] rounded-lg text-[12px] text-white px-3 py-1 mb-2">Add to cart</button>
              </div>
                </div>
    
                <div class="relative flex flex-col  border-2 my-7 mx-5  w-[35%] bg-[#d2d2d2] rounded-lg">
                  <img src="./img/kacang.png" alt="" class="absolute -bottom-4 ">
                  <p class="flex flex-col ml-40 mt-4 product-name" >Kacang</p>
                  <p class="flex flex-col ml-40 mt-1 product-price">1000 </p>
               <div class="flex flex-row ml-40 mt-2">
                  <button type="button" data-action="add-to-cart" class="bg-[#787878] rounded-lg text-[12px] text-white px-3 py-1 mb-2">Add to cart</button>
              </div>
                </div>
               </div>
            </div>
            
        
    </div>
    <aside class="bg-[#2d2d2d] h-[150%] w-[25%] absolute right-0 top-[75px] bottom-0  " >
        <p class="text-white mt-8 font-normal text-[24px] mx-7 ">Current Order</p>  
        <div class=" cart"></div>
    </aside>

    <script src="./js/cart.js"></script>
</body>
</html>


