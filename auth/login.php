<?php 
session_start();
include "../config/koneksi.php";
include "../config/function.php";

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
	$id = $_COOKIE['id'];
	$key = $_COOKIE['key'];

	// ambil username berdasarkan id
	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $key === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}


}

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// buat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('key', hash('sha256', $row['username']), time()+60);
			}

			header("Location: ../index.php");
			exit;
		}
	}

	$error = true;

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
        <div class="ml-48 mt-16">
            <img src="../img/loginlogo.png" alt="">
        </div>

        <div class=" flex flex-col mt-10 items-center w-[35%] ">
           <div class=" ">
            <img src="../img/material-symbols-light_food-bank-outline.png" alt="" >
           </div>
           <div>
            <p class="text-[40px] font-bold tracking-widest">Welcome Back</p>
        
           </div>

           <div class="">
            <p class="text-[18px] font-bold tracking-wide -mt-2">Please Enter Your Detail</p>
            </div>

         
            <div class=" w-full mt-7 text-[18px] font-bold tracking-wide">
            <form action="" method="post">
                <p>Username :</p>
                <input type="text" required name="username" id="username" class="w-full border-b-2 border-[#787878] mt-2">
                <?php if( isset($error) ) : ?>
	                <p style="color: red; font-style: italic;">username / password salah</p>
                <?php endif; ?>
            </div>

            <div class=" w-full mt-10 text-[18px] font-bold tracking-wide ">
                <p>Password :</p>
                <input type="password" name="password" id="password" class="w-full border-b-2 border-[#787878] mt-2">
            </div>

            <div class=" w-full mt-7 flex flex-row ">
                <input type="checkbox" name="remember" id="remember class="rounded-md w-5">
                <p class="ml-2">Remember Me ?</p>
            </div>

            <div class=" bg-[#121212] px-[40%] mt-12 rounded-xl">
                <button type="submit" name="login" class="text-white text-[22px] font-bold tracking-wide ">
                    Sign In
                </button>
            </div>
            </form>

            <div class="flex flex-row mt-20">
                <p class="text-[14px] font-normal">Dont Have Account ?</p>
                <a class="text-[14px] font-bold ml-2" href="register.php">Sign Up</a>
            </div>

        </div>
    </div>
</body>
</html>