<?php 
include "../config/koneksi.php";
include "../config/function.php";


if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../dist/output.css" rel="stylesheet">

</head>
<body>
    <div class="flex flex-row">
        <div class=" flex flex-col mt-10 items-center w-[38%] ml-44">
           <div class=" ">
            <img src="../img/material-symbols-light_food-bank-outline.png" alt="" >
           </div>
           <div>
            <p class="text-[40px] font-bold tracking-widest">Create a new account</p>
        
           </div>

           <div class="">
            <p class="text-[18px] font-bold tracking-wide -mt-2">Its Free And Easy</p>
            </div>

            <div class=" w-full mt-7 text-[18px] font-bold tracking-wide">
            <form action="" method="post">
            <p>Username :</p>
                <input type="text" required name="username" value="" id="username" class="w-full border-b-2 border-[#787878] mt-2">
            </div>

            <div class=" w-full mt-10 text-[18px] font-bold tracking-wide ">
                <p>Password :</p>
                <input type="password" name="password" value="" id="password" class="w-full border-b-2 border-[#787878] mt-2">
            </div>

            <div class=" w-full mt-10 text-[18px] font-bold tracking-wide ">
                <p>Password confirmation :</p>
                <input type="password" name="password2" value="" id="password2" class="w-full border-b-2 border-[#787878] mt-2">
            </div>

            <div class=" bg-[#121212] px-[40%] mt-12 rounded-xl">
                <button type="submit" name="register" class="text-white text-[22px] font-bold tracking-wide ">
                    Sign Up
                </button>
            </div>
            </form>

            <div class="flex flex-row mt-10">
                <p class="text-[14px] font-normal">Already Have Account ?</p>
                <a class="text-[14px] font-bold ml-2" href="login.php">Sign In</a>
            </div>

            

        </div>
        <div class="ml-20 mt-16">
            <img src="../img/loginlogo.png" alt="">
        </div>
    </div>

</body>
</html>