<!doctype html>
<html>
<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/output.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pribadi.css">
</head>

<body class="pmi">
    <div class="flex relative">
        <div class="m-auto">
            <div class="bg-white border  rounded-lg shadow-lg" style="width: 35rem;">
                <div class="flex items-center border-red-500 border-b-2 flex-col py-6">
                    <img src="img/pmi.png" class="w-16" alt="logo">
                    <p class="font-serif font-bold text-red-500">UTD PMI</p>
                </div>
                <div class="pb-24 pt-2 pr-2 pl-2 md:pt-0 md:pr-0 md:pl-0">
                    <div class="flex flex-wrap sm:flex-row">
                        <div class="w-full rounded-3xl bg-white">
                            <div class="mx-4 max-w-xl my-4">
                                <form action="tambah.php" method="post">
                                    <div class="space-y-4">
                                        <div class="grid grid-cols-4">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">NIK</h2>
                                            <input type="text" placeholder="Masukkan NIk" name="nik"
                                                class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                        </div>
                                        <div class="grid grid-cols-4 ">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Nama
                                                Lengkap
                                            </h2>
                                            <input type="text" placeholder="Masukkan Nama Lengkap" name="namalengkap"
                                                class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                        </div>
                                        <div class="grid grid-cols-4 ">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">
                                                Password
                                            </h2>
                                            <input type="password" placeholder="Masukkan password" name="password"
                                                class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                        </div>
                                        <div class="grid grid-cols-4 ">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Nomor Hp
                                            </h2>
                                            <input type="text" placeholder="Masukkan Nomor Hp" name="nomorhp"
                                                class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                        </div>
                                        <div class="grid grid-cols-4 ">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Alamat
                                            </h2>
                                            <input type="text" placeholder="Masukkan Alamat" name="alamat"
                                                class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                        </div>
                                        <div class="grid grid-cols-4">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Tanggal
                                                Lahir
                                            </h2>
                                            <input type="date" placeholder="Masukkan Tanggal Lahir" name="tanggallahir"
                                                class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                        </div>
                                        <div class="grid grid-cols-4 ">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Jenis
                                                Kelamin
                                            </h2>
                                            <select name="jeniskelamin" id="jeniskelamin"
                                                class=" border rounded-lg col-start-2 col-end-5 col-span-2 py-2">
                                                <option disabled selected>Pilih jenis Kelamin</option>
                                                <option value="laki-laki">Laki-Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="grid grid-cols-4 ">
                                            <h2 class="col-start-1 col-end-2 self-center text-right mx-2">Golongan
                                                Darah
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
                                                class="border rounded-lg bg-green-200 hover:bg-green-300 py-2 px-2 text-white"
                                                name="tambah">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>