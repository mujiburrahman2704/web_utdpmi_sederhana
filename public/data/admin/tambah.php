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
		$sql = 'SELECT * FROM data where golongan_darah like "%'.$cari.'%"';				
	}else{
		$sql = 'select * from data'; 
}
?>
    <script src="https://kit.fontawesome.com/fb244dd16a.js" crossorigin="anonymous"></script>
</head>

<body>
    <main class="bg-gray-100 dark:bg-gray-800 h-screen overflow-hidden relative">
        <div class="flex items-start justify-between">
            <?php
                include 'header.php'
            ?>
            <div class="flex flex-col w-full pl-0 md:p-4 md:space-y-4">
                <header class="w-full shadow-lg bg-white items-center h-16 rounded-2xl z-40">
                    <div class="relative z-20 flex flex-col justify-center h-full px-3 mx-auto flex-center">
                        <div class="relative items-center pl-1 flex w-full lg:max-w-68 sm:pr-2 sm:ml-0">
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
                <div class="overflow-auto h-screen pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-wrap sm:flex-row">
                        <div class="w-full rounded-3xl bg-white">
                            <div class="mx-4 max-w-xl my-4">
                                <form action="tambah/tambahdata.php" method="post" class="space-y-8">
                                    <div class="grid grid-cols-4 ">
                                        <h2 class="col-start-1 col-end-2 self-center text-right mx-2">NIK</h2>
                                        <input type="text" placeholder="Masukkan NIk" name="nik"
                                            class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                    </div>
                                    <div class="grid grid-cols-4 ">
                                        <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Nama Lengkap</h2>
                                        <input type="text" placeholder="Masukkan Nama Lengkap" name="namalengkap"
                                            class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                    </div>
                                    <div class="grid grid-cols-4 ">
                                        <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Nomor Hp</h2>
                                        <input type="text" placeholder="Masukkan Nomor Hp" name="nomorhp"
                                            class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                    </div>
                                    <div class="grid grid-cols-4 ">
                                        <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Alamat</h2>
                                        <input type="text" placeholder="Masukkan Alamat" name="alamat"
                                            class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                    </div>
                                    <div class="grid grid-cols-4">
                                        <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Tanggal Lahir</h2>
                                        <input type="date" placeholder="Masukkan Tanggal Lahir" name="tanggallahir"
                                            class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                    </div>
                                    <div class="grid grid-cols-4 ">
                                        <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Jenis Kelamin</h2>
                                        <select name="jeniskelamin" id="jeniskelamin"
                                            class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                            <option disabled selected>Pilih jenis Kelamin</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="grid grid-cols-4 ">
                                        <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Golongan Darah
                                        </h2>
                                        <select name="golongandarah" id="golongandarah"
                                            class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                            <option disabled selected>Pilih Golongan darah</option>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
                                            <option value="A-">A-</option>
                                            <option value="A+">A+</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">B+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                    </div>
                                    <div class="flex justify-end">
                                        <button type="submit"
                                            class="border rounded-lg bg-green-500 py-2 px-2 text-white"
                                            name="tambah">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>