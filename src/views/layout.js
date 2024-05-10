let header = `
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./dist/output.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-[#121212] w-[100%] ">
        <ul class="lg:flex lg:flex-row text-white  ">
            <li class="mx-2">
                <img src="./img/Group 26 1.png" alt="">
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8 ">
                <a href="index.html">Dashboard</a>
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8">
                <a href="menu.html">Menu</a>
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8">
                <a href="transaction.html">Transaction</a>
            </li>
            <li class="mx-5 my-6 font-semibold text-[18px] text-[#787878] hover:text-white hover:underline hover:decoration-4 hover:underline-offset-8">
                <a href="data.html">Data</a>
            </li>
            <li class="absolute right-32 my-6 text-[18px] font-normal hover:text-[#787878]">USer*****</li>
            <li class="absolute right-20 my-6 hover:border-2 hover:border-red-600">
                <a href="logout.html"><img src="./img/Vector.png" alt=""></a>
            </li>
        </ul>
    </nav>


`;

let footer = `
</body>
</html>
`;

document.getElementById("header").innerHTML = header;
document.getElementById("footer").footer = footer;


