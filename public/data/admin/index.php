<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@500&display=swap" rel="stylesheet">
    <title>UTD PMI</title>
    <?php
include '../../../database/database.php';
session_start();
if(isset($_SESSION['level']) != "admin" ){
    echo "<script language ='javascript'>
        alert('bapakkau');	
        location.href='../../index.php?login=berhasil';
    </script>";
}
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
</head>

<body>
    <main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            <div class="h-screen hidden lg:block my-4 ml-4 shadow-lg relative w-80">
                <div class="bg-white rounded-2xl  mb-4" style="height: 97%;">
                    <div class="flex flex-col items-center justify-center pt-6 space-y-2">
                        <img src="../../img/pmi.png" class="w-14" alt="">
                        <h2 class="text-lg font-bold text-red-500">UTD PMI</h2>
                    </div>
                    <nav class="mt-6">
                        <div>
                            <a class="w-full font-thin uppercase text-black flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:bg-gradient-to-r from-white to-red-100 hover:border-r-4 border-red-500"
                                href="#">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 2048 1792"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1070 1178l306-564h-654l-306 564h654zm722-282q0 182-71 348t-191 286-286 191-348 71-348-71-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Dashboard
                                </span>
                            </a>
                            <a class="w-full font-thin uppercase text-black flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:bg-gradient-to-r from-white to-red-100 hover:border-r-4 border-red-500"
                                href="#">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" class="m-auto"
                                        viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Projects
                                </span>
                            </a>
                            <a class="w-full font-thin uppercase text-black flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:bg-gradient-to-r from-white to-red-100 hover:border-r-4 border-red-500"
                                href="#">
                                <span class="text-left">
                                    <svg width="20" height="20" fill="currentColor" class="m-auto"
                                        viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1024 1131q0-64-9-117.5t-29.5-103-60.5-78-97-28.5q-6 4-30 18t-37.5 21.5-35.5 17.5-43 14.5-42 4.5-42-4.5-43-14.5-35.5-17.5-37.5-21.5-30-18q-57 0-97 28.5t-60.5 78-29.5 103-9 117.5 37 106.5 91 42.5h512q54 0 91-42.5t37-106.5zm-157-520q0-94-66.5-160.5t-160.5-66.5-160.5 66.5-66.5 160.5 66.5 160.5 160.5 66.5 160.5-66.5 66.5-160.5zm925 509v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm0-260v-56q0-15-10.5-25.5t-25.5-10.5h-568q-15 0-25.5 10.5t-10.5 25.5v56q0 15 10.5 25.5t25.5 10.5h568q15 0 25.5-10.5t10.5-25.5zm0-252v-64q0-14-9-23t-23-9h-576q-14 0-23 9t-9 23v64q0 14 9 23t23 9h576q14 0 23-9t9-23zm256-320v1216q0 66-47 113t-113 47h-352v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-768v-96q0-14-9-23t-23-9h-64q-14 0-23 9t-9 23v96h-352q-66 0-113-47t-47-113v-1216q0-66 47-113t113-47h1728q66 0 113 47t47 113z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Reports
                                </span>
                            </a>
                            <a class="w-full font-thin uppercase text-black flex items-center p-4 my-2 transition-colors duration-200 justify-start hover:bg-gradient-to-r from-white to-red-100 hover:border-r-4 border-red-500"
                                href="../../logout.php">
                                <span class="text-left">
                                    <svg width="20" fill="currentColor" height="20" class="h-5 w-5"
                                        viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1088 1256v240q0 16-12 28t-28 12h-240q-16 0-28-12t-12-28v-240q0-16 12-28t28-12h240q16 0 28 12t12 28zm316-600q0 54-15.5 101t-35 76.5-55 59.5-57.5 43.5-61 35.5q-41 23-68.5 65t-27.5 67q0 17-12 32.5t-28 15.5h-240q-15 0-25.5-18.5t-10.5-37.5v-45q0-83 65-156.5t143-108.5q59-27 84-56t25-76q0-42-46.5-74t-107.5-32q-65 0-108 29-35 25-107 115-13 16-31 16-12 0-25-8l-164-125q-13-10-15.5-25t5.5-28q160-266 464-266 80 0 161 31t146 83 106 127.5 41 158.5z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="mx-4 text-sm font-normal">
                                    Log out
                                </span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <header class="w-full shadow-lg bg-white items-center h-16 rounded-2xl z-40">
                    <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                        <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
                            <div class="container relative left-0 z-50 flex w-3/4 h-full">
                                <div class="relative flex items-center w-full lg:w-64 h-full group">
                                    <div
                                        class="absolute z-50 flex items-center justify-center w-auto h-10 p-3 pr-2 text-sm text-black uppercase cursor-pointer sm:hidden">
                                        <svg fill="none" class="relative w-5 h-5" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="relative p-1 flex items-center justify-end w-1/4 ml-5 mr-4 sm:mr-0 sm:right-auto">
                                <a href="#" class="block relative">
                                    <img alt="profil" src="../../img/M_Nasir.png"
                                        class="mx-auto object-cover rounded-full h-10 w-10 " />
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <?php
                $sql1 = mysqli_query($conn,'SELECT COUNT(nik) FROM data');
                $jumlah = mysqli_num_rows($sql1);

                ?>
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-wrap sm:flex-row" style="height: 99%;">
                        <div class="w-full rounded-3xl">
                            <div class="grid grid-cols-3 gap-4 text-center">
                                <div class="my-4 border bg-white rounded-lg">
                                    <div class="border-b-2 border-red-500 mx-4">
                                        <h2 class="py-2 text-xl font-serif">Jumlah Data</h2>
                                    </div>
                                    <h2 class="py-6 text-3xl">
                                        <?php echo $jumlah ?>
                                    </h2>
                                </div>
                                <div class="my-4 border bg-white rounded-lg">
                                    <div class="border-b-2 border-red-500 mx-4">
                                        <h2 class="py-2 text-xl font-serif">Gol Darah</h2>
                                    </div>
                                    <h2 class="py-6 text-3xl">
                                        <?php echo $jumlah ?>
                                    </h2>
                                </div>
                                <div class="my-4 border bg-white rounded-lg">
                                    <div class="border-b-2 border-red-500 mx-4">
                                        <h2 class="py-2 text-xl font-serif">Jumlah Data</h2>
                                    </div>
                                    <h2 class="py-6 text-3xl">
                                        <?php echo $jumlah ?>
                                    </h2>
                                </div>

                            </div>
                            <div class="w-full rounded-lg h-full">
                                <div class="bg-white w-full h-full">
                                    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                                        <div class="py-8">
                                            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                                                <h2 class="text-2xl leading-tight">
                                                    Table Data
                                                </h2>
                                                <div class="text-end">
                                                    <form action="index.php" method="POST"
                                                        class="flex flex-col md:flex-row w-3/4 md:w-full max-w-sm md:space-x-3 space-y-3 md:space-y-0 justify-center">
                                                        <div class=" relative">
                                                            <input type="text" id="cari" name="cari"
                                                                class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-green-200 focus:border-transparent"
                                                                placeholder="Gol darah" />
                                                        </div>
                                                        <button
                                                            class="flex-shrink-0 px-4 py-2 text-black font-semibold hover:text-white bg-green-200 rounded-lg shadow-md hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-green-300"
                                                            type="submit">
                                                            Filter
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                                    <table class="min-w-full leading-normal">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    NIK
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Nama
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Nomor Hp
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Alamat
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Tanggal lahir
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Jenis Kelamin
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-5 py-3 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Gol Darah
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-left">
                                                            <?php
                                                            $sql = 'SELECT * FROM data';
                                                            $data = mysqli_query($conn,$sql);
									$no = 1;
									while ($hasil = mysqli_fetch_array($data)) 
				    				{
								?>
                                                            <tr class="">
                                                                <td class="py-3 px-5 border-b">
                                                                    <?php echo $hasil[0] ?>
                                                                </td>
                                                                <td class="py-3 px-5 border-b">
                                                                    <?php echo $hasil[1] ?>
                                                                </td>
                                                                <td class="py-3 px-5 border-b">
                                                                    <?php echo $hasil[2] ?>
                                                                </td>
                                                                <td class="py-3 px-5 border-b">
                                                                    <?php echo $hasil[3] ?>
                                                                </td>
                                                                <td class="py-3 px-5 border-b">
                                                                    <?php echo $hasil[4] ?>
                                                                </td>
                                                                <td class="py-3 px-5 border-b">
                                                                    <?php echo $hasil[5] ?>
                                                                </td>
                                                                <td class="py-3 px-5 border-b">
                                                                    <?php echo $hasil[6] ?>
                                                                </td>

                                                            </tr>
                                                            <?php
										$no++;
									}
									?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>