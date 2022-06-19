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
include '../../database/database.php';
session_start();
if(isset($_SESSION['level']) != "admin" ){
    echo "<script language ='javascript'>
        location.href='../../index.php?login=berhasil';
    </script>";
    

}
if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
		$sql = 'SELECT * FROM data WHERE golongan_darah LIKE "%'.$cari.'%" OR nik like "%'.$cari.'%"';				
	}else{
		$sql = 'select * from data'; 
}
?>
    <script src="https://kit.fontawesome.com/fb244dd16a.js" crossorigin="anonymous"></script>
</head>

<body>
    <main class="bg-gray-100 dark:bg-gray-800 rounded-2xl h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            <?php
                include 'header.php'
            ?>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <header class="w-full shadow-lg bg-white items-center h-16 rounded-2xl z-40">
                    <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                        <div class="relative items-center flex w-full lg:max-w-68">
                            <div class="container relative left-0 z-50 flex w-3/4 h-full">
                                <div class="relative flex items-center w-full h-full group">
                                    <marquee direction="left" loop="infinite" scrollamount="10" align="center">
                                        <h2 class="text-2xl font-serif text-red-500 text-center">Setetes Darah Kita
                                            Nyawa Bagi Sesama,<p style="word-spacing: 10rem;"></p>Terima Kasih atas
                                            Sumbangan Darah Anda Bagi Sesama</h2>
                                    </marquee>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <?php
                $sql1 = mysqli_query($conn,'SELECT * FROM data');
                $count = mysqli_num_rows($sql1);
                ?>
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-wrap sm:flex-row" style="height: 99%;">
                        <div class="w-full rounded-3xl">
                            <div class="w-full rounded-lg h-full">
                                <div class="bg-white w-full h-full">
                                    <div class="container mx-auto px-4 sm:px-8 max-w-3xl">
                                        <div class="py-8">
                                            <div class="flex flex-row mb-1 sm:mb-0 justify-between w-full">
                                                <h2 class="text-2xl leading-tight">
                                                    Table Data
                                                </h2>
                                                <div class="text-end">
                                                    <form action="index.php" method="GET"
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
                                                    <table class="min-w-full leading-normal" style="font-size: 12px;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    NIK
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Nama
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Nomor Hp
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Alamat
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Tanggal lahir
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Jenis Kelamin
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Gol Darah
                                                                </th>
                                                                <th scope="col"
                                                                    class="px-3 py-1 bg-white  border-b border-gray-200 text-gray-800  text-left text-sm uppercase font-normal">
                                                                    Input Darah
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="text-left">
                                                            <?php
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
                                                                    <?php echo date("d-m-Y h:i"); ?>
                                                                </td>
                                                                <td class="py-3 px-5 border-b space-x-2">
                                                                    <a class="flex-shrink-0 px-3 py-2 text-black font-semibold hover:text-white bg-green-200 rounded-lg shadow-md hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-green-300"
                                                                        href="inputdarah.php?nik=<?php echo $hasil['nik'] ?>">
                                                                        +
                                                                    </a>
                                                                    <a class="flex-shrink-0 px-4 py-2 text-black font-semibold hover:text-white bg-red-200 rounded-lg shadow-md hover:bg-red-300 focus:outline-none focus:ring-2 focus:ring-red-300"
                                                                        href="aksi/hapus.php?nik=<?php echo $hasil['nik'] ?>">
                                                                        -
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
										$no++;
									}
									?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <br><br><br><br><br>
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